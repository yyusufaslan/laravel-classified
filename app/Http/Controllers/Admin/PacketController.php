<?php

namespace App\Http\Controllers\Admin;

use App\Packet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class PacketController extends Controller
{
    public  function index($id)
    {
        $packet = Packet::find($id);
       // $packet = Packet::where('id',$id)->get();

        return view('Admin.Packet.Packet',['packet'=>$packet]);
    }


    public function create(Request $request)
    {
        $detail = new Packet();

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
        $packet = Packet::find($id);

        return view('Admin.Packet.editPacket',['packet'=>$packet]);

    }
    public function update($id,Request $request)
    {
        $packet = Packet::find($id);
        $packet->status = $request['status'];
        $packet->name = $request['name'];
        $packet->price = $request['price'];
        $packet->currency = $request['currency'];
        $packet->ad_count = $request['ad_count'];
        $packet->ad_show_time = $request['ad_show_time'];
        $packet->ad_low_price = $request['ad_low_price'];

        Session::flash('flash_message', 'Packet successfully updated!');

        $packet->update();

        return Redirect::back();
    }
    public function delete($detail_id)
    {
        $adCategoryDetail = Packet::where('id',$detail_id)->first();
        $adCategoryDetail->delete();
        $details = Packet::where('category_id',$detail_id);
        $adCategory = Packet::where('id',$detail_id);

        return Redirect::back()->with(['details',$details],['adCategory'=>$adCategory]);
    }
    public function changeStatus($id)
    {

        $ad =Packet::find($id);
        if ($ad->status == '1')
        {
            Packet::where('id',$id)->update(['status'=>'0']);
        } else
        {
            Packet::where('id',$id)->update(['status'=>'1']);
        }

        return Redirect::back();
    }
}
