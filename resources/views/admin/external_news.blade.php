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
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news_externals as $news_external)
                        <tr>
                            <td>{{ $news_external->title_en }}</td>
                            <td>{{ $news_external->title_ar }}</td>
                            <td>
                            <td>
                                <a href="#editEmployeeModal_{{ $news_external->id }}" class="btn btn-primary btn-sm"
                                    data-toggle="modal">Edit</a>
                            </td>
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
                <form method="post" action="{{ route('store_news_ads') }}">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Add news external</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name english</label>
                            <textarea name="title_en" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>name arbic</label>
                            <textarea name="title_ar" class="form-control" required></textarea>
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
    @foreach ($news_externals as $news_external)
        <div id="editEmployeeModal_{{ $news_external->id }}" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="POST" action="{{ route('update_news_ads') }}">
                        @method('put')
                        @csrf
                        <div class="modal-header">
                            <h4 class="modal-title">Edit news external</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>title english</label>
                                <textarea name="title_en" class="form-control" required>{{ $news_external->title_en }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>title arbice</label>
                                <textarea name="title_ar" class="form-control" required>{{ $news_external->title_ar }}</textarea>
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
