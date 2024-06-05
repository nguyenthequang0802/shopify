<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index($product_id){
        $product = Product::find($product_id);
        $images = Image::where('product_id', $product_id)->get();
        return view('admin.upload-file.index', ['product' => $product, 'images'=>$images]);
    }
    public function store(Request $request, $product_id){
        $request->validate([
            'images.*' => 'required|image|mimes:png,jpg,jpeg'
        ]);
        $product = Product::find($product_id);
        $imageData = [];
        if ($files = $request->file('images')){
            foreach ($files as $key => $file){
                $extension = $file->getClientOriginalExtension();
                $filename = $key.'-'.time(). '.' .$extension;
                $path = 'storage/products/'. $product->slug .'/';
                $file->move($path, $filename);
                $imageData[] = [
                    'product_id' => $product->id,
                    'path_image' => $path.$filename,
                ];
            }
        }
        Image::insert($imageData);
        return redirect()->back()->with('ok', 'Thêm ảnh thành công!');
    }
    public function destroy($image_id){
        $image = Image::find($image_id);
        if (File::exists($image->path_image)){
            File::delete($image->path_image);
        }
        $image->delete();
        return redirect()->back()->with('ok', 'Xóa ảnh thành công!');
    }
}
