<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\Tag;
use App\Models\TagDetail;
use App\Models\Category;
use Str;

class NewsController extends Controller
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
        $details = $this->detailModel->all();

    	return view('Backend.News.news_list', ['details' => $details]);
    }

    public function add()
    {
        $categories = $this->categoryModel->all();
        $tags = $this->tagModel->all();

        return view('Backend.News.add', ['categories' => $categories, 'tags' => $tags]);
    }

    public function store(Request $request)
    {
        $inputs = $request->all();
        $inputs['slug'] = Str::slug($inputs['title']);
        $inputs['image'] = $inputs['slug'] . '.jpg';
        $this->saveImage($request->image, $inputs['image']);
        $this->detailModel->create($inputs);
        
        return redirect()->route('news-list');
    }
    
    public function saveImage($image, $name)
    {
        return $image->move('uploads/news/details', $name);
    }


    public function getEdit($id)
    {
        $detail = $this->detailModel->find($id);
        $categories = $this->categoryModel->all();

        return view('Backend.News.edit', ['details' => $detail, 'categories' => $categories]);
    }

    public function postEdit(Request $request, $id)
    {
        $detail = $this->detailModel->find($id);
        $this->detailModel->where('id', $id)->update(
            [
                'title' => $request->title,
                'view' => $request->view,
                'content' => $request->content,
                'description' => $request->description,
                'category_id' => $request->category_id,
                'image' => $detail->slug . '.jpg'
            ]
        );
        $this->saveImage($request->image, $detail['image']);

        return redirect()->route('news-list');
    }
    
    public function delete($id){
    	$detail = $this->detailModel->find($id);
        $detail->delete();

        return redirect()->route('news-list')->with('success', 'completed!');
    }
}
