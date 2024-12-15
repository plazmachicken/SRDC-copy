<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
                                                            <a href="{{ $notification->data['data']['link'] ?? '' }}" class="dropdown-item">
                                                                {{ $notification->data['data']['message'] }}
                                                            </a>
                                                            <p class="noti-time">
                                                                <span class="notification-time">{{ $notification->created_at->diffForHumans() }}</span>
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
    <br><br>

    <div class="main-content">

        <div class="row col-sm-10">
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">

                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h3><span class="badge badge-soft-success badge-border">Approved</span></h3>
                                <h3>{{ $approved }}</h3>
                            </div>
                            <div class="db-icon">
                                <img src="{{ asset('assets/img/icons/icons8-approval-96.png') }}"
                                    alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">

                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h3><span class="badge badge-soft-danger badge-border">Denied</span></h3>
                                <h3>{{ $denied }}</h3>
                            </div>
                            <div class="db-icon">
                                <img src="{{ asset('assets/img/icons/icons8-cancel-order-96.png') }}"
                                    alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">

                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h3><span class="badge badge-soft-warning badge-border">Pending</span></h3>
                                <h3>{{ $pending }}</h3>
                            </div>
                            <div class="db-icon">
                                <img src="{{ asset('assets/img/icons/icons8-pending-96.png') }}"
                                    alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">

                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h3><span class="badge badge-soft-info badge-border">Total</span></h3>
                                <h3>{{ $approved + $pending + $denied }}</h3>
                            </div>
                            <div class="db-icon">
                                <img src="{{ asset('assets/img/icons/icons8-all-100.png') }}" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card card-table">
                    <div class="card-body">

                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">All Entries</h3>
                                </div>

                            </div>
                        </div>

                        @if ($allEntries->isEmpty())
                            <div class="alert alert-info">
                                No ip found.
                            </div>
                        @else
                            <table
                                class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                <thead class="student-thread">
                                    <tr>

                                        <th>No</th>
                                        <th>Title</th>
                                        <th>Form Type</th>
                                        <th>Created By</th>
                                        <th>Created At</th>
                                        <th>Status</th>
                                        <th>View</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $ID_COUNT = 0;
                                    @endphp
                                    @foreach ($allEntries as $entry)
                                        <tr id="entryRow{{ $entry->id }}">


                                            @php
                                                $ID_COUNT++;
                                            @endphp
                                            <td>{{ $ID_COUNT }}</td>
                                            <td><a style="font-weight:normal; font-size:100%;"
                                                    href="{{ route('ipstatus.show', ['id' => $entry->id, 'formType' => $entry->formType]) }}">{{ $entry->inventiontitle }}</a>
                                            </td>

                                            <td>
                                               @if ($entry->formType == 1)
                                                    Geographical Indication
                                                @elseif ($entry->formType == 2)
                                                    Trademark
                                                @elseif ($entry->formType == 3)
                                                    Copyright
                                                @elseif ($entry->formType == 4)
                                                    Industrial Design
                                                @elseif ($entry->formType == 5)
                                                    Patent
                                                @elseif ($entry->formType == 6)
                                                    Utility
                                                @endif

                                            </td>
                                            <td>{{ $entry->user->name }}</td>
                                            <td>{{ $entry->created_at->diffForHumans() }}</td>
                                            <td>
                                                <a> <span
                                                        class="badge badge-soft-{{ $entry->is_complete == 'approved' ? 'success' : ($entry->is_complete == 'denied' ? 'danger' : 'warning') }} badge-border">{{ $entry->is_complete }}</span></a>
                                            </td>

                                            <td>
                                                <div class="actions">
                                                    <a href="{{ route('ipstatus.show', ['id' => $entry->id, 'formType' => $entry->formType]) }}"
                                                        class="btn btn-sm bg-success-light me-2">
                                                        <i class="feather-eye"></i>
                                                    </a>

                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        @endif
                    </div>
                </div>
            </div>

        </div>



    </div>
    <br><br><br><br><br><br><br>
    <footer style="background-color: #092044">
        <div class="container">
            <p style="color: #fff">&copy; SRDC 2024</p>
        </div>
    </footer>

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
