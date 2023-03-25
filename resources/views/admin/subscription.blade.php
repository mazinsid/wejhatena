@extends('layout.admin_nav')
@section('content')
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Manage <b>Subscription</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i
                                class="material-icons">&#xE147;</i> <span>Add New Subscription</span></a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Name_en</th>
                        <th>name_ar</th>
                        <th>ads number</th>
                        <th>number date</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subscriptions as $subscription)
                        <tr>
                            <td>{{ $subscription->name_en }}</td>
                            <td>{{ $subscription->name_ar }}</td>
                            <td>{{ $subscription->ads_number }}</td>
                            <td>{{ $subscription->number_date }}</td>
                            <td>
                                <a href="#editEmployeeModal_{{ $subscription->id }}" class="btn btn-primary btn-sm"
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
                <form method="post" action="{{ route('store_subscription') }}" enctype='multipart/form-data'>
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
                        <div class="form-group">
                            <label>ads number</label>
                            <input type="number" name="ads_number" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>number date</label>
                            <input type="number" name="number_date" class="form-control" required>
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
    @foreach ($subscriptions as $subscription)
        <div id="editEmployeeModal_{{ $subscription->id }}" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="POST" action="{{ route('update_subcategory') }}">
                        @method('put')
                        @csrf
                        <div class="modal-header">
                            <h4 class="modal-title">Edit update subscription</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Name english</label>
                                <input type="text" name="name_en" value="{{ $subscription->name_en }}"
                                    class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Name arbice</label>
                                <input type="text" name="name_ar" value="{{ $subscription->name_ar }}"
                                    class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>ads number</label>
                                <input type="number" name="ads_number" value="{{ $subscription->ads_number }}"
                                    class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>number date</label>
                                <input type="number" name="number_date" value="{{ $subscription->number_date }}"
                                    class="form-control" required>
                            </div>
                            <input type="text" name="category_id" value="{{ $subscription->id }}" hidden s>
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
                        <h4 class="modal-title">Delete Subscription</h4>
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
