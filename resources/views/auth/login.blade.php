<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <!--=====================================
                    META-TAG PART START
        =======================================-->
    <!-- REQUIRE META -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- AUTHOR META -->
    <meta name="author" content="Mironcoder">
    <meta name="email" content="mironcoder@gmail.com">
    <meta name="profile" content="https://themeforest.net/user/mironcoder">

    <!-- TEMPLATE META -->
    <meta name="name" content="Classicads">
    <meta name="type" content="Classified Advertising">
    <meta name="title" content="Classicads - Classified Ads HTML Template">
    <meta name="keywords"
        content="classicads, classified, ads, classified ads, listing, business, directory, jobs, marketing, portal, advertising, local, posting, ad listing, ad posting,">
    <!--=====================================
                    META-TAG PART END
        =======================================-->

    <!-- FOR WEBPAGE TITLE -->
    <title>wejhatena</title>

    <!--=====================================
                    CSS LINK PART START
        =======================================-->
    <!-- FOR PAGE TITLE ICON -->
    <link rel="icon" href="{{ asset('images/logo2.jpeg') }}">

    <!-- FOR FONTAWESOME -->
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome/fontawesome.css') }}">

    <!-- FOR BOOTSTRAP -->
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}">

    <!-- FOR COMMON STYLE -->
    <link rel="stylesheet" href="{{ asset('css/custom/main.css') }}">

    <!-- FOR USER FORM PAGE STYLE -->
    <link rel="stylesheet" href="{{ asset('css/custom/user-form.css') }}">
    <!--=====================================
                    CSS LINK PART END
        =======================================-->
</head>

<body>
    <!--=====================================
                    USER-FORM PART START
        =======================================-->
    <section class="user-form-part">
        <div class="user-form-banner">
            <div class="user-form-content">
                <a href="#"><img src="{{ asset('images/logo2.jpeg') }}" alt="logo"></a>
                <h1>{{ __('login.ads to sell') }} <span>{{ __('login.ads needs') }}</span></h1>
                <p>{{ __('login.biggest') }}</p>
            </div>
        </div>

        <div class="user-form-category">
            <div class="user-form-header">
                <a href="#"><img src="{{ asset('images/logo2.jpeg') }}" alt="logo"></a>
                <a href="index.html"><i class="fas fa-arrow-left"></i></a>
            </div>
            <div class="user-form-category-btn">
                <ul class="nav nav-tabs">
                    <li><a href="#login-tab" class="nav-link active" data-toggle="tab">{{ __('login.sign in') }}</a>
                    </li>
                    <li><a href="#register-tab" class="nav-link" data-toggle="tab">{{ __('login.sign up') }}</a></li>
                </ul>
            </div>

            <div class="tab-pane active" id="login-tab">
                <div class="user-form-title">
                    <h2>{{ __('login.welcome') }}</h2>
                    <p>{{ __('login.credentials') }}</p>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <input type="text" name="email" class="form-control"
                                    placeholder="{{ __('login.email') }}">
                                <small class="form-alert">{{ __('login.emailex') }}</small>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" id="pass"
                                    placeholder="{{ __('login.password') }}">
                                <button type="button" class="form-icon"><i class="eye fas fa-eye"></i></button>
                                <small class="form-alert">{{ __('login.password chart') }}</small>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="signin-check">
                                    <label class="custom-control-label"
                                        for="signin-check">{{ __('login.remember') }}</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group text-left">
                                <a href="#" class="form-forgot">{{ __('login.forgot') }}</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-inline">
                                    <i class="fas fa-unlock"></i>
                                    <span>{{ __('login.enter') }}</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="user-form-direction">
                    <p>{{ __('login.!have account') }}<span>( {{ __('login.sign up') }} )</a></span>
                        {{ __('login.button above') }}</p>
                </div>
            </div>

            <div class="tab-pane" id="register-tab">
                <div class="user-form-title">
                    <h2></h2>
                    <p>{{ __('login.new account') }}</p>
                </div>
                {{-- <ul class="user-form-option">
                    <li>
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                            <span>facebook</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                            <span>twitter</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-google"></i>
                            <span>google</span>
                        </a>
                    </li>
                </ul>
                <div class="user-form-devider">
                    <p>or</p>
                </div> --}}
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <input type="text" id="name" name="name" class="form-control" required
                                    placeholder="{{ __('login.username') }}" autofocus>
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="{{ __('login.email') }}" required>
                                <small class="form-alert">{{ __('login.emailex') }}</small>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input type="password" name="password" class="form-control"
                                    placeholder="{{ __('login.password') }}">
                                <button class="form-icon"><i class="eye fas fa-eye"></i></button>
                                <small class="form-alert">{{ __('login.password chart') }}</small>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input id="password_confirmation" class="form-control block mt-1 w-full"
                                    type="password" name="password_confirmation"
                                    placeholder="{{ __('login.password confirmation') }}" required>
                                <button type="button" class="form-icon"><i class="eye fas fa-eye"></i></button>
                                {{-- <small class="form-alert">{{ __('login.password match') }}</small> --}}
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="signup-check">
                                    <label class="custom-control-label" for="signup-check">{{ __('login.agree') }} <a
                                            href="#">{{ __('login.terms') }}</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-inline">
                                    <i class="fas fa-user-check"></i>
                                    <span>{{ __('login.create account') }}</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                {{-- <div class="user-form-direction">
                    <p>Already have an account? click on the <span>( {{ __('login.sing in') }} )</span> button above.
                    </p>
                </div> --}}
            </div>
        </div>
    </section>
    <!--=====================================
                    USER-FORM PART END
        =======================================-->


    <!--=====================================
                    JS LINK PART START
        =======================================-->
    <!-- FOR BOOTSTRAP -->
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>

    <!-- FOR INTERACTION -->
    <script src="{{ asset('js/custom/main.js') }}"></script>

    <!--=====================================
                    JS LINK PART END
        =======================================-->
</body>

</html>
