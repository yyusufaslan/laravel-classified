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
                        <td>{{$company->status}}</td>
                        <td>{{$company->category_id}}</td>
                        <td>{{$company->name}}</td>
                        <td>{{$company->firstName}}</td>
                        <td>{{$company->lastName}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="container">
        <h3> User Shops </h3>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="form-group">
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>Operations</th>
                    <th>Status</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Category</th>
                </tr>
                </thead>
                <tbody>
                @foreach($shops as $shop)
                    <tr>
                        <td>
                            <a href="{{route('packet.index',['packet.index'=>$shop->packet_id])}}" class="material-icons" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Go Packet">P</i></a>
                            <a href="{{route('shop.edit',['id'=>$shop->id])}}" class="material-icons" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">E</i></a>
                            <a href="{{route('shop.changeStatus',['id'=>$shop->id])}}" class="material-icons" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Change Status">C</i></a>
                        </td>
                        <td>{{$shop->status}}</td>
                        <td>{{$shop->title}}</td>
                        <td>{{$shop->description}}</td>
                        <td>{{$shop->ad_category_id}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

    <div class="container" style="">
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
