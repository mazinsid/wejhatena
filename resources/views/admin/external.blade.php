@extends('layout.admin_nav')
@section('content')
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Manage <b>external news</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i
                                class="material-icons">&#xE147;</i> <span>Add external news</span></a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>title_en</th>
                        <th>title_ar</th>
                        <th>details_en</th>
                        <th>details_ar</th>
                        <th>image</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($externals as $external)
                        <tr>
                            <td>{{ $external->title_en }}</td>
                            <td>{{ $external->title_ar }}</td>
                            <td>{{ $external->details_en }}</td>
                            <td>{{ $external->details_ar }}</td>
                            <td><img style="width: 40px " src="{{ asset('/storage/external/' . $external->image) }}"></td>

                            <td>
                            <td>
                                <a href="#editEmployeeModal_{{ $external->id }}" class="btn btn-primary btn-sm"
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
                <form method="post" action="{{ route('store_external') }}" enctype='multipart/form-data'>
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Add external</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>title english</label>
                            <input name="title_en" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>title arbice</label>
                            <input name="title_ar" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>details english</label>
                            <textarea name="details_en" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>details arbice</label>
                            <textarea name="details_ar" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>image</label>
                            <input type="file" name="files" class="form-control">
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
    <!-- Edit Modal HTML -->
    @foreach ($externals as $external)
        <div id="editEmployeeModal_{{ $external->id }}" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="POST" action="{{ route('update_external') }}">
                        @method('put')
                        @csrf
                        <div class="modal-header">
                            <h4 class="modal-title">Edit news external</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>title english</label>
                                <input name="title_en" value="{{ $external->title_en }}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>title arbice</label>
                                <input name="title_ar" value="{{ $external->title_ar }}" class="form-control" required>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>title english</label>
                                <textarea name="details_en" class="form-control" required>{{ $external->details_en }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>title arbice</label>
                                <textarea name="details_ar" class="form-control" required>{{ $external->details_ar }}</textarea>
                            </div>
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
