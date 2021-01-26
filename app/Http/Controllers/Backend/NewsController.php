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


    public function edit(){

    }
    public function delete(){
    	
    }
}
