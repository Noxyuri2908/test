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
        $categories = Category::all();

    	return view('Backend.Categories.category_list',['categories' => $categories]);
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

    public function edit()
    {

    }

    public function delete(){
    	
    }
}
