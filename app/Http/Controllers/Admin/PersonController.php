<?php
/**
 * Created by PhpStorm.
 * User: aslan
 * Date: 21.01.2018
 * Time: 20:11
 */

namespace App\Http\Controllers\Admin;

use App\Ad;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PersonController
{
    public function index()
    {
        $persons = User::where('user_type','person')->get();

        return view('Admin.Person.Person',['persons'=>$persons]);
    }

    public function show($id)
    {
        $person = User::find($id);
        $ads = Ad::where('user_id',$id)->get();

        return view('Admin.Person.showPerson',['person'=>$person],['ads'=>$ads]);

    }

    public function edit(){}

    public function update(){}

    public function delete(){}
}