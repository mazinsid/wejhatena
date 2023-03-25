@extends('layout.admin_nav')
@section('content')
    <div class="card-body">
        <form action="{{ route('update_setting', $setting) }}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="form-group mt-2">
                <label for="color">{{ __('lang.color') }}</label>
                <input type="color" id="color" class="form-control" name="color" value="{{ $setting->color }}">
            </div>
            <button class="btn btn-sm btn-success pull-right"> {{ __('button.add') }}</button>
        </form>
    </div>
@endsection
