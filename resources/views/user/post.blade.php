<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SRDC</title>

    <link rel="stylesheet" href="../css/homepagestyle.css">
    <link rel="preconnect" href="https://fonts.bunny.net">
    {{-- <style>
        .nav-item .dropdown-toggle {
    padding: 0 !important; /* Remove padding around the toggle */
    border: none !important; /* Remove any border around the toggle */
}

.nav-item .user-img img {
    border: none; /* Ensure no border on image */
}

.nav-item .dropdown-menu {
    border-radius: 8px; /* Rounded corners for dropdown */
    padding: 10px; /* Padding inside dropdown */
    border: none; /* Remove any border */
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
}

.dropdown-menu .user-header {
    padding-bottom: 10px; /* Space for user info */
    border-bottom: 1px solid #e0e0e0; /* Light separator */
    margin-bottom: 10px;
}

.dropdown-menu .dropdown-item {
    color: #333; /* Item color */
    padding: 8px 12px;
}

.dropdown-menu .dropdown-item:hover {
    background-color: #f8f9fa; /* Light hover effect */
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
    </style> --}}

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/feather/feather.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/icons/flags/flags.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

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

                    @auth

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
                                                src="{{ asset('images/profile/' . Auth::user()->image) }}" width="31"
                                                alt="Profile">
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
                                <a class="dropdown-item" href="{{ route('user.profile', Auth::user()->id) }}">Profile</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="GET" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endauth
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
                    <br>
                    <div class="language-switcher">
                        <button id="translate-en" class="btn btn-primary">English</button>
                        <button id="translate-my" class="btn btn-secondary">Malaysian</button>
                    </div>
                    <div class="col-md-3">
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
                                    <h5 class="card-title mb-0">Tags</h5>
                                </div>
                                <div class="card-body">
                                    @foreach ($tags as $tag)
                                        <span class="badge badge-outline-dark">{{ $tag }}</span>
                                    @endforeach

                                </div>
                            </div>
                        </div>

                    </div>



                    <div class="col-md-9">
                        <div class="col-lg-10 col-xl-9">

                            <div class="blog-view">
                                <div class="blog-single-post">
                                    <a href="{{ route('user.forum') }}" class="back-btn"><i
                                            class="feather-chevron-left"></i> Back</a>
                                    @php
                                        $images = json_decode($post->image);
                                    @endphp
                                    @if ($images && count($images) > 0)
                                        <div class="blog-image">
                                            <img alt src="{{ asset('images/post/' . $images[0]) }}"
                                                class="img-fluid">
                                        </div>
                                    @endif




                                    <h3 class="blog-title">{{ $post->title }}
                                    </h3>
                                    <div class="blog-info">
                                        <div class="post-list">
                                            <ul>
                                                <li>
                                                    <div class="post-author">
                                                        <a href="">


                                                            @if ($post->user->image)
                                                                <img src="{{ asset('images/profile/' . $post->user->image) }}"
                                                                    alt="Post Author">
                                                            @else
                                                                <img src="{{ asset('assets/img/profiles/icons8-user-100.png') }}"
                                                                    alt="Profile') }}">
                                                            @endif
                                                            <span>by {{ $post->user->name }} </span>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li><i class="feather-clock"></i>
                                                    {{ $post->created_at->diffForHumans() }}</li>
                                                <li><i class="feather-message-square"></i>
                                                    {{ $post->comments->count() }} Comments</li>
                                                <li><i class="feather-eye me-1"></i> {{ $post->views }} </li>
                                                <li><i class="feather-grid"></i> {{ $post->category->name }}</li>
                                                @if ($post->category->name == 'Verified')
                                                    <li><span class="badge badge-gradient-primary">Verified</span></li>
                                                @endif
                                                <li>
                                                    <!-- Like/Unlike button -->
                                                    @if ($post->isLikedBy(auth()->user()))
                                                        <a href="{{ route('posts.unlike', $post) }}"
                                                            class="text-danger"><i class="fa fa-thumbs-down">
                                                                Unlike</i>
                                                        </a>
                                                    @else
                                                        <a href="{{ route('posts.like', $post) }}"
                                                            class="text-prime"><i class="fa fa-thumbs-up"> Like</i>
                                                        </a>
                                                    @endif

                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        {!! $post->content !!}
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 d-flex justify-content-center">
                                    <div class="card">
                                        <div class="card-body">
                                            <div id="carouselExampleIndicators{{ $post->id }}"
                                                class="carousel slide" data-bs-ride="carousel">
                                                <ol class="carousel-indicators">
                                                    @if ($images && count($images) > 0)
                                                        @foreach ($images as $index => $image)
                                                            <li data-bs-target="#carouselExampleIndicators{{ $post->id }}"
                                                                data-bs-slide-to="{{ $index }}"
                                                                class="{{ $index === 0 ? 'active' : '' }}"></li>
                                                        @endforeach
                                                    @endif
                                                </ol>
                                                <div class="carousel-inner" role="listbox">
                                                    @if ($images && count($images) > 0)
                                                        @foreach ($images as $index => $image)
                                                            <div
                                                                class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                                                <img class="d-block img-fluid"
                                                                    src="{{ asset('images/post/' . $image) }}"
                                                                    alt="Slide {{ $index + 1 }}">
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        <div class="carousel-item active">
                                                            <img class="d-block img-fluid"
                                                                src="assets/img/default.jpg" alt="No Image Available">
                                                        </div>
                                                    @endif
                                                </div>
                                                <a class="carousel-control-prev"
                                                    href="#carouselExampleIndicators{{ $post->id }}"
                                                    role="button" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon"
                                                        aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </a>
                                                <a class="carousel-control-next"
                                                    href="#carouselExampleIndicators{{ $post->id }}"
                                                    role="button" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon"
                                                        aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card blog-comments">
                                    <div class="card-header">
                                        <h4 class="card-title">Comments ({{ $post->comments->count() }})</h4>
                                    </div>

                                    <div class="card-body pb-0">
                                        @if ($post->comments->isNotEmpty())
                                            <ul class="comments-list">
                                                @foreach ($post->comments->where('parent_comment_id', null) as $comment)
                                                    <li>
                                                        <div class="comment">
                                                            <div class="comment-author">
                                                                @if ($comment->user->image)
                                                                    <img class="avatar"
                                                                        src="{{ asset('images/profile/' . $comment->user->image) }}">
                                                                @else
                                                                    <img class="avatar"
                                                                        src="{{ asset('assets/img/profiles/icons8-user-100.png') }}"
                                                                        alt="Profile">
                                                                @endif
                                                            </div>
                                                            <div class="comment-block">
                                                                <div class="comment-by">
                                                                    <h5 class="blog-author-name">
                                                                        {{ $comment->user->name }} <span
                                                                            class="blog-date"> <i
                                                                                class="feather-clock me-1"></i>
                                                                            {{ $comment->created_at->diffForHumans() }}</span>
                                                                    </h5>
                                                                </div>
                                                                <p>{{ $comment->content }}</p>
                                                                <a class="comment-btn reply-btn" href="#"
                                                                    data-comment-id="{{ $comment->id }}">
                                                                    <i class="fa fa-reply me-2"></i> Reply
                                                                </a>
                                                            </div>
                                                        </div>


                                                        <ul class="comments-list reply">
                                                            @include('user.comments', [
                                                                'comments' => $comment->childComments,
                                                            ])
                                                        </ul>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @else
                                            <p>No comments yet.</p>
                                        @endif

                                    </div>
                                </div>


                                <div class="card new-comment clearfix">
                                    <div class="card-header">
                                        <h4 class="card-title">Leave Comment</h4>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('posts.comment', $post) }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <textarea rows="4" name="content" class="form-control bg-grey" placeholder="Comments"></textarea>
                                            </div>
                                            <!-- Hidden input for parent comment ID -->
                                            <input type="hidden" name="parent_comment_id" id="parentCommentId"
                                                value="">

                                            <div class="submit-section">
                                                <button class="submit-btn btn-primary btn-blog" style="color:white;"
                                                    type="submit">Submit</button>
                                            </div>
                                        </form>
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

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    document.getElementById('translate-en').addEventListener('click', function() {
        translateContent('en');
    });

    document.getElementById('translate-my').addEventListener('click', function() {
        translateContent('ms');
    });

    function translateContent(language) {
        const content = document.getElementById('blog-content').innerHTML;

        axios.post('{{ route("translate.content") }}', {
            content: content,
            language: language
        })
        .then(response => {
            document.getElementById('blog-content').innerHTML = response.data.translatedContent;
        })
        .catch(error => {
            console.error("Translation error:", error);
            alert("An error occurred while translating the content.");
        });
    }
</script>


<script>
    // Add event listener to reply buttons
    document.querySelectorAll('.reply-btn').forEach(function(replyBtn) {
        replyBtn.addEventListener('click', function(event) {
            event.preventDefault();
            // Get the comment ID from the data-comment-id attribute
            var commentId = this.getAttribute('data-comment-id');
            // Set the comment ID in the hidden input field
            document.getElementById('parentCommentId').value = commentId;
        });
    });
</script>
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
