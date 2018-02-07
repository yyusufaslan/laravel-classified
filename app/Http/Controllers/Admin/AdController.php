<?php

namespace App\Http\Controllers\Admin;
use App\Ad;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class AdController extends Controller
{
    public  function index()
    {
        $ads = Ad::all();
//        $adCategories = AdCategory::where('parent_id','0')->with('children')->get();

        return view('Admin.Ad.Ad',['ads'=>$ads]);

    }
    public function show($id)
    {
        $ad = Ad::find($id);

        return view('Admin.Ad.showAd',['ad'=>$ad]);
    }
    public function create(Request $request)
    {

    }
    public function edit($id)
    {
        $ad =Ad::find($id);

        return view('Admin.Ad.editAd',['ad'=>$ad]);
    }
    public function update()
    {

    }
    public function delete($id)
    {
        $ad = Ad::find($id);
        $this->delete($ad);

        return Redirect::back();
    }

    public function changeStatus($id)
    {
            $ad =Ad::find($id);
        if ($ad->status == '1')
        {
            Ad::where('id',$id)->update(['status'=>'0']);
        } else
         {
             Ad::where('id',$id)->update(['status'=>'1']);
         }

         return Redirect::back();
    }
}
