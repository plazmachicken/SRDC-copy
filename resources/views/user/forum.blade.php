<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SRDC</title>

    <link rel="stylesheet" href="../css/homepagestyle.css">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <style>
        .fixed-image-container {
            width: 100%;
            /* Or a fixed width, e.g., 300px */
            height: 200px;
            /* Set your desired fixed height */
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .fixed-size-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Use 'cover' to fill, or 'contain' to fit within */
        }



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

        /* New Button 46 Styles */
        .button-46 {
            align-items: center;
            background-color: rgba(240, 240, 240, 0.26);
            border: 1px solid #DFDFDF;
            border-radius: 16px;
            box-sizing: border-box;
            color: #000000;
            cursor: pointer;
            display: flex;
            font-family: Inter, sans-serif;
            font-size: 18px;
            justify-content: center;
            line-height: 28px;
            max-width: 100%;
            padding: 14px 22px;
            text-decoration: none;
            transition: all .2s;
            user-select: none;
            width: 100%;
        }

        .button-46:active,
        .button-46:hover {
            outline: 0;
        }

        .button-46:hover {
            background: linear-gradient(135deg, #00008B, #4e9eff);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
            transform: translateY(-2px);
            color: white;
        }

        @media (min-width: 768px) {
            .button-46 {
                font-size: 20px;
                min-width: 200px;
                padding: 14px 16px;
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

                    <div class="language-switcher">
                        <a href="{{ route('lang.switch', 'en') }}" class="btn btn-primary">English</a>
                        <a href="{{ route('lang.switch', 'ms') }}" class="btn btn-secondary">Bahasa Malaysia</a>
                    </div>

                    <div class="col-md-3">
                        <br>
                        <div class="col">
                            <div class="card flex-fill bg-white">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">{{ __('messages.search_posts') }}</h5>
                                </div>
                                <div class="card-body">
                                    <div class="form-group mb-0 row">
                                        <form action="{{ route('user.posts.search') }}" method="POST">
                                            @csrf
                                            <div class="input-group">
                                                <input class="form-control" name="title" type="text"
                                                    placeholder="{{ __('messages.search_by_title') }}" required>
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
                                    <h5 class="card-title mb-0">{{ __('messages.top_categories') }}</h5>
                                </div>
                                <div class="card-body">
                                    <ul>
                                        @foreach ($topCategories as $category)
                                            <li><a href="{{ route('user.posts.category', $category->category_id) }}">{{ $categoriesWithNames[$category->category_id]->name }}
                                                    ({{ $category->count }})
                                            </li></a>
                                        @endforeach
                                    </ul>


                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card flex-fill bg-white">

                                <div class="card-body">

                                    @if (Auth::check())
                                        <div class="bank-details-btn ">
                                            <a href="{{ route('user.mypost', Auth::user()) }}"> <span
                                                    class="button-46">{{ __('messages.my_post') }}</span></a>

                                            <a style="margin-left: 15%" href="{{ route('user.posts.create') }}"><span
                                                    class="button-46">{{ __('messages.create_post') }}</span></a>

                                        </div>
                                    @endif

                                </div>
                            </div>
                        </div>

                    </div>



                    <div class="col-md-9">

                        <br>
                        @if ($posts->isEmpty())
                            <div class="alert alert-info">
                                {{ __('messages.no_posts_found') }}
                            </div>
                        @else
                            <div class="row">
                                <div class="col-md-9">
                                    <ul class="list-links mb-4">
                                        <div class="col-auto">
                                            <a href="#grid" id="gridView" class="invoices-links active">
                                                <i class="feather feather-grid"></i>
                                            </a>
                                            <a href="#list" id="listView" class="invoices-links">
                                                <i class="feather feather-list"></i>
                                            </a>
                                        </div>
                                    </ul>
                                </div>
                            </div>

                            <div class="row d-flex flex-wrap" id="gridViewContent"style="display: block;">
                                @foreach ($posts as $post)
                                    <div class="col-md-4 col-xl-4 col-sm-6 d-flex">
                                        <div class="blog grid-blog flex-fill">
                                            <div class="blog-image">

                                                @php
                                                    $images = json_decode($post->image);
                                                @endphp

                                                @if ($images && count($images) > 0)
                                                  
                                                    <div class="fixed-image-container">
                                                        <a href="{{ route('user.posts.detail', $post->id) }}">
                                                            <img class="img-fluid fixed-size-image"
                                                                src="{{ asset('images/post/' . $images[0]) }}"
                                                                alt="Post Image">
                                                        </a>
                                                    </div>
                                                @endif
                                                <div class="blog-views">
                                                    <i class="feather-eye me-1"></i> {{ $post->views }}
                                                </div>

                                            </div>
                                            <div class="blog-content">
                                                <ul class="entry-meta meta-item">
                                                    <li>
                                                        <div class="post-author">
                                                            <a href="{{ route('user.posts.detail', $post->id) }}">
                                                                @if ($post->user->image)
                                                                    <img src="{{ asset('images/profile/' . $post->user->image) }}"
                                                                        alt="Post Author">
                                                                @else
                                                                    <img src="{{ asset('assets/img/profiles/icons8-user-100.png') }}"
                                                                        alt="Profile') }}">
                                                                @endif

                                                                <span>
                                                                    <span
                                                                        class="post-title">{{ $post->user->name }}</span>
                                                                    <span class="post-date"><i
                                                                            class="far fa-clock"></i>
                                                                        {{ $post->created_at->diffForHumans() }}</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <h3 class="blog-title"><a
                                                        href="{{ route('user.posts.detail', $post->id) }}">
                                                        <strong>{{ $post->title }}</strong>
                                                    </a></h3>

                                            </div>
                                            <div class="row">
                                                <div class="edit-options">
                                                    <div class="edit-delete-btn">

                                                        <a href="#" class="text-success"><i
                                                                class="feather-message-square"></i>
                                                            {{ $post->comments->count() }}
                                                            {{ __('messages.comments') }}</a>
                                                        <a href="#" class="text-prime"><i
                                                                class="fa fa-thumbs-up"></i> {{ $post->likes }}
                                                            {{ __('messages.likes') }}</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>



                            <div class="row" id="listViewContent" style="display: none;">
                                <table
                                    class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                    <thead class="student-thread">
                                        <tr>

                                            <th>{{ __('messages.id') }}</th>
                                            <th>{{ __('messages.title') }}</th>
                                            <th>{{ __('messages.author') }}</th>
                                            <th class="text-center">{{ __('messages.comments') }}</th>
                                            <th class="text-center">{{ __('messages.likes') }}</th>
                                            <th class="text-center">{{ __('messages.date') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($posts as $post)
                                            <tr>

                                                <td>{{ $post->id }}</td>
                                                <td>
                                                    <h2>
                                                        <a href="{{ route('user.posts.detail', $post->id) }}">
                                                            <b>{{ $post->title }}</b><br>
                                                            {!! Str::limit(strip_tags($post->content), 50, '...') !!}
                                                        </a>
                                                    </h2>
                                                </td>
                                                <td><a
                                                        href="{{ route('user.posts.detail', $post->id) }}">{{ $post->user->name }}</a>
                                                </td>
                                                <td class="text-center"> {{ $post->comments->count() }}</td>
                                                <td class="text-center">
                                                    {{ $post->likes }}
                                                </td>
                                                <td class="text-end">
                                                    {{ $post->created_at }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>

                            <script>
                                // Wait for the DOM to be fully loaded
                                document.addEventListener('DOMContentLoaded', function() {
                                    // Check if the alert exists
                                    const successAlert = document.getElementById('successAlert');
                                    if (successAlert) {
                                        // Set a timeout to remove the alert after 4 seconds
                                        setTimeout(function() {
                                            successAlert.style.display = 'none'; // Hide the alert
                                        }, 4000); // 4000 milliseconds = 4 seconds
                                    }
                                });


                                document.addEventListener('DOMContentLoaded', function() {
                                    const listViewButton = document.getElementById('listView');
                                    const gridViewButton = document.getElementById('gridView');
                                    const listViewContent = document.getElementById('listViewContent');
                                    const gridViewContent = document.getElementById('gridViewContent');

                                    // Function to toggle between grid and list views
                                    function toggleView(view) {
                                        if (view === 'list') {
                                            listViewContent.style.display = 'block';
                                            gridViewContent.style.display = 'none';
                                            listViewButton.classList.add('active');
                                            gridViewButton.classList.remove('active');

                                            // Remove d-flex and flex-wrap classes when switching to list view
                                            gridViewContent.classList.remove('d-flex', 'flex-wrap');
                                        } else {
                                            gridViewContent.style.display = 'block';
                                            listViewContent.style.display = 'none';
                                            gridViewButton.classList.add('active');
                                            listViewButton.classList.remove('active');

                                            // Add d-flex and flex-wrap classes for grid view
                                            gridViewContent.classList.add('d-flex', 'flex-wrap');
                                        }
                                    }

                                    // Event listeners for switching views
                                    listViewButton.addEventListener('click', function() {
                                        toggleView('list');
                                    });

                                    gridViewButton.addEventListener('click', function() {
                                        toggleView('grid');
                                    });

                                    // Initial check to set view state (optional)
                                    if (gridViewButton.classList.contains('active')) {
                                        toggleView('grid');
                                    } else if (listViewButton.classList.contains('active')) {
                                        toggleView('list');
                                    }
                                });
                            </script>
                        @endif


                        <div class="row ">
                            <div class="col-md-12">
                                <div class="pagination-tab  d-flex justify-content-center">
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination justify-content-center">
                                            @if ($posts->onFirstPage())
                                                <li class="page-item disabled">
                                                    <span class="page-link">&laquo;
                                                        {{ __('messages.previous') }}</span>
                                                </li>
                                            @else
                                                <li class="page-item">
                                                    <a class="page-link" href="{{ $posts->previousPageUrl() }}"
                                                        rel="prev">&laquo; {{ __('messages.previous') }}</a>
                                                </li>
                                            @endif

                                            @foreach ($posts->getUrlRange(1, $posts->lastPage()) as $page => $url)
                                                @if ($page == $posts->currentPage())
                                                    <li class="page-item active">
                                                        <span class="page-link">{{ $page }}</span>
                                                    </li>
                                                @else
                                                    <li class="page-item">
                                                        <a class="page-link"
                                                            href="{{ $url }}">{{ $page }}</a>
                                                    </li>
                                                @endif
                                            @endforeach

                                            @if ($posts->hasMorePages())
                                                <li class="page-item">
                                                    <a class="page-link" href="{{ $posts->nextPageUrl() }}"
                                                        rel="next">{{ __('messages.next') }}
                                                        &raquo;</a>
                                                </li>
                                            @else
                                                <li class="page-item disabled">
                                                    <span class="page-link">{{ __('messages.next') }} &raquo;</span>
                                                </li>
                                            @endif
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>




    </main>
    <br><br><br><br><br><br><br><br>
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
