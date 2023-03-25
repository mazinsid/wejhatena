@include('layout.admin_header')

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 sidebar">
                <nav class="side-nav">
                    <ul class="nav-menu">
                        <li class="nav-item"><a href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i><span
                                    class="menu-text">{{ __('admin.dashboard') }}</span></a></li>
                        <li class="nav-item"><a href="{{ route('users.index') }}"><i class="fas fa-user"></i><span
                                    class="menu-text">{{ __('admin.users_admin') }}</span></a></li>
                        <li class="nav-item"><a href="{{ route('roles.index') }}"><i class="fas fa-user"></i><span
                                    class="menu-text">{{ __('admin.roles') }}</span></a></li>

                        <li class="nav-item"><a href="{{ route('permissions.index') }}"><i class="fas fa-user"></i><span
                                    class="menu-text">{{ __('admin.permissions') }}</span></a></li>
                        <li class="nav-item"><a href="{{ route('admin.ads') }}"><i class="fas fa-file-alt"></i><span
                                    class="menu-text">{{ __('admin.ads') }}</span></a></li>
                        <li class="nav-item"><a href="{{ route('category') }}"><i class="fas fa-play "></i><span
                                    class="menu-text">{{ __('admin.categories') }}</span></a></li>
                        <li class="nav-item"><a href="{{ route('country') }}"><i class="fas fa-play "></i><span
                                    class="menu-text">{{ __('admin.countries') }}</span></a></li>
                        <li class="nav-item"><a href="{{ route('ads_type') }}"><i class="fas fa-play "></i><span
                                    class="menu-text">{{ __('admin.type') }}</span></a></li>
                        <li class="nav-item"><a href="{{ route('external') }}"><i class="fas fa-play "></i><span
                                    class="menu-text">{{ __('admin.external') }}</span></a></li>
                        <li class="nav-item"><a href="{{ route('news_ads') }}"><i class="fas fa-play "></i><span
                                    class="menu-text">{{ __('admin.news_ads') }}</span></a></li>
                        <li class="nav-item"><a href="{{ route('setting') }}"><i class="fas fa-play "></i><span
                                    class="menu-text">{{ __('admin.setting') }}</span></a></li>
                        <li class="nav-item"><a href="{{ route('subscription') }}"><i
                                    class="fas fa-sign-out-alt"></i><span
                                    class="menu-text">{{ __('admin.subscription') }}</span></a></li>
                        <li class="nav-item"><a href="#"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit()"><i
                                    class="fas fa-sign-out-alt"></i><span
                                    class="menu-text">{{ __('admin.logout') }}</span>
                                <form method="POST" clas="d-none" id="logout-form" action="{{ route('logout') }}">
                                    @csrf
                                </form>
                            </a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-9 content">
                @yield('content')
            </div>
        </div>
    </div>
</body>
@include('layout.admin_footer')
