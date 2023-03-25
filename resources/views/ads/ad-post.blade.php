<!DOCTYPE html>
<html lang="en" dir="rtl">
@include('layout.head')

<body>
    <!--=====================================
                    HEADER PART START
        =======================================-->
    {{-- <header class="header-part">
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
                            <button type="button" title="Search Option" class="option-btn"><i class="fas fa-sliders-h"></i></button>
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
                                                    <p class="notify-text"><span>miron mahmud</span> has added the advertisement post of your <span>booking</span> to his wishlist.</p>
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
                                                    <p class="notify-text"><span>tahmina bonny</span> gave you a <span>comment</span> and 5 star <span>review.</span></p>
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
                                                    <p class="notify-text"><span>shipu ahmed</span> and <span>4 other</span> have seen your contact number</p>
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
                                                    <p class="notify-text"><span>miron mahmud</span> has added the advertisement post of your <span>booking</span> to his wishlist.</p>
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
                                                    <p class="notify-text"><span>labonno khan</span> gave you a <span>comment</span> and 5 star <span>review.</span></p>
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
                                                    <p class="notify-text"><span>azam khan</span> and <span>4 other</span> have seen your contact number</p>
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
        </header> --}}
    @include('layout.header')
    <!--=====================================
                    HEADER PART END
        =======================================-->


    <!--=====================================
                    MOBILE-NAV PART START
        =======================================-->
    {{-- @include('layout.nav') --}}
    <!--=====================================
                    MOBILE-NAV PART END
        =======================================-->


    <!--=====================================
                  SINGLE BANNER PART START
        =======================================-->
    <section class="single-banner dashboard-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-content">
                        <h2>ad post</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">ad-post</li>
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
                    ADPOST PART START
        =======================================-->
    <section class="adpost-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <form id="place-ads-form" action="{{ route('ads.stepOne') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="category" class="form-label">{{ __('lang.category') }}</label>
                            <div class="group-tag">
                                <select name="category" id="category" class="form-select" data-live-search="true"
                                    required autocomplete="off">
                                    <option value="" disabled selected>{{ __('lang.select_a_category') }}</option>
                                    @foreach ($categories as $category)
                                        @if ($category->subcategories->count() > 0)
                                            <optgroup
                                                label="@if (App::getLocale() == 'ar' && $category->name_ar) {{ ucwords($category->name_ar) }} @else {{ ucwords($category->name_en) }} @endif">
                                                @foreach ($category->subcategories as $subcategory)
                                                    <option value="s-{{ $subcategory->id }}"
                                                        data-parent="{{ ucwords($category->name_ar) }}">
                                                        @if (App::getLocale() == 'ar' && $subcategory->name_ar)
                                                            {{ ucwords($category->name_ar . ' > ' . $subcategory->name_ar) }}
                                                        @else
                                                            {{ ucwords($category->name_en . ' > ' . $subcategory->name_en) }}
                                                        @endif
                                                    </option>
                                                @endforeach
                                            </optgroup>
                                        @else
                                            <option value="{{ $category->id }}">
                                                @if (App::getLocale() == 'ar' && $category->name_ar)
                                                    {{ ucwords($category->name_ar) }}
                                                @else
                                                    {{ ucwords($category->name_en) }}
                                                @endif
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                                {{-- <img class="select-caret" src="{{ asset('images/caret.png') }}" alt=""> --}}
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="types" class="form-label">{{ __('lang.type') }}</label>
                            <div class="group-tag">
                                <select name="types" id="types" class="form-select" data-live-search="true"
                                    required autocomplete="off">
                                    <option value="{{ 0 }}" disabled selected>
                                        {{ __('lang.select_a_type') }}</option>
                                    @foreach ($types as $type)
                                        <option value="{{ $type->id }}">
                                            @if (App::getLocale() == 'ar' && $type->name_ar)
                                                {{ $type->name_ar }}
                                            @else
                                                {{ ucwords($type->name_en) }}
                                            @endif
                                        </option>
                                    @endforeach
                                </select>
                                {{-- <img class="select-caret" src="{{ asset('images/caret.png') }}" alt=""> --}}
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="countries"
                                class="form-label posting-location">{{ __('lang.countries') }}</label>
                            <select name="countries" id="country-select" class="form-select" data-live-search="true"
                                required autocomplete="off">
                                <option value="{{ 0 }}">{{ __('lang.all') }}</option>
                                @foreach ($countries as $country)
                                    <option data-id="{{ $country->id }}" value="{{ $country->id }}">
                                        @if (App::getLocale() == 'ar' && $country->name_ar)
                                            {{ $country->name_ar }}
                                        @else
                                            {{ ucwords($country->name_en) }}
                                        @endif
                                    </option>
                                @endforeach
                            </select>
                            {{-- <img class="select-caret" src="{{ asset('images/caret.png') }}" alt=""> --}}
                        </div>
                        <div class="mb-3">
                            <label for="location" class="form-label posting-location">{{ __('lang.cities') }}</label>
                            <select name="cities" id="cities" class="form-select" data-live-search="true" required
                                autocomplete="off">
                                <option value="all">{{ __('lang.all_cities') }}</option>
                            </select>
                        </div>
                </div>

                <div class="group-tag d-none" id="district_container">
                    <label for="types" class="form-label">{{ __('lang.district') }}</label>
                    <select name="types" id="types" class="form-select" data-live-search="true"
                        autocomplete="off">
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">{{ __('lang.title_en') }}</label>
                <input type="text" class="form-control d-none" name="name_en" id="name_en"
                    placeholder="{{ __('lang.title_plceholder') }}" autocomplete="off">
                <input type="text" class="form-control mt-15" name="name_en" id="name_en"
                    placeholder="{{ __('lang.title_plceholder') }}" autocomplete="off" required>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">{{ __('lang.title_ar') }}</label>
                <input type="text" class="form-control d-none" name="name_ar" id="name_ar"
                    placeholder="{{ __('lang.title_plceholder') }}" autocomplete="off">
                <input type="text" class="form-control mt-15" name="name_ar" id="name_ar"
                    placeholder="{{ __('lang.title_plceholder') }}" autocomplete="off" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">{{ __('lang.description_en') }}</label>
                <div class="textarea-cont">
                    <textarea name="description_en" id="description_en" cols="30" rows="5" class="form-control d-none"
                        placeholder="{{ __('lang.description_placeholder') }}" autocomplete="off"></textarea>
                    <textarea name="description_en" id="description_en" cols="30" rows="5" class="form-control mt-15"
                        placeholder="{{ __('lang.description_placeholder') }}" dir="rtl" autocomplete="off" required></textarea>
                </div>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">{{ __('lang.description_ar') }}</label>
                <div class="textarea-cont">
                    <textarea name="description_ar" id="description_ar" cols="30" rows="5" class="form-control d-none"
                        placeholder="{{ __('lang.description_placeholder') }}" autocomplete="off"></textarea>
                    <textarea name="description_ar" id="description_ar" cols="30" rows="5" class="form-control mt-15"
                        placeholder="{{ __('lang.description_placeholder') }}" dir="rtl" autocomplete="off" required></textarea>
                </div>
            </div>

            <div class="mt-3 mb-3 btn-ad-div">
                <button class="place-ad-next btn-bg-red">{{ __('button.step_tow') }}</button>
            </div>
            </form>
        </div>

        </div>
        </div>
    </section>
    <!--=====================================
                    ADPOST PART END
        =======================================-->
    @include('layout.footer')
    <!--=====================================
                  CURRENCY MODAL PART END
        =======================================-->



    <script type="text/javascript">
        /* Load cities into postion <selec> */
        $("#country-select").change(function() {
            $.getJSON("/ads/" + $(this).val() + "/getCities", function(jsonData) {
                select = '<option value="all">{{ __('lang.all_cities') }}</option>';
                $.each(jsonData, function(i, data) {
                    select += '<option value="' + data.id +
                        '">@if (App::getLocale() == 'ar' && '+data.name_ar+')' + data.name_ar +
                        '@else {{ ucwords('+data.name_en+') }} @endif</option>';
                });
                select += '</select>';
                $("#cities").html(select);
            });
        });
    </script>
</body>

</html>
