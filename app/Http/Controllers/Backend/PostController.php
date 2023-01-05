<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Category;
use App\Models\Backend\Tag;
use App\Models\Backend\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use File;

class PostController extends Controller
{
    
    public function index(){
        $catshows=Category::all();
        $tagshows=Tag::all();

        return view("backend.post.index",compact("catshows","tagshows"));
    }

    public function store(Request $request){

        if($request->photo){
            $image=$request->file('photo');
            $customname=rand().".".$image->getClientOriginalExtension();
            $location=public_path('backend/postimage/'.$customname);
            Image::make($image)->save($location);
         }
        $post=new Post;
        $post->user_name=$request->user_name;
        $post->cat_name=$request->cat_name;
        $post->title=$request->title;
        $post->slug=Str::slug($request->title);
        $post->photo=$customname;
        $post->tag=$request->tag_name;
        $post->short_des=$request->short_des;
        $post->long_des=$request->long_des;
        $post->save();
        return redirect()->route("post.show");

    }

    public function show(){
        $postshows=Post::all(); 
        return view("backend.post.show",compact("postshows"));
    }
    public function find(){
        $post=Post::all();
        return view("frontend.index",compact("post"));
    }

    public function edit($id){
            $edits=Post::find($id);
            $catshows=Category::all();
            $tagshows=Tag::all();
            return view("backend.post.update",compact("edits","catshows","tagshows"));
    }

    public function update(Request $request,$id){
        $update=Post::find($id);

        if($request->photo){
            // delete image
            if(File::exists("backend/postimage/".$update->photo)){
                File::delete("backend/productimage/".$update->photo);
                // insert image again
                $image = $request->file('photo');
                $customname = rand().".".$image->getClientOriginalExtension();
                $location = public_path('backend/postimage/'.$customname);
                Image::make($image)->save($location);
                $update->photo = $customname;
            }
            else{
                $image = $request->file('photo');
                $customname = rand().".".$image->getClientOriginalExtension();
                $location = public_path('backend/productimage/'.$customname);
                Image::make($image)->save($location);
                $update->photo = $customname;
            }        
           
            $update->user_name=$request->user_name;
            $update->cat_name=$request->cat_name;
            $update->title=$request->title;
            $update->slug=Str::slug($request->title);
            $update->photo=$customname;
            $update->tag=$request->tag_name;
            $update->short_des=$request->short_des;
            $update->long_des=$request->long_des;
            $update->update();
            return redirect()->route("post.show");
        }
    }

    public function delete($id){
        $post=Post::find($id);
        $post->delete();
        return back();
    }
}
