<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    private function getCategories($model_type){
        return Category::where('model_type','=', $model_type)->where('parent_id', '=', null)->with('childs')->get();
    }
    private function fillData($item, $input, $model_type){
        $item['parent_id'] = isset($input['category_parent']) && is_numeric($input['category_parent']) ? (int) $input['category_parent'] : null;
        $item['name'] = $input['cate_name'];
        $item['slug'] = $input['slug'] ?? Str::slug($input['cate_name']);
        $item['icon'] = $input['icon'] ?? "";
        $item['model_type'] = $model_type;
        $item->save();
    }
    public function index($model_type){
        return view("admin.category.index",[
            "categories" => $this->getCategories($model_type),
            'model_type' => $model_type,
        ]);
    }
    public function create($model_type){
        return view('admin.category.create', ['categories' => $this->getCategories($model_type), 'model_type' => $model_type]);
    }
    public function store(Request $request, $model_type){
        $input = $request->all();
        $category = new Category();
        $this->fillData($category, $input, $model_type);
        return redirect()->route('admin.category.index', $model_type);
    }

    public function edit($model_type, $id){
        $item = Category::find($id);
        if (!$item) return redirect()->back();
        return view('admin.category.edit',[
           'item' => $item,
           'categories' => $this->getCategories($model_type),
            'model_type' => $model_type,
        ]);
    }
    public function update($model_type, $id, Request $request)
    {
        $item = Category::find($id);
        if (!$item) return redirect()->back();

        $input = $request->all();
        $this->fillData($item, $input, $model_type);

        return redirect()->route("admin.category.index", $model_type);
    }
    public function deleteChild($model_type, $id){
        $item = Category::find($id);
        if ($item){
            if ($item->childs){
                foreach ($item->childs as $child){
                    $this->deleteChild($model_type, $child->id);
                }
            }
            $item->delete();
        }
    }
    public function destroy($model_type, $id){
        $this->deleteChild($model_type, $id);
        return  response()->json([
            'message' => 'Xóa thành công!',
            'item'=> $id,
        ], 200);
    }
}
