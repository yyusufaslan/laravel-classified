<?php

namespace App\Http\Controllers\Admin;

use App\Ad;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();

        return view('Admin.User.User',['users'=>$users]);
    }

    public function show($id)
    {
        $user = User::find($id);
        $ads = Ad::where('user_id',$id)->get();

        return view('Admin.User.showUser',['user'=>$user],['ads'=>$ads]);

    }

    public function edit(){}

    public function update(){}

    public function delete($id)
    {
       $user = User::find($id);

       $user->delete();

       return Redirect::back();
    }
}
