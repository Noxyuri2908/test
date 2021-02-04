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
        $user = User::all();

        return view('Backend.Users.user_list', ['users' => $user]);
    }

    public function add()
    {
        return view('Backend.Users.add');
    }

    public function store(Request $request)
    {
        $inputs = $request->all();
        $inputs['name'] = Str::slug($inputs['name']);
        $inputs['email'] = Str::slug($inputs['email']);
        $inputs['password'] = Str::slug($inputs['password']);
        User::create($inputs);

        return redirect()->route('user-list');
    }

    public function getEdit($id)
    {
        $user = User::find($id);

        return view('Backend.Users.edit',['users' => $user]);
    }

    public function postEdit(Request $request, $id)
    {
        $user = User::find($id);
        User::where('id', $id)->update(
            [
                'name'=> $request->name,
                'email' => $request->email,
                'password' => $request->password
            ]
        );

        return redirect() -> route('user-list');
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();

        return redirect() -> route('user-list');
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

        } else {
            return redirect()->route('get-login');
        }
    }

    public function getLogout()
    {
        Auth::logout();

        return view('Backend.login');
    }
}
