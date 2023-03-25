<header class="header-part">
    <div class="container" style="background-color: {{ $setting }}">
        <div class="header-content">
            <div class="header-left">
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
                <button type="button" class="header-widget search-btn">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            <form class="header-form">
                <div class="header-search">
                    <button type="submit" title="Search Submit "><i class="fas fa-search"></i></button>
                    <input type="text" placeholder="{{ __('lang.search_header') }}">

                    <button type="submit"><i class="fas fa-search"></i></button>
                </div>

            </form>
            <div class="header-right">
                <ul class="header-list">
                    <li class="header-item">
                        <button type="button" class="header-widget">
                            <i class="fas fa-language"></i>
                        </button>
                        <div class="dropdown-card">
                            <ul class="language-list">
                                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <li class="message-item">
                                        <a class="message-link" rel="alternate" hreflang="{{ $localeCode }}"
                                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ $properties['native'] }}
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </li>
                    @if (Auth::user())
                        <li class="header-item">
                            <button type="button" class="header-widget">
                                <i class="fas fa-envelope"></i>
                                <sup>0</sup>
                            </button>
                            <div class="dropdown-card">
                                <div class="dropdown-header">
                                    <h5>{{ __('lang.message') }} (2)</h5>
                                    <a
                                        href="{{ route('getUserRooms', Auth::user()->id) }}">{{ __('lang.view all') }}</a>
                                </div>
                                <ul class="message-list">
                                    {{-- <li class="message-item unread">
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
                                    </li> --}}

                                </ul>
                            </div>
                        </li>
                    @endif
                    {{-- <li class="header-item">
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
                    </li> --}}
                    {{-- <li class="header-item">
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
                                            <p class="notify-text"><span>shipu ahmed</span> and <span>4 other</span>
                                                have seen your contact number</p>
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
                                            <p class="notify-text"><span>azam khan</span> and <span>4 other</span> have
                                                seen your contact number</p>
                                            <span class="notify-time">1 years ago</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li> --}}
                </ul>
                <a href="{{ route('ads.post') }}" class="btn btn-inline post-btn">
                    <i class="fas fa-plus-circle"></i>
                    <span>{{ __('lang.post_ad') }}</span>
                </a>
            </div>
        </div>
    </div>
</header>
