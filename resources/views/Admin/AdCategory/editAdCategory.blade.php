{{--/**--}}
 {{--* Created by PhpStorm.--}}
 {{--* User: aslan--}}
 {{--* Date: 28.01.2018--}}
 {{--* Time: 23:51--}}
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
                <form action="{{ route('adCategory.update',['id'=>$adCategory->id]) }}" method="POST"> {{ csrf_field() }}
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Packet</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="body" class="form-control" value="{{$adCategory->body}}">
                        </div>
                        <div class="form-group">
                            <label>Parent</label><br>
                            <input type="text" name="parent_id" class="form-control" value="{{$adCategory->parent_id}}">
                        </div>
                        {{--<div class="form-group">--}}
                            {{--<label>Icon</label><br>--}}
                            {{--<input type="file" name="parent_id" class="form-control" value="{{$adCategory->parent_id}}">--}}
                            {{--<img src="{{$adCategory->icon}}">{{$adCategory->icon}}--}}
                        {{--</div>--}}
                        <input type="hidden" name="status" class="form-control" value="{{$adCategory->status}}">
                        <input type="hidden" name="slug" class="form-control" value="{{$adCategory->slug}}">
                        <input type="hidden" name="icon" class="form-control" value="{{$adCategory->icon}}">
                        <input type="hidden" name="ad_category_language_id" class="form-control" value="{{$adCategory->ad_category_language_id}}">
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
