@extends('layout.admin_nav')
@section('content')
    <div class="card mb-0">
        <div class="card-body">
            <h2 class="brand-text text-primary ms-1">Admin Login</h2>

            <form class="auth-login-form mt-2" action="{{ route('admin.login') }}" method="post">
                @csrf
                <div class="mb-1">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}"
                        autofocus />
                    @if ($errors->has('email'))
                        <span class="help-block font-red-mint">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="mb-1">
                    <div class="d-flex justify-content-between">
                        <label class="form-label" for="password">Password</label>
                        <a href="{{ url('auth/forgot-password-basic') }}">
                            <small>Forgot Password?</small>
                        </a>
                    </div>
                    <div class="input-group input-group-merge form-password-toggle">
                        <input type="password" class="form-control form-control-merge" id="password" name="password"
                            tabindex="2" />
                        <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                    </div>
                    @if ($errors->has('password'))
                        <span class="help-block font-red-mint">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary w-100" tabindex="4">Sign in</button>
            </form>
        </div>
    </div>
    <!-- /Login basic -->
@endsection
