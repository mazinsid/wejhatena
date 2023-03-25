@extends('layout.admin_nav')
@section('content')
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Manage <b>subcategories</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i
                                class="material-icons">&#xE147;</i> <span>Add New subcategory</span></a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Name_en</th>
                        <th>name_ar</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subcategories as $subcategory)
                        <tr>
                            <td>{{ $subcategory->name_en }}</td>
                            <td>{{ $subcategory->name_ar }}</td>
                            <td>
                                <a href="#editEmployeeModal_{{ $subcategory->id }}" class="btn btn-primary btn-sm"
                                    data-toggle="modal">Edit</a>
                            </td>
                            <td>
                                <a href="#deleteEmployeeModal" class="btn btn-danger btn-sm" data-toggle="modal">Delete</a>
                            </td>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="{{ route('store_subcategory') }}" enctype='multipart/form-data'>
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Add category</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name english</label>
                            <input type="text" name="name_en" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>name arbic</label>
                            <input type="text" name="name_ar" class="form-control" required>
                        </div>
                    </div>
                    <input type="text" name="category_id" value="{{ $category->id }}" hidden>

                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    @foreach ($subcategories as $subcategory)
        <div id="editEmployeeModal_{{ $subcategory->id }}" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="POST" action="{{ route('update_subcategory') }}">
                        @method('put')
                        @csrf
                        <div class="modal-header">
                            <h4 class="modal-title">Edit update_subcategory</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Name english</label>
                                <input type="text" name="name_en" value="{{ $subcategory->name_en }}"
                                    class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Name arbice</label>
                                <input type="text" name="name_ar" value="{{ $subcategory->name_ar }}"
                                    class="form-control" required>
                            </div>
                            <input type="text" name="category_id" value="{{ $category->id }}" hidden s>
                            {{-- <div class="form-group">
                              <label>icon</label>
                              <input type="file" name="name_ar" value="{{ $category->name_ar }}"
                                  class="form-control" required>
                          </div> --}}
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-info" value="Save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    <!-- Delete Modal HTML -->
    <div id="deleteEmployeeModal" class="modal fade">
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
