<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\Category;
use Str;

class CategoryController extends Controller
{
    protected $categoryModel;
    protected $detailModel;

    public function __construct(Category $categoryModel, Detail $detailModel)
    {
        $this->categoryModel = $categoryModel;
        $this->detailModel = $detailModel;
    }

    public function index()
    {
        $categories = $this->categoryModel->all();

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
        $this->categoryModel->create($inputs);

        return redirect()->route('category-list');
    }

    public function getEdit($id)
    {
        $category = $this->categoryModel->find($id);

        return view('Backend.Categories.edit', ['categories'=>$category]);
    }

    public function postEdit(Request $request,$id)
    {
        $category = $this->categoryModel->find($id);
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
    	$category = $this->categoryModel->find($id);
        $category->delete();

        return redirect()->route('category-list')->with('success', 'completed!');
    }
}
