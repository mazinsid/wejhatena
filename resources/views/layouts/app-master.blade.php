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
        <link rel="icon" href="{{ asset('images/favicon.png') }}">

        <!-- FONTS -->
        <link rel="stylesheet" href="{{ asset('fonts/flaticon/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('fonts/font-awesome/fontawesome.css') }}">

        <!-- VENDOR -->
        <link rel="stylesheet" href="{{ asset('css/vendor/slick.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}">

        <!-- CUSTOM -->
        <link rel="stylesheet" href="{{ asset('css/custom/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom/index.css') }}">
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
        </style>
        @stack('styles')
    </head>
    <body>
        @include('layout.header', ['setting' => $setting->color ?? '#04b']);
        <div>
            @yield('content')
        </div>
        @include('layout.footer')

        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/vendor/popper.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/slick.min.js"></script>

        <!-- CUSTOM -->
        <script src="js/custom/slick.js"></script>
        <script src="js/custom/main.js"></script>
        @stack('scripts')
    </body>
</html>
