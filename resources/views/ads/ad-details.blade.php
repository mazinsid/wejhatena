@extends('layouts.app-master')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/custom/ad-details.css') }}">
@endpush

@section('content')
    <!--=====================================
                    SIDEBAR PART START
        =======================================-->
        <aside class="sidebar-part">
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
                                <li class="navbar-item"><a class="navbar-link" href="index.html">Home</a></li>
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
                                        <li><a class="dropdown-link" href="ad-details-grid.html"></a></li>
                                        <li><a class="dropdown-link" href="ad-details-left.html">ad details left</a></li>
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
        </aside>


        <!--=====================================
                SINGLE BANNER PART START
            =======================================-->
        <section class="single-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-content">
                            <h2>{{ __('ads.ad details left') }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                      SINGLE BANNER PART END
            =======================================-->


        <!--=====================================
                        AD DETAILS PART START
            =======================================-->
        <section class="inner-section ad-details-part">
            <div class="container">
                <div class="row content-reverse">
                    <div class="col-lg-4">

                        <!-- PRICE CARD -->
                        {{-- <div class="common-card price">
                                <h3>$2347<span>/negotiable</span></h3>
                                <i class="fas fa-tag"></i>
                            </div> --}}

                        <!-- NUMBER CARD -->
                        <button type="button" class="common-card number" data-toggle="modal" data-target="#number">
                            {{-- <h3>(+880)<span>Click to show</span></h3> --}}
                            <i class="fas fa-phone"></i>
                        </button>

                        <!-- AUTHOR CARD -->
                        <div class="common-card">
                            <div class="card-header">
                                <h5 class="card-title">{{ __('lang.author info') }}</h5>
                            </div>
                            <div class="ad-details-author">
                                <a href="#" class="author-img active">
                                    <img src="{{ asset('images/user.png') }}" alt="avatar">
                                </a>
                                <div class="author-meta">
                                    <h4><a href="#">{{ $ads->user->name }}</a></h4>
                                    {{-- <h5>{{}}</h5> --}}
                                    {{-- <p>مسوق عقارا</p> --}}
                                </div>
                                <div class="author-widget">
                                    {{-- <a href="profile.html" title="Profile" class="fas fa-eye"></a> --}}
                                    <a href="{{ route('ads.message', $ads->id) }}" title="Message"
                                        class="fas fa-envelope"></a>
                                    {{-- <button type="button" title="Follow" class="follow fas fa-heart"></button> --}}
                                    <button type="button" title="Number" class="fas fa-phone" data-toggle="modal"
                                        data-target="#number"></button>
                                    {{-- <button type="button" title="Share" class="fas fa-share-alt" data-toggle="modal" --}}
                                    {{-- data-target="#profile-share"></button> --}}
                                </div>
                                <ul class="author-list">
                                    <li>
                                        <h6>{{ __('ads.total ads') }}</h6>
                                        {{-- <p>{{ $ads->user->ads->count }}</p> --}}
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- FEATURE CARD -->
                        <div class="common-card">
                            <div class="card-header">
                                <h5 class="card-title">{{ __('ads.last author ads') }}</h5>
                            </div>
                            <div class="ad-details-feature slider-arrow">
                                @foreach ($lastAds as $lastAd)
                                    <div class="feature-card">
                                        <a href="#" class="feature-img">
                                            <img src="{{ asset('storage/ads/' . $lastAd->folder_name . '/' . $lastAd->adsDetails->cover_image->name) }}"
                                                alt="feature">
                                        </a>
                                        <div class="cross-inline-badge feature-badge">
                                            <span></span>
                                            <i class="fas fa-book-open"></i>
                                        </div>
                                        <button type="button" class="feature-wish">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                        <div class="feature-content">
                                            <ol class="breadcrumb feature-category">
                                                <li><span
                                                        class="flat-badge @if ($lastAd->type->id = 1) sale @else rent @endif">
                                                        @if (App::getLocale() == 'ar')
                                                            {{ $lastAd->type->name_ar }}
                                                        @else
                                                            {{ $lastAd->type->name_en }}
                                                        @endif
                                                    </span></li>
                                                <li class="breadcrumb-item"><a href="#">
                                                        @if (App::getLocale() == 'ar')
                                                            {{ $lastAd->category->name_ar }}
                                                        @else
                                                            {{ $lastAd->category->name_en }}
                                                        @endif
                                                    </a></li>
                                                {{-- <li class="breadcrumb-item active" aria-current="page">
                                                    @if (App::getLocale() == 'ar')
                                                        {{ $lastAd->category->subcategories->name_ar }}
                                                    @else
                                                        {{ $lastAd->category->subcategories->name_en }}
                                                    @endif
                                                </li> --}}
                                            </ol>
                                            <h3 class="feature-title"><a href="ad-details-left.html">
                                                    @if (App::getLocale() == 'ar')
                                                        {{ $lastAd->AdsDetails->name_ar }}
                                                    @else
                                                        {{ $lastAd->AdsDetails->name_en }}
                                                    @endif
                                                </a>
                                            </h3>
                                            <div class="feature-meta">
                                                {{-- <span class="feature-price">$1200<small>/Monthly</small></span> --}}
                                                <span class="feature-time">
                                                    @if (App::getLocale() == 'ar')
                                                        {{ $lastAd->AdsDetails->description_ar }}
                                                    @else
                                                        {{ $lastAd->AdsDetails->description_en }}
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="common-card">
                            <ol class="breadcrumb ad-details-breadcrumb">
                                <li>
                                    <span class="flat-badge sale">
                                        @if (App::getLocale() == 'ar')
                                            {{ $ads->type->name_ar }}
                                        @else
                                            {{ $ads->type->name_en }}
                                        @endif
                                    </span>
                                </li>
                                <li>
                                    <i class="fas fa-tags"></i></li>
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('ads.details', $ads->id) }}">
                                            @if (App::getLocale() == 'ar')
                                                {{ $ads->category->name_ar }}
                                            @else
                                                {{ $ads->category->name_en }}
                                            @endif
                                        </a>
                                    </li>
                            </ol>
                            <h5 class="ad-details-address">

                            </h5>
                            <h3 class="ad-details-title">
                                @if (App::getLocale() == 'ar')
                                    {{ $ads->adsDetails->name_ar }}
                                @else
                                    {{ $ads->adsDetails->name_en }}
                                @endif
                            </h3>
                            <div class="ad-details-meta">
                                <a class="view">
                                    <i class="fas fa-eye"></i>
                                    <span><strong>(134)</strong>preview</span>
                                </a>
                                <a class="click">
                                    <i class="fas fa-mouse"></i>
                                    <span><strong>(76)</strong>click</span>
                                </a>
                                <a href="#review" class="rating">
                                    <i class="fas fa-star"></i>
                                    <span><strong>(29)</strong>review</span>
                                </a>
                            </div>
                            <div class="ad-details-slider-group">
                                <div class="ad-details-slider slider-arrow">
                                    @foreach ($ads->adsDetails->adsFiles as $file)
                                        <div>
                                            <img src="{{ asset('storage/ads/' . $ads->folder_name . '/' . $file->name) }}"
                                            alt="details">
                                        </div>
                                    @endforeach
                                </div>
                                <div class="cross-vertical-badge ad-details-badge">
                                    <i class="fas fa-clipboard-check"></i>
                                    <span>recommend</span>
                                </div>
                            </div>
                            <div class="ad-thumb-slider">
                                @foreach ($ads->adsDetails->adsFiles as $file)
                                    <div>
                                        <img src="{{ asset('storage/ads/' . $ads->folder_name . '/' . $file->name) }}"
                                        alt="details">
                                    </div>
                                @endforeach
                            </div>
                            <div class="ad-details-action">
                                <button type="button" class="wish"><i class="fas fa-heart"></i>bookmark</button>
                                <button type="button"><i class="fas fa-exclamation-triangle"></i>report</button>
                                <button type="button" data-toggle="modal" data-target="#ad-share">
                                    <i class="fas fa-share-alt"></i>
                                    share
                                </button>
                            </div>
                        </div>
                        <!-- DESCRIPTION CARD -->
                        <div class="common-card">
                            <div class="card-header">
                                <h5 class="card-title">{{ __('lang.ad details') }}</h5>
                            </div>
                            <p class="ad-details-desc">
                                <br>
                                @if (App::getLocale() == 'ar')
                                    {{ $ads->adsDetails->description_ar }}
                                @else
                                    {{ $ads->adsDetails->description_en }}
                                @endif
                            </p>
                        </div>
                        <!-- AD DETAILS CARD -->
                        {{-- <div class="common-card">
                            <ol class="breadcrumb ad-details-breadcrumb">
                                <li><span class="flat-badge @if ($ads->type->id = 1) sale @else rent @endif">
                                        @if (App::getLocale() == 'ar')
                                            {{ $ads->type->name_ar }}
                                        @else
                                            {{ $ads->type->name_en }}
                                        @endif
                                    </span></li>
                            </ol>
                            <h5 class="ad-details-address">
                                @if (App::getLocale() == 'ar')
                                    {{ $ads->adsDetails->name_ar }}
                                @else
                                    {{ $ads->adsDetails->name_en }}
                                @endif
                            </h5>
                            <div class="ad-details-slider-group">
                                <div class="ad-details-slider slider-arrow">
                                    @foreach ($ads->adsDetails->adsFiles as $file)
                                        <div><img
                                                src="{{ asset('storage/ads/' . $ads->folder_name . '/' . $file->name) }}"
                                                alt="details"></div>
                                    @endforeach
                                </div>
                                <div class="cross-vertical-badge ad-details-badge">
                                    <i class="fas fa-clipboard-check"></i>
                                    <span>recommend</span>
                                </div>
                            </div>
                            <div class="ad-thumb-slider">
                                @foreach ($ads->adsDetails->adsFiles as $file)
                                    <div><img src="{{ asset('storage/ads/' . $ads->folder_name . '/' . $file->name) }}"
                                            alt="details"></div>
                                @endforeach
                            </div>

                        </div> --}}


                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                        AD DETAILS PART END
            =======================================-->


        <!--=====================================
                        RELATED PART START
            =======================================-->
        <section class="inner-section related-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-center-heading">
                            <h2>{{ __('ads.adss') }} <span> {{ __('ads.similar') }}</span></h2>
                            <p>{{ __('ads.some similar') }}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="related-slider slider-arrow">
                            @foreach ($similarAds as $similarAd)
                                <div class="product-card">
                                    <div class="product-media">
                                        <div class="product-img">
                                            <img src="{{ asset('storage/ads/' . $similarAd->folder_name . '/' . $similarAd->adsDetails->cover_image->name) }}"
                                                alt="product">
                                        </div>
                                        <div class="product-type">
                                            <span class="flat-badge  @if ($similarAd->type->id = 1) sale @else rent @endif">
                                                @if (App::getLocale() == 'ar')
                                                    {{ $similarAd->type->name_ar }}
                                                @else
                                                    {{ $similarAd->type->name_en }}
                                                @endif
                                            </span>
                                        </div>
                                        {{-- <ul class="product-action">
                                            <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                            <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                            <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                        </ul> --}}
                                    </div>
                                    <div class="product-content">
                                        <ol class="breadcrumb product-category">
                                            <li><i class="fas fa-tags"></i></li>
                                            <li class="breadcrumb-item"><a href="#">
                                                    @if (App::getLocale() == 'ar')
                                                        {{ $similarAd->category->name_ar }}
                                                    @else
                                                        {{ $similarAd->category->name_en }}
                                                    @endif
                                                </a></li>
                                            <li class="breadcrumb-item active" aria-current="page">
                                                /@if (App::getLocale() == 'ar')
                                                    {{ $similarAd->subcategory->name_ar }}
                                                @else
                                                    {{ $similarAd->subcategory->name_en }}
                                                @endif
                                            </li>
                                        </ol>
                                        <h5 class="product-title">
                                            <a href="{{ route('ads.details', $similarAd->id) }}">
                                                @if (App::getLocale() == 'ar')
                                                    {{ $similarAd->adsDetails->name_ar }}
                                                @else
                                                    {{ $similarAd->adsDetails->name_en }}
                                                @endif
                                            </a>
                                        </h5>
                                        <div class="product-meta">
                                            <span><i class="fas fa-map-marker-alt"></i>
                                                @if (App::getLocale() == 'ar')
                                                    {{ $similarAd->country->name_ar }}
                                                @else
                                                    {{ $similarAd->country->name_en }}
                                                    @endif, @if (App::getLocale() == 'ar')
                                                        {{ $similarAd->city->name_ar }}
                                                    @else
                                                        {{ $similarAd->city->name_en }}
                                                    @endif
                                            </span>

                                        </div>
                                        {{-- <div class="product-info">
                                            <h5 class="product-price"><span>
                                                    @if (App::getLocale() == 'ar')
                                                        {{ $similarAd->adsDetails->description_ar }}
                                                    @else
                                                        {{ $similarAd->adsDetails->description_en }}
                                                    @endif
                                                </span></h5>
                                            <div class="product-btn">
                                                <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                                <button type="button" title="Wishlist" class="far fa-heart"></button>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="center-50">
                            <a href="{{ route('home.filter') }}" class="btn btn-inline">
                                <i class="fas fa-eye"></i>
                                <span>{{ __('button.all') }}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                        FOOTER PART PART
            =======================================-->
@endsection

@push('scripts')
@endpush
