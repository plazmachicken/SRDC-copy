<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SRDC</title>

    <link rel="stylesheet" href="../css/homepagestyle.css">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <style>
        .container-nav {
            width: 100%;
            margin: 0 auto;
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
            width: 200px;
            height: auto;
            margin: 15px;
        }

        .title {
            text-align: center;
        }

        .search-bar {
            flex: 1;
            margin-left: auto;
            text-align: right;
            border: 2px solid #ccc;
            border-radius: 5px;
        }

        .search-space {
            padding: 10px;
            width: 100%;
            border: none;
            border-radius: 5px;
        }

        nav {
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            margin-left: 0;
            padding-right: 20px;
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


        .main-content {
            display: flex;
            justify-content: space-around;
            align-items: center;
            text-align: center;
            width: 100%;

        }

        .recent {
            flex: 1;
            margin: 0;
            font-size: 20px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 15px;
        }

        .recent a,
        .recent {
            padding: 15px;
            color: black;
            text-decoration: none;
            font-weight: bold;
            font-size: 24px;
        }


        .activity-window,
        .track-window,
        .notify-window {
            margin-top: 30px;
            margin-left: auto;
            margin-right: auto;
            height: 45vh;
            border-radius: 20px;
            width: 90%;
            border: 2px solid gray;
            /* Add this line to set the border */
            //box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Shadow */
            background-color: #f2f2f2;
            /* Light gray background color */
            font-weight: normal;
            font-size: 15px;
        }


        /* new */

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
            width: 200px;
            height: auto;
            margin: 15px;
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


        /* Main Nav Styles */
        nav {
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            margin-left: 0;
            padding-right: 20px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: flex-end;
            box-sizing: border-box;
        }

        nav li {
            text-align: left;
            margin-right: 20px;
            position: relative;
        }

        nav a {
            color: #fff;
            text-decoration: none;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        /* Dropdown Menu */
        .dropdown-content {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            background-color: #092044;
            /* Solid background to avoid transparency issue */
            z-index: 1;
            list-style: none;
            transition: opacity 0.3s ease-in-out, visibility 0.3s;
            /* Smooth fade-in */
            white-space: nowrap;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            visibility: hidden;
            /* Initially hide the dropdown */
            opacity: 0;
            /* Start with invisible state */
        }

        .dropdown-content li {
            padding: 0;
            margin: 0;
        }

        .dropdown-content li a {
            margin-left: auto;
            padding: 10px 15px;
            color: white;
            text-decoration: none;
            display: block;
            white-space: nowrap;
        }

        .dropdown-content li a:hover {
            background-color: #064073;
        }

        /* Show Dropdown on Hover */
        .dropdown:hover .dropdown-content {
            display: block;
            visibility: visible;
            opacity: 1;
            /* Fade in on hover */
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
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <style>
        .notification-list {
            list-style: none;
            /* Remove bullet points */
            padding: 0;
            /* Remove default padding */
            margin: 0;
            /* Remove default margin */
        }

        .notification-message {
            display: block;
            /* Ensure each notification takes a block space */
            padding: 10px;
            /* Add some padding for spacing */
            border-bottom: 1px solid #e0e0e0;
            /* Optional: Add a border between notifications */
            width: 100%;
            /* Ensure it takes full width */
        }

        .notifications {
            max-height: 300px;
            /* Set a max height */
            overflow-y: auto;
            /* Enable vertical scrolling */
            overflow-x: hidden;
            /* Hide horizontal scrolling */
        }
    </style>

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

    </header>
    <main>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="">
            <div class="container-fluid">
                <div class="row">

                    {{-- <div class="col-md-3">
                        <br>
                        <div class="col">
                            <div class="card flex-fill bg-white">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Search Posts</h5>
                                </div>
                                <div class="card-body">
                                    <div class="form-group mb-0 row">
                                        <form action="{{ route('user.posts.search') }}" method="POST">
                                            @csrf
                                            <div class="input-group">
                                                <input class="form-control" name="title" type="text"
                                                    placeholder="Search by Title" required>
                                                <button class="btn btn-primary" type="submit"> <i
                                                        class="fa fa-search"></i></button>
                                            </div>
                                        </form>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card flex-fill bg-white">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Top Categories</h5>
                                </div>
                                <div class="card-body">

                                    <ul>
                                        @foreach ($topCategories as $category)
                                            <li><a href="{{ route('user.posts.category', $category->category_id) }}">{{ $categoriesWithNames[$category->category_id]->name }}
                                                    ({{ $category->count }})</li></a>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div> --}}



                    <div class="col-md-12">
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-header">
                                    <div class="row align-items-center">
                                        <div class="col-auto profile-image">

                                            @if ($user->image)
                                                <img class="rounded-circle"
                                                    src="{{ asset('images/profile/' . $user->image) }}"
                                                    width="90" height="30" alt="Profile') }}">
                                            @else
                                                <img class="rounded-circle"
                                                    src="{{ asset('assets/img/profiles/icons8-user-100.png') }}"
                                                    width="31" alt="Profile') }}">
                                            @endif
                                        </div>
                                        <div class="col ms-md-n2 profile-user-info">
                                            <h4 class="user-name mb-0">{{ $user->name }}</h4>

                                            <div class="user-Location"><i class="fas fa-map-marker-alt"></i>
                                                {{ $user->address }}</div>

                                        </div>

                                    </div>
                                </div>
                                <div class="profile-menu">
                                    <ul class="nav nav-tabs nav-tabs-solid">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab"
                                                href="#per_details_tab">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#edit_tab">Edit</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab"
                                                href="#password_tab">Password</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content profile-tab-cont">

                                    <div class="tab-pane fade show active" id="per_details_tab">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title d-flex justify-content-between">
                                                            <span>Personal Details</span>
                                                        </h5>
                                                        <div class="row">
                                                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">
                                                                Name</p>
                                                            <p class="col-sm-9">{{ $user->name }}</p>
                                                        </div>
                                                        <div class="row">
                                                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">
                                                                Email ID</p>
                                                            <p class="col-sm-9"><a href=""
                                                                    class="__cf_email__"
                                                                    data-cfemail="6d070205030902082d08150c001d0108430e0200">{{ $user->email }}</a>
                                                            </p>
                                                        </div>
                                                        <div class="row">
                                                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">
                                                                Mobile</p>
                                                            <p class="col-sm-9">{{ $user->mobile }}</p>
                                                        </div>
                                                        <div class="row">
                                                            <p class="col-sm-3 text-muted text-sm-end mb-0">Address</p>
                                                            <p class="col-sm-9 mb-0">{{ $user->address }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>


                                    <div id="password_tab" class="tab-pane fade">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Change Password</h5>
                                                <div class="row">
                                                    <div class="col-md-10 col-lg-6">
                                                        <form action="{{ route('user.profile.update', $user) }}"
                                                            method="POST">
                                                            @csrf
                                                            <input type="hidden" name="type" value="password">
                                                            <div class="form-group">
                                                                <label>Old Password</label>
                                                                <input type="password" name="current_password"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>New Password</label>
                                                                <input type="password" name="password"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Confirm Password</label>
                                                                <input type="password" name="password_confirmation"
                                                                    class="form-control">
                                                            </div>
                                                            <button class="btn btn-primary" type="submit">Save
                                                                Changes</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="edit_tab" class="tab-pane fade">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Change Personal Details</h5>
                                                <div class="row">
                                                    <div class="col-md-10 col-lg-6">
                                                        <form action="{{ route('user.profile.update', $user) }}"
                                                            method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="type" value="info">
                                                            <div class="form-group">
                                                                <label>Name</label>
                                                                <input type="text" name="name"
                                                                    class="form-control" value="{{ $user->name }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Email</label>
                                                                <input type="email" name="email"
                                                                    class="form-control" value="{{ $user->email }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Mobile</label>
                                                                <input type="text" name="mobile"
                                                                    class="form-control" value="{{ $user->mobile }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Address</label>
                                                                <input type="text" name="address"
                                                                    class="form-control"
                                                                    value="{{ $user->address }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Profile</label>
                                                                <input type="file" name="image"
                                                                    class="form-control" value="{{ $user->image }}">
                                                            </div>
                                                            <button class="btn btn-primary" type="submit">Save
                                                                Changes</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>




    </main>
    <footer style="background-color: #092044">
        <div class="container">
            <p style="color: #fff">&copy; SRDC 2024</p>
        </div>
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
