{{--/**--}}
 {{--* Created by PhpStorm.--}}
 {{--* User: aslan--}}
 {{--* Date: 12.01.2018--}}
 {{--* Time: 14:45--}}
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
                <form action="{{ route('ad.update') }}" method="PATCH">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Ad</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="body" class="form-control" value="{{$detail->body}}">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <input type="checkbox" name="status" class="" value="{{$detail->status}}">
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








    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-body">

                        {!! Form::model($ad,array('route'=>['ad-edit',$ad->id],'method'=>'PATCH')) !!}

                            {!! Form::label('status','Change Status') !!}
                            {!! Form::checkbox('status',null,['class'=>'form-control']) !!}

                            {!! Form::label('title','Title') !!}
                            {!! Form::text('title','Enter Title') !!}

                            {!! Form::label('price','Title') !!}
                            {!! Form::text('price',null,['class'=>'form-control']) !!}

                            {!! Form::label('currency','Currency') !!}
                            {!! Form::text('currency',null,['class'=>'form-control']) !!}

                            {!! Form::label('category_id','Category') !!}
                            {!! Form::text('category_id',null,['class'=>'form-control']) !!}

                            {!! Form::label('email','Email') !!}
                            {!! Form::text('userId.email',null,['class'=>'form-control']) !!}

                            {!! Form::label('description','Description') !!}
                            {!! Form::text('description',null,['class'=>'form-control']) !!}

                            {!! Form::label('display_my_number','Display Number') !!}
                            {!! Form::text('display_my_number',null,['class'=>'form-control']) !!}

                            {!! Form::label('location_1','Location 1') !!}
                            {!! Form::text('location_1',null,['class'=>'form-control']) !!}

                            {!! Form::label('location_2','Location 2') !!}
                            {!! Form::text('location_2',null,['class'=>'form-control']) !!}

                            {!! Form::label('address_id','Address') !!}
                            {!! Form::text('address_id',null,['class'=>'form-control']) !!}

                            {!! Form::label('address_description','Address Description') !!}
                            {!! Form::text('address_description',null,['class'=>'form-control']) !!}

                            {!! Form::label('shop','Shop') !!}
                            {!! Form::text('shop_id',null,['class'=>'form-control']) !!}


                            {!! Form::label('photos','Photos') !!}o
                            {!! Form::file('photo_1',null,['class'=>'form-control']) !!}
                            {!! Form::file('photo_2',null,['class'=>'form-control']) !!}
                            {!! Form::file('photo_3',null,['class'=>'form-control']) !!}
                            {!! Form::file('photo_4',null,['class'=>'form-control']) !!}
                            {!! Form::file('photo_5',null,['class'=>'form-control']) !!}
                            {!! Form::file('photo_6',null,['class'=>'form-control']) !!}
                            {!! Form::file('photo_7',null,['class'=>'form-control']) !!}
                            {!! Form::file('photo_8',null,['class'=>'form-control']) !!}
                            {!! Form::file('photo_9',null,['class'=>'form-control']) !!}
                            {!! Form::file('photo_10',null,['class'=>'form-control']) !!}

                        {{ Form::submit('Edit Ad!', array('class' => 'btn btn-primary')) }}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection