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
        <meta name="keywords" content="classicads, classified, ads, classified ads, listing, business, directory, jobs, marketing, portal, advertising, local, posting, ad listing, ad posting,">
        <!--=====================================
                    META-TAG PART END
        =======================================-->

        <!-- FOR WEBPAGE TITLE -->
        <title>Ad List Column 3 - Classicads</title>

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
        <!--=====================================
                    CSS LINK PART END
        =======================================-->
    </head>
    <body>
        <!--=====================================
                    HEADER PART START
        =======================================-->
        @include('layout.header');
        <!--=====================================
                    HEADER PART END
        =======================================-->


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
                                        <li><a class="dropdown-link" href="ad-details-grid.html">ad details grid</a></li>
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
                    SIDEBAR PART END
        =======================================-->


        <!--=====================================
                    MOBILE-NAV PART START
        =======================================-->
        <nav class="mobile-nav">
            <div class="container">
                <div class="mobile-group">
                    <a href="index.html" class="mobile-widget">
                        <i class="fas fa-home"></i>
                        <span>home</span>
                    </a>
                    <a href="user-form.html" class="mobile-widget">
                        <i class="fas fa-user"></i>
                        <span>join me</span>
                    </a>
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
        </nav>
        <!--=====================================
                    MOBILE-NAV PART END
        =======================================-->


        <!--=====================================
                  SINGLE BANNER PART START
        =======================================-->
        <section class="inner-section single-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-content">
                            <h2>ad list column 3</h2>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">ad-list-column3</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                  SINGLE BANNER PART END
        =======================================-->


        <!--=====================================
                    AD LIST PART START
        =======================================-->
        <section class="inner-section ad-list-part">
            <div class="container">
                <div class="row content-reverse">
                    <div class="col-lg-4 col-xl-3">
                        <div class="row">
                            {{-- <div class="col-md-6 col-lg-12">
                                <div class="product-widget">
                                    <h6 class="product-widget-title">Filter by Price</h6>
                                    <form class="product-widget-form">
                                        <div class="product-widget-group">
                                            <input type="text" placeholder="min - 00">
                                            <input type="text" placeholder="max - 1B">
                                        </div>
                                        <button type="submit" class="product-widget-btn">
                                            <i class="fas fa-search"></i>
                                            <span>search</span>
                                        </button>
                                    </form>
                                </div> 
                            </div> --}}
                            <div class="col-md-6 col-lg-12">
                                <div class="product-widget">
                                    <h6 class="product-widget-title">بحث بالنوع</h6>
                                    <form class="product-widget-form">
                                        <ul class="product-widget-list">
                                            <li class="product-widget-item">
                                                <div class="product-widget-checkbox"><input type="checkbox" id="chcek1"></div>
                                                <label class="product-widget-label" for="chcek1">
                                                    <span class="product-widget-type sale">بيع</span>
                                                    <span class="product-widget-number">(15)</span>
                                                </label>
                                            </li>
                                            <li class="product-widget-item">
                                                <div class="product-widget-checkbox"><input type="checkbox" id="chcek2"></div>
                                                <label class="product-widget-label" for="chcek2">
                                                    <span class="product-widget-type rent">شراء</span>
                                                    <span class="product-widget-number">(25)</span>
                                                </label>
                                            </li>
                                         
                                        </ul>
                                        <button type="submit" class="product-widget-btn">
                                            <i class="fas fa-broom"></i>
                                            <span>بحث</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            {{-- <div class="col-md-6 col-lg-12">
                                <div class="product-widget">
                                    <h6 class="product-widget-title">Filter by rating</h6>
                                    <form class="product-widget-form">
                                        <ul class="product-widget-list">
                                            <li class="product-widget-item">
                                                <div class="product-widget-checkbox">
                                                    <input type="checkbox" id="chcek4">
                                                </div>
                                                <label class="product-widget-label" for="chcek4">
                                                    <span class="product-widget-star">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                    <span class="product-widget-number">(45)</span>
                                                </label>
                                            </li>
                                            <li class="product-widget-item">
                                                <div class="product-widget-checkbox">
                                                    <input type="checkbox" id="chcek5">
                                                </div>
                                                <label class="product-widget-label" for="chcek5">
                                                    <span class="product-widget-star">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </span>
                                                    <span class="product-widget-number">(55)</span>
                                                </label>
                                            </li>
                                            <li class="product-widget-item">
                                                <div class="product-widget-checkbox">
                                                    <input type="checkbox" id="chcek6">
                                                </div>
                                                <label class="product-widget-label" for="chcek6">
                                                    <span class="product-widget-star">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </span>
                                                    <span class="product-widget-number">(65)</span>
                                                </label>
                                            </li>
                                            <li class="product-widget-item">
                                                <div class="product-widget-checkbox">
                                                    <input type="checkbox" id="chcek7">
                                                </div>
                                                <label class="product-widget-label" for="chcek7">
                                                    <span class="product-widget-star">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </span>
                                                    <span class="product-widget-number">(75)</span>
                                                </label>
                                            </li>
                                            <li class="product-widget-item">
                                                <div class="product-widget-checkbox">
                                                    <input type="checkbox" id="chcek8">
                                                </div>
                                                <label class="product-widget-label" for="chcek8">
                                                    <span class="product-widget-star">
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </span>
                                                    <span class="product-widget-number">(85)</span>
                                                </label>
                                            </li>
                                        </ul>
                                        <button type="submit" class="product-widget-btn">
                                            <i class="fas fa-broom"></i>
                                            <span>Clear Filter</span>
                                        </button>
                                    </form>
                                </div>
                            </div> --}}
                            {{-- <div class="col-md-6 col-lg-12">
                                <div class="product-widget">
                                    <h6 class="product-widget-title">بحث بالمدن</h6>
                                    <form class="product-widget-form">
                                        <div class="product-widget-search">
                                            <input type="text" placeholder="بحث">
                                        </div>
                                        <ul class="product-widget-list product-widget-scroll">
                                            <li class="product-widget-item">
                                                <div class="product-widget-checkbox">
                                                    <input type="checkbox" id="chcek9">
                                                </div>
                                                <label class="product-widget-label" for="chcek9">
                                                    <span class="product-widget-text">Los Angeles</span>
                                                    <span class="product-widget-number">(95)</span>
                                                </label>
                                            </li>
                                            <li class="product-widget-item">
                                                <div class="product-widget-checkbox">
                                                    <input type="checkbox" id="chcek10">
                                                </div>
                                                <label class="product-widget-label" for="chcek10">
                                                    <span class="product-widget-text">الرياض</span>
                                                    <span class="product-widget-number">(82)</span>
                                                </label>
                                            </li>
                                            <li class="product-widget-item">
                                                <div class="product-widget-checkbox">
                                                    <input type="checkbox" id="chcek11">
                                                </div>
                                                <label class="product-widget-label" for="chcek11">
                                                    <span class="product-widget-text">جده</span>
                                                    <span class="product-widget-number">(1t)</span>
                                                </label>
                                            </li>
                                            <li class="product-widget-item">
                                                <div class="product-widget-checkbox">
                                                    <input type="checkbox" id="chcek12">
                                                </div>
                                                <label class="product-widget-label" for="chcek12">
                                                    <span class="product-widget-text">المدينه</span>
                                                    <span class="product-widget-number">(46)</span>
                                                </label>
                                            </li>
                                            <li class="product-widget-item">
                                                <div class="product-widget-checkbox">
                                                    <input type="checkbox" id="chcek13">
                                                </div>
                                                <label class="product-widget-label" for="chcek13">
                                                    <span class="product-widget-text">الدمام</span>
                                                    <span class="product-widget-number">(24)</span>
                                                </label>
                                            </li>
                                            <li class="product-widget-item">
                                                <div class="product-widget-checkbox">
                                                    <input type="checkbox" id="chcek14">
                                                </div>
                                                <label class="product-widget-label" for="chcek14">
                                                    <span class="product-widget-text">أبهاء</span>
                                                    <span class="product-widget-number">(34)</span>
                                                </label>
                                            </li>
                                            <li class="product-widget-item">
                                                <div class="product-widget-checkbox">
                                                    <input type="checkbox" id="chcek15">
                                                </div>
                                                <label class="product-widget-label" for="chcek15">
                                                    <span class="product-widget-text">dsss</span>
                                                    <span class="product-widget-number">(82)</span>
                                                </label>
                                            </li>
                                            <li class="product-widget-item">
                                                <div class="product-widget-checkbox">
                                                    <input type="checkbox" id="chcek16">
                                                </div>
                                                <label class="product-widget-label" for="chcek16">
                                                    <span class="product-widget-text">ssss</span>
                                                    <span class="product-widget-number">(45)</span>
                                                </label>
                                            </li>
                                            <li class="product-widget-item">
                                                <div class="product-widget-checkbox">
                                                    <input type="checkbox" id="chcek17">
                                                </div>
                                                <label class="product-widget-label" for="chcek17">
                                                    <span class="product-widget-text">ffff</span>
                                                    <span class="product-widget-number">(19)</span>
                                                </label>
                                            </li>
                                        </ul>
                                        <button type="submit" class="product-widget-btn">
                                            <i class="fas fa-broom"></i>
                                            <span>Clear Filter</span>
                                        </button>  
                                    </form>
                                </div>
                            </div> --}}
                            {{-- <div class="col-md-6 col-lg-12">
                                <div class="product-widget">
                                    <h6 class="product-widget-title">بحث حسب النوع</h6>
                                    <form class="product-widget-form">
                                        <div class="product-widget-search">
                                            <input type="text" placeholder="Search">
                                        </div>
                                        <ul class="product-widget-list product-widget-scroll">
                                            <li class="product-widget-item">
                                                <div class="product-widget-checkbox">
                                                    <input type="checkbox" id="chcek9">
                                                </div>
                                                <label class="product-widget-label" for="chcek9">
                                                    <span class="product-widget-text">عقارات</span>
                                                    <span class="product-widget-number">(68)</span>
                                                </label>
                                            </li>
                                            <li class="product-widget-item">
                                                <div class="product-widget-checkbox">
                                                    <input type="checkbox" id="chcek10">
                                                </div>
                                                <label class="product-widget-label" for="chcek10">
                                                    <span class="product-widget-text">camera</span>
                                                    <span class="product-widget-number">(78)</span>
                                                </label>
                                            </li>
                                            <li class="product-widget-item">
                                                <div class="product-widget-checkbox">
                                                    <input type="checkbox" id="chcek11">
                                                </div>
                                                <label class="product-widget-label" for="chcek11">
                                                    <span class="product-widget-text">television</span>
                                                    <span class="product-widget-number">(34)</span>
                                                </label>
                                            </li>
                                            <li class="product-widget-item">
                                                <div class="product-widget-checkbox">
                                                    <input type="checkbox" id="chcek12">
                                                </div>
                                                <label class="product-widget-label" for="chcek12">
                                                    <span class="product-widget-text">by cycle</span>
                                                    <span class="product-widget-number">(43)</span>
                                                </label>
                                            </li>
                                            <li class="product-widget-item">
                                                <div class="product-widget-checkbox">
                                                    <input type="checkbox" id="chcek13">
                                                </div>
                                                <label class="product-widget-label" for="chcek13">
                                                    <span class="product-widget-text">bike</span>
                                                    <span class="product-widget-number">(57)</span>
                                                </label>
                                            </li>
                                            <li class="product-widget-item">
                                                <div class="product-widget-checkbox">
                                                    <input type="checkbox" id="chcek14">
                                                </div>
                                                <label class="product-widget-label" for="chcek14">
                                                    <span class="product-widget-text">private car</span>
                                                    <span class="product-widget-number">(67)</span>
                                                </label>
                                            </li>
                                            <li class="product-widget-item">
                                                <div class="product-widget-checkbox">
                                                    <input type="checkbox" id="chcek15">
                                                </div>
                                                <label class="product-widget-label" for="chcek15">
                                                    <span class="product-widget-text">air condition</span>
                                                    <span class="product-widget-number">(98)</span>
                                                </label>
                                            </li>
                                            <li class="product-widget-item">
                                                <div class="product-widget-checkbox">
                                                    <input type="checkbox" id="chcek16">
                                                </div>
                                                <label class="product-widget-label" for="chcek16">
                                                    <span class="product-widget-text">apartment</span>
                                                    <span class="product-widget-number">(45)</span>
                                                </label>
                                            </li>
                                            <li class="product-widget-item">
                                                <div class="product-widget-checkbox">
                                                    <input type="checkbox" id="chcek17">
                                                </div>
                                                <label class="product-widget-label" for="chcek17">
                                                    <span class="product-widget-text">watch</span>
                                                    <span class="product-widget-number">(76)</span>
                                                </label>
                                            </li>
                                        </ul>
                                        <button type="submit" class="product-widget-btn">
                                            <i class="fas fa-broom"></i>
                                            <span>Clear Filter</span>
                                        </button>  
                                    </form>
                                </div>
                            </div> --}}
                            <div class="col-md-6 col-lg-12">
                                <div class="product-widget">
                                    <h6 class="product-widget-title">بحث بالفائات</h6>
                                    <form class="product-widget-form">
                                        <div class="product-widget-search">
                                            <input type="text" placeholder="search">
                                        </div>
                                        <ul class="product-widget-list product-widget-scroll">
                                            <li class="product-widget-dropitem">
                                                <button type="button" class="product-widget-link">
                                                    <i class="fas fa-tags"></i>
                                                    الكترونيا (234)
                                                </button>
                                                <ul class="product-widget-dropdown">
                                                    <li><a href="#">غساله (56)</a></li>
                                                    <li><a href="#">تكيف (78)</a></li>
                                                    <li><a href="#">تلفزيون (78)</a></li>
                                                </ul>
                                            </li>
                                            <li class="product-widget-dropitem">
                                                <button type="button" class="product-widget-link">
                                                    <i class="fas fa-tags"></i>
                                                    سيارات (767)
                                                </button>
                                                <ul class="product-widget-dropdown">
                                                    <li><a href="#">تيوتا (56)</a></li>
                                                    <li><a href="#">مارسدس (78)</a></li>
                                                    <li><a href="#">هونداي (78)</a></li>
                                                </ul>
                                            </li>
                                            <li class="product-widget-dropitem">
                                                <button type="button" class="product-widget-link">
                                                    <i class="fas fa-tags"></i>
                                                    حيوانات (124)
                                                </button>
                                                <ul class="product-widget-dropdown">
                                                    <li><a href="#">قطط (56)</a></li>
                                                    <li><a href="#">أبل (78)</a></li>
                                                    <li><a href="#">كلاب (78)</a></li>
                                                </ul>
                                            </li>
                                        
                                        </ul>
                                        <button type="submit" class="product-widget-btn">
                                            <i class="fas fa-broom"></i>
                                            <span>بحث</span>
                                        </button>  
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xl-9">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="header-filter">
                                    <div class="filter-show">
                                        <label class="filter-label">Show :</label>
                                        <select class="custom-select filter-select">
                                            <option value="1">12</option>
                                            <option value="2">24</option>
                                            <option value="3">36</option>
                                        </select>
                                    </div>
                                    <div class="filter-short">
                                        <label class="filter-label">Short by :</label>
                                        <select class="custom-select filter-select">
                                            <option selected>default</option>
                                            <option value="3">trending</option>
                                            <option value="1">featured</option>
                                            <option value="2">recommend</option>
                                        </select>
                                    </div>
                                    <div class="filter-action">
                                        <a href="ad-column3.html" title="Three Column" class="active"><i class="fas fa-th"></i></a>
                                        <a href="ad-column2.html" title="Two Column"><i class="fas fa-th-large"></i></a>
                                        <a href="ad-column1.html" title="One Column"><i class="fas fa-th-list"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ad-feature-slider slider-arrow">
                                    <div class="feature-card">
                                        <a href="#" class="feature-img">
                                            <img src="images/product/10.jpg" alt="feature">
                                        </a>
                                        <div class="cross-inline-badge feature-badge">
                                            <span>featured</span>
                                            <i class="fas fa-book-open"></i>
                                        </div>
                                        <button type="button" class="feature-wish">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                        <div class="feature-content">
                                            <ol class="breadcrumb feature-category">
                                                <li><span class="flat-badge rent">rent</span></li>
                                                <li class="breadcrumb-item"><a href="#">automobile</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">private car</li>
                                            </ol>
                                            <h3 class="feature-title"><a href="ad-details-left.html">fdfsffds</a></h3>
                                            <div class="feature-meta">
                                                <span class="feature-price">$1200<small>/</small></span>
                                                <span class="feature-time"><i class="fas fa-clock"></i>56 minute ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feature-card">
                                        <a href="#" class="feature-img">
                                            <img src="images/product/01.jpg" alt="feature">
                                        </a>
                                        <div class="cross-inline-badge feature-badge">
                                            <span>featured</span>
                                            <i class="fas fa-book-open"></i>
                                        </div>
                                        <button type="button" class="feature-wish">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                        <div class="feature-content">
                                            <ol class="breadcrumb feature-category">
                                                <li><span class="flat-badge sale">sale</span></li>
                                                <li class="breadcrumb-item"><a href="#">Property</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">House</li>
                                            </ol>
                                            <h3 class="feature-title"><a href="ad-details-left.html">fsdfsfsdfsfs</a></h3>
                                            <div class="feature-meta">
                                                <span class="feature-price">$800<small>/perday</small></span>
                                                <span class="feature-time"><i class="fas fa-clock"></i>56 minute ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feature-card">
                                        <a href="#" class="feature-img">
                                            <img src="images/product/08.jpg" alt="feature">
                                        </a>
                                        <div class="cross-inline-badge feature-badge">
                                            <span>featured</span>
                                            <i class="fas fa-book-open"></i>
                                        </div>
                                        <button type="button" class="feature-wish">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                        <div class="feature-content">
                                            <ol class="breadcrumb feature-category">
                                                <li><span class="flat-badge sale">sale</span></li>
                                                <li class="breadcrumb-item"><a href="#">gadget</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">iphone</li>
                                            </ol>
                                            <h3 class="feature-title"><a href="ad-details-left.html">Uffsdfsdfsdf</a></h3>
                                            <div class="feature-meta">
                                                <span class="feature-price">$1150<small>/Negotiable</small></span>
                                                <span class="feature-time"><i class="fas fa-clock"></i>56 minute ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feature-card">
                                        <a href="#" class="feature-img">
                                            <img src="images/product/06.jpg" alt="feature">
                                        </a>
                                        <div class="cross-inline-badge feature-badge">
                                            <span>featured</span>
                                            <i class="fas fa-book-open"></i>
                                        </div>
                                        <button type="button" class="feature-wish">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                        <div class="feature-content">
                                            <ol class="breadcrumb feature-category">
                                                <li><span class="flat-badge sale">sale</span></li>
                                                <li class="breadcrumb-item"><a href="#">automobile</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">cycle</li>
                                            </ol>
                                            <h3 class="feature-title"><a href="ad-details-left.html">fsfsfsd</a></h3>
                                            <div class="feature-meta">
                                                <span class="feature-price">$455<small>/fixed</small></span>
                                                <span class="feature-time"><i class="fas fa-clock"></i>56 minute ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                <div class="product-card">
                                    <div class="product-media">
                                        <div class="product-img">
                                            <img src="images/product/07.jpg" alt="product">
                                        </div>
                                        <div class="cross-vertical-badge product-badge">
                                            <i class="fas fa-clipboard-check"></i>
                                            <span>recommend</span>
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
                                            <li class="breadcrumb-item"><a href="#">Luxury</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">resort</li>
                                        </ol>
                                        <h5 class="product-title">
                                            <a href="#">معلومات المنتج  مثال</a>
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
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                <div class="product-card">
                                    <div class="product-media">
                                        <div class="product-img">
                                            <img src="images/product/08.jpg" alt="product">
                                        </div>
                                        <div class="cross-vertical-badge product-badge">
                                            <i class="fas fa-clipboard-check"></i>
                                            <span>recommend</span>
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
                                            <a href="#">معلومات المنتج  مثال</a>
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
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                <div class="product-card">
                                    <div class="product-media">
                                        <div class="product-img">
                                            <img src="images/product/09.jpg" alt="product">
                                        </div>
                                        <div class="cross-vertical-badge product-badge">
                                            <i class="fas fa-clipboard-check"></i>
                                            <span>recommend</span>
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
                                            <a href="#">معلومات المنتج  مثال</a>
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
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                <div class="product-card">
                                    <div class="product-media">
                                        <div class="product-img">
                                            <img src="images/product/10.jpg" alt="product">
                                        </div>
                                        <div class="cross-vertical-badge product-badge">
                                            <i class="fas fa-bolt"></i>
                                            <span>trending</span>
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
                                            <a href="#">معلومات المنتج  مثال</a>
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
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                <div class="product-card">
                                    <div class="product-media">
                                        <div class="product-img">
                                            <img src="images/product/11.jpg" alt="product">
                                        </div>
                                        <div class="cross-vertical-badge product-badge">
                                            <i class="fas fa-bolt"></i>
                                            <span>trending</span>
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
                                            <li class="breadcrumb-item"><a href="#">Luxury</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Duplex house</li>
                                        </ol>
                                        <h5 class="product-title">
                                            <a href="#">معلومات المنتج  مثال</a>
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
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                <div class="product-card">
                                    <div class="product-media">
                                        <div class="product-img">
                                            <img src="images/product/13.jpg" alt="product">
                                        </div>
                                        <div class="cross-vertical-badge product-badge">
                                            <i class="fas fa-bolt"></i>
                                            <span>trending</span>
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
                                            <a href="#">معلومات المنتج  مثال</a>
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
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
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
                                            <a href="#">معلومات المنتج  مثال</a>
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
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
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
                                            <a href="#">معلومات المنتج  مثال</a>
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
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                <div class="product-card">
                                    <div class="product-media">
                                        <div class="product-img">
                                            <img src="images/product/16.jpg" alt="product">
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
                                            <li class="breadcrumb-item"><a href="#">luxury</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">ship</li>
                                        </ol>
                                        <h5 class="product-title">
                                            <a href="#">معلومات المنتج  مثال</a>
                                        </h5>
                                        <div class="product-meta">
                                            <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                            <span><i class="fas fa-clock"></i>30 min ago</span>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-price">$1200<span>/per day</span></h5>
                                            <div class="product-btn">
                                                <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                                <button type="button" title="Wishlist" class="far fa-heart"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                <div class="product-card">
                                    <div class="product-media">
                                        <div class="product-img">
                                            <img src="images/product/02.jpg" alt="product">
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
                                            <li class="breadcrumb-item"><a href="#">fashion</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">shoes</li>
                                        </ol>
                                        <h5 class="product-title">
                                            <a href="#">معلومات المنتج  مثال</a>
                                        </h5>
                                        <div class="product-meta">
                                            <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                            <span><i class="fas fa-clock"></i>30 min ago</span>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-price">$578<span>/fixed</span></h5>
                                            <div class="product-btn">
                                                <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                                <button type="button" title="Wishlist" class="far fa-heart"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                <div class="product-card">
                                    <div class="product-media">
                                        <div class="product-img">
                                            <img src="images/product/03.jpg" alt="product">
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
                                            <li class="breadcrumb-item"><a href="#">education</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">book</li>
                                        </ol>
                                        <h5 class="product-title">
                                            <a href="#">معلومات المنتج  مثال</a>
                                        </h5>
                                        <div class="product-meta">
                                            <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                            <span><i class="fas fa-clock"></i>30 min ago</span>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-price">$57<span>/per week</span></h5>
                                            <div class="product-btn">
                                                <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                                <button type="button" title="Wishlist" class="far fa-heart"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                <div class="product-card">
                                    <div class="product-media">
                                        <div class="product-img">
                                            <img src="images/product/04.jpg" alt="product">
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
                                            <li class="breadcrumb-item active" aria-current="page">television</li>
                                        </ol>
                                        <h5 class="product-title">
                                            <a href="#">معلومات المنتج  مثال</a>
                                        </h5>
                                        <div class="product-meta">
                                            <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                            <span><i class="fas fa-clock"></i>30 min ago</span>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-price">$246<span>/Negotiable</span></h5>
                                            <div class="product-btn">
                                                <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                                <button type="button" title="Wishlist" class="far fa-heart"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="footer-pagection">
                                    <p class="page-info">Showing 12 of 60 Results</p>
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                <i class="fas fa-long-arrow-alt-right"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">...</li>
                                        <li class="page-item"><a class="page-link" href="#">67</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                <i class="fas fa-long-arrow-alt-left"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    AD LIST PART END
        =======================================-->


        <!--=====================================
                    FOOTER PART PART
        =======================================-->
        <footer class="footer-part">
            <div class="container">
                <div class="row newsletter">
                    <div class="col-lg-6">
                        <div class="news-content">
                            <h2>Subscribe for Latest Offers</h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, aliquid reiciendis! Exercitationem soluta provident non.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form class="news-form">
                            <input type="text" placeholder="Enter Your Email Address">
                            <button class="btn btn-inline">
                                <i class="fas fa-envelope"></i>
                                <span>Subscribe</span>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="footer-content">
                            <h3>Contact Us</h3>
                            <ul class="footer-address">
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <p>1420 West Jalkuri Fatullah, <span>Narayanganj, BD</span></p>
                                </li>
                                <li>
                                    <i class="fas fa-envelope"></i>
                                    <p>support@classicads.com <span>info@classicads.com</span></p>
                                </li>
                                <li>
                                    <i class="fas fa-phone-alt"></i>
                                    <p>+8801838288389 <span>+8801941101915</span></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="footer-content">
                            <h3>Quick Links</h3>
                            <ul class="footer-widget">
                                <li><a href="#">Store Location</a></li>
                                <li><a href="#">Orders Tracking</a></li>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Size Guide</a></li>
                                <li><a href="#">Faq</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="footer-content">
                            <h3>Information</h3>
                            <ul class="footer-widget">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Delivery System</a></li>
                                <li><a href="#">Secure Payment</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Sitemap</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="footer-info">
                            <a href="#"><img src="images/logo.png" alt="logo"></a>
                            <ul class="footer-count">
                                <li>
                                    <h5>929,238</h5>
                                    <p>Registered Users</p>
                                </li>
                                <li>
                                    <h5>242,789</h5>
                                    <p>Community Ads</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-card-content">
                            <div class="footer-payment">
                                <a href="#"><img src="images/pay-card/01.jpg" alt="01"></a>
                                <a href="#"><img src="images/pay-card/02.jpg" alt="02"></a>
                                <a href="#"><img src="images/pay-card/03.jpg" alt="03"></a>
                                <a href="#"><img src="images/pay-card/04.jpg" alt="04"></a>
                            </div>
                            <div class="footer-option">
                                <button type="button" data-toggle="modal" data-target="#language"><i class="fas fa-globe"></i>English</button>
                                <button type="button" data-toggle="modal" data-target="#currency"><i class="fas fa-dollar-sign"></i>USD</button>
                            </div>
                            <div class="footer-app">
                                <a href="#"><img src="images/play-store.png" alt="play-store"></a>
                                <a href="#"><img src="images/app-store.png" alt="app-store"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-end">
                <div class="container">
                    <div class="footer-end-content">
                        <p>All Copyrights Reserved &copy; 2021 - Developed by <a href="#">Mironcoder</a></p>
                        <ul class="footer-social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--=====================================
                    FOOTER PART END
        =======================================-->


        <!--=====================================
                  CURRENCY MODAL PART START
        =======================================-->
        <div class="modal fade" id="currency">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>Choose a Currency</h4>
                        <button class="fas fa-times" data-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <button class="modal-link active">United States Doller (USD) - $</button>
                        <button class="modal-link">Euro (EUR) - €</button>
                        <button class="modal-link">British Pound (GBP) - £</button>
                        <button class="modal-link">Australian Dollar (AUD) - A$</button>
                        <button class="modal-link">Canadian Dollar (CAD) - C$</button>
                    </div>
                </div>
            </div>
        </div>
        <!--=====================================
                  CURRENCY MODAL PART END
        =======================================-->


        <!--=====================================
                  LANGUAGE MODAL PART END
        =======================================-->
        <div class="modal fade" id="language">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>Choose a Language</h4>
                        <button class="fas fa-times" data-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <button class="modal-link active">English</button>
                        <button class="modal-link">bangali</button>
                        <button class="modal-link">arabic</button>
                        <button class="modal-link">germany</button>
                        <button class="modal-link">spanish</button>
                    </div>
                </div>
            </div>
        </div>
        <!--=====================================
                   LANGUAGE MODAL PART END
        =======================================-->

        
        <!--=====================================
                    JS LINK PART START
        =======================================-->
        <!-- VENDOR -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/vendor/popper.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/slick.min.js"></script>

        <!-- CUSTOM -->
        <script src="js/custom/slick.js"></script>
        <script src="js/custom/main.js"></script>
        <!--=====================================
                    JS LINK PART END
        =======================================-->
    </body>
</html>





