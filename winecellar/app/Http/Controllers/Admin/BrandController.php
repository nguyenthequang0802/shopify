<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index() {
        $brands = brand::all();
        return view('admin.brand.index', ['brands' => $brands]);
    }
    public function create() {
        return view('admin.brand.create');
    }
    public function store(Request $request){
        $input = $request->all();
        brand::create([
            'name' => $input['brand_name'],
            'slug' => $input['slug'] ?? str::Slug($input['brand_name']),
            'icon' => $input['icon'],
            'country' => $input['country'],
        ]);
        return redirect()->route('admin.brand.index');
    }
    public function edit($id){
        $brand = brand::find($id);
        return view('admin.brand.edit', ['brand' => $brand]);
    }

    public function update(Request $request, $id){
        $input = $request->all();
        $brand = brand::find($id);
        $brand['name'] = $input['brand_name'];
        $brand['slug'] = $input['slug'] ?? str::Slug($input['brand_name']);
        $brand['icon'] = $input['icon'];
        $brand['country'] = $input['country'];
        $brand->save();
        return redirect()->route('admin.brand.index');
    }

}
