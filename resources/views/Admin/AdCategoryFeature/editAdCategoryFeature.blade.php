{{--/**--}}
 {{--* Created by PhpStorm.--}}
 {{--* User: aslan--}}
 {{--* Date: 20.01.2018--}}
 {{--* Time: 14:51--}}
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
                <form action="{{ route('adCategoryFeature.update') }}" method="PATCH">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Detail</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="body" class="form-control" value="{{$feature->body}}">
                        </div>
                        <div class="form-group">
                            <label>Status{{$feature->status}}</label>
                            {{--@if($feature->status == '1')--}}
                                <input type="checkbox" name="status" class="" value="{{$feature->status}}">
                            {{--@else--}}
                                {{--<input type="checkbox" name="status" class="" value="false">--}}
                            {{--@endif--}}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" src="{{ URL::previous() }}" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection