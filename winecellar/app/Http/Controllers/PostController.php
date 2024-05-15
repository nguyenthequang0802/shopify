<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('admin.post.index', ['posts'=>$posts]);
    }
    public function create(){
        return view('admin.post.create');
    }
}
