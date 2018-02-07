{{--/**--}}
 {{--* Created by PhpStorm.--}}
 {{--* User: aslan--}}
 {{--* Date: 21.01.2018--}}
 {{--* Time: 20:16--}}
 {{--*/--}}

@extends('Admin.layouts.master')

@section('content')

    <div class="container">
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
                    <th>Category</th>
                    <th>Username</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                </tr>
                </thead>
                <tbody>
                @foreach($companies as $company)
                    <tr>
                        <td>
                            <a href="{{ route('company.show', ['company' => $company->id]) }}" class="material-icons" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Show">S</i></a>
                            <a href="{{ route('company.changeStatus', ['company' => $company->id]) }}" class="material-icons" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Change Status">C</i></a>
                            <a href="{{ route('company.edit', ['company' => $company->id]) }}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">E</i></a>
                            <a href="{{ route('company.delete', ['company' => $company->id]) }}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">D</i></a>
                            <a href="#editEmployeeModal" class="translate" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Translate">T</i></a>
                        </td>
                        <td>{{$company->status}}</td>
                        <td>{{$company->user_category_id}}</td>
                        <td>{{$company->name}}</td>
                        <td>{{$company->firstName}}</td>
                        <td>{{$company->lastName}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <script>
        var token = '{{ Session::token() }}';
    </script>
@endsection

