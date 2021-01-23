<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use Str;

class CategoryController extends Controller
{
    public function index(){
        $Categories = Categories::all();
    	return view('Backend.Categories.CategoryList',['Categories'=>$Categories]);
    }
    public function add() {
        return view('Backend.Categories.Add');
    }
    public function store(Request $request){
        $Categories = new Categories;
        $Categories->name = $request->ten_dm;
        $Categories->slug = Str::slug($request->ten_dm);
        $Categories->save();

        return redirect()->route('CategoryList');
    }
    public function Edit(){

    }
    public function Delete(){
    	
    }
}
