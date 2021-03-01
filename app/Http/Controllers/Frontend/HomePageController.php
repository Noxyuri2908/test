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
        $details = $this->detailModel->orderBy('created_at', 'desc')->get();
        $lastestDetail = $this->detailModel->orderBy('created_at', 'desc')->get()->take(1);
        $fourLastestDetail = $this->detailModel->orderBy('created_at', 'desc')->get()->take(4);
        $twoDetail = $this->detailModel->inRandomOrder()->get()->take(2);
    	$fiveDetail = $this->detailModel->inRandomOrder()->get()->take(5);
        $categories = $this->categoryModel->all();
    	$tags = $this->tagModel->orderBy('created_at', 'desc')->get()->take(20);
        $data = [
            'categories' => $categories, 
            'details' => $details, 
            'twoDetail' => $twoDetail, 
            'fiveDetail' => $fiveDetail, 
            'tags' => $tags,
            'lastestDetail' => $lastestDetail,
            'fourLastestDetail' => $fourLastestDetail
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

    public function getDetails($id)
    {
        $categories = $this->categoryModel->all();
        $details = $this->detailModel->all();
        $lastestDetail = $this->detailModel->orderBy('created_at', 'desc')->get()->take(4);
        $detailsCategory = $this->detailModel->where('category_id', '=', $id)
            ->orderBy('created_at', 'desc')->get()->take(4);
        $tags = $this->tagModel->orderBy('created_at', 'desc')->get()->take(15);
        $data = [
            'categories' => $categories,
            'detailsCategory' => $detailsCategory, 
            'details' => $details,
            'lastestDetail' => $lastestDetail,
            'tags' => $tags
        ];

        return view('Frontend.Contents.detailsCategory',$data);
    }

    public function detailTag($id)
    {
        $categories = $this->categoryModel->all();
        $details = $this->detailModel->all();
        $lastestDetail = $this->detailModel->orderBy('created_at', 'desc')->get()->take(4);
        $tags = $this->tagModel->orderBy('created_at', 'desc')->get()->take(15);
        $tag = $this->tagModel->find($id);
        $detailTag = $this->detailModel->where('id', '=', '$tag->detail_id');
        dd($detailTag);
        $data = [
            'categories' => $categories,
            'detailTag' => $detailTag, 
            'details' => $details,
            'lastestDetail' => $lastestDetail,
            'tags' => $tags,
            'tag' => $tag
        ];

        return view('Frontend.Contents.detailTag',$data);
    }

    public function getComment(Detail $detail)
    {
        return response()->json($detail->comments()->latest()->get());
    }

    public function postComment(Request $request)
    {
        try {
            $detail = $this->detailModel->find($request->detail_id);
            $comment= $this->commentModel->create(
                [
                'name' => $request->name,
                'slug' => 'comment',
                'description' => $request->comment,
                'detail_id' => $detail->id
                ]
            );

            return response()->json(['status' => true,'name' => $request->name, 'description' => $request->comment, 'date' => $comment->created_at]);

        } catch (\Exception $e) {
            dd($e->getMessage());
            return response()->json(['status' => false]);
        }
    } 

    public function search(Request $request){
        $categories = $this->categoryModel->all();
        $details = $this->detailModel->all();
        $lastestDetail = $this->detailModel->orderBy('created_at', 'desc')->get()->take(4);
        $tags = $this->tagModel->orderBy('created_at', 'desc')->get()->take(15);
        $search = $request->search;
        $test  = $this->detailModel->where ( 'title', 'LIKE', '%' . $search . '%' )->orWhere ( 'description', 'LIKE', '%' . $search . '%' )->orWhere ( 'content', 'LIKE', '%' . $search . '%' )->get();
        $data = [
            'categories' => $categories, 
            'details' => $details,
            'lastestDetail' => $lastestDetail,
            'tags' => $tags,
            'test' => $test
        ];

        return view('Frontend.Contents.searchIterm', $data);
    }
}
