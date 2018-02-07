@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" style="padding-top: 90px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-login">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6">
                            <a href="#" class="active" id="person-form-link">Person</a>
                        </div>
                        <div class="col-xs-6">
                            <a href="#" id="company-form-link">Company</a>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">


                            {{--PERSON--}}


                            <form id="person-form" action="{{route('register')}}" method="POST" role="form" style="display: block;">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="text" name="name" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="firstName" id="firstName" tabindex="1" class="form-control" placeholder="Name" value="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="lastName" id="lastName" tabindex="1" class="form-control" placeholder="Surname" value="">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="btn btn-primary" value="Register">
                                        </div>
                                    </div>
                                </div>
                            </form>

                            {{--COMPANY--}}


                            <form id="company-form" action="{{route('register')}}" method="post" role="form" style="display: none;">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Kullanıcı Adı" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Şifre">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="firstName" id="firstName" tabindex="1" class="form-control" placeholder="Adınız" value="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="lastName" id="lastName" tabindex="1" class="form-control" placeholder="Soyadınız" value="">
                                </div>
                                <div class="form-group">
                                    <input type="number" name="phone_1" id="phone_1" tabindex="1" class="form-control" placeholder="Phone 1" value="">
                                </div>
                                <div class="form-group">
                                    <input type="number" name="phone_2" id="phone_2" tabindex="1" class="form-control" placeholder="Phone 2" value="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="category" id="category" tabindex="1" class="form-control" placeholder="Category" value="">
                                </div>
                                <div class="form-group">
                                    <input type="radio" name="company_type" value="male">Individual Company
                                    <input type="radio" name="company_type" value="female">Limited Liability Company<br>                             </div>
                                <div class="form-group">
                                    <input type="text" name="commercial_title" id="lastName" tabindex="1" class="form-control" placeholder="Commercial Title" value="">
                                </div>
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <select class="form-control ">
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>
                                    <label for="city">City</label>
                                    <select class="form-control">
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>
                                    <label for="state">State</label>
                                    <select class="form-control">
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="address_description" id="address_description" tabindex="1" class="form-control" placeholder="Address Description" value="">
                                </div>
                                <div class="form-group">
                                    <input type="number" name="tax_number" id="tax_number" tabindex="1" class="form-control" placeholder="Tax Number" value="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="tax_administration" id="tax_administration" tabindex="1" class="form-control" placeholder="Tax Administration" value="">
                                </div>
                                <div class="form-group">
                                    <input type="number" name="tc_no" id="tc_no" tabindex="1" class="form-control" placeholder="TC No" value="">
                                </div>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="btn btn-primary" value="Register">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
