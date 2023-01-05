<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('backend.category.index');
    }

    public function store(Request $request){
        $cat=new Category;
        $cat->cat_name=$request->cat_name;
        $cat->save();
        return redirect()->route("show");

    }

    public function show(){
        $shows=Category::all();
        return view("backend.category.show",compact("shows"));
    }

    public function edit($id){
            $edits=Category::find($id);
            return view("backend.category.update",compact("edits"));
    }

    public function update(Request $request,$id){

        $update=Category::find($id);
        $update->cat_name=$request->cat_name;
        $update->save();
        return redirect()->route("show");
    }

    public function delete($id){
        $cat=Category::find($id);
        $cat->delete();
        return back();
    }

}
