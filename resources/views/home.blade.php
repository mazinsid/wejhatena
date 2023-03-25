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
    <!-- FAVICON -->
    <link rel="icon" href="images/favicon.png">

    <!-- FONTS -->
    <link rel="stylesheet" href="fonts/flaticon/flaticon.css">
    <link rel="stylesheet" href="fonts/font-awesome/fontawesome.css">

    <!-- VENDOR -->
    <link rel="stylesheet" href="css/vendor/slick.min.css">
    <link rel="stylesheet" href="css/vendor/bootstrap.min.css">

    <!-- CUSTOM -->
    <link rel="stylesheet" href="css/custom/main.css">
    <link rel="stylesheet" href="css/custom/index.css">
    <!--=====================================
                    CSS LINK PART END
        =======================================-->
    <style>
        .marquee {
            width: 100%;
            line-height: 50px;
            background-color: rgb(42, 23, 187);
            color: white;
            font-weight: 600;
            white-space: nowrap;
            overflow: hidden;
            box-sizing: border-box;
        }

        .marquee p {
            display: inline-block;
            padding-left: 100%;
            animation: marquee 30s linear infinite;
        }

        @keyframes marquee {
            100% {
                transform: translate(0, 100);
            }

            0% {
                transform: translate(-100%, 0);
            }
        }

        /* @keyframes marquee {
    100%   { transform: translate(-100%, 0); }
    0% { transform: translate(0, 0); }
} */
    </style>
</head>

