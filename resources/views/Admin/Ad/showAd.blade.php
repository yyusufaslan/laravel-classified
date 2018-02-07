{{--/**--}}
 {{--* Created by PhpStorm.--}}
 {{--* User: aslan--}}
 {{--* Date: 28.01.2018--}}
 {{--* Time: 05:02--}}
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
                <form action="" >
                    <div class="modal-header">
                        <h4 class="modal-title">Show Ad</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Title : {{$ad->title}}</label>
                        </div>
                        <div class="form-group">
                            <label>Category : {{$ad->adCategories->body}}</label>
                        </div>
                        <div class="form-group">
                            <label>Price :{{$ad->price}}{{$ad->currency}}</label>
                        </div>
                        <div class="form-group">
                            <label>User :{{$ad->userId->email}}</label>
                        </div>
                        <div class="form-group">
                            <label>Description : {{$ad->description}}</label>
                        </div>
                        <div class="form-group">
                            <label>Address : {{$ad->address_id}}</label>
                        </div>
                        <div class="form-group">
                            <label>View Counter : {{$ad->view_counter}}</label>
                        </div>
                        <div class="form-group">
                            <label>Photo 1 :</label>
                            <img src="{{$ad->photo_1}}">{{$ad->photo_1}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>







@endsection