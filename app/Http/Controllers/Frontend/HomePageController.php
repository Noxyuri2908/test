<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Detail;
use App\Models\Tag;
use App\Models\TagDetail;

class HomePageController extends Controller
{
	protected $categoryModel;
    protected $detailModel;
    protected $tagModel;

	public function __construct(Category $categoryModel, Detail $detailModel, Tag $tagModel)
	{
		$this->categoryModel = $categoryModel;
        $this->detailModel = $detailModel;
        $this->tagModel = $tagModel;
	}

    public function index()
    {
        $detail = $this->detailModel->orderBy('created_at', 'desc')->get();
    	$lastestDetail = $this->detailModel->orderBy('created_at', 'desc')->get()->take(4);
        $categories = $this->categoryModel->all();
    	$tags = $this->tagModel->orderBy('created_at', 'desc')->get()->take(15);
        $data = [
            'categories' => $categories, 
            'detail' => $detail, 
            'tags' => $tags,
            'lastestDetail' => $lastestDetail
        ];
  
    	return view('Frontend.Contents.home', $data);
    }

    public function home()
    {
    	$category = $this->categoryModel->all();
    	$detail =$this->detailModel->all();
        $tags = $this->tagModel->all();

    	return view('Frontend.Contents.home',['categories' => $category, 'detail' => $detail, 'tags' => $tags]);
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
        $tags = $this->tagModel->orderBy('created_at', 'desc')->get()->take(15);
    	$details = $this->detailModel->all();
        $relatedDetail = $this->detailModel->where('category_id', '=', $detail->category->id)
            ->where('id', '!=', $detail->id)
            ->orderBy('created_at', 'desc')->get()->take(4);
        $tag = $this->tagModel->find($id);
        $tagsDetail = $this->tagModel->where('detail_id', '=', $detail->id )->get();
    	$data = [
    		'categories' => $categories, 
            'detail' => $detail, 
    		'relatedDetail' => $relatedDetail, 
            'details' => $details,
    		'tagsDetail' => $tagsDetail,
            'tags' => $tags
    	];

        return view('Frontend.Contents.detailNews',$data);
    }
}
