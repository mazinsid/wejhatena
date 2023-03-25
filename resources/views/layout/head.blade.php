<head>

    <!--=====================================
                        META-TAG PART START
            =======================================-->
    <!-- REQUIRE META -->

    <!--=====================================
                        META-TAG PART END
            =======================================-->

    <!-- FOR WEBPAGE TITLE -->
    <title>wejhatena</title>

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
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--=====================================
                CSS LINK PART START
    =======================================-->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    @if (App::getLocale() == 'ar')
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&display=swap"
            rel="stylesheet">
    @else
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700;900&display=swap"
            rel="stylesheet">
    @endif


    <!--=====================================
                        CSS LINK PART START
            =======================================-->
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome/fontawesome.css') }}">

    <!-- CUSTOM -->
    <link rel="stylesheet" href="{{ asset('css/custom/index.css') }}">
    <link rel="icon" href="{{ asset('images/logo2.jpeg') }}">

    <!-- FONTS -->
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome/fontawesome.css') }}">

    <!-- VENDOR -->
    <link rel="stylesheet" href="{{ asset('css/vendor/emojionearea.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/vendor/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}">

    <!-- CUSTOM -->

    <link rel="stylesheet" href="{{ asset('css/custom/message.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom/ad-details.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom/ad-post.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dropzone.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

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
