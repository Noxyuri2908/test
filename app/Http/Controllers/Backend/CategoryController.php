<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Str;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();

    	return view('Backend.Categories.category_list',['categories' => $category]);
    }

    public function add()
    {
        return view('Backend.Categories.add');
    }

    public function store(Request $request)
    {
        $inputs = $request->all();
        $inputs['slug'] = Str::slug($inputs['name']);
        Category::create($inputs);

        return redirect()->route('category-list');
    }

    public function getEdit($id)
    {
        $category = Category::find($id);

        return view('Backend.Categories.edit',['categories'=>$category]);
    }

    public function postEdit(Request $request,$id)
    {
        $category = Category::find($id);
        Category::where('id', $id)->update(
            [
            'name' => $request->name,
            'status' => $request->status
            ]
        );
        // $category->save();

        return redirect()->route('category-list');
    }

    public function delete($id){
    	$category = Category::find($id);
        $category->delete();

        return redirect()->route('category-list');
    }
}
