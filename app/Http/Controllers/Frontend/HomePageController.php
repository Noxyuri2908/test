<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Detail;
use App\Models\Tag;
use App\Models\Comment;

class HomePageController extends Controller
{
	protected $categoryModel;
    protected $detailModel;
    protected $tagModel;
    protected $commentModel;

	public function __construct(Category $categoryModel, Detail $detailModel, Tag $tagModel, Comment $commentModel)
	{
		$this->categoryModel = $categoryModel;
        $this->detailModel = $detailModel;
        $this->tagModel = $tagModel;
        $this->commentModel = $commentModel;
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
    	$details = $this->detailModel->all();
        $relatedDetail = $this->detailModel->where('category_id', '=', $detail->category->id)
            ->where('id', '!=', $detail->id)
            ->orderBy('created_at', 'desc')->get()->take(4);
        $tags = $this->tagModel->orderBy('created_at', 'desc')->get()->take(15);
        $tagsDetail = $this->tagModel->where('detail_id', '=', $detail->id )->get();
        $commentsDetail = $this->commentModel->where('detail_id', '=', $detail->id )->get();
    	$data = [
    		'categories' => $categories, 
            'detail' => $detail, 
    		'relatedDetail' => $relatedDetail, 
            'details' => $details,
            'tagsDetail' => $tagsDetail,
    		'commentsDetail' => $commentsDetail,
            'tags' => $tags
    	];

        return view('Frontend.Contents.detailNews',$data);
    }

    public function postComment(Request $request)
    {
        $detail = Detail::find($request->get('detail_id'));
        Comment::create(
            [
            'name' => $request->name,
            'slug' => 1,
            'description' => $request->comment,
            'detail_id' => $detail->id
            ]
        );

        return redirect()->route('get-detail-news', ['id' => $detail->id]);
    } 

}
