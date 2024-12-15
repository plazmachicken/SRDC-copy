<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SRDC</title>
    <link rel="stylesheet" href="homepagestyle.css">

    <style>
        .nav-item .dropdown-toggle {
            padding: 0 !important;
            /* Remove padding around the toggle */
            border: none !important;
            /* Remove any border around the toggle */
        }

        .nav-item .user-img img {
            border: none;
            /* Ensure no border on image */
        }

        .nav-item .dropdown-menu {
            border-radius: 8px;
            /* Rounded corners for dropdown */
            padding: 10px;
            /* Padding inside dropdown */
            border: none;
            /* Remove any border */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            /* Subtle shadow */
        }

        .dropdown-menu .user-header {
            padding-bottom: 10px;
            /* Space for user info */
            border-bottom: 1px solid #e0e0e0;
            /* Light separator */
            margin-bottom: 10px;
        }

        .dropdown-menu .dropdown-item {
            color: #333;
            /* Item color */
            padding: 8px 12px;
        }

        .dropdown-menu .dropdown-item:hover {
            background-color: #f8f9fa;
            /* Light hover effect */
        }

        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
        }

        header {
            background-color: white;
            color: #fff;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            text-align: center;
        }

        .container-nav {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #092044;
        }

        .container-header {
            width: 100%;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            width: 100px;
            height: auto;
            margin: 8px;
        }

        .search-bar {
            flex: 1;
            margin-left: auto;
            text-align: right;
            border: 2px solid #ccc;
            border-radius: 5px;
        }

        input[type="text"] {
            padding: 10px;
            width: 100%;
            border: none;
            border-radius: 5px;
        }

        nav {
            margin-left: 10%;
            margin-right: 10%;
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            text-align: center;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: space-between;
        }

        nav li {
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
        }

        section {
            margin-bottom: 20px;
            /* Add space between sections */
        }

        h2 {
            margin-bottom: 10px;
            /* Add space below headings */
        }

        footer {
            max-width: 100%;
            margin: 0 auto;
            display: flex;
            text-align: center;
            background-color: #092044;
            color: white;
            font-size: 12px;
        }

        .user-actions {
            display: flex;
            align-items: center;
        }

        .login-btn {
            background-color: #092044;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin-right: 10px;
        }

        .login-btn:hover {
            background-color: #063366;
        }

        .slider {
            width: auto;
            height: 300px;
            position: relative;
            overflow: hidden;
        }

        .slider .list {
            position: absolute;
            width: max-content;
            height: 100%;
            left: 0;
            top: 0;
            display: flex;
            transition: 1s;
        }

        .slider .list img {
            width: auto;
            max-width: auto;
            height: 100%;
            object-fit: cover;
        }

        .slider .buttons {
            position: absolute;
            top: 45%;
            left: 5%;
            width: 90%;
            display: flex;
            justify-content: space-between;
        }

        .slider .buttons button {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #fff5;
            color: #fff;
            border: none;
            font-family: monospace;
            font-weight: bold;
        }

        .slider .dots {
            position: absolute;
            bottom: 10px;
            left: 0;
            color: #fff;
            width: 100%;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        .slider .dots li {
            list-style: none;
            width: 10px;
            height: 10px;
            background-color: #fff;
            margin: 10px;
            border-radius: 20px;
            transition: 0.5s;
        }

        .slider .dots li.active {
            width: 30px;
        }

        @media screen and (max-width: 100%) {
            .slider {
                height: 300px;
            }
        }
    </style>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/feather/feather.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/icons/flags/flags.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>
    <header>
        <div class="container-header">
            <a href="{{ route('welcome') }}"><img src="{{ asset('logo_20200823.jpg') }}" alt="utkylui" class="logo"
                    style="width: 110px; height: auto;"></a>
            <div class="user-actions">
                @if (!Auth::check())
                    <a href="{{ route('login') }}" class="login-btn">Login</a>
                @endif
                {{-- <div class="search-bar">
                    <input type="text" placeholder="Search">
                </div> --}}
                <div>
                    @if (Auth::check())
                        <ul class="nav user-menu">

                            <li class="nav-item dropdown noti-dropdown me-2">
                                @if (Auth::check())
                                    <a href="#" class="dropdown-toggle nav-link header-nav-list"
                                        data-bs-toggle="dropdown">
                                        <img src="{{ asset('assets/img/icons/header-icon-05.svg') }}" alt> <span
                                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">{{ auth()->user()->unreadNotifications->count() }}
                                            <span class="visually-hidden">unread messages</span></span>
                                    </a>
                                @endif

                                <div class="dropdown-menu notifications">
                                    <div class="topnav-dropdown-header">
                                        <span class="notification-title">Notifications</span>
                                        <a href="{{ route('user.markasread') }}" class="clear-noti"> Clear All
                                        </a>
                                    </div>
                                    <div class="noti-content">
                                        <ul class="notification-list">
                                            @if (Auth::check())
                                                @if (auth()->user()->unreadNotifications)
                                                    @foreach (auth()->user()->unreadNotifications()->orderBy('created_at', 'desc')->get() as $notification)
                                                        <li class="notification-message">
                                                            {{-- <a href="#"> --}}
                                                            <div class="media d-flex">
                                                                <div class="media-body flex-grow-1">
                                                                    {{-- {{ route('superadmin.markasread', $notification->id) }} <p class="noti-details"><span class="noti-title">Carlson Tech</span></p> --}}
                                                                    <a href=""
                                                                        class="dropdown-item">{{ $notification->data['data']['message'] }}</a>
                                                                    <p class="noti-time"><span
                                                                            class="notification-time">{{ $notification->created_at->diffForHumans() }}</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            {{-- </a> --}}
                                                        </li>
                                                    @endforeach
                                                @else
                                                    <li class="notification-message">
                                                        <div class="media d-flex">
                                                            <div class="media-body flex-grow-1">

                                                                <span class="dropdown-item text-center"> There is no
                                                                    notification!</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endif
                                            @endif

                                        </ul>
                                    </div>
                                    <div class="topnav-dropdown-footer">
                                        <a href="#">View all Notifications</a>
                                    </div>
                                </div>
                            </li>
                            @if (Auth::check())
                                <li class="nav-item dropdown">
                                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown"
                                        style="display: flex; align-items: center; text-decoration: none;">
                                        <div class="user-img me-2">
                                            @if (Auth::check() && Auth::user()->image)
                                                <img class="rounded-circle"
                                                    src="{{ asset('images/profile/' . Auth::user()->image) }}"
                                                    width="31" alt="Profile">
                                            @else
                                                <img class="rounded-circle"
                                                    src="{{ asset('assets/img/profiles/icons8-user-100.png') }}"
                                                    width="31" alt="Profile">
                                            @endif
                                        </div>
                                        <div class="user-text">
                                            <h6 class="mb-0" style="color: white; font-size: 14px;">
                                                {{ Auth::check() ? Auth::user()->name : '' }}</h6>
                                            <p class="text-muted mb-0" style="font-size: 12px;">User</p>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="user-header text-center">
                                            <div class="avatar avatar-sm mb-2">
                                                @if (Auth::check() && Auth::user()->image)
                                                    <img class="rounded-circle"
                                                        src="{{ asset('images/profile/' . Auth::user()->image) }}"
                                                        width="31" alt="Profile">
                                                @else
                                                    <img class="rounded-circle"
                                                        src="{{ asset('assets/img/profiles/icons8-user-100.png') }}"
                                                        width="31" alt="Profile">
                                                @endif
                                            </div>
                                            <div class="user-text">
                                                <h6>{{ Auth::user()->name }}</h6>
                                                <p class="text-muted mb-0">User</p>
                                            </div>
                                        </div>
                                        <a class="dropdown-item"
                                            href="{{ route('user.profile', Auth::user()->id) }}">Profile</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="GET"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endif


                        </ul>
                    @endif

                </div>
            </div>
        </div>
        <div class="container-nav">
            <nav>
                <ul>
                    <li><a href="{{ route('patentinfo') }}">Patent</a></li>
                    <li><a href="{{ route('utilityinfo') }}">Utility</a></li>
                    <li><a href="{{ route('trademarkinfo') }}">Trademark</a></li>
                    <li><a href="{{ route('industrialinfo') }}">Industrial Design</a></li>
                    <li><a href="{{ route('geographicalinfo') }}">Geographical Indication</a></li>
                    <li><a href="{{ route('copyrightinfo') }}">Copyright</a></li>
                    <li><a href="{{ route('custdash') }}">Dashboard</a></li>
                    <li><a href="{{ route('about-us') }}">About Us</a></li>
                    <li><a href="{{ route('user.forum') }}">Forum</a></li>
                    <li><a href="{{ route('contactus') }}">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="slider">
            <div class="list">
                <div class="item">
                    <img src="{{ asset('slide1.jpg') }}" alt="1">
                </div>
                <div class="item">
                    <img src="{{ asset('slide2.jpg') }}" alt="2">
                </div>
                <div class="item">
                    <img src="{{ asset('slide3.jpg') }}" alt="3">
                </div>
            </div>
            <div class="buttons">
                <button id="prev">
                    << /button>
                        <button id="next">></button>
            </div>
            <ul class="dots">
                <li class="active"></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <div class="container">
            <section class="about-us">
                <h2>About Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </section>
        </div>
        <div class="container">
            <section>
                <h2>Vision</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
            </section>
        </div>
        <div class="container">
            <section>
                <h2>Mission</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
            </section>
        </div>
    </main>
    <footer style="background-color: #092044">
        <div class="container">
            <p style="color: #fff">&copy; SRDC 2024</p>
        </div>
    </footer>
    <script>
        let slider = document.querySelector('.slider .list');
        let items = document.querySelectorAll('.slider .list .item');
        let next = document.getElementById('next');
        let prev = document.getElementById('prev');
        let dots = document.querySelectorAll('.slider .dots li');

        let lengthItems = items.length - 1;
        let active = 0;
        next.onclick = function() {
            active = active + 1 <= lengthItems ? active + 1 : 0;
            reloadSlider();
        }
        prev.onclick = function() {
            active = active - 1 >= 0 ? active - 1 : lengthItems;
            reloadSlider();
        }
        let refreshInterval = setInterval(() => {
            next.click()
        }, 3000);

        function reloadSlider() {
            slider.style.left = -items[active].offsetLeft + 'px';
            //
            let last_active_dot = document.querySelector('.slider .dots li.active');
            last_active_dot.classList.remove('active');
            dots[active].classList.add('active');

            clearInterval(refreshInterval);
            refreshInterval = setInterval(() => {
                next.click()
            }, 3000);
        }

        dots.forEach((li, key) => {
            li.addEventListener('click', () => {
                active = key;
                reloadSlider();
            })
        })
        window.onresize = function(event) {
            reloadSlider();
        };
    </script>

    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}" type="91732f123e0b155049445025-text/javascript"></script>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" type="91732f123e0b155049445025-text/javascript"></script>

    <script src="{{ asset('assets/js/feather.min.js') }}" type="91732f123e0b155049445025-text/javascript"></script>
    <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}" type="315e37247ada644ce95c8823-text/javascript"></script>

    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}" type="315e37247ada644ce95c8823-text/javascript"></script>

    <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}" type="91732f123e0b155049445025-text/javascript"></script>

    <script src="{{ asset('assets/plugins/apexchart/apexcharts.min.js') }}" type="91732f123e0b155049445025-text/javascript"></script>
    <script src="{{ asset('assets/plugins/apexchart/chart-data.js') }}" type="91732f123e0b155049445025-text/javascript"></script>

    <script src="{{ asset('assets/js/script.js') }}" type="91732f123e0b155049445025-text/javascript"></script>
    <script src="{{ asset('assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}"
        data-cf-settings="91732f123e0b155049445025-|49" defer></script>

</body>

</html>
