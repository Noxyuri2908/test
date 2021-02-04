<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Detail;

class HomePageController extends Controller
{
	protected $categoryModel;
	protected $detailModel;

	public function _construct(Category $categoryModel, Detail $detailModel)
	{
		$this->categoryModel = $categoryModel;
		$this->detailModel = $detailModel;
	}

    public function index()
    {
    	$detail = Detail::all();
    	$category = Category::all();
  
    	return view('Frontend.Contents.home', ['categories' => $category, 'detail' => $detail]);
    }

    public function home()
    {
    	$category = $this->categoryModel->all();
    	$detail =$this->detailModel->all();

    	return view('Frontend.Contents.home',['categories' => $category, 'detail' => $detail]);
    }

    public function contact()
    {
    	return view('Frontend.Contents.contact');
    }

    public function store()
    {
    	$detail = Detail::all();
    	$category = Category::all();

    	return view('Frontend.Contents.detailNews',['categories' => $category, 'details' => $detail]);
    }
    
    public function getNews($id)
    {
    	$category = Category::all();
        $detail = Detail::find($id);
    	$details = Detail::all();


        return view('Frontend.Contents.detailNews',['categories' => $category, 'detail' => $detail, 'details' => $details]);
    }
}
