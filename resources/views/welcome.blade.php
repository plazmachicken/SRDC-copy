<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SRDC</title>

    <link rel="stylesheet" href="../css/homepagestyle.css">
    <link rel="preconnect" href="https://fonts.bunny.net">
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
            display: flex;
            align-items: flex-start;
            margin: 20px;
        }

        .text {
            max-width: 60%;
            margin-top: 30px;
            text-align: left;
            align-items: flex-start;
        }

        .text2 {
            max-width: 60%;
            text-align: left;
            align-items: flex-start;
        }

        .image-content img {
            margin-top: 20px;
            max-width: 85%;
            /* Adjust image size as needed */
            float: right;
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
            margin-left: auto;
            text-align: right;
            border: 2px solid #ccc;
            border-radius: 5px;
        }

        input[type="text"] {
            padding: 10px;
            width: 80%;
            border: none;
            border-radius: 5px;
        }

        section {
            margin-bottom: 20px;
        }

        h2 {
            margin-bottom: 10px;
        }

        footer {
            max-width: 100%;
            margin: 0 auto;
            display: flex;
            text-align: center;
            background-color: #092044;
            color: white;
            font-size: 12px;
            flex-direction: column;
        }

        .user-actions {
            display: flex;
            align-items: center;
        }

        .login-btn {
            margin-right: 10px;
            background-color: #092044;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .login-btn:hover {
            background-color: #063366;
        }

        .slider {
            width: auto;
            height: 586px;
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

        .banner {
            width: 100%;
            height: auto;
        }
    </style>
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/icons/flags/flags.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <header>
        <div class="container-nav">
            <a href="{{ route('welcome') }}"><img src="{{ asset('logo_20200823.jpg') }}" alt="utkylui" class="logo"
                    style="width: 110px; height: auto;"></a>

            <nav>
                <ul>
                    <li class="ms-auto"></li>
                    <li class="ms-auto"></li>
                    <li class="ms-auto"></li>


                    <li class="ms-auto"></li>
                    <li class="ms-auto"></li>
                    <li class="ms-auto"></li>

                    <li><a href="{{ route('welcome') }}">About Us</a></li>
                    <!-- Dropdown for "Researches" -->
                    <li class="dropdown">
                        <a href="#">Researches</a>
                        <ul class="dropdown-content">
                            <li><a href="{{ route('patentinfo') }}">Patent</a></li>
                            <li><a href="{{ route('utilityinfo') }}">Utility</a></li>
                            <li><a href="{{ route('trademarkinfo') }}">Trademark</a></li>
                            <li><a href="{{ route('industrialinfo') }}">Industrial Design</a></li>
                            <li><a href="{{ route('geographicalinfo') }}">Geographical Indication</a></li>
                            <li><a href="{{ route('copyrightinfo') }}">Copyright</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('custdash') }}">Dashboard</a></li>
                    <li><a href="{{ route('user.forum') }}">IdeaKAMEK</a></li>
                    <li><a href="{{ route('contactus') }}">Contact Us</a></li>
                    <li><a href="{{ route('help') }}">Help</a></li>
                    @auth
                    @else
                        <li><a href="{{ route('login-page') }}">Login</a></li>
                    @endauth

                    <!-- Right aligned notification and user dropdown -->
                    <li>
                        @auth
                            <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
                                <i class="fa fa-bell text-white"></i>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                                    {{ auth()->user()->unreadNotifications->count() }}
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </a>

                            <div class="dropdown-menu notifications">
                                <div class="topnav-dropdown-header">
                                    <span class="notification-title">Notifications</span>
                                    <a href="{{ route('user.markasread') }}" class="clear-noti">Clear All</a>
                                </div>
                                <div class="noti-content">
                                    <ul class="notification-list">
                                        @if (Auth::check() && auth()->user()->unreadNotifications->isNotEmpty())
                                            @foreach (auth()->user()->unreadNotifications as $notification)
                                                <li class="notification-message">
                                                    <div class="media d-flex">
                                                        <div class="media-body">
                                                            <a href="{{ $notification->data['data']['link'] ?? '' }}"
                                                                class="dropdown-item">
                                                                {{ $notification->data['data']['message'] }}
                                                            </a>
                                                            <p class="noti-time">
                                                                <span
                                                                    class="notification-time">{{ $notification->created_at->diffForHumans() }}</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @else
                                            <li class="notification-message">
                                                <div class="media d-flex justify-content-center">
                                                    <span>There is no notification!</span>
                                                </div>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                                <div class="topnav-dropdown-footer">
                                    <a href="#">View all Notifications</a>
                                </div>
                            </div>


                        @endauth
                    </li>


                    @if (Auth::check())
                        <li class="nav-item dropdown">
                            <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown"
                                style="display: flex; align-items: center; text-decoration: none;">
                                <div class="user-img me-2">
                                    @if (Auth::check() && Auth::user()->image)
                                        <img class="rounded-circle"
                                            src="{{ asset('images/profile/' . Auth::user()->image) }}" width="31"
                                            alt="Profile">
                                    @else
                                        <img class="rounded-circle"
                                            src="{{ asset('assets/img/profiles/icons8-user-100.png') }}" width="31"
                                            alt="Profile">
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
            </nav>
        </div>
        <div class="content">
            @yield('content')
        </div>
    </header>
    <main>
        <div class="slider">
            <div class="list">
                <div class="item">
                    <img src="{{ asset('assets/img/slide/1.jpg') }}" alt="slide_1">
                </div>
                <div class="item">
                    <img src="{{ asset('assets/img/slide/2.jpg') }}" alt="slide_2">
                </div>
            </div>
            <div class="buttons">
                <button id="prev">
                    < </button>
                        <button id="next">></button>
            </div>
            <ul class="dots">
                <li class="active"></li>
                <li></li>
            </ul>
        </div>
        <div>
            <img src="{{ asset('assets/img/slide/3.jpg') }}" alt="banner" class="banner">
        </div>
        <div class="container">
            <section class="text">
                <h4>Introduction</h4>
                <p>The Ministry of Education, Innovation, and Talent Development Sarawak (MEITD) has launched an
                    initiative to establish the Sarawak Innovation Repository (SIR). The Innovation Division of MEITD is
                    currently working on building this repository, which aims to compile ideas, innovations, and
                    startups generated by the public. The collaboration involves various entities, including Ministry
                    agencies, Sarawak Tropical Peat Research Institute (TROPI), Sarawak Biodiversity Centre (SBC),
                    Sarawak Research and Development Council (SRDC), CRAUN Research Sdn. Bhd., SMD Semiconductor Sdn.
                    Bhd., Centre Of Technical Excellence Sarawak (CENTEXS), and Sarawak Skills.
                </p>
                <p>MEITD will take on the responsibility of managing and fostering these innovations by providing
                    ongoing support through mentorship, grant assistance, and facilitating connections with relevant
                    agencies. </p>
                <p>All submitted concepts, proof of concept, prototypes, innovations, business models, and startups will
                    undergo a verification process. If deemed suitable, they will be recommended to the Sarawak
                    Innovation Repository Committee.</p>
            </section>
            <div class="image-content">
                <img src="{{ asset('assets/img/18383-Photoroom.png') }}" alt="innovation">
            </div>
        </div>
        <div class="container">
            <section class="text2">
                <h4>Objective</h4>
                <p>a. To build a one-stop centre for innovation projects listings in Sarawak.<br>
                    b. To provide a platform for every Sarawakian to showcase their innovative ideas.<br>
                    c. To encourage collaboration between the general public and agencies or institutions to further
                    developed potential innovative ideas.<br>
                    d. To give insight to local research agencies and related industries to develop new innovations.</p>
            </section>

        </div>
        <div class="container">
            <section>
                <p><b>Disclaimer: Ideas submitted to the Sarawak Innovation Repository remain the intellectual property
                        of their creators. The Ministry of Education, Innovation and Talent Development Sarawak will not
                        disclose this information to any third party without your prior written consent.</b></p>
            </section>
        </div>
    </main>
    <footer style="background-color: #092044">

        <p style="color: #fff">&copy; SRDC 2024</p>

    </footer>
</body>
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

</html>
