<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Str;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
    	return view('Backend.Users.user_list', ['users' => $users]);
    }

    public function add()
    {
        return view('Backend.Users.add');

    }

    public function store(Request $request)
    {
        // $inputs = new User();
        // $inputs->name = $request->name;
        // $inputs->email = $request->email;
        // $inputs->password = $request->password;
        // $inputs->save();
        $inputs = $request->all();
        $inputs['name'] = Str::slug($inputs['name']);
        $inputs['email'] = Str::slug($inputs['email']);
        $inputs['password'] = Str::slug($inputs['password']);
        User::create($inputs);
        return redirect()->route('user-list');
    }
    public function edit()
    {

    }

    public function delete(){
    	
    }

    public function getLogin()
    {
        return view('Backend.login');
    }

    public function postLogin(Request $request)
    {
        $inputs = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($inputs)) {
            return redirect()->route('index');

        }

        else {
            return redirect()->route('get-login');
        }
    }
}
