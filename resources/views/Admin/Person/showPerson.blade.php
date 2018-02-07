{{--/**--}}
 {{--* Created by PhpStorm.--}}
 {{--* User: aslan--}}
 {{--* Date: 20.01.2018--}}
 {{--* Time: 20:45--}}
 {{--*/--}}

@extends('Admin.layouts.master')

@section('content')

    <div class="container">
        <h3>User Information</h3>
        <div class="table-wrapper" >
            <div class="table-title">
                <div class="form-group">
                </div>
            </div>
            <table class="table table-striped table-hover" >
                <thead>
                <tr style="background-color: #8eb4cb">
                    <th>Status</th>
                    <th>Category</th>
                    <th>Username</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                </tr>
                </thead>
                <tbody>
                    <tr style="background-color: #afd9ee">
                        <td>{{$person->status}}</td>
                        <td>{{$person->category_id}}</td>
                        <td>{{$person->name}}</td>
                        <td>{{$person->firstName}}</td>
                        <td>{{$person->lastName}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="container" style="    margin-top: -170px;">
        <h3>User Ads</h3>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="form-group">
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>Operation</th>
                    <th>Status</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Counter</th>
                    <th>Shop</th>
                </tr>
                </thead>
                <tbody>
                @foreach($ads as $ad)
                    <tr>
                        <td>
                            <a href="{{ route('ad.changeStatus', ['ad' => $ad->id]) }}" class="material-icons" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Change Status">On-Off</i></a>
                        </td>
                        <td>{{$ad->status}}</td>
                        <td>{{$ad->title}}</td>
                        <td>{{$ad->ad_category_id}}</td>
                        <td>{{$ad->view_counter}}</td>
                        <td>{{$ad->shop_id}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection
