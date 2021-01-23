<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
    	return view('Backend.Users.user-list');
    }
    public function add(){

    }
    public function edit(){

    }
    public function delete(){
    	
    }
}
