{{--/**--}}
 {{--* Created by PhpStorm.--}}
 {{--* User: aslan--}}
 {{--* Date: 20.01.2018--}}
 {{--* Time: 14:23--}}
 {{--*/--}}

@extends('Admin.layouts.master')

@section('content')

    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">

                <div class="form-group">
                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Ad Category</span></a>
                    <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                </div>

            </div>
            <div class="form-control">
                <p>{{$adCategory->body}}</p>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
                    </th>
                    <th>Status</th>
                    <th>Name</th>
                </tr>
                </thead>
                <tbody>
                @foreach($features as $feature)
                    {{--@if($detail->category_id == $adCategory->id)--}}
                    <tr>
                        <td>
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                    <label for="checkbox1"></label>
                                </span>
                        </td>
                        <td>{{$feature->status}}</td>
                        <td>{{$feature->body}}</td>
                        <td>
                            <a href="{{ route('adCategoryFeature.edit', ['id' => $feature->id]) }}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">E</i></a>
                            <a href="{{ route('adCategoryFeature.delete', ['id' => $feature->id]) }}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">D</i></a>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Translate">T</i></a>
                        </td>
                    </tr>
                    {{--@endif--}}
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <!-- Add Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('adCategoryFeature.create') }}" method="post">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Category Detail</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="body" required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="hidden" name="ad_category_id" value="{{$adCategory->id}}">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <input type="checkbox" class="" name="status" ></input>
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

    <!-- Edit Modal HTML -->
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

                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#"></a></li>

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