<body>
    <!--=====================================
                    HEADER PART START
        =======================================-->
    @include('layout.header', ['setting' => $setting->color]);
    <!--=====================================
                    HEADER PART END
        =======================================-->


    <!--=====================================
                    SIDEBAR PART START
        =======================================-->
    {{-- <aside class="sidebar-part">
        <div class="sidebar-body">
            <div class="sidebar-header">
                <a href="index.html" class="sidebar-logo"><img src="images/logo.png" alt="logo"></a>
                <button class="sidebar-cross"><i class="fas fa-times"></i></button>
            </div>
            <div class="sidebar-content">
                <div class="sidebar-profile">
                    <a href="#" class="sidebar-avatar"><img src="images/avatar/01.jpg" alt="avatar"></a>
                    <h4><a href="#" class="sidebar-name">Jackon Honson</a></h4>
                    <a href="ad-post.html" class="btn btn-inline sidebar-post">
                        <i class="fas fa-plus-circle"></i>
                        <span>post your ad</span>
                    </a>
                </div>
                <div class="sidebar-menu">
                    <ul class="nav nav-tabs">
                        <li><a href="#main-menu" class="nav-link active" data-toggle="tab">Main Menu</a></li>
                        <li><a href="#author-menu" class="nav-link" data-toggle="tab">Author Menu</a></li>
                    </ul>

                    <div class="tab-pane active" id="main-menu">
                        <ul class="navbar-list">
                            <li class="navbar-item"><a class="navbar-link" href="index.html">Dashboard</a></li>
                            <li class="navbar-item navbar-dropdown">
                                <a class="navbar-link" href="#">
                                    <span>Categories</span>
                                    <i class="fas fa-plus"></i>
                                </a>
                                <ul class="dropdown-list">
                                    <li><a class="dropdown-link" href="category-list.html">category list</a></li>
                                    <li><a class="dropdown-link" href="category-details.html">category details</a></li>
                                </ul>
                            </li>
                            <li class="navbar-item navbar-dropdown">
                                <a class="navbar-link" href="#">
                                    <span>Advertise List</span>
                                    <i class="fas fa-plus"></i>
                                </a>
                                <ul class="dropdown-list">
                                    <li><a class="dropdown-link" href="ad-list-column3.html">ad list column 3</a></li>
                                    <li><a class="dropdown-link" href="ad-list-column2.html">ad list column 2</a></li>
                                    <li><a class="dropdown-link" href="ad-list-column1.html">ad list column 1</a></li>
                                </ul>
                            </li>
                            <li class="navbar-item navbar-dropdown">
                                <a class="navbar-link" href="#">
                                    <span>Advertise details</span>
                                    <i class="fas fa-plus"></i>
                                </a>
                                <ul class="dropdown-list">
                                    <li><a class="dropdown-link" href="ad-details-grid.html">ad details grid</a></li>
                                    <li><a class="dropdown-link" href="{{ route('ads.details') }}">ad details left</a>
                                    </li>
                                    <li><a class="dropdown-link" href="ad-details-right.html">ad details right</a></li>
                                </ul>
                            </li>
                            <li class="navbar-item navbar-dropdown">
                                <a class="navbar-link" href="#">
                                    <span>Pages</span>
                                    <i class="fas fa-plus"></i>
                                </a>
                                <ul class="dropdown-list">
                                    <li><a class="dropdown-link" href="about.html">About Us</a></li>
                                    <li><a class="dropdown-link" href="compare.html">Ad Compare</a></li>
                                    <li><a class="dropdown-link" href="cities.html">Ad by Cities</a></li>
                                    <li><a class="dropdown-link" href="price.html">Pricing Plan</a></li>
                                    <li><a class="dropdown-link" href="user-form.html">User Form</a></li>
                                    <li><a class="dropdown-link" href="404.html">404</a></li>
                                </ul>
                            </li>
                            <li class="navbar-item navbar-dropdown">
                                <a class="navbar-link" href="#">
                                    <span>blogs</span>
                                    <i class="fas fa-plus"></i>
                                </a>
                                <ul class="dropdown-list">
                                    <li><a class="dropdown-link" href="blog-list.html">Blog list</a></li>
                                    <li><a class="dropdown-link" href="blog-details.html">blog details</a></li>
                                </ul>
                            </li>
                            <li class="navbar-item"><a class="navbar-link" href="contact.html">Contact</a></li>
                        </ul>
                    </div>

                    <div class="tab-pane" id="author-menu">
                        <ul class="navbar-list">
                            <li class="navbar-item"><a class="navbar-link" href="dashboard.html">Dashboard</a></li>
                            <li class="navbar-item"><a class="navbar-link" href="profile.html">Profile</a></li>
                            <li class="navbar-item"><a class="navbar-link" href="ad-post.html">Ad Post</a></li>
                            <li class="navbar-item"><a class="navbar-link" href="my-ads.html">My Ads</a></li>
                            <li class="navbar-item"><a class="navbar-link" href="setting.html">Settings</a></li>
                            <li class="navbar-item navbar-dropdown">
                                <a class="navbar-link" href="bookmark.html">
                                    <span>bookmark</span>
                                    <span>0</span>
                                </a>
                            </li>
                            <li class="navbar-item navbar-dropdown">
                                <a class="navbar-link" href="message.html">
                                    <span>Message</span>
                                    <span>0</span>
                                </a>
                            </li>
                            <li class="navbar-item navbar-dropdown">
                                <a class="navbar-link" href="notification.html">
                                    <span>Notification</span>
                                    <span>0</span>
                                </a>
                            </li>
                            <li class="navbar-item"><a class="navbar-link" href="user-form.html">Logout</a></li>
                        </ul>
                    </div>
                </div>

                <div class="sidebar-footer">
                    <p>All Rights Reserved By <a href="#">Classicads</a></p>
                    <p>Developed By <a href="https://themeforest.net/user/mironcoder">Mironcoder</a></p>
                </div>
            </div>
        </div>
    </aside> --}}
    <!--=====================================
                    SIDEBAR PART END
        =======================================-->


    <!--=====================================
                    MOBILE-NAV PART START
        =======================================-->
    {{-- <nav class="mobile-nav">
        <div class="container">
            <div class="mobile-group">
                <a href="index.html" class="mobile-widget">
                    <i class="fas fa-home"></i>
                    <span>home</span>
                </a>
                @if (Auth::user())
                    <button type="button" class="header-widget sidebar-btn"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit()">
                        <i class="fas fa-sign-out-alt"></i>
                    </button>
                    <form method="POST" clas="d-none" id="logout-form" action="{{ route('logout') }}">
                        @csrf
                    </form>
                @endif
                @if (!Auth::user())
                    <a href="{{ route('login') }}" class="header-widget header-user">
                        <img src="{{ asset('images/user.png') }}" alt="user">
                        <span>{{ __('lang.join') }}</span>
                    </a>
                @else
                    <a href="{{ route('home') }}" class="header-logo">
                        <img src="{{ asset('images/logo2.jpeg') }}" alt="logo">
                    </a>

                    <a href="{{ route('login') }}" class="header-widget header-user">
                        <img src="{{ asset('images/user.png') }}" alt="user">
                        <span>{{ Auth::user()->name }}</span>
                    </a>
                @endif
                <a href="ad-post.html" class="mobile-widget plus-btn">
                    <i class="fas fa-plus"></i>
                    <span>Ad Post</span>
                </a>
                <a href="notification.html" class="mobile-widget">
                    <i class="fas fa-bell"></i>
                    <span>notify</span>
                    <sup>0</sup>
                </a>
                <a href="message.html" class="mobile-widget">
                    <i class="fas fa-envelope"></i>
                    <span>message</span>
                    <sup>0</sup>
                </a>
            </div>
        </div>
    </nav> --}}
    <!--=====================================
                    MOBILE-NAV PART END
        =======================================-->


    <!--=====================================
                    BANNER PART START
        =======================================-->
    <section class="banner-part">
        <div class="container">
            <div class="banner-content">
                <h1>{{ __('lang.home1') }}</h1>
                <p>{{ __('lang.home2') }}</p>
                <a href="{{ route('ads.list') }}" class="btn btn-outline">
                    <i class="fas fa-eye"></i>
                    <span>{{ __('button.all') }}</span>
                </a>
            </div>
        </div>
    </section>
    <!--=====================================
                    BANNER PART END
        =======================================-->


    <!--=====================================
                    SUGGEST PART START
        =======================================-->
    <section class="suggest-part">
        <div class="container">
            <div class="suggest-slider slider-arrow">
                @foreach ($categories as $category)
                    <a href="ad-list-column3.html" class="suggest-card">
                        <img src="{{ asset('/storage/category/' . $category->icon) }}" alt="car">
                        <h6>
                            @if (App::getLocale() == 'ar')
                                {{ $category->name_ar }}
                            @else
                                {{ $category->name_en }}
                            @endif
                        </h6>
                        <p>({{ $category->count() }}) {{ __('ads.ads') }}</p>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    <!--=====================================
                    SUGGEST PART END
        =======================================-->
    <br>
    <div class="marquee">
        <p>
            @foreach ($news_externals as $news_external)
                @if (App::getLocale() == 'ar')
                    {{ $news_external->title_ar }} ,,,
                @else
                    {{ $news_external->title_en }} ,,,
                @endif
            @endforeach
        </p>
    </div>

    <!--=====================================
                    FEATURE PART START
        =======================================-->
    <section class="section feature-part">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-5">
                    <div class="section-side-heading">
                        <h2><span>{{ __('ads.external') }} </span></h2>
                        <p>
                            {{ __('ads.external_details') }}
                        </p>
                        <a href="tal:05000000000" class="btn btn-inline">
                            <i class="fas fa-phone"></i>
                            <span>
                                {{ __('ads.external_phone') }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-7 col-lg-7">
                    <div class="feature-card-slider slider-arrow">
                        @foreach ($externals as $external)
                            <div class="feature-card">
                                <a href="#" class="feature-img">
                                    <img src="{{ asset('/storage/external/' . $external->image) }}" alt="feature">
                                </a>
                                {{-- <div class="cross-inline-badge feature-badge">
                                    <span>featured</span>
                                    <i class="fas fa-book-open"></i>
                                </div> 
                                <button type="button" class="feature-wish">
                                    <i class="fas fa-heart"></i>
                                </button> --}}
                                <div class="feature-content">
                                    <ol class="breadcrumb feature-category">
                                        <li><span class="flat-badge rent"></span></li>
                                        <li class="breadcrumb-item"><a href="#"></a></li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            @if (App::getLocale() == 'ar')
                                                {{ $external->title_ar }}
                                            @else
                                                {{ $external->title_en }}
                                            @endif
                                        </li>
                                    </ol>
                                    <h3 class="feature-title"><a href="{{ route('ads.details') }}">
                                            @if (App::getLocale() == 'ar')
                                                {{ $external->details_ar }}
                                            @else
                                                {{ $external->details_en }}
                                            @endif
                                        </a>
                                    </h3>
                                    <div class="feature-meta">
                                        {{-- <span class="feature-price">$<small>/Monthly</small></span>
                                        <span class="feature-time"><i class="fas fa-clock"></i>56 minute ago</span> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="feature-thumb-slider">
                        @foreach ($externals as $external)
                            <div class="feature-thumb"><img src="{{ asset('/storage/external/' . $external->image) }}"
                                    alt="feature">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                    FEATURE PART END
        =======================================-->


    <!--=====================================
                    RECOMEND PART START
        =======================================-->
    <section class="section recomend-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-center-heading">
                        <h2> <span>{{ __('ads.new') }}</span>{{ __('ads.adss') }}</h2>
                        <p>{{ __('ads.new_details') }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="recomend-slider slider-arrow">
                        @foreach ($lastAds as $lastad)
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="{{ asset('storage/ads/' . $lastad->folder_name . '/' . $lastad->adsDetails->cover_image->name) }}"
                                            alt="product">
                                    </div>
                                    {{-- <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-clipboard-check"></i>
                                        <span>recommend</span>
                                    </div> --}}
                                    <div class="product-type">
                                        <span
                                            class="flat-badge @if ($lastad->type->id = 1) sale @else rent @endif">
                                            @if (App::getLocale() == 'ar')
                                                {{ $lastad->type->name_ar }}
                                            @else
                                                {{ $lastad->type->name_en }}
                                            @endif
                                        </span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        {{-- <li class="click"><i class="fas fa-mouse"></i><span>134</span></li> --}}
                                        {{-- <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li> --}}
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="{{ route('ads.details', $lastad->id) }}">
                                                @if (App::getLocale() == 'ar')
                                                    {{ $lastad->category->name_ar }}
                                                @else
                                                    {{ $lastad->category->name_en }}
                                                @endif
                                            </a></li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            @if (App::getLocale() == 'ar')
                                                {{ $lastad->adsDetails->name_ar }}
                                            @else
                                                {{ $lastad->adsDetails->name_en }}
                                            @endif
                                        </li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="{{ route('ads.details', $lastad->id) }}">
                                            @if (App::getLocale() == 'ar')
                                                {{ $lastad->adsDetails->description_ar }}
                                            @else
                                                {{ $lastad->adsDetails->description_en }}
                                            @endif

                                        </a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>
                                            @if (App::getLocale() == 'ar')
                                                {{ $lastad->city->name_ar }}
                                            @else
                                                {{ $lastad->city->name_en }}
                                            @endif ,
                                            @if (App::getLocale() == 'ar')
                                                {{ $lastad->country->name_ar }}
                                            @else
                                                {{ $lastad->country->name_en }}
                                            @endif
                                        </span>

                                    </div>
                                    {{-- <div class="product-info">
                                        <h5 class="product-price">$150000<span>/السعر</span></h5>
                                        <div class="product-btn">
                                            {{-- <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button> --}}
                                    {{-- </div> --}}
                                    {{-- </div> --}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-50">
                        <a href="ad-list-column3.html" class="btn btn-inline">
                            <i class="fas fa-eye"></i>
                            <span>{{ __('button.all') }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                    RECOMEND PART START
        =======================================-->


    <!--=====================================
                    TREND PART START
        =======================================-->
    <section class="section trend-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-center-heading">
                        <h2>{{ __('ads.adss') }}<span>{{ __('ads.most') }}</span></h2>
                        <p>{{ __('ads.most_details') }}</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($viewsAds as $viewAds)
                    <div class="col-md-11 col-lg-8 col-xl-6">
                        <div class="product-card standard">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="{{ asset('storage/ads/' . $viewAds->folder_name . '/' . $viewAds->adsDetails->cover_image->name) }}"
                                        alt="product">
                                </div>
                                <div class="cross-vertical-badge product-badge">
                                    <i class="fas fa-bolt"></i>
                                    <span>{{ __('lang.trending') }}</span>
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge sale">
                                        @if (App::getLocale() == 'ar')
                                            {{ $viewAds->type->name_ar }}
                                        @else
                                            {{ $viewAds->type->name_en }}
                                        @endif

                                    </span>
                                </div>
                                <ul class="product-action">
                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                    {{-- <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li> --}}
                                </ul>
                            </div>
                            <div class="product-content">
                                <ol class="breadcrumb product-category">
                                    <li><i class="fas fa-tags"></i></li>
                                    <li class="breadcrumb-item"><a href="{{ route('ads.details', $viewAds->id) }}">
                                            @if (App::getLocale() == 'ar')
                                                {{ $viewAds->category->name_ar }}
                                            @else
                                                {{ $viewAds->category->name_en }}
                                            @endif
                                        </a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        {{ $viewAds->adsDetails->name_en }}</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="{{ route('ads.details', $viewAds->id) }}">
                                        @if (App::getLocale() == 'ar')
                                            {{ $viewAds->adsDetails->description_ar }}
                                        @else
                                            {{ $viewAds->adsDetails->description_en }}
                                        @endif
                                    </a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>
                                        @if (App::getLocale() == 'ar')
                                            {{ $viewAds->city->name_ar }}
                                        @else
                                            {{ $viewAds->city->name_en }}
                                        @endif
                                    </span>
                                    <span><i class="fas fa-map-marker-alt"></i>
                                        @if (App::getLocale() == 'ar')
                                            {{ $viewAds->country->name_ar }}
                                        @else
                                            {{ $viewAds->country->name_en }}
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-20">
                        <a href="ad-list-column3.html" class="btn btn-inline">
                            <i class="fas fa-eye"></i>
                            <span>{{ __('button.all') }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                    TREND PART END
        =======================================-->


    <!--=====================================
                    NICHE PART START
        =======================================-->
    {{-- <section class="section niche-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-center-heading">
                            <h2>Browse Our Top <span>Niche</span></h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit aspernatur illum vel sunt libero voluptatum repudiandae veniam maxime tenetur.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="niche-nav">
                            <ul class="nav nav-tabs">
                                <li><a href="#ratings" class="nav-link active" data-toggle="tab">top ratings</a></li>
                                <li><a href="#advertiser" class="nav-link" data-toggle="tab">top advertiser</a></li>
                                <li><a href="#engaged" class="nav-link" data-toggle="tab">top engaged</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="tab-pane active" id="ratings">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="images/product/07.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge booking">booking</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">Luxury</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">resort</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="{{route('ads.details')}}">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$1590<span>/per week</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="images/product/08.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge sale">sale</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">gadget</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">mobile</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="{{route('ads.details')}}">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$454<span>/fixed</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="images/product/09.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge sale">sale</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">animal</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">cat</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="{{route('ads.details')}}">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$235<span>/Negotiable</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="images/product/10.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge rent">rent</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">automobile</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">private car</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="{{route('ads.details')}}">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$768<span>/per month</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="images/product/11.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge booking">booking</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">Luxury</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Duplex house</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="{{route('ads.details')}}">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$1470<span>/per day</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="images/product/13.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge sale">sale</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">electronics</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">laptop</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="{{route('ads.details')}}">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$1550<span>/fixed</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="images/product/14.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge rent">rent</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">automobile</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">bike</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="{{route('ads.details')}}">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$90<span>/per hour</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="images/product/15.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge sale">sale</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">gadget</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">camera</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="{{route('ads.details')}}">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$1200<span>/Negotiable</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Rating ads -->

                <div class="tab-pane " id="advertiser">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="images/product/08.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge sale">sale</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">gadget</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">mobile</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="{{route('ads.details')}}">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$454<span>/fixed</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="images/product/07.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge booking">booking</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">Luxury</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">resort</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="{{route('ads.details')}}">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$1590<span>/per week</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="images/product/10.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge rent">rent</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">automobile</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">private car</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="{{route('ads.details')}}">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$768<span>/per month</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="images/product/09.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge sale">sale</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">animal</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">cat</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="{{route('ads.details')}}">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$235<span>/Negotiable</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="images/product/13.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge sale">sale</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">electronics</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">laptop</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="{{route('ads.details')}}">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$1550<span>/fixed</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="images/product/11.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge booking">booking</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">Luxury</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Duplex house</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="{{route('ads.details')}}">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$1470<span>/per day</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="images/product/15.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge sale">sale</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">gadget</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">camera</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="{{route('ads.details')}}">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$1200<span>/Negotiable</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="images/product/14.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge rent">rent</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">automobile</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">bike</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="{{route('ads.details')}}">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$90<span>/per hour</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Advertiser ads -->

                <div class="tab-pane" id="engaged">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="images/product/15.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge sale">sale</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">gadget</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">camera</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="{{route('ads.details')}}">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$1200<span>/Negotiable</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="images/product/07.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge booking">booking</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">Luxury</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">resort</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="{{route('ads.details')}}">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$1590<span>/per week</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="images/product/09.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge sale">sale</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">animal</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">cat</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="{{route('ads.details')}}">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$235<span>/Negotiable</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="images/product/10.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge rent">rent</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">automobile</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">private car</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="{{route('ads.details')}}">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$768<span>/per month</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="images/product/08.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge sale">sale</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">gadget</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">mobile</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="{{route('ads.details')}}">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$454<span>/fixed</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="images/product/13.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge sale">sale</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">electronics</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">laptop</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="{{route('ads.details')}}">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$1550<span>/fixed</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="images/product/14.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge rent">rent</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">automobile</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">bike</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="{{route('ads.details')}}">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$90<span>/per hour</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="images/product/11.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge booking">booking</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">Luxury</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Duplex house</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="{{route('ads.details')}}">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$1470<span>/per day</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Engaged ads -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="center-20">
                            <a href="ad-list-column3.html" class="btn btn-inline">
                                <i class="fas fa-eye"></i>
                                <span>view all ads</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    <!--=====================================
                    NICHE PART END
        =======================================-->


    <!--=====================================
                    CITY PART START
        =======================================-->
    <section class="section city-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-center-heading">
                        <h2><span>{{ __('ads.cities') }}</span></h2>
                        <p>{{ __('ads.cities_details') }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($countries as $countrie)
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <a href="ad-list-column3.html" class="city-card"
                            style="background: url(images/cities/01.jpg) no-repeat center; background-size: cover">
                            <div class="city-content">
                                <h4>{{ $countrie->name_en }}</h4>
                                <p>(25) {{ __('ads.ads') }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-20">
                        <a href="cities.html" class="btn btn-inline">
                            <i class="fas fa-eye"></i>
                            <span>{{ __('button.all_cities') }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                    CITY PART END
        =======================================-->


    <!--=====================================
                    CATEGORY PART START
        =======================================-->
    <section class="section category-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-center-heading">
                        <h2>{{ __('ads.ads_by') }}<span>{{ __('ads.categories') }}</span></h2>
                        <p>{{ __('ads.categories_details') }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($categories as $categorie)
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="category-card">
                            <div class="category-head">
                                <img src="{{ asset('/storage/category/' . $category->icon) }}" alt="category">
                                <a href="#" class="category-content">
                                    <h4>{{ $categorie->name_en }}</h4>
                                    <p>(3678)</p>
                                </a>
                            </div>
                            <ul class="category-list">
                                @foreach ($categorie->subcategories as $catsub)
                                    <li><a href="#">
                                            <h6>{{ $catsub->name_en }}</h6>
                                            <p>(34)</p>
                                        </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
                <div class="row">
                    <div class="col-lg-12">
                        <div class="center-20">
                            <a href="category-list.html" class="btn btn-inline">
                                <i class="fas fa-eye"></i>
                                <span>{{ __('button.all_categories') }}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--=====================================
                    CATEGORY PART END
        =======================================-->


    <!--=====================================
                    INTRO PART START
        =======================================-->
    <section class="intro-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-center-heading">
                        <h2>هل لديك شيء لتعلن عنه؟</h2>
                        <p></p>
                        <a href="ad-post.html" class="btn btn-outline">
                            <i class="fas fa-plus-circle"></i>
                            <span>{{ __('button.post_your_ad') }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                    INTRO PART END
        =======================================-->


    <!--=====================================
                     PRICE PART START
        =======================================-->
    <section class="price-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-center-heading">
                        <h2>أفضل خطط التسعير الموثوقة</h2>
                        <p>آختار خطة الاشتراك التي تناسبك </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="price-card">
                        <div class="price-head">
                            <i class="flaticon-bicycle"></i>
                            <h3>$00</h3>
                            <h4>مجاني</h4>
                        </div>
                        <ul class="price-list">
                            <li>
                                <i class="fas fa-plus"></i>
                                <p>٧ايام</p>
                            </li>
                            <li>
                                <i class="fas fa-times"></i>
                                <p>اعلان واحد في اليوم</p>
                            </li>

                            <li>
                                <i class="fas fa-times"></i>
                                <p>بدون دعم في</p>
                            </li>
                        </ul>
                        <div class="price-btn">
                            <a href="user-form.html" class="btn btn-inline">
                                <i class="fas fa-sign-in-alt"></i>
                                <span>{{ __('button.register_now') }}</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="price-card price-active">
                        <div class="price-head">
                            <i class="flaticon-car-wash"></i>
                            <h3> ريال 23</h3>
                            <h4>الخطة القياسية</h4>
                        </div>
                        <ul class="price-list">
                            <li>
                                <i class="fas fa-plus"></i>
                                <p>٣٠ يوم ٤ اعلانات في اليوم</p>
                            </li>
                            <li>
                                <i class="fas fa-times"></i>
                                <p></p>
                            </li>
                            <li>
                                <i class="fas fa-times"></i>
                                <p></p>
                            </li>
                            <li>
                                <i class="fas fa-times"></i>
                                <p></p>
                            </li>
                            <li>
                                <i class="fas fa-plus"></i>
                                <p>دعم فني اساسي</p>
                            </li>
                        </ul>
                        <div class="price-btn">
                            <a href="user-form.html" class="btn btn-inline">
                                <i class="fas fa-sign-in-alt"></i>
                                <span>{{ __('button.register_now') }}</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="price-card">
                        <div class="price-head">
                            <i class="flaticon-airplane"></i>
                            <h3>١٠٠ ريال</h3>
                            <h4>البلاتيني</h4>
                        </div>
                        <ul class="price-list">
                            <li>
                                <i class="fas fa-plus"></i>
                                <p></p>
                            </li>
                            <li>
                                <i class="fas fa-plus"></i>
                                <p></p>
                            </li>
                            <li>
                                <i class="fas fa-plus"></i>
                                <p></p>
                            </li>
                            <li>
                                <i class="fas fa-plus"></i>
                                <p></p>
                            </li>
                            <li>
                                <i class="fas fa-plus"></i>
                                <p></p>
                            </li>
                        </ul>
                        <div class="price-btn">
                            <a href="user-form.html" class="btn btn-inline">
                                <i class="fas fa-sign-in-alt"></i>
                                <span>{{ __('button.register_now') }}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                     PRICE PART END
        =======================================-->


    <!--=====================================
                     BLOG PART START
        =======================================-->
    <section class="blog-part">
        <div class="container">
            {{-- <div class="row">
                    <div class="col-lg-12">
                        <div class="section-center-heading">
                            <h2>Read Our <span>Recent Articles</span></h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit aspernatur illum vel sunt libero voluptatum repudiandae veniam maxime tenetur.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-slider slider-arrow">
                            <div class="blog-card">
                                <div class="blog-img">
                                    <img src="images/blog/01.jpg" alt="blog">
                                    <div class="blog-overlay">
                                        <span class="marketing">Marketing</span>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <a href="#" class="blog-avatar">
                                        <img src="images/avatar/01.jpg" alt="avatar">
                                    </a>
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <p><a href="#">MironMahmud</a></p>
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i>
                                            <p>02 Feb 2021</p>
                                        </li>
                                    </ul>
                                    <div class="blog-text">
                                        <h4><a href="blog-details.html">Lorem ipsum dolor sit amet eius minus elit cum quaerat volupt.</a></h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus veniam ad dolore labore laborum perspiciatis...</p>
                                    </div>
                                    <a href="blog-details.html" class="blog-read">
                                        <span>read more</span>
                                        <i class="fas fa-long-arrow-alt-left"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="blog-card">
                                <div class="blog-img">
                                    <img src="images/blog/02.jpg" alt="blog">
                                    <div class="blog-overlay">
                                        <span class="advertise">advertise</span>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <a href="#" class="blog-avatar">
                                        <img src="images/avatar/02.jpg" alt="avatar">
                                    </a>
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <p><a href="#">LabonnoKhan</a></p>
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i>
                                            <p>02 Feb 2021</p>
                                        </li>
                                    </ul>
                                    <div class="blog-text">
                                        <h4><a href="blog-details.html">Lorem ipsum dolor sit amet eius minus elit cum quaerat volupt.</a></h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus veniam ad dolore labore laborum perspiciatis...</p>
                                    </div>
                                    <a href="blog-details.html" class="blog-read">
                                        <span>read more</span>
                                        <i class="fas fa-long-arrow-alt-left"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="blog-card">
                                <div class="blog-img">
                                    <img src="images/blog/03.jpg" alt="blog">
                                    <div class="blog-overlay">
                                        <span class="safety">safety</span>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <a href="#" class="blog-avatar">
                                        <img src="images/avatar/03.jpg" alt="avatar">
                                    </a>
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <p><a href="#">MironMahmud</a></p>
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i>
                                            <p>02 Feb 2021</p>
                                        </li>
                                    </ul>
                                    <div class="blog-text">
                                        <h4><a href="blog-details.html">Lorem ipsum dolor sit amet eius minus elit cum quaerat volupt.</a></h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus veniam ad dolore labore laborum perspiciatis...</p>
                                    </div>
                                    <a href="blog-details.html" class="blog-read">
                                        <span>read more</span>
                                        <i class="fas fa-long-arrow-alt-left"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="blog-card">
                                <div class="blog-img">
                                    <img src="images/blog/04.jpg" alt="blog">
                                    <div class="blog-overlay">
                                        <span class="security">security</span>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <a href="#" class="blog-avatar">
                                        <img src="images/avatar/04.jpg" alt="avatar">
                                    </a>
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <p><a href="#">TahminaBonny</a></p>
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i>
                                            <p>02 Feb 2021</p>
                                        </li>
                                    </ul>
                                    <div class="blog-text">
                                        <h4><a href="blog-details.html">Lorem ipsum dolor sit amet eius minus elit cum quaerat volupt.</a></h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus veniam ad dolore labore laborum perspiciatis...</p>
                                    </div>
                                    <a href="blog-details.html" class="blog-read">
                                        <span>read more</span>
                                        <i class="fas fa-long-arrow-alt-left"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-btn">
                            <a href="blog-list.html" class="btn btn-inline">
                                <i class="fas fa-eye"></i>
                                <span>view all blogs</span>
                            </a>
                        </div>
                    </div>
                </div> --}}
        </div>
    </section>
    <!--=====================================
        =======================================-->


    @include('layout.footer')
    <!--=====================================
                    JS LINK PART END
        =======================================-->
</body>

</html>
