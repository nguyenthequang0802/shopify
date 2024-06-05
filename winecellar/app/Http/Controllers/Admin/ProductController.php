<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    private function getProductCategories(){
        return Category::where('model_type','=', 'product')->where('parent_id', '=', null)->with('childs')->get();;
    }
    private function getBrand(){
        return Brand::all();
    }
    private function fillData($item, $input, $is_create){
        $price = filter_var($input['price'], FILTER_SANITIZE_NUMBER_INT);
        $item['name'] = $input['product_name'];
        $item['slug'] = $input['product_slug'] ?? Str::slug($input['product_name']);
        $item['description'] = $input['description'];
        $item['brand_id'] = $input['product_brand'];
        $item['category_id'] = $input['product_category'];
        $item['quantity'] = $input['product_qty'];
        $item['price'] = $price;
        $item['promotion'] = $input['promotion'];
//        $item['status'] = $input['status'];
        $item['detail_product'] = isset($input['info_product']) ? $input['info_product'] : '';
        if($is_create){
            $item['views'] = 0;
            $item['rating_number'] = 0;
            $item['rating_value'] = 0;
        }
        $item->save();
    }
    public function index(){
        $products = Product::orderBy('id', 'DESC')->paginate(20);
        return view('admin.product.index', ['products'=>$products]);
    }
    public function create(){
        return view('admin.product.create', [
            'brands'=>$this->getBrand(),
            'categories'=>$this->getProductCategories(),
        ]);
    }
    public function store(Request $request){
        $input = $request->all();
        $item = new Product();
        $this->fillData($item, $input, true);
        return redirect()->route('admin.product.index')->with('ok', 'Thêm mới sản phẩm thành công!');
    }
    public function edit($id){
        $item = Product::find($id);
//        echo "<pre>";
//        print_r($item);
//        echo "</pre>";
//        exit();
        return view('admin.product.edit', [
            'brands'=>$this->getBrand(),
            'categories'=>$this->getProductCategories(),
            'item'=>$item
        ]);
    }
    public function update(Request $request,$id){
        $input = $request->all();
        $item = Product::find($id);
        $this->fillData($item, $input, false);
        return redirect()->route('admin.product.index')->with('ok', 'Cập nhật sản phẩm thành công!');
    }
    public function destroy($id){
        $item = Product::find($id);
        try {
            $item->delete();
            return redirect()->route('admin.product.index')->with('ok', 'Xóa thành công!');
        } catch (\Exception $e){
            return redirect()->route('admin.product.index')->with('error', 'Xóa thất bại!');
        }
    }
}
