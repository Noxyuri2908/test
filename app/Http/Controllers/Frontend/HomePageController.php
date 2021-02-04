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

	public function __construct(Category $categoryModel, Detail $detailModel)
	{
		$this->categoryModel = $categoryModel;
		$this->detailModel = $detailModel;
	}

    public function index()
    {
    	$detail = $this->detailModel->all();
    	$category = $this->categoryModel->all();
  
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
    	$detail = $this->detailModel->all();
    	$category = $this->categoryModel->all();

    	return view('Frontend.Contents.detailNews',['categories' => $category, 'details' => $detail]);
    }
    
    public function getNews($id)
    {
    	
    	$categories = $this->categoryModel->all();
        $detail = $this->detailModel->find($id);
    	$details = $this->detailModel->all();

        return view('Frontend.Contents.detailNews',['categories' => $categories, 'detail' => $detail, 'details' => $details]);
    }
}
