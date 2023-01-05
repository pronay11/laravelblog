<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(){
        return view('backend.tag.index');
    }

    public function store(Request $request){
        $tag=new Tag;
        $tag->tag_name=$request->tag_name;
        $tag->save();
        return redirect()->route("tag.show");

    }

    public function show(){
        $shows=Tag::all();
        return view("backend.tag.show",compact("shows"));
    }

    public function edit($id){
            $edits=Tag::find($id);
            return view("backend.tag.update",compact("edits"));
    }

    public function update(Request $request,$id){

        $update=Tag::find($id);
        $update->tag_name=$request->tag_name;
        $update->update();
        return redirect()->route("tag.show");
    }

    public function delete($id){
        $tag=Tag::find($id);
        $tag->delete();
        return back();
    }
}
