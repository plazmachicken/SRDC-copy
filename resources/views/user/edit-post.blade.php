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
    </style>
    <style>
        .multi-select {
            display: flex;
            box-sizing: border-box;
            flex-direction: column;
            position: relative;
            width: 100%;
            user-select: none;
        }

        .multi-select .multi-select-header {
            border: 1px solid #dee2e6;
            padding: 7px 30px 7px 12px;
            overflow: hidden;
            gap: 7px;
            min-height: 45px;
        }

        .multi-select .multi-select-header::after {
            content: "";
            display: block;
            position: absolute;
            top: 50%;
            right: 15px;
            transform: translateY(-50%);
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23949ba3' viewBox='0 0 16 16'%3E%3Cpath d='M8 13.1l-8-8 2.1-2.2 5.9 5.9 5.9-5.9 2.1 2.2z'/%3E%3C/svg%3E");
            height: 12px;
            width: 12px;
        }

        .multi-select .multi-select-header.multi-select-header-active {
            border-color: #c1c9d0;
        }

        .multi-select .multi-select-header.multi-select-header-active::after {
            transform: translateY(-50%) rotate(180deg);
        }

        .multi-select .multi-select-header.multi-select-header-active+.multi-select-options {
            display: flex;
        }

        .multi-select .multi-select-header .multi-select-header-placeholder {
            color: #65727e;
        }

        .multi-select .multi-select-header .multi-select-header-option {
            display: inline-flex;
            align-items: center;
            background-color: #f3f4f7;
            font-size: 14px;
            padding: 3px 8px;
            border-radius: 5px;
        }

        .multi-select .multi-select-header .multi-select-header-max {
            font-size: 14px;
            color: #65727e;
        }

        .multi-select .multi-select-options {
            display: none;
            box-sizing: border-box;
            flex-flow: wrap;
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            z-index: 999;
            margin-top: 5px;
            padding: 5px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-height: 200px;
            overflow-y: auto;
            overflow-x: hidden;
        }

        .multi-select .multi-select-options::-webkit-scrollbar {
            width: 5px;
        }

        .multi-select .multi-select-options::-webkit-scrollbar-track {
            background: #f0f1f3;
        }

        .multi-select .multi-select-options::-webkit-scrollbar-thumb {
            background: #cdcfd1;
        }

        .multi-select .multi-select-options::-webkit-scrollbar-thumb:hover {
            background: #b2b6b9;
        }

        .multi-select .multi-select-options .multi-select-option,
        .multi-select .multi-select-options .multi-select-all {
            padding: 4px 12px;
            height: 42px;
        }

        .multi-select .multi-select-options .multi-select-option .multi-select-option-radio,
        .multi-select .multi-select-options .multi-select-all .multi-select-option-radio {
            margin-right: 14px;
            height: 16px;
            width: 16px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }

        .multi-select .multi-select-options .multi-select-option .multi-select-option-text,
        .multi-select .multi-select-options .multi-select-all .multi-select-option-text {
            box-sizing: border-box;
            flex: 1;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            color: inherit;
            font-size: 16px;
            line-height: 20px;
        }

        .multi-select .multi-select-options .multi-select-option.multi-select-selected .multi-select-option-radio,
        .multi-select .multi-select-options .multi-select-all.multi-select-selected .multi-select-option-radio {
            border-color: #40c979;
            background-color: #40c979;
        }

        .multi-select .multi-select-options .multi-select-option.multi-select-selected .multi-select-option-radio::after,
        .multi-select .multi-select-options .multi-select-all.multi-select-selected .multi-select-option-radio::after {
            content: "";
            display: block;
            width: 3px;
            height: 7px;
            margin: 0.12em 0 0 0.27em;
            border: solid #fff;
            border-width: 0 0.15em 0.15em 0;
            transform: rotate(45deg);
        }

        .multi-select .multi-select-options .multi-select-option.multi-select-selected .multi-select-option-text,
        .multi-select .multi-select-options .multi-select-all.multi-select-selected .multi-select-option-text {
            color: #40c979;
        }

        .multi-select .multi-select-options .multi-select-option:hover,
        .multi-select .multi-select-options .multi-select-option:active,
        .multi-select .multi-select-options .multi-select-all:hover,
        .multi-select .multi-select-options .multi-select-all:active {
            background-color: #f3f4f7;
        }

        .multi-select .multi-select-options .multi-select-all {
            border-bottom: 1px solid #f1f3f5;
            border-radius: 0;
        }

        .multi-select .multi-select-options .multi-select-search {
            padding: 7px 10px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            margin: 10px 10px 5px 10px;
            width: 100%;
            outline: none;
            font-size: 16px;
        }

        .multi-select .multi-select-options .multi-select-search::placeholder {
            color: #b2b5b9;
        }

        .multi-select .multi-select-header,
        .multi-select .multi-select-option,
        .multi-select .multi-select-all {
            display: flex;
            flex-wrap: wrap;
            box-sizing: border-box;
            align-items: center;
            border-radius: 5px;
            cursor: pointer;
            display: flex;
            align-items: center;
            width: 100%;
            font-size: 16px;
            color: #212529;
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

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <header>
        <div class="container-header">
             <a href="{{ route('welcome') }}"><img src="{{ asset('logo_20200823.jpg') }}" alt="utkylui" class="logo"
                style="width: 110px; height: auto;"></a>
            <div class="user-actions">
                @if (!Auth::check())
                    <a href="{{ route('login') }}" class="login-btn">Login</a>
                @endif



                <div>
                    <ul class="nav user-menu">

                        <li class="nav-item dropdown noti-dropdown me-2">
                            <a href="#" class="dropdown-toggle nav-link header-nav-list"
                                data-bs-toggle="dropdown">
                                <img src="{{ asset('assets/img/icons/header-icon-05.svg') }}" alt> <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">{{ auth()->user()->unreadNotifications->count() }}
                                    <span class="visually-hidden">unread messages</span></span>
                            </a>
                            <div class="dropdown-menu notifications">
                                <div class="topnav-dropdown-header">
                                    <span class="notification-title">Notifications</span>
                                    <a href="{{ route('user.markasread') }}" class="clear-noti"> Clear All </a>
                                </div>
                                <div class="noti-content">
                                    <ul class="notification-list">
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

                                    </ul>
                                </div>
                                <div class="topnav-dropdown-footer">
                                    <a href="#">View all Notifications</a>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown has-arrow new-user-menus">
                            <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                                <div class="user-img">

                                    @if (Auth::user()->image)
                                        <img class="rounded-circle"
                                            src="{{ asset('images/profile/' . Auth::user()->image) }}" width="31"
                                            alt="Profile') }}">
                                    @else
                                        <img class="rounded-circle"
                                            src="{{ asset('assets/img/profiles/icons8-user-100.png') }}" width="31"
                                            alt="Profile') }}">
                                    @endif
                                    <div class="user-text">
                                        <h6>{{ Auth::user()->name }}</h6>
                                        <p class="text-muted mb-0">User</p>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu">
                                <div class="user-header">
                                    <div class="avatar avatar-sm">
                                        @if (Auth::user()->image)
                                            <img class="rounded-circle"
                                                src="{{ asset('images/profile/' . Auth::user()->image) }}"
                                                width="31" alt="Profile') }}">
                                        @else
                                            <img class="rounded-circle"
                                                src="{{ asset('assets/img/profiles/icons8-user-100.png') }}"
                                                width="31" alt="Profile') }}">
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
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="GET" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
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
                <br>
                <div class="row">
                    <div class="card col-md-12 ">
                        <div class="card-body">
                            <div class="bank-inner-details">
                                <div class="row">
                                    <form action="{{ route('user.posts.update', $post->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label>Title<span class="text-danger">*</span></label>
                                                    <input name="title" type="text" class="form-control"
                                                        value="{{ $post->title }}">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label>Category</label>
                                                    <select name="category" class="select form-control">
                                                        <option>Select Category</option>
                                                        @foreach ($categories as $category)
                                                            @if ($category->name == 'Verified' || $category->name == 'verified')
                                                            @else
                                                                <option value="{{ $category->id }}"
                                                                    {{ $category->id == $post->category_id ? 'selected' : '' }}>
                                                                    {{ $category->name }}</option>
                                                            @endif
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>

                                        </div>

                                        @php
                                            $tagIds = json_decode($post->tags);
                                        @endphp
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>Tags</label>
                                                <select name="tag" class="select form-control"
                                                    data-placeholder="Select Tags" multiple data-multi-select>
                                                    <option>Select Tag</option>
                                                    @foreach ($tags as $tag)
                                                        @if ($tag->name == 'Verified' || $tag->name == 'verified')
                                                        @else
                                                            <option value="{{ $tag->id }}"
                                                                {{ is_array($tagIds) && in_array($tag->id, $tagIds) ? 'selected' : '' }}>
                                                                {{ $tag->name }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>Blog Image</label>
                                                <div class="change-photo-btn">
                                                    <div>
                                                        <p>Add Image</p>
                                                    </div>
                                                    <input name="image" type="file" class="upload">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea name="editor" class="form-control" id="body" placeholder="Enter the Description" name="body">{{ $post->content }}</textarea>
                                            </div>
                                        </div>
                                        <div class=" blog-categories-btn pt-0">
                                            <div class="bank-details-btn ">
                                                <button type="submit" class="btn bank-cancel-btn me-2">Update
                                                    Post</button>
                                            </div>
                                        </div>
                                    </form>

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
            <p style="color: #fff">&copy; 2024 Your Website Name</p>
        </div>
    </footer>
</body>
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
<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
<script>
    // Initialize CKEditor
    ClassicEditor
        .create(document.querySelector('textarea'))
        .then(editor => {
            console.log('Editor was initialized', editor);
        })
        .catch(error => {
            console.error('Error during initialization of the editor', error);
        });
</script>
<script>
    class MultiSelect {

        constructor(element, options = {}) {
            let defaults = {
                placeholder: 'Select item(s)',
                max: null,
                search: true,
                selectAll: true,
                listAll: true,
                name: '',
                width: '',
                height: '',
                dropdownWidth: '',
                dropdownHeight: '',
                data: [],
                onChange: function() {},
                onSelect: function() {},
                onUnselect: function() {}
            };
            this.options = Object.assign(defaults, options);
            this.selectElement = typeof element === 'string' ? document.querySelector(element) : element;
            for (const prop in this.selectElement.dataset) {
                if (this.options[prop] !== undefined) {
                    this.options[prop] = this.selectElement.dataset[prop];
                }
            }
            this.name = this.selectElement.getAttribute('name') ? this.selectElement.getAttribute('name') :
                'multi-select-' + Math.floor(Math.random() * 1000000);
            if (!this.options.data.length) {
                let options = this.selectElement.querySelectorAll('option');
                for (let i = 0; i < options.length; i++) {
                    this.options.data.push({
                        value: options[i].value,
                        text: options[i].innerHTML,
                        selected: options[i].selected,
                        html: options[i].getAttribute('data-html')
                    });
                }
            }
            this.element = this._template();
            this.selectElement.replaceWith(this.element);
            this._updateSelected();
            this._eventHandlers();
        }

        _template() {
            let optionsHTML = '';
            for (let i = 0; i < this.data.length; i++) {
                optionsHTML += `
                        <div class="multi-select-option${this.selectedValues.includes(this.data[i].value) ? ' multi-select-selected' : ''}" data-value="${this.data[i].value}">
                            <span class="multi-select-option-radio"></span>
                            <span class="multi-select-option-text">${this.data[i].html ? this.data[i].html : this.data[i].text}</span>
                        </div>
                    `;
            }
            let selectAllHTML = '';
            if (this.options.selectAll === true || this.options.selectAll === 'true') {
                selectAllHTML = `<div class="multi-select-all">
                        <span class="multi-select-option-radio"></span>
                        <span class="multi-select-option-text">Select all</span>
                    </div>`;
            }
            let template = `
                    <div class="multi-select ${this.name}"${this.selectElement.id ? ' id="' + this.selectElement.id + '"' : ''} style="${this.width ? 'width:' + this.width + ';' : ''}${this.height ? 'height:' + this.height + ';' : ''}">
                        ${this.selectedValues.map(value => `<input type="hidden" name="${this.name}[]" value="${value}">`).join('')}
                        <div class="multi-select-header" style="${this.width ? 'width:' + this.width + ';' : ''}${this.height ? 'height:' + this.height + ';' : ''}">
                            <span class="multi-select-header-max">${this.options.max ? this.selectedValues.length + '/' + this.options.max : ''}</span>
                            <span class="multi-select-header-placeholder">${this.placeholder}</span>
                        </div>
                        <div class="multi-select-options" style="${this.options.dropdownWidth ? 'width:' + this.options.dropdownWidth + ';' : ''}${this.options.dropdownHeight ? 'height:' + this.options.dropdownHeight + ';' : ''}">
                            ${this.options.search === true || this.options.search === 'true' ? '<input type="text" class="multi-select-search" placeholder="Search...">' : ''}
                            ${selectAllHTML}
                            ${optionsHTML}
                        </div>
                    </div>
                    `;
            let element = document.createElement('div');
            element.innerHTML = template;
            return element;
        }

        _eventHandlers() {
            let headerElement = this.element.querySelector('.multi-select-header');
            this.element.querySelectorAll('.multi-select-option').forEach(option => {
                option.onclick = () => {
                    let selected = true;
                    if (!option.classList.contains('multi-select-selected')) {
                        if (this.options.max && this.selectedValues.length >= this.options.max) {
                            return;
                        }
                        option.classList.add('multi-select-selected');
                        if (this.options.listAll === true || this.options.listAll === 'true') {
                            headerElement.insertAdjacentHTML('afterbegin',
                                `<span class="multi-select-header-option" data-value="${option.dataset.value}">${option.querySelector('.multi-select-option-text').innerHTML}</span>`
                            );
                        }
                        this.element.querySelector('.multi-select').insertAdjacentHTML('afterbegin',
                            `<input type="hidden" name="${this.name}[]" value="${option.dataset.value}">`
                        );
                        this.data.filter(data => data.value == option.dataset.value)[0].selected = true;
                    } else {
                        option.classList.remove('multi-select-selected');
                        this.element.querySelectorAll('.multi-select-header-option').forEach(
                            headerOption => headerOption.dataset.value == option.dataset.value ?
                            headerOption.remove() : '');
                        this.element.querySelector(`input[value="${option.dataset.value}"]`).remove();
                        this.data.filter(data => data.value == option.dataset.value)[0].selected =
                            false;
                        selected = false;
                    }
                    if (this.options.listAll === false || this.options.listAll === 'false') {
                        if (this.element.querySelector('.multi-select-header-option')) {
                            this.element.querySelector('.multi-select-header-option').remove();
                        }
                        headerElement.insertAdjacentHTML('afterbegin',
                            `<span class="multi-select-header-option">${this.selectedValues.length} selected</span>`
                        );
                    }
                    if (!this.element.querySelector('.multi-select-header-option')) {
                        headerElement.insertAdjacentHTML('afterbegin',
                            `<span class="multi-select-header-placeholder">${this.placeholder}</span>`
                        );
                    } else if (this.element.querySelector('.multi-select-header-placeholder')) {
                        this.element.querySelector('.multi-select-header-placeholder').remove();
                    }
                    if (this.options.max) {
                        this.element.querySelector('.multi-select-header-max').innerHTML = this
                            .selectedValues.length + '/' + this.options.max;
                    }
                    if (this.options.search === true || this.options.search === 'true') {
                        this.element.querySelector('.multi-select-search').value = '';
                    }
                    this.element.querySelectorAll('.multi-select-option').forEach(option => option.style
                        .display = 'flex');
                    headerElement.classList.remove('multi-select-header-active');
                    this.options.onChange(option.dataset.value, option.querySelector(
                        '.multi-select-option-text').innerHTML, option);
                    if (selected) {
                        this.options.onSelect(option.dataset.value, option.querySelector(
                            '.multi-select-option-text').innerHTML, option);
                    } else {
                        this.options.onUnselect(option.dataset.value, option.querySelector(
                            '.multi-select-option-text').innerHTML, option);
                    }
                };
            });
            headerElement.onclick = () => headerElement.classList.toggle('multi-select-header-active');
            if (this.options.search === true || this.options.search === 'true') {
                let search = this.element.querySelector('.multi-select-search');
                search.oninput = () => {
                    this.element.querySelectorAll('.multi-select-option').forEach(option => {
                        option.style.display = option.querySelector('.multi-select-option-text')
                            .innerHTML.toLowerCase().indexOf(search.value.toLowerCase()) > -1 ? 'flex' :
                            'none';
                    });
                };
            }
            if (this.options.selectAll === true || this.options.selectAll === 'true') {
                let selectAllButton = this.element.querySelector('.multi-select-all');
                selectAllButton.onclick = () => {
                    let allSelected = selectAllButton.classList.contains('multi-select-selected');
                    this.element.querySelectorAll('.multi-select-option').forEach(option => {
                        let dataItem = this.data.find(data => data.value == option.dataset.value);
                        if (dataItem && ((allSelected && dataItem.selected) || (!allSelected && !
                                dataItem.selected))) {
                            option.click();
                        }
                    });
                    selectAllButton.classList.toggle('multi-select-selected');
                };
            }
            if (this.selectElement.id && document.querySelector('label[for="' + this.selectElement.id + '"]')) {
                document.querySelector('label[for="' + this.selectElement.id + '"]').onclick = () => {
                    headerElement.classList.toggle('multi-select-header-active');
                };
            }
            document.addEventListener('click', event => {
                if (!event.target.closest('.' + this.name) && !event.target.closest('label[for="' + this
                        .selectElement.id + '"]')) {
                    headerElement.classList.remove('multi-select-header-active');
                }
            });
        }

        _updateSelected() {
            if (this.options.listAll === true || this.options.listAll === 'true') {
                this.element.querySelectorAll('.multi-select-option').forEach(option => {
                    if (option.classList.contains('multi-select-selected')) {
                        this.element.querySelector('.multi-select-header').insertAdjacentHTML('afterbegin',
                            `<span class="multi-select-header-option" data-value="${option.dataset.value}">${option.querySelector('.multi-select-option-text').innerHTML}</span>`
                        );
                    }
                });
            } else {
                if (this.selectedValues.length > 0) {
                    this.element.querySelector('.multi-select-header').insertAdjacentHTML('afterbegin',
                        `<span class="multi-select-header-option">${this.selectedValues.length} selected</span>`
                    );
                }
            }
            if (this.element.querySelector('.multi-select-header-option')) {
                this.element.querySelector('.multi-select-header-placeholder').remove();
            }
        }

        get selectedValues() {
            return this.data.filter(data => data.selected).map(data => data.value);
        }

        get selectedItems() {
            return this.data.filter(data => data.selected);
        }

        set data(value) {
            this.options.data = value;
        }

        get data() {
            return this.options.data;
        }

        set selectElement(value) {
            this.options.selectElement = value;
        }

        get selectElement() {
            return this.options.selectElement;
        }

        set element(value) {
            this.options.element = value;
        }

        get element() {
            return this.options.element;
        }

        set placeholder(value) {
            this.options.placeholder = value;
        }

        get placeholder() {
            return this.options.placeholder;
        }

        set name(value) {
            this.options.name = value;
        }

        get name() {
            return this.options.name;
        }

        set width(value) {
            this.options.width = value;
        }

        get width() {
            return this.options.width;
        }

        set height(value) {
            this.options.height = value;
        }

        get height() {
            return this.options.height;
        }

    }
    document.querySelectorAll('[data-multi-select]').forEach(select => new MultiSelect(select));
</script>

</html>
