<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Detail;
use Str;

class NewsController extends Controller
{
    public function index()
    {
        $details = Detail::all();

    	return view('Backend.News.news_list', ['details' => $details]);
    }

    public function add()
    {
        return view('Backend.News.add');
    }

    public function store(Request $request)
    {
        $inputs = $request->all();
        $inputs['slug'] = Str::slug($inputs['title']);
        $inputs['image'] = $inputs['slug'] . '.jpg';
        $inputs['user_id'] = 1;
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
        $details = Detail::find($id);

        return view('Backend.News.edit',['details' => $details]);
    }

    public function postEdit(Request $request, $id)
    {
        $details = Detail::find($id);
        $details->title = $request->title;
        $details->view = $request->view;
        $details->content = $request->content;
        $details->description = $request->description;
        $details['image'] = $details['slug'] . '.jpg';
        $details['user_id'] = 1;
        $this->saveImage($request->image, $details['image']);
        $details->save();

        return redirect()->route('news-list');
    }
    
    public function delete($id){
    	$details = Detail::find($id);
        $details->delete();

        return redirect()->route('news-list');
    }
}
