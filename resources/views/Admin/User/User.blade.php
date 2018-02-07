{{--/**--}}
 {{--* Created by PhpStorm.--}}
 {{--* User: aslan--}}
 {{--* Date: 20.01.2018--}}
 {{--* Time: 17:25--}}
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
                    <th>User Type</th>
                    <th>Category</th>
                    <th>Username</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>
                            <a href="{{ route('user.show', ['user' => $user->id]) }}" class="material-icons" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Show">S</i></a>
                            <a href="{{ route('user.edit', ['user' => $user->id]) }}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">E</i></a>
                            <a href="{{ route('user.delete', ['user' => $user->id]) }}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">D</i></a>
                            <a href="#editEmployeeModal" class="translate" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Translate">T</i></a>
                        </td>
                        <td>{{$user->status}}</td>
                        <td>{{$user->user_type}}</td>
                        <td>{{$user->category_id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->firstName}}</td>
                        <td>{{$user->lastName}}</td>
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
                <form action="{{ route('user.create') }}" method="post">
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
                                    @foreach($users as $user)
                                        <option value={{$user->id}}>{{$user->body}}</option>
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
                                    @foreach($users as $user)
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">{{$user->title}}</a></li>
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

