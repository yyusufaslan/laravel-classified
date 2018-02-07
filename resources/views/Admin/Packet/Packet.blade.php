{{--/**--}}
 {{--* Created by PhpStorm.--}}
 {{--* User: aslan--}}
 {{--* Date: 28.01.2018--}}
 {{--* Time: 01:40--}}
 {{--*/--}}

@extends('Admin.layouts.master')

@section('content')

    <div class="container">
        <h3>Shop's Packet</h3>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="form-group">
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>Packets</th>
                    <th>Status</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Ad Count</th>
                    <th>Ad Show Time</th>
                    <th>Ad Low Price</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <a href="{{route('packet.changeStatus',['id'=>$packet->id])}}" class="material-icons" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Change Status">C</i></a>
                            <a href="{{route('packet.edit',['id'=>$packet->id])}}" class="material-icons" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Add">A</i></a>
                        </td>
                        <td>{{$packet->status}}</td>
                        <td>{{$packet->name}}</td>
                        <td>{{$packet->price}}{{$packet->currency}}</td>
                        <td>{{$packet->ad_count}}</td>
                        <td>{{$packet->ad_show_time}}</td>
                        <td>{{$packet->ad_low_price}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection