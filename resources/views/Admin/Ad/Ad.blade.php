{{--/**--}}
 {{--* Created by PhpStorm.--}}
 {{--* User: aslan--}}
 {{--* Date: 12.01.2018--}}
 {{--* Time: 01:04--}}
 {{--*/--}}
@extends('Admin.layouts.master')

@section('content')

    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">

                <div class="form-group">
                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Ad </span></a>
                    <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                </div>

            </div>
            <table class="table table-striped table-hover">
                <thead>
                <tr>

                    <th>Operation</th>
                    <th>Status</th>
                    <th>Id</th>
                    <th>Category</th>
                    <th>Title</th>
                    <th>User</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Address</th>
                    <th>View Counter</th>
                    <th>Photo 1</th>

                </tr>
                </thead>
                <tbody>
                @foreach($ads as $ad)
                    <tr>
                        <td>
                            <a href="{{ route('ad.show', ['ad' => $ad->id]) }}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Show">S</i></a>
                            {{--<a href="{{ route('ad.edit', ['ad' => $ad->id]) }}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">E</i></a>--}}
                            <a href="{{ route('ad.delete', ['ad' => $ad->id]) }}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">D</i></a>
                            <a href="{{ route('ad.changeStatus', ['ad' => $ad->id]) }}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Change Status">C</i></a>
                            <a href="#editEmployeeModal" class="translate" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Translate">T</i></a>
                        </td>
                        <td>{{$ad->status}}</td>
                        <td>{{$ad->id}}</td>
                        <td>{{$ad->adCategories->body}}</td>
                        <td>{{$ad->title}}</td>
                        <td>{{$ad->userId->email}}</td>
                        <td>{{$ad->price}}{{$ad->currency}} </td>
                        <td>{{$ad->description}}</td>
                        <td>{{$ad->address_id}}</td>
                        <td>{{$ad->view_counter}}</td>
                        <td>{{$ad->photo_1}}</td>

                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <!-- Add Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('ad.create') }}" method="post">
                    <div class="modal-header">
                        <h4 class="modal-title">Ad</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Status</label>
                            <input type="checkbox" class="" name="status" >
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <div class="dropdown">

                                <select name="parent_id">
                                    @foreach($ads as $ad)
                                        <option value={{$ad->id}}>{{$ad->body}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" required>
                        </div>
                        <div class="form-group">
                            <label>Icon</label>
                            <input type="file" class="form-control" name="icon" accept="image/*" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="hidden" value="{{ Session::token() }}" name="_token">
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        var token = '{{ Session::token() }}';
    </script>

    <!-- Edit Modal HTML #editEmployeeModal-->
    <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Category</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Parent Category</label>
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Select
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                    @foreach($ads as $ad)
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">{{$ad->title}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <input type="checkbox" class="" required></input>
                        </div>
                        <div class="form-group">
                            <label>Icon</label>
                            <input type="file" class="form-control" accept="image/*" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Modal HTML -->
    <div id="deleteEmployeeModal" class="modal fade" id="delete-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Employee</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete these Records?</p>
                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
