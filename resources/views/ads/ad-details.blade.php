@extends('layouts.app-master')

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

                        <!-- OPENING CARD -->
                        {{-- <div class="common-card">
                                <div class="card-header">
                                    <h5 class="card-title">opening hour</h5>
                                </div>
                                <ul class="ad-details-opening">
                                    <li>
                                        <h6>Saturday</h6>
                                        <p>09:00am - 05:00pm</p>
                                    </li>
                                    <li>
                                        <h6>Sunday</h6>
                                        <p>09:00am - 05:00pm</p>
                                    </li>
                                    <li>
                                        <h6>monday</h6>
                                        <p>09:00am - 05:00pm</p>
                                    </li>
                                    <li>
                                        <h6>tuesday</h6>
                                        <p>09:00am - 05:00pm</p>
                                    </li>
                                    <li>
                                        <h6>wednesday</h6>
                                        <p>09:00am - 05:00pm</p>
                                    </li>
                                    <li>
                                        <h6>thursday</h6>
                                        <p>09:00am - 05:00pm</p>
                                    </li>
                                    <li>
                                        <h6>friday</h6>
                                        <p>closed</p>
                                    </li>
                                </ul>
                            </div> --}}

                        <!-- LOCATION CARD -->
                        {{-- <div class="common-card">
                                <div class="card-header">
                                    <h5 class="card-title">area map</h5>
                                </div>
                                <iframe class="ad-details-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.3406974350205!2d90.48469931445422!3d23.663771197998262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b0d5983f048d%3A0x754f30c82bcad3cd!2sJalkuri%20Bus%20Stop!5e0!3m2!1sen!2sbd!4v1610539261654!5m2!1sen!2sbd"></iframe>
                            </div> --}}

                        <!-- SAFETY CARD -->
                        {{-- <div class="common-card">
                                <div class="card-header">
                                    <h5 class="card-title">safety tips</h5>
                                </div>
                                <div class="ad-details-safety">
                                    <p>Check the item before you buy</p>
                                    <p>Pay only after collecting item</p>
                                    <p>Beware of unrealistic offers</p>
                                    <p>Meet seller at a safe location</p>
                                    <p>Do not make an abrupt decision</p>
                                    <p>Be honest with the ad you post</p>
                                </div>
                            </div> --}}

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

                        <!-- AD DETAILS CARD -->
                        <div class="common-card">
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

                            {{-- <div class="ad-details-meta">
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
                            </div> --}}
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
                            {{-- <div class="ad-details-action">
                                <button type="button" class="wish"><i class="fas fa-heart"></i>bookmark</button>
                                <button type="button"><i class="fas fa-exclamation-triangle"></i>report</button>
                                <button type="button" data-toggle="modal" data-target="#ad-share">
                                    <i class="fas fa-share-alt"></i>
                                    share
                                </button>
                            </div> --}}
                        </div>

                        <!-- SPECIFICATION CARD -->
                        {{-- <div class="common-card">
                                <div class="card-header">
                                    <h5 class="card-title">Specification</h5>
                                </div>
                                <ul class="ad-details-specific">
                                    <li>
                                        <h6>price:</h6>
                                        <p>$2,347</p>
                                    </li>
                                    <li>
                                        <h6>seller type:</h6>
                                        <p>personal</p>
                                    </li>
                                    <li>
                                        <h6>published:</h6>
                                        <p>february 02, 2021</p>
                                    </li>
                                    <li>
                                        <h6>location:</h6>
                                        <p>jalkuri, narayanganj</p>
                                    </li>
                                    <li>
                                        <h6>category:</h6>
                                        <p>property</p>
                                    </li>
                                    <li>
                                        <h6>condition:</h6>
                                        <p>used</p>
                                    </li>
                                    <li>
                                        <h6>price type:</h6>
                                        <p>negotiable</p>
                                    </li>
                                    <li>
                                        <h6>ad type:</h6>
                                        <p>sales</p>
                                    </li>
                                </ul>
                            </div> --}}

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

                        <!-- REVIEWS CARD -->
                        {{-- <div class="common-card" id="review">
                                <div class="card-header">
                                    <h5 class="card-title">المشهدات (2)</h5>
                                </div>
                                <div class="ad-details-review">
                                    <ul class="review-list">
                                        <li class="review-item">
                                            <div class="review-user">
                                                <div class="review-head">
                                                    <div class="review-profile">
                                                        <a href="#" class="review-avatar">
                                                            <img src="images/avatar/03.jpg" alt="review">
                                                        </a>
                                                        <div class="review-meta">
                                                            <h6>
                                                                <a href="#">miron mahmud -</a>
                                                                <span>June 02, 2020</span>
                                                            </h6>
                                                            <ul>
                                                                <li><i class="fas fa-star active"></i></li>
                                                                <li><i class="fas fa-star active"></i></li>
                                                                <li><i class="fas fa-star active"></i></li>
                                                                <li><i class="fas fa-star active"></i></li>
                                                                <li><i class="fas fa-star active"></i></li>
                                                                <li><h5>- for delivery system</h5></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="review-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit Non quibusdam harum ipsum dolor cumque quas magni voluptatibus cupiditate minima quis.</p>
                                            </div>
                                        </li>
                                        <li class="review-item">
                                            <div class="review-user">
                                                <div class="review-head">
                                                    <div class="review-profile">
                                                        <a href="#" class="review-avatar">
                                                            <img src="images/avatar/02.jpg" alt="review">
                                                        </a>
                                                        <div class="review-meta">
                                                            <h6>
                                                                <a href="#">labonno khan -</a>
                                                                <span>June 02, 2020</span>
                                                            </h6>
                                                            <ul>
                                                                <li><i class="fas fa-star active"></i></li>
                                                                <li><i class="fas fa-star active"></i></li>
                                                                <li><i class="fas fa-star active"></i></li>
                                                                <li><i class="fas fa-star active"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><h5>- for product quality</h5></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="review-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit Non quibusdam harum ipsum dolor cumque quas magni voluptatibus cupiditate minima quis.</p>
                                            </div>
                                            <div class="review-author">
                                                <div class="review-head">
                                                    <div class="review-profile">
                                                        <a href="#" class="review-avatar">
                                                            <img src="images/avatar/04.jpg" alt="review">
                                                        </a>
                                                        <div class="review-meta">
                                                            <h6><a href="#">Miron Mahmud</a></h6>
                                                            <h6>Author - <span>June 02, 2020</span></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="review-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit Non quibusdam harum ipsum dolor cumque quas magni voluptatibus cupiditate minima.</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <form class="review-form">
                                        <div class="star-rating">
                                            <input type="radio" name="rating" id="star-1"><label for="star-1"></label>
                                            <input type="radio" name="rating" id="star-2"><label for="star-2"></label>
                                            <input type="radio" name="rating" id="star-3"><label for="star-3"></label>
                                            <input type="radio" name="rating" id="star-4"><label for="star-4"></label>
                                            <input type="radio" name="rating" id="star-5"><label for="star-5"></label>
                                        </div>
                                        <div class="review-form-grid">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control custom-select">
                                                    <option selected>Qoute</option>
                                                    <option value="1">delivery system</option>
                                                    <option value="2">product quality</option>
                                                    <option value="3">payment issue</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Describe"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-inline review-submit">
                                            <i class="fas fa-tint"></i>
                                            <span>drop your review</span>
                                        </button>
                                    </form>
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
                                            <span
                                                class="flat-badge  @if ($similarAd->type->id = 1) sale @else rent @endif">
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
                                            <a href="#">
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
                            <a href="{{ route('ads.list') }}" class="btn btn-inline">
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
