<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Post;
use App\Models\Backend\Category;
use App\Models\Backend\Tag;
use Image;
use File;

class FrontController extends Controller
{
    public function index(){
        $post=Post::all();
        $cat=Category::all();
        $tag=Tag::all();
        return view("frontend.index",compact("post","cat","tag"));
    }
    public function blogdetail(){
        $post=Post::all();
        $cat=Category::all();
        $tag=Tag::all();
        return view("frontend.blogdetail",compact("post","cat","tag"));
    }
}
