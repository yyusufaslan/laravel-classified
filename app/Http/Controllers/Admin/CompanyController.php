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
use App\Shop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class CompanyController
{
    public function index()
    {
        $companies = User::where('user_type','company')->get();

        return view('Admin.Company.Company',['companies'=>$companies]);
    }

    public function show($id)
    {
        $company = User::find($id);
        $ads = Ad::where('user_id',$id)->get();
        $shops = Shop::where('user_id',$id)->get();

        return view('Admin.Company.showCompany',['company'=>$company],['ads'=>$ads])->with('shops',$shops);

    }

    public function edit(){}

    public function update(){}

    public function delete(){}

    public function changeStatus($id)
    {

        $ad =User::find($id);
        if ($ad->status == '1')
        {
            User::where('id',$id)->update(['status'=>'0']);
        } else
        {
            User::where('id',$id)->update(['status'=>'1']);
        }

        return Redirect::back();
    }
}