{{--/**--}}
 {{--* Created by PhpStorm.--}}
 {{--* User: aslan--}}
 {{--* Date: 28.01.2018--}}
 {{--* Time: 02:30--}}
 {{--*/--}}
@extends('Admin.layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @if(Session::has('flash_message'))
                    <div class="alert alert-success">
                        {{ Session::get('flash_message') }}
                    </div>
                @endif
                <form action="{{ route('packet.update',['id'=>$packet->id]) }}" method="POST"> {{ csrf_field() }}
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Packet</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{$packet->name}}">
                        </div>
                        <div class="form-group">
                            <label>Price</label><br>
                            <input type="number" name="price" class="form-control" value="{{$packet->price}}">
                        </div>
                        <div class="form-group">
                            <label>Currency</label><br>
                            <input type="text" name="currency" class="form-control" value="{{$packet->currency}}">
                        </div>
                        <div class="form-group">
                            <label>Ad Count</label><br>
                            <input type="number" name="ad_count" class="form-control" value="{{$packet->ad_count}}">
                        </div>
                        <div class="form-group">
                            <label>Ad Show Time</label><br>
                            <input type="number" name="ad_show_time" class="form-control" value="{{$packet->ad_show_time}}">
                        </div>
                        <div class="form-group">
                            <label>Ad Low Price</label><br>
                            <input type="number" name="ad_low_price" class="form-control" value="{{$packet->ad_low_price}}">
                        </div>
                            <input type="hidden" name="status" class="form-control" value="{{$packet->status}}">
                    </div>
                    <div class="modal-footer">
                        {{--<input type="button" src="{{route('packet.index',['id'=>$packet->id])}}" class="btn btn-default" data-dismiss="modal" value="Cancel">--}}
                        <input type="submit" class="btn btn-success" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection
