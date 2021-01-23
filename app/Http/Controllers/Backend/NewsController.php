<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
    	return view('Backend.News.NewsList');
    }
    public function add(){

    }
    public function Edit(){

    }
    public function Delete(){
    	
    }
}
