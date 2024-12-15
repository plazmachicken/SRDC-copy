<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SRDC</title>

    <link rel="stylesheet" href="../css/homepagestyle.css">
    <link rel="preconnect" href="https://fonts.bunny.net">
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
            color:white;
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
                                                    placeholder="{{ __('messages.search_by_title')}}" required>
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
                                                    class="button-46" >{{ __('messages.my_post') }}</span></a>

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
                                No posts found.
                            </div>
                        @else
                            <div class="row">
                                @foreach ($posts as $post)
                                    <div class="col-md-4 col-xl-4 col-sm-6 d-flex">
                                        <div class="blog grid-blog flex-fill">
                                            <div class="blog-image">

                                                @php
                                                    $images = json_decode($post->image);
                                                @endphp

                                                @if ($images && count($images) > 0)
                                                    <a href="{{ route('user.posts.detail', $post->id) }}"><img
                                                            class="img-fluid"
                                                            src="{{ asset('images/post/' . $images[0]) }}"
                                                            alt="Post Image"></a>
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
                                                            {{ $post->comments->count() }} </a>
                                                        <a href="#" class="text-prime"><i
                                                                class="fa fa-thumbs-up"></i> {{ $post->likes }} </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        @endif

                        <div class="row ">
                            <div class="col-md-12">
                                <div class="pagination-tab  d-flex justify-content-center">
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination justify-content-center">
                                            @if ($posts->onFirstPage())
                                                <li class="page-item disabled">
                                                    <span class="page-link">&laquo; {{ __('messages.previous') }}</span>
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
