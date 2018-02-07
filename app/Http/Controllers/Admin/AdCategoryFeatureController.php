<?php

namespace App\Http\Controllers\Admin;

use App\AdCategory;
use App\AdCategoryFeature;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdCategoryFeatureController extends Controller
{
    public  function index($id)
    {
        $features = AdCategoryFeature::where('ad_category_id','=',$id)->get();
        $adCategory = AdCategory::find($id);
        return view('Admin.AdCategoryFeature.AdCategoryFeature',['features'=>$features],['adCategory'=>$adCategory]);
    }


    public function create(Request $request)
    {
        $features = AdCategoryFeature::where('ad_category_id','=',$request['id'])->get();
        $adCategory = AdCategory::find($request['id']);

        $feature = new AdCategoryFeature();

        $feature->body = $request['body'];
        $feature->ad_category_id = $request['ad_category_id'];
        $feature->status = $request['status'];
//        if($request['status']=='on')
//        {
//            $feature->status = 1;
//        }
//        else
//        {
//            $feature->status =0;
//        }
        $feature->ad_category_language_id='0';
        $feature->save();

        return Redirect::back();
    }
    public function edit($id)
    {
        $feature = AdCategoryFeature::find($id);

        return view('Admin.AdCategoryFeature.editAdCategoryFeature',['feature'=>$feature]);

    }
    public function update(Request $request)
    {
        $features = AdCategoryFeature::find($request['id']);
        $features->body = $request['body'];
        $features->ad_category_id = $features->ad_category_id ;
        $features->ad_category_language_id =$features->ad_category_language_id ;
        $features->status = $request['status'];
        $adCategory = AdCategory::where('id',$request['id']);
        Session::flash('flash_message', 'Task successfully added!');

        $features->update();

        return $this->index();
    }
    public function delete($detail_id)
    {
        $adCategoryDetail = AdCategoryFeature::where('id',$detail_id)->first();
        $adCategoryDetail->delete();
        $features = AdCategoryFeature::where('category_id',$detail_id);
        $adCategory = AdCategory::where('id',$detail_id);

        return Redirect::back()->with(['features',$features],['adCategory'=>$adCategory]);
    }

}
