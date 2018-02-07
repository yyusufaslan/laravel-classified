<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: aslan-->
<!-- * Date: 19.01.2018-->
<!-- * Time: 22:00-->
<!-- */-->

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
                <form action="{{ route('adCategoryDetail.update',['id'=>$detail->id]) }}" method="POST">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Detail</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="body" class="form-control" value="{{$detail->body}}">
                        </div>
                        <div class="form-group">
                            <label>Type</label>
                            <input type="text" name="type" class="form-control" value="{{$detail->type}}">
                        </div>
                        <input type="hidden" name="status" class="" value="{{$detail->status}}">
                        <input type="hidden" name="ad_category_id" class="" value="{{$detail->ad_category_id}}">
                        <input type="hidden" name="ad_category_language_id" class="" value="{{$detail->ad_category_language_id}}">
                    </div>
                    <div class="modal-footer">
                        <input type="button" src="{{ URL::previous() }}" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Update">
                    </div>
                </form>
        </div>
    </div>
</div>



@endsection