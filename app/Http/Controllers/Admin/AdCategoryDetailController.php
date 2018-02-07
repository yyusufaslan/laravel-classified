<?php

namespace App\Http\Controllers\Admin;

use App\AdCategory;
use App\AdCategoryDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AdCategoryDetailController extends Controller
{
    public  function index($id)
    {
       $details = AdCategoryDetail::where('ad_category_id','=',$id)->get();
        $adCategory = AdCategory::find($id);
        return view('Admin.AdCategoryDetail.AdCategoryDetail',['details'=>$details],['adCategory'=>$adCategory]);
    }


    public function create(Request $request)
    {
        $detail = new AdCategoryDetail();

        $detail->body = $request['body'];
        $detail->ad_category_id = $request['ad_category_id'];
        if($request['status']=='on')
        {
            $detail->status = true;
        }
        else
            {
                $detail->status =false;
            }
            $detail->ad_category_language_id='0';
        $detail->type = $request['type'];
        $detail->save();

        return redirect()->route('adCategory.index');
    }
    public function edit($id)
    {
        $detail = AdCategoryDetail::find($id);

        return view('Admin.AdCategoryDetail.editAdCategoryDetail',['detail'=>$detail]);

    }
    public function update($id,Request $request)
    {
        $details = AdCategoryDetail::find($id);

        $details->body = $request['body'];
        $details->ad_category_id = $request['ad_category_id'];
        $details->ad_category_language_id = $request['ad_category_language_id'];
        $details->status = $request['status'];
        $details->type = $request['type'];

        Session::flash('flash_message', 'Task successfully updated!');

        $details->update();

        return Redirect::back();
    }
    public function delete($detail_id)
    {
        $adCategoryDetail = AdCategoryDetail::where('id',$detail_id)->first();
        $adCategoryDetail->delete();
        $details = AdCategoryDetail::where('category_id',$detail_id);
        $adCategory = AdCategory::where('id',$detail_id);

        return Redirect::back()->with(['details',$details],['adCategory'=>$adCategory]);
    }
    public function changeStatus($id)
    {

        $ad =AdCategoryDetail::find($id);
        if ($ad->status == '1')
        {
            AdCategoryDetail::where('id',$id)->update(['status'=>'0']);
        } else
        {
            AdCategoryDetail::where('id',$id)->update(['status'=>'1']);
        }

        return Redirect::back();
    }
}
