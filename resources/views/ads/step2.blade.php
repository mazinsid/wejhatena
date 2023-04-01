@extends('layouts.app-master')

@push('styles')
<style>
    input[type="file"] {
        display: block;
    }

    .imageThumb {
        max-height: 75px;
        border: 2px solid;
        padding: 1px;
        cursor: pointer;
    }

    .pip {
        display: inline-block;
        margin: 10px 10px 0 0;
    }

    .remove {
        display: block;
        background: #444;
        border: 1px solid black;
        color: white;
        text-align: center;
        cursor: pointer;
    }

    .remove:hover {
        background: white;
        color: black;
    }
</style>
@endpush

@section('content')
<div class="container">

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Sorry !</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


    <h3 class="jumbotron"><i class="glyphicon glyphicon-upload"></i> {{ __('ads.upload_files') }}</h3>



    <form action="{{ route('ads.stepTwo') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="input-group control-group increment">
            <input type="file" name="files[]" class="form-control">
            <div class="input-group-btn">
                <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus">
                    </i>{{ __('button.add') }}</button>
            </div>
        </div>
        <div class="clone hide">
            <div class="control-group input-group" style="margin-top:10px">
                <input type="file" name="files[]" class="form-control">
                <div class="input-group-btn">
                    <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i>
                        {{ __('button.remove') }}</button>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-info" style="margin-top:12px"><i
                class="glyphicon glyphicon-check"></i> {{ __('button.upload') }}</button>
    </form>
</div>
@endsection

@push('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $(".btn-success").click(function() {
            var html = $(".clone").html();
            $(".increment").after(html);
        });
        $("body").on("click", ".btn-danger", function() {
            $(this).parents(".control-group").remove();
        });
    });
</script>
@endpush
