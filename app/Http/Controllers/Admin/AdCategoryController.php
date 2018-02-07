<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\AdCategory;
use Symfony\Component\HttpFoundation\AcceptHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class AdCategoryController extends Controller
{
    public  function index()
    {
       $adCategories = AdCategory::all();
//        $adCategories = AdCategory::where('parent_id','0')->with('children')->get();

        return view('Admin.AdCategory.AdCategory',['adCategories'=>$adCategories]);

    }

    public function create(Request $request)
    {
        $category = new AdCategory();
        $category->body = $request['body'];

        if($request['status']=='on')
        {
            $category->status = '1';
        }
        else
        {
            $category->status = '0';
        }
        if ($request['parent_id'])
        {
            $category->parent_id = $request['parent_id'];
        }
        else
            $category->parent_id = '0';
        $category->icon = $request['icon'];
        $category->ad_category_language_id = '1';
        $category->save();
        return redirect()->route('adCategory.index');
    }
    public function edit($id)
    {
        $adCategory = AdCategory::find($id);

        return view('Admin.AdCategory.editAdCategory',['adCategory'=>$adCategory]);
    }
    public function update($id,Request $request)
    {
        $category = AdCategory::find($id);
        $category->body = $request['body'];
        $category->status = $request['status'];
        $category->parent_id = $request['parent_id'];
        $category->icon = $request['icon'];
        $category->slug = $request['slug'];
        $category->ad_category_language_id = $request['ad_category_language_id'];

        Session::flash('flash_message', 'Packet successfully updated!');

        $category->update();
        return Redirect::back();

    }


    public function delete($category_id)
    {
        $adCategory = AdCategory::where('id',$category_id)->first();
        $adCategory->delete();
        return redirect()->route('adCategory.index');
    }
    public function changeStatus($id)
    {

        $ad =AdCategory::find($id);
        if ($ad->status == '1')
        {
            AdCategory::where('id',$id)->update(['status'=>'0']);
        } else
        {
            AdCategory::where('id',$id)->update(['status'=>'1']);
        }

        return Redirect::back();
    }
}
