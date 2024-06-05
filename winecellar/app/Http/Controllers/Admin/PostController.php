<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    private function getPostCategories(){
        return Category::where('model_type','=', 'post')->where('parent_id', '=', null)->with('childs')->get();;
    }
    private function fillDataToPost($item, $input, $is_create){
        $item['name'] = $input['name']?? '';
        $item['slug'] = $input['slug']?? str::slug($input['name']);
        $item['description'] = $input['description'];
        $item['preview_image'] = $input['preview_image'];
        $item['content'] = $input['content'];
        $item['seo_title'] = $input['seo_title'] ?? '';
        $item['seo_keywords'] = $input['seo_keywords'] ?? '';
        $item['seo_description'] = $input['seo_description'] ?? '';
        $item['category_id'] = isset($input['category_id']) && is_numeric($input['category_id']) ? (int) $input['category_id'] : null;
        if($is_create){
            $item['views'] = 0;
            $item['rating_num'] = 0;
            $item['rating_value'] = 0;
        }
        $item->save();
    }
    protected function saveImageIntoPost($images, $post): void
    {
        foreach ($images as $img)
        {
            $image = new Image();
            $image["type"] = typeOf($post);
            $image["model_id"] = $post->id;
            $image["path"] = $img;
            $image["name"] = $img;
            $image["alt"] = $img;
            $image->save();
        }
    }
    public function index(){
        $group = 'post';
        $posts = Post::orderBy('category_id', 'ASC')->whereHas('category', function ($query) use ($group) {
            $query->where('model_type', $group);
        })->get();
        return view('admin.post.index',[
            "posts" => $posts

        ]);
    }
    public function create(){
        $categories = $this->getPostCategories();
        return view('admin.post.create', ['categories'=>$categories]);
    }
    public function store(Request $request){
        $input = $request->all();
        $item = new Post();
        $this->fillDataToPost($item, $input, true);
        $images = $input['images[]'] ?? [];
        $this->saveImageIntoPost($images, $item);
        return redirect()->route('admin.post.index')->with('ok', 'Thêm mới thành công');
    }

    public function edit($id){
        $item = Post::find($id);
        $categories = $this->getPostCategories();
        return view('admin.post.edit', ['item'=>$item, 'categories'=> $categories]);
    }
    public function update(Request $request, $id){
        $input = $request->all();
        $item = Post::find($id);
        $this->fillDataToPost($item, $input, false);
        $images = $input['images[]'] ?? [];
        $this->saveImageIntoPost($images, $item);
        return redirect()->route('admin.post.index')->with('ok', 'Cập nhật thành công');
    }
    public function destroy($id){
        try {
            $item = Post::find($id);
            $item->delete();
            return  redirect()->route('admin.post.index')->with('ok', 'Xóa thành công!');
        } catch (\Exception $e){
            return  redirect()->route('admin.post.index')->with('error', 'Xóa thất bại!');
        }
    }
}
