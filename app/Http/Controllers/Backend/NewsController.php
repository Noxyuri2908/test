<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\Category;
use Str;

class NewsController extends Controller
{
    public function index()
    {
        $detail = Detail::all();

    	return view('Backend.News.news_list', ['details' => $detail]);
    }

    public function add()
    {
        $categories = Category::all();

        return view('Backend.News.add',['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $inputs = $request->all();
        $inputs['slug'] = Str::slug($inputs['title']);
        $inputs['image'] = $inputs['slug'] . '.jpg';
        $this->saveImage($request->image, $inputs['image']);
        Detail::create($inputs);

        return redirect()->route('news-list');
    }
    
    public function saveImage($image, $name)
    {
        return $image->move('uploads/news/details', $name);
    }


    public function getEdit($id)
    {
        $detail = Detail::find($id);
        $categories = Category::all();

        return view('Backend.News.edit',['details' => $detail, 'categories' => $categories]);
    }

    public function postEdit(Request $request, $id)
    {
        $detail = Detail::find($id);
        Detail::where('id', $id)->update(
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
    	$detail = Detail::find($id);
        $detail->delete();

        return redirect()->route('news-list');
    }
}
