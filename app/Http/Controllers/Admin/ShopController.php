<?php

namespace App\Http\Controllers\Admin;

use App\Shop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ShopController extends Controller
{
    public  function index($id)
    {
        $shop = Shop::find($id);
        // $packet = Packet::where('id',$id)->get();

        return view('Admin.Shop.editShop',['shop'=>$shop]);
    }


    public function create(Request $request)
    {

    }
    public function edit($id)
    {
        $shop = Shop::find($id);

        return view('Admin.Shop.editShop',['shop'=>$shop]);

    }
    public function update($id,Request $request)
    {
        $shop = Shop::find($id);
        $shop->status = $request['status'];
        $shop->title = $request['title'];
        $shop->ad_category_id = $request['ad_category_id'];
        $shop->description = $request['description'];
        $shop->photo = $request['photo'];
        $shop->slug = $request['slug'];

        Session::flash('flash_message', 'Packet successfully updated!');

        $shop->update();

        return Redirect::back();
    }
    public function delete($detail_id)
    {
        $adCategoryDetail = Shop::where('id',$detail_id)->first();
        $adCategoryDetail->delete();
        $details = Shop::where('category_id',$detail_id);
        $adCategory = Shop::where('id',$detail_id);

        return Redirect::back()->with(['details',$details],['adCategory'=>$adCategory]);
    }
    public function changeStatus($id)
    {

        $ad =Shop::find($id);
        if ($ad->status == '1')
        {
            Shop::where('id',$id)->update(['status'=>'0']);
        } else
        {
            Shop::where('id',$id)->update(['status'=>'1']);
        }

        return Redirect::back();
    }
}
