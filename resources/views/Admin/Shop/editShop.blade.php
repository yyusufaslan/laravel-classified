{{--/**--}}
 {{--* Created by PhpStorm.--}}
 {{--* User: aslan--}}
 {{--* Date: 28.01.2018--}}
 {{--* Time: 03:54--}}
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
                <form action="{{ route('shop.update',['id'=>$shop->id]) }}" method="POST"> {{ csrf_field() }}
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Shop</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value="{{$shop->title}}">
                        </div>
                        <div class="form-group">
                            <label>Category</label><br>
                            <input type="number" name="ad_category_id" class="form-control" value="{{$shop->ad_category_id}}">
                        </div>
                        <div class="form-group">
                            <label>Description</label><br>
                            <input type="text" name="description" class="form-control" value="{{$shop->description}}">
                        </div>
                        <div class="form-group">
                            <label>Photo</label><br>
                            <input type="number" name="photo" class="form-control" value="{{$shop->photo}}">
                        </div>
                        <input type="hidden" name="status" class="form-control" value="{{$shop->status}}">
                        <input type="hidden" name="slug" class="form-control" value="{{$shop->slug}}">
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
