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
    <title>Blog Details - Classicads</title>

    <!--=====================================
                    CSS LINK PART START
        =======================================-->
    <!-- FAVICON -->
    <link rel="icon" href="images/favicon.png">

    <!-- FONTS -->
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome/fontawesome.css') }}">

    <!-- VENDOR -->
    <link rel="stylesheet" href="{{ asset('css/vendor/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}">

    <!-- CUSTOM -->
    <link rel="stylesheet" href="{{ asset('css/custom/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom/blog-details.css') }}">
    <!--=====================================
                    CSS LINK PART END
        =======================================-->
</head>

<body>
    <!--=====================================
                    HEADER PART START
        =======================================-->
    <header class="header-part">
        <div class="container">
            <div class="header-content">
                <div class="header-left">
                    <button type="button" class="header-widget sidebar-btn">
                        <i class="fas fa-align-right"></i>
                    </button>
                    <a href="index.html" class="header-logo">
                        <img src="images/logo.png" alt="logo">
                    </a>
                    <a href="user-form.html" class="header-widget header-user">
                        <img src="images/user.png" alt="user">
                        <span>join me</span>
                    </a>
                    <button type="button" class="header-widget search-btn">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
                <form class="header-form">
                    <div class="header-search">
                        <button type="submit" title="Search Submit "><i class="fas fa-search"></i></button>
                        <input type="text" placeholder="Search, Whatever you needs...">
                        <button type="button" title="Search Option" class="option-btn"><i
                                class="fas fa-sliders-h"></i></button>
                    </div>
                    <div class="header-option">
                        <div class="option-grid">
                            <div class="option-group"><input type="text" placeholder="City"></div>
                            <div class="option-group"><input type="text" placeholder="State"></div>
                            <div class="option-group"><input type="text" placeholder="Min Price"></div>
                            <div class="option-group"><input type="text" placeholder="Max Price"></div>
                            <button type="submit"><i class="fas fa-search"></i><span>Search</span></button>
                        </div>
                    </div>
                </form>
                <div class="header-right">
                    <ul class="header-list">
                        <li class="header-item">
                            <a href="bookmark.html" class="header-widget">
                                <i class="fas fa-heart"></i>
                                <sup>0</sup>
                            </a>
                        </li>
                        <li class="header-item">
                            <button type="button" class="header-widget">
                                <i class="fas fa-envelope"></i>
                                <sup>0</sup>
                            </button>
                            <div class="dropdown-card">
                                <div class="dropdown-header">
                                    <h5>message (2)</h5>
                                    <a href="message.html">view all</a>
                                </div>
                                <ul class="message-list">
                                    <li class="message-item unread">
                                        <a href="message.html" class="message-link">
                                            <div class="message-img active">
                                                <img src="images/avatar/01.jpg" alt="avatar">
                                            </div>
                                            <div class="message-text">
                                                <h6>miron mahmud <span>now</span></h6>
                                                <p>How are you my best frien...</p>
                                            </div>
                                            <span class="message-count">4</span>
                                        </a>
                                    </li>
                                    <li class="message-item">
                                        <a href="message.html" class="message-link">
                                            <div class="message-img active">
                                                <img src="images/avatar/03.jpg" alt="avatar">
                                            </div>
                                            <div class="message-text">
                                                <h6>shipu ahmed <span>3m</span></h6>
                                                <p><span>me:</span>How are you my best frien...</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="message-item unread">
                                        <a href="message.html" class="message-link">
                                            <div class="message-img">
                                                <img src="images/avatar/02.jpg" alt="avatar">
                                            </div>
                                            <div class="message-text">
                                                <h6>tahmina bonny <span>2h</span></h6>
                                                <p>How are you my best frien...</p>
                                            </div>
                                            <span class="message-count">12</span>
                                        </a>
                                    </li>
                                    <li class="message-item">
                                        <a href="message.html" class="message-link">
                                            <div class="message-img active">
                                                <img src="images/avatar/04.jpg" alt="avatar">
                                            </div>
                                            <div class="message-text">
                                                <h6>nasrullah <span>5d</span></h6>
                                                <p>How are you my best frien...</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="message-item">
                                        <a href="message.html" class="message-link">
                                            <div class="message-img">
                                                <img src="images/user.png" alt="avatar">
                                            </div>
                                            <div class="message-text">
                                                <h6>saikul azam <span>7w</span></h6>
                                                <p><span>me:</span>How are you my best frien...</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="message-item">
                                        <a href="message.html" class="message-link">
                                            <div class="message-img active">
                                                <img src="images/avatar/02.jpg" alt="avatar">
                                            </div>
                                            <div class="message-text">
                                                <h6>munni akter <span>9m</span></h6>
                                                <p>How are you my best frien...</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="message-item">
                                        <a href="message.html" class="message-link">
                                            <div class="message-img active">
                                                <img src="images/avatar/03.jpg" alt="avatar">
                                            </div>
                                            <div class="message-text">
                                                <h6>shahin alam <span>1y</span></h6>
                                                <p>How are you my best frien...</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="header-item">
                            <button type="button" class="header-widget">
                                <i class="fas fa-bell"></i>
                                <sup>0</sup>
                            </button>
                            <div class="dropdown-card">
                                <div class="dropdown-header">
                                    <h5>Notification (1)</h5>
                                    <a href="notification.html">view all</a>
                                </div>
                                <ul class="notify-list">
                                    <li class="notify-item active">
                                        <a href="#" class="notify-link">
                                            <div class="notify-img">
                                                <img src="images/avatar/01.jpg" alt="avatar">
                                            </div>
                                            <div class="notify-content">
                                                <p class="notify-text"><span>miron mahmud</span> has added the
                                                    advertisement post of your <span>booking</span> to his wishlist.</p>
                                                <span class="notify-time">just now</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notify-item">
                                        <a href="#" class="notify-link">
                                            <div class="notify-img">
                                                <img src="images/avatar/02.jpg" alt="avatar">
                                            </div>
                                            <div class="notify-content">
                                                <p class="notify-text"><span>tahmina bonny</span> gave you a
                                                    <span>comment</span> and 5 star <span>review.</span>
                                                </p>
                                                <span class="notify-time">2 hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notify-item">
                                        <a href="#" class="notify-link">
                                            <div class="notify-img">
                                                <img src="images/avatar/03.jpg" alt="avatar">
                                            </div>
                                            <div class="notify-content">
                                                <p class="notify-text"><span>shipu ahmed</span> and <span>4
                                                        other</span> have seen your contact number</p>
                                                <span class="notify-time">3 minutes ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notify-item">
                                        <a href="#" class="notify-link">
                                            <div class="notify-img">
                                                <img src="images/avatar/02.jpg" alt="avatar">
                                            </div>
                                            <div class="notify-content">
                                                <p class="notify-text"><span>miron mahmud</span> has added the
                                                    advertisement post of your <span>booking</span> to his wishlist.</p>
                                                <span class="notify-time">5 days ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notify-item">
                                        <a href="#" class="notify-link">
                                            <div class="notify-img">
                                                <img src="images/avatar/04.jpg" alt="avatar">
                                            </div>
                                            <div class="notify-content">
                                                <p class="notify-text"><span>labonno khan</span> gave you a
                                                    <span>comment</span> and 5 star <span>review.</span>
                                                </p>
                                                <span class="notify-time">4 months ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notify-item">
                                        <a href="#" class="notify-link">
                                            <div class="notify-img">
                                                <img src="images/avatar/01.jpg" alt="avatar">
                                            </div>
                                            <div class="notify-content">
                                                <p class="notify-text"><span>azam khan</span> and <span>4 other</span>
                                                    have seen your contact number</p>
                                                <span class="notify-time">1 years ago</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <a href="ad-post.html" class="btn btn-inline post-btn">
                        <i class="fas fa-plus-circle"></i>
                        <span>post your ad</span>
                    </a>
                </div>
            </div>
        </div>
    </header>
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
                                    <li><a class="dropdown-link" href="category-details.html">category details</a>
                                    </li>
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
                                    <li><a class="dropdown-link" href="ad-details-right.html">ad details right</a>
                                    </li>
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
    <section class="single-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-content">
                        <h2>blog details</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="blog-list.html">blog-list</a></li>
                            <li class="breadcrumb-item active" aria-current="page">blog-details</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                  SINGLE BANNER PART END
        =======================================-->


    <!--=========================================
                    BLOG DETAILS PART START
        ===========================================-->
    <section class="blog-details-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="blog-details-title">
                        <h2><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit maxime tempore
                                natus laborum autem.</a></h2>
                    </div>
                    <ul class="blog-details-meta">
                        <li>
                            <a href="#">
                                <i class="far fa-user"></i>
                                <p>MironMahmud</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-calendar-alt"></i>
                                <p>02 Feb 2020</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-folder-open"></i>
                                <p>advertising</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-comments"></i>
                                <p>37 Comment</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-share-square"></i>
                                <p>21 Share</p>
                            </a>
                        </li>
                    </ul>
                    <div class="blog-details-image">
                        <img src="images/blog/01.jpg" alt="blog-details">
                    </div>
                    <div class="blog-details-content">
                        <div class="description">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore incidunt harum ea a
                                dolorem neque labore animi? Asperiores necessitatibus voluptate ut iure alias, odit
                                animi consequuntur fugiat esse atque sit aut reprehenderit mollitia dignissimos quasi
                                vel quo neque eaque voluptates provident qui. At, debitis corporis. Asperiores quod,
                                dolorum earum sunt eveniet dolores similique amet? Neque vel dolores quasi reiciendis
                                rem dicta amet, ab tempore? Porro quos, alias nisi adipisci sed et architecto quis ipsam
                                minus sint! Consequuntur minima excepturi dolor, nostrum dolore asperiores, atque
                                laudantium magnam consequatur pariatur porro repellendus Perspiciatis labore libero
                                quibusdam nobis dicta eum ipsam enim nisi.</p>
                        </div>
                        <div class="sub-content">
                            <h3>How to manage your advertise?</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos quasi deleniti voluptatem
                                sint incidunt quos corporis recusandae repudiandae aspernatur voluptates omnis illum
                                quaerat quidem veritatis, facilis enim quis quo ipsam ipsa doloribus, nostrum adipisci
                                eligendi <a href="#">consequuntur</a> consequatur. Animi molestias ab ex eius,
                                doloremque corporis sunt alias non deleniti doloribus</p>
                        </div>
                        <div class="quote-content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id distinctio nulla velit est
                                quidem repellendus esse non saepe cumque sapiente.</p>
                            <h5><a href="">jaurge anderson</a></h5>
                        </div>
                        <ul class="list-content">
                            <li>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus quaerat tenetur, <a
                                        href="#">aperiam</a> odit, ratione eligendi nulla quae praesentium quo, a
                                    reiciendis inventore facilis veniam voluptates.</p>
                            </li>
                            <li>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad ullam impedit,
                                    architecto porro voluptas sequi ab beatae saepe quo magnam</p>
                            </li>
                            <li>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit Ad ullam impedit architecto
                                    porro.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="blog-details-widget">
                        <ul class="tag-list">
                            <li>
                                <h4>Tags:</h4>
                            </li>
                            <li><a href="#">Crowd</a></li>
                            <li><a href="#">Party</a></li>
                            <li><a href="#">Concert</a></li>
                        </ul>
                        <ul class="share-list">
                            <li>
                                <h4>Share:</h4>
                            </li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                    <div class="blog-details-author">
                        <div class="author-intro">
                            <a href="#"><img src="images/avatar/01.jpg" alt="author"></a>
                            <h4><a href="#">MironMahmud</a></h4>
                            <p><a href="#">www.mironmahmud.com</a></p>
                        </div>
                        <div class="author-content">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate temporibus harum
                                laborum quaerat blanditiis iste mollitia aperiam aut voluptates quidem nois aliquam
                                incidunt expedita odit id repellat dicta Odio consectetur modi mollitia nihil Deserunt
                                ab non tenetur quasi libero magni eos tempora iure facere dolores accusantium.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="blog-card">
                                <div class="blog-img">
                                    <img src="images/blog/02.jpg" alt="blog">
                                    <div class="blog-overlay">
                                        <span class="advertise">advertise</span>
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
                                        <h4><a href="#">Lorem ipsum dolor sit amet eius minus elit cum quaerat
                                                volupt.</a></h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus veniam ad
                                            dolore labore laborum perspiciatis...</p>
                                    </div>
                                    <a href="#" class="blog-read">
                                        <span>read more</span>
                                        <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="blog-card">
                                <div class="blog-img">
                                    <img src="images/blog/03.jpg" alt="blog">
                                    <div class="blog-overlay">
                                        <span class="safety">safety</span>
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
                                        <h4><a href="#">Lorem ipsum dolor sit amet eius minus elit cum quaerat
                                                volupt.</a></h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus veniam ad
                                            dolore labore laborum perspiciatis...</p>
                                    </div>
                                    <a href="#" class="blog-read">
                                        <span>read more</span>
                                        <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="blog-details-navigate">
                                <a href="#">
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                    <span>Previous Post</span>
                                </a>
                                <a href="#">
                                    <span>Next Post</span>
                                    <i class="fas fa-long-arrow-alt-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-details-comment">
                        <div class="comment-title">
                            <h3>Comments (3)</h3>
                        </div>
                        <ul class="comment-list">
                            <li>
                                <div class="comment">
                                    <div class="comment-author">
                                        <a href="#"><img src="images/avatar/01.jpg" alt="comment"></a>
                                        <button class="btn btn-inline">
                                            <i class="fas fa-reply-all"></i>
                                            <span>reply</span>
                                        </button>
                                    </div>
                                    <div class="comment-content">
                                        <h4>
                                            <a href="#">MironMahmud</a>
                                            <span>02 February 2020</span>
                                        </h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab aperiam
                                            corrupti maiores animi nisi ratione maxime quae in doloremque corporis
                                            tempore earum ut voluptas exercitationem.</p>
                                    </div>
                                </div>
                                <ul>
                                    <li>
                                        <div class="comment">
                                            <div class="comment-author">
                                                <a href="#"><img src="images/avatar/02.jpg" alt="comment"></a>
                                                <button class="btn btn-inline">
                                                    <i class="fas fa-reply-all"></i>
                                                    <span>reply</span>
                                                </button>
                                            </div>
                                            <div class="comment-content">
                                                <h4>
                                                    <a href="#">LabonnoKhan</a>
                                                    <span>02 February 2020</span>
                                                </h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab
                                                    aperiam corrupti maiores animi nisi ratione maxime quae in
                                                    doloremque corporis tempore earum ut voluptas exercitationem.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="comment">
                                    <div class="comment-author">
                                        <a href="#"><img src="images/avatar/03.jpg" alt="comment"></a>
                                        <button class="btn btn-inline">
                                            <i class="fas fa-reply-all"></i>
                                            <span>reply</span>
                                        </button>
                                    </div>
                                    <div class="comment-content">
                                        <h4>
                                            <a href="#">MironMahmud</a>
                                            <span>02 February 2020</span>
                                        </h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab aperiam
                                            corrupti maiores animi nisi ratione maxime quae in doloremque corporis
                                            tempore earum ut voluptas exercitationem.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="blog-details-form">
                        <div class="form-title">
                            <h3>Leave Your Comment</h3>
                        </div>
                        <form>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Your Comment"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-btn">
                                        <button type="submit" class="btn btn-inline">
                                            <i class="fas fa-tint"></i>
                                            <span>Drop your comment</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================================
                    BLOG DETAILS PART END
        ===========================================-->


    <!--=====================================
                    FOOTER PART PART
        =======================================-->
    <footer class="footer-part">
        <div class="container">
            <div class="row newsletter">
                <div class="col-lg-6">
                    <div class="news-content">
                        <h2>Subscribe for Latest Offers</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, aliquid reiciendis!
                            Exercitationem soluta provident non.</p>
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
                            <button type="button" data-toggle="modal" data-target="#language"><i
                                    class="fas fa-globe"></i>English</button>
                            <button type="button" data-toggle="modal" data-target="#currency"><i
                                    class="fas fa-dollar-sign"></i>USD</button>
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
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/vendor/slick.min.js') }}"></script>

    <!-- CUSTOM -->
    <script src="{{ asset('js/custom/slick.js') }}"></script>
    <script src="{{ asset('js/custom/main.js') }}"></script>
    <!--=====================================
                    JS LINK PART END
        =======================================-->
</body>

</html>
