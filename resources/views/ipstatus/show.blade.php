{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IP Status Details</title>
    <!-- Add your CSS stylesheets here -->
</head>
<body>
    <header>
        <!-- Header content if needed -->
    </header>

    <main>
    <div class="container">
            <h1>IP Status Details</h1>


            <div class="details">
                @if (isset($entry))
                    @switch($formType)
                        @case(1)
                            <p><strong>Name:</strong> {{ $entry->inventiontitle }}</p><hr>
                            <p>This is Geographical Indication table</p>
                            @break

                        @case(2)
                            <p><strong>Name:</strong> {{ $entry->inventiontitle }}</p><hr>
                            <p>This is Trademark table</p>
                            @break

                        @case(3)
                            <p><strong>Name:</strong> {{ $entry->inventiontitle }}</p><hr>
                            <p>This is Copyright table</p>
                            @break

                        @case(4)
                            <p><strong>Name:</strong> {{ $entry->inventiontitle }}</p><hr>
                            <p>This is Industrial Design table</p>
                            @break

                        @case(5)
                            <p><strong>Name:</strong> {{ $entry->inventiontitle }}</p><hr>
                            <p>This is Patent table</p>
                            @break

                        @case(6)
                            <p><strong>Name:</strong> {{ $entry->inventiontitle }}</p><hr>
                            <p>This is Utility table</p>
                            @break

                        @default
                            <p>No data found</p>
                    @endswitch
                @else
                    <p>No data found</p>
                @endif
            </div>
        </div>
    </main>

    <footer>
        <!-- Footer content if needed -->
    </footer>

    <!-- Add your JavaScript files here -->
</body>
</html> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SRDC</title>
    <link rel="stylesheet" href="homepagestyle.css">

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

<div class="container-nav">
    <!-- Logo -->
    <a href="{{ route('welcome') }}">
         <a href="{{ route('welcome') }}"><img src="{{ asset('logo_20200823.jpg') }}" alt="utkylui" class="logo"
                style="width: 110px; height: auto;"></a>
    </a>

    <!-- Navigation Menu -->
    <nav>
        <ul class="nav-list">
            <!-- Navigation Links -->
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

            <!-- Right Aligned Notifications and User Dropdowns -->
            <li class="nav-right">
                @auth
                    <!-- Notifications and User Profile Container -->
                    <div class="d-flex align-items-center">

                        <!-- Notifications Dropdown -->
                        <div class="dropdown me-3">
                            <a href="#" class="dropdown-toggle nav-link header-nav-list"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('assets/img/icons/header-icon-05.svg') }}" alt="Notifications">
                                <span class="badge bg-success">
                                    {{ auth()->user()->unreadNotifications->count() }}
                                    <span class="visually-hidden">unread notifications</span>
                                </span>
                            </a>

                            <div class="dropdown-menu notifications">
                                <div class="topnav-dropdown-header">
                                    <span class="notification-title">Notifications</span>
                                    <a href="{{ route('user.markasread') }}" class="clear-noti">Clear All</a>
                                </div>
                                <div class="noti-content">
                                    <ul class="notification-list">
                                        @if (auth()->user()->unreadNotifications->isNotEmpty())
                                            @foreach (auth()->user()->unreadNotifications as $notification)
                                                <li class="notification-message">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <a href="{{ $notification->data['data']['link'] ?? '#' }}"
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
                                                <div class="media justify-content-center">
                                                    <span>There are no notifications!</span>
                                                </div>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                                <div class="topnav-dropdown-footer">
                                    <a href="#">View all Notifications</a>
                                </div>
                            </div>
                        </div>

                        <!-- User Profile Dropdown -->
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <div class="user-img">
                                    @if (Auth::user()->image)
                                        <img src="{{ asset('images/profile/' . Auth::user()->image) }}"
                                            alt="Profile" class="rounded-circle">
                                    @else
                                        <img src="{{ asset('assets/img/profiles/icons8-user-100.png') }}"
                                            alt="Profile" class="rounded-circle">
                                    @endif
                                    <div class="user-text">
                                        <h6 style="color: rgba(255, 255, 255, 0.671)">{{ Auth::user()->name }}</h6>
                                        <p class="text-muted mb-0">User</p>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu">
                                <div class="user-header">
                                    <div class="avatar avatar-sm">
                                        @if (Auth::user()->image)
                                            <img src="{{ asset('images/profile/' . Auth::user()->image) }}"
                                                alt="Profile" class="rounded-circle">
                                        @else
                                            <img src="{{ asset('assets/img/profiles/icons8-user-100.png') }}"
                                                alt="Profile" class="rounded-circle">
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
                        </div>

                    </div>

                @endauth
            </li>
        </ul>
    </nav>
</div>
</header>



    <main>
        <div class="tab-content profile-tab-cont">

            <div class="tab-pane fade show active" id="per_details_tab">

                <div class="row">
                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                @if (isset($entry))
                                    @switch($formType)
                                        @case(1)
                                            <h5 class="card-title d-flex justify-content-between">
                                                <span>This is Geographical form</span>
                                                @if ($entry->is_complete == 'denied')
                                                    <a
                                                        href="{{ route('ipstatus.edit', ['formType' => $entry->formType, 'id' => $entry->id]) }}"><i
                                                            class="far fa-edit me-1"></i>Edit</a>
                                                @endif
                                            </h5>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Invention Title</p>
                                                <p class="col-sm-9">{{ $entry->inventiontitle }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Name</p>
                                                <p class="col-sm-9">{{ $entry->name }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Application Type</p>
                                                <p class="col-sm-9">{{ $entry->applicanttype }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Nationality </p>
                                                <p class="col-sm-9">{{ $entry->nationality }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Postcode </p>
                                                <p class="col-sm-9">{{ $entry->postcode }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Town</p>
                                                <p class="col-sm-9">{{ $entry->town }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">State</p>
                                                <p class="col-sm-9">{{ $entry->state }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Telephone</p>
                                                <p class="col-sm-9">{{ $entry->telephone }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Email</p>
                                                <p class="col-sm-9">{{ $entry->email }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">website</p>
                                                <p class="col-sm-9">{{ $entry->website }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Postcode Service</p>
                                                <p class="col-sm-9">{{ $entry->postcodeservice }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Town Service</p>
                                                <p class="col-sm-9">{{ $entry->townservice }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">State Service</p>
                                                <p class="col-sm-9">{{ $entry->stateservice }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Representation</p>
                                                <p class="col-sm-9">{{ $entry->representation }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">The representation of the earlier geographical indication</p>
                                                <p class="col-sm-9">{{ $entry->earlygi }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">The registration number or the application number of that earlier geographical indication:</p>
                                                <p class="col-sm-9">{{ $entry->emailgi }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Non Roman </p>
                                                <p class="col-sm-9">{{ $entry->non_roman }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Character</p>
                                                <p class="col-sm-9">{{ $entry->character }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Transliteration</p>
                                                <p class="col-sm-9">{{ $entry->transliteration }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Translation</p>
                                                <p class="col-sm-9">{{ $entry->translation }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Non National</p>
                                                <p class="col-sm-9">{{ $entry->non_national }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Language</p>
                                                <p class="col-sm-9">{{ $entry->language }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Translation National
                                                </p>
                                                <p class="col-sm-9">{{ $entry->translation_national }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Class</p>
                                                <p class="col-sm-9">{{ $entry->class }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">List of Goods</p>
                                                <p class="col-sm-9">{{ $entry->listofgoods }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Date of protection</p>
                                                <p class="col-sm-9">{{ $entry->date_of_protection }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Goods Description</p>
                                                <p class="col-sm-9">{{ $entry->goods_description }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Supporting Document</p>
                                                <p class="col-sm-9">{{ $entry->supporting_documents1 }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Area Picture</p>
                                                <p class="col-sm-9">{{ $entry->area_picture }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Colour </p>
                                                <p class="col-sm-9">{{ $entry->colour }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Shape</p>
                                                <p class="col-sm-9">{{ $entry->shape }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Texture</p>
                                                <p class="col-sm-9">{{ $entry->texture }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Size</p>
                                                <p class="col-sm-9">{{ $entry->size }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Weight</p>
                                                <p class="col-sm-9">{{ $entry->weight }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Taste</p>
                                                <p class="col-sm-9">{{ $entry->taste }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Proof of Origin</p>
                                                <p class="col-sm-9">{{ $entry->proof_of_origin }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Casual Link</p>
                                                <p class="col-sm-9">{{ $entry->causal_link }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Processing Techiques
                                                </p>
                                                <p class="col-sm-9">{{ $entry->processing_techniques }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Labling Description</p>
                                                <p class="col-sm-9">{{ $entry->labelling_description }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Award Recognition</p>
                                                <p class="col-sm-9">{{ $entry->award_recognition }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Inspection Body</p>
                                                <p class="col-sm-9">{{ $entry->inspection_body }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Association</p>
                                                <p class="col-sm-9">{{ $entry->association }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Supporting Document</p>
                                                <p class="col-sm-9">{{ $entry->supporting_documents }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Created At</p>
                                                <p class="col-sm-9">{{ $entry->created_at->diffForHumans() }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Status</p>
                                                <p class="col-sm-9">
                                                    @if ($entry->is_complete == 'Pending')
                                                        <span
                                                            class="badge badge-soft-warning badge-border">{{ $entry->is_complete }}</span>
                                                    @elseif($entry->is_complete == 'approved')
                                                        <span
                                                            class="badge badge-soft-success badge-border">{{ $entry->is_complete }}</span>
                                                    @else
                                                        <span
                                                            class="badge badge-soft-danger badge-border">{{ $entry->is_complete }}</span>
                                                    @endif

                                                </p>
                                                <hr>

                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Comment</p>
                                                <p class="col-sm-9">{{ $entry->comment }}</p>
                                                <hr>

                                            </div>
                                        @break

                                        @case(2)
                                            <h5 class="card-title d-flex justify-content-between">
                                                <span>This is Trademark form</span>
                                                @if ($entry->is_complete == 'denied')
                                                    <a
                                                        href="{{ route('ipstatus.edit', ['formType' => $entry->formType, 'id' => $entry->id]) }}"><i
                                                            class="far fa-edit me-1"></i>Edit</a>
                                                @endif
                                            </h5>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Invention Title</p>
                                                <p class="col-sm-9">{{ $entry->inventiontitle }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Name</p>
                                                <p class="col-sm-9">{{ $entry->name }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Applicant Type</p>
                                                <p class="col-sm-9">{{ $entry->applicant_type }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Business Registration
                                                </p>
                                                <p class="col-sm-9">{{ $entry->business_registration }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">business address</p>
                                                <p class="col-sm-9">{{ $entry->business_address }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Telephone</p>
                                                <p class="col-sm-9">{{ $entry->phone_num }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Reference</p>
                                                <p class="col-sm-9">{{ $entry->reference }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Trade Type</p>
                                                <p class="col-sm-9">{{ $entry->trade_type }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">word</p>
                                                <p class="col-sm-9">{{ $entry->word }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">device</p>
                                                <p class="col-sm-9">{{ $entry->device }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">word device</p>
                                                <p class="col-sm-9">{{ $entry->word_device }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Shape</p>
                                                <p class="col-sm-9">{{ $entry->shape }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Style Word</p>
                                                <p class="col-sm-9">{{ $entry->styleword }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Color</p>
                                                <p class="col-sm-9">{{ $entry->color }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Sound</p>
                                                <p class="col-sm-9">{{ $entry->sound }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Scent</p>
                                                <p class="col-sm-9">{{ $entry->scent }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Hologram</p>
                                                <p class="col-sm-9">{{ $entry->hologram }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Positioning</p>
                                                <p class="col-sm-9">{{ $entry->positioning }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Motion</p>
                                                <p class="col-sm-9">{{ $entry->motion }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Combination</p>
                                                <p class="col-sm-9">{{ $entry->combination }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Description</p>
                                                <p class="col-sm-9">{{ $entry->description }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Trademark Color</p>
                                                <p class="col-sm-9">{{ $entry->trademark_color }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Color Description</p>
                                                <p class="col-sm-9">{{ $entry->color_description }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Graphic</p>
                                                <p class="col-sm-9">{{ $entry->graphic }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Disclaimer</p>
                                                <p class="col-sm-9">{{ $entry->disclaimer }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">First Use</p>
                                                <p class="col-sm-9">{{ $entry->firstuse }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Additional Docs</p>
                                                <p class="col-sm-9">{{ $entry->additionalDocs }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Created At</p>
                                                <p class="col-sm-9">{{ $entry->created_at->diffForHumans() }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Status</p>
                                                <p class="col-sm-9">
                                                    @if ($entry->is_complete == 'Pending')
                                                        <span
                                                            class="badge badge-soft-warning badge-border">{{ $entry->is_complete }}</span>
                                                    @elseif($entry->is_complete == 'approved')
                                                        <span
                                                            class="badge badge-soft-success badge-border">{{ $entry->is_complete }}</span>
                                                    @else
                                                        <span
                                                            class="badge badge-soft-danger badge-border">{{ $entry->is_complete }}</span>
                                                    @endif

                                                </p>
                                                <hr>

                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Comment</p>
                                                <p class="col-sm-9">{{ $entry->comment }}</p>
                                                <hr>

                                            </div>
                                        @break

                                        @case(3)
                                            <h5 class="card-title d-flex justify-content-between">
                                                <span>This is Copyright form</span>
                                                @if ($entry->is_complete == 'denied')
                                                    <a
                                                        href="{{ route('ipstatus.edit', ['formType' => $entry->formType, 'id' => $entry->id]) }}"><i
                                                            class="far fa-edit me-1"></i>Edit</a>
                                                @endif
                                            </h5>

                                            <div class="row">
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Invention Title</p>
                                                <p class="col-sm-9">{{ $entry->inventiontitle }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Work Title</p>
                                                <p class="col-sm-9">{{ $entry->worktitle }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Work Translation</p>
                                                <p class="col-sm-9">{{ $entry->worktranslation }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Work Transliteration
                                                </p>
                                                <p class="col-sm-9">{{ $entry->worktransliteration }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Work Language</p>
                                                <p class="col-sm-9">{{ $entry->worklanguage }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Copyright Work</p>
                                                <p class="col-sm-9">{{ $entry->copyrightwork }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Derivative Work</p>
                                                <p class="col-sm-9">{{ $entry->derivativework }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Date Created</p>
                                                <p class="col-sm-9">{{ $entry->datecreate }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Publication Status</p>
                                                <p class="col-sm-9">{{ $entry->publication_status }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Year Compilation</p>
                                                <p class="col-sm-9">{{ $entry->year_compilation }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Date First Publication
                                                </p>
                                                <p class="col-sm-9">{{ $entry->date_first_publication }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Country Publication</p>
                                                <p class="col-sm-9">{{ $entry->country_publication }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Author Name</p>
                                                <p class="col-sm-9">{{ $entry->authorname }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Author Id</p>
                                                <p class="col-sm-9">{{ $entry->authorid }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Author Nationality</p>
                                                <p class="col-sm-9">{{ $entry->authornationality }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Author Address</p>
                                                <p class="col-sm-9">{{ $entry->authoraddress }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Author Postcode</p>
                                                <p class="col-sm-9">{{ $entry->authorpostcode }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Author City</p>
                                                <p class="col-sm-9">{{ $entry->authorcity }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Author State</p>
                                                <p class="col-sm-9">{{ $entry->authorstate }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Author Country</p>
                                                <p class="col-sm-9">{{ $entry->authorcountry }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Author Email</p>
                                                <p class="col-sm-9">{{ $entry->authoremail }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Telephone</p>
                                                <p class="col-sm-9">{{ $entry->telno }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Fax</p>
                                                <p class="col-sm-9">{{ $entry->faxno }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Owner Name</p>
                                                <p class="col-sm-9">{{ $entry->ownername }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Owner Id</p>
                                                <p class="col-sm-9">{{ $entry->ownerid }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Company Name</p>
                                                <p class="col-sm-9">{{ $entry->companyname }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Company Number</p>
                                                <p class="col-sm-9">{{ $entry->companyno }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Owner Address</p>
                                                <p class="col-sm-9">{{ $entry->owneradd }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Owner Postcode</p>
                                                <p class="col-sm-9">{{ $entry->ownerpostcode }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Owner City</p>
                                                <p class="col-sm-9">{{ $entry->ownercity }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Owner Nationality</p>
                                                <p class="col-sm-9">{{ $entry->ownernationality }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Owner State</p>
                                                <p class="col-sm-9">{{ $entry->ownerstate }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Owner Country</p>
                                                <p class="col-sm-9">{{ $entry->ownercountry }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Owner Telephone Number</p>
                                                <p class="col-sm-9">{{ $entry->ownertelno }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Owner Email</p>
                                                <p class="col-sm-9">{{ $entry->owneremail }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Owner Fax</p>
                                                <p class="col-sm-9">{{ $entry->ownerfaxno }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Licensee Name</p>
                                                <p class="col-sm-9">{{ $entry->licenseename }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Licensee Id</p>
                                                <p class="col-sm-9">{{ $entry->licenseeid }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Licensee Company Name
                                                </p>
                                                <p class="col-sm-9">{{ $entry->licenseecompanyname }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Licensee Company</p>
                                                <p class="col-sm-9">{{ $entry->licenseecompno }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Licensee Address</p>
                                                <p class="col-sm-9">{{ $entry->licenseeadd }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Licensee Postcode</p>
                                                <p class="col-sm-9">{{ $entry->licenseepostcode }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Licensee City</p>
                                                <p class="col-sm-9">{{ $entry->licenseecity }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Licensee Nationality
                                                </p>
                                                <p class="col-sm-9">{{ $entry->licenseenationality }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Licensee State</p>
                                                <p class="col-sm-9">{{ $entry->licenseestate }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Licensee Country</p>
                                                <p class="col-sm-9">{{ $entry->licenseecountry }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Licensee Telephone Number</p>
                                                <p class="col-sm-9">{{ $entry->licenseetelno }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Licensee Email</p>
                                                <p class="col-sm-9">{{ $entry->licenseeemail }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Licensee Fax</p>
                                                <p class="col-sm-9">{{ $entry->licenseefaxno }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Created At</p>
                                                <p class="col-sm-9">{{ $entry->created_at->diffForHumans() }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Status</p>
                                                <p class="col-sm-9">
                                                    @if ($entry->is_complete == 'Pending')
                                                        <span
                                                            class="badge badge-soft-warning badge-border">{{ $entry->is_complete }}</span>
                                                    @elseif($entry->is_complete == 'approved')
                                                        <span
                                                            class="badge badge-soft-success badge-border">{{ $entry->is_complete }}</span>
                                                    @else
                                                        <span
                                                            class="badge badge-soft-danger badge-border">{{ $entry->is_complete }}</span>
                                                    @endif

                                                </p>
                                                <hr>

                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Comment</p>
                                                <p class="col-sm-9">{{ $entry->comment }}</p>
                                                <hr>

                                            </div>
                                        @break

                                        @case(4)
                                            <h5 class="card-title d-flex justify-content-between">
                                                <span>This is Industrial form</span>
                                                @if ($entry->is_complete == 'denied')
                                                    <a
                                                        href="{{ route('ipstatus.edit', ['formType' => $entry->formType, 'id' => $entry->id]) }}"><i
                                                            class="far fa-edit me-1"></i>Edit</a>
                                                @endif
                                            </h5>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Invention Title</p>
                                                <p class="col-sm-9">{{ $entry->inventiontitle }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Name</p>
                                                <p class="col-sm-9">{{ $entry->name }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Author</p>
                                                <p class="col-sm-9">{{ $entry->author }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Agent Name </p>
                                                <p class="col-sm-9">{{ $entry->agent_name }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Article </p>
                                                <p class="col-sm-9">{{ $entry->article }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Classification</p>
                                                <p class="col-sm-9">{{ $entry->classification }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">View</p>
                                                <p class="col-sm-9">{{ $entry->view }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Number of industrial design applied for registration</p>
                                                <p class="col-sm-9">{{ $entry->multi }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Association</p>
                                                <p class="col-sm-9">{{ $entry->association }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Priority Country</p>
                                                <p class="col-sm-9">{{ $entry->prioCountry }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Priority Number</p>
                                                <p class="col-sm-9">{{ $entry->prioNo }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Priority Date</p>
                                                <p class="col-sm-9">{{ $entry->prioDate }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Instrument details</p>
                                                <p class="col-sm-9">{{ $entry->ten }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Division Number</p>
                                                <p class="col-sm-9">{{ $entry->divNo }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Division Date</p>
                                                <p class="col-sm-9">{{ $entry->divDate }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Name and telephone number to contact in Malaysia</p>
                                                <p class="col-sm-9">{{ $entry->malay }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Created At</p>
                                                <p class="col-sm-9">{{ $entry->created_at->diffForHumans() }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Status</p>
                                                <p class="col-sm-9">
                                                    @if ($entry->is_complete == 'Pending')
                                                        <span
                                                            class="badge badge-soft-warning badge-border">{{ $entry->is_complete }}</span>
                                                    @elseif($entry->is_complete == 'approved')
                                                        <span
                                                            class="badge badge-soft-success badge-border">{{ $entry->is_complete }}</span>
                                                    @else
                                                        <span
                                                            class="badge badge-soft-danger badge-border">{{ $entry->is_complete }}</span>
                                                    @endif

                                                </p>
                                                <hr>

                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Comment</p>
                                                <p class="col-sm-9">{{ $entry->comment }}</p>
                                                <hr>

                                            </div>
                                        @break

                                        @case(5)
                                            <h5 class="card-title d-flex justify-content-between">
                                                <span>This is Patent form</span>
                                                @if ($entry->is_complete == 'denied')
                                                    <a
                                                        href="{{ route('ipstatus.edit', ['formType' => $entry->formType, 'id' => $entry->id]) }}"><i
                                                            class="far fa-edit me-1"></i>Edit</a>
                                                @endif
                                            </h5>

                                            <div class="row">
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Invention Title</p>
                                                <p class="col-sm-9">{{ $entry->inventiontitle }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Name</p>
                                                <p class="col-sm-9">{{ $entry->name }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Applicant Id</p>
                                                <p class="col-sm-9">{{ $entry->applicantid }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Applicant Address</p>
                                                <p class="col-sm-9">{{ $entry->applicantaddress }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Applicant Nationality
                                                </p>
                                                <p class="col-sm-9">{{ $entry->applicantnationality }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Telephone</p>
                                                <p class="col-sm-9">{{ $entry->telno }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Fax</p>
                                                <p class="col-sm-9">{{ $entry->faxno }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Innovator Status</p>
                                                <p class="col-sm-9">{{ $entry->innovator_status }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Innovator Name</p>
                                                <p class="col-sm-9">{{ $entry->innovator_name }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Innovator Address</p>
                                                <p class="col-sm-9">{{ $entry->innovator_address }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Divisional</p>
                                                <p class="col-sm-9">{{ $entry->divisional }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Filing Date</p>
                                                <p class="col-sm-9">{{ $entry->filingdate }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Priority Date</p>
                                                <p class="col-sm-9">{{ $entry->prioritydate }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Initial Application</p>
                                                <p class="col-sm-9">{{ $entry->initialapplication }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Initial Filing</p>
                                                <p class="col-sm-9">{{ $entry->initialfiling }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Claim Country</p>
                                                <p class="col-sm-9">{{ $entry->claimcountry }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Filing Claim</p>
                                                <p class="col-sm-9">{{ $entry->filingclaim }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Claim Application</p>
                                                <p class="col-sm-9">{{ $entry->claimapplication }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Patent Symbol</p>
                                                <p class="col-sm-9">{{ $entry->patentsymbol }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Early Application</p>
                                                <p class="col-sm-9">{{ $entry->earlyapplication }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Created At</p>
                                                <p class="col-sm-9">{{ $entry->created_at->diffForHumans() }}</p>
                                                <hr>
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Status</p>
                                                <p class="col-sm-9">
                                                    @if ($entry->is_complete == 'Pending')
                                                        <span
                                                            class="badge badge-soft-warning badge-border">{{ $entry->is_complete }}</span>
                                                    @elseif($entry->is_complete == 'approved')
                                                        <span
                                                            class="badge badge-soft-success badge-border">{{ $entry->is_complete }}</span>
                                                    @else
                                                        <span
                                                            class="badge badge-soft-danger badge-border">{{ $entry->is_complete }}</span>
                                                    @endif

                                                </p>
                                                <hr>

                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Comment</p>
                                                <p class="col-sm-9">{{ $entry->comment }}</p>
                                                <hr>

                                            </div>
                                        @break

                                        @case(6)
                                            <h5 class="card-title d-flex justify-content-between">
                                                <span>This is utility form</span>
                                                @if ($entry->is_complete == 'denied')
                                                    <a
                                                        href="{{ route('ipstatus.edit', ['formType' => $entry->formType, 'id' => $entry->id]) }}"><i
                                                            class="far fa-edit me-1"></i>Edit</a>
                                                @endif

                                            </h5>

                                            <h5 class="card-title d-flex justify-content-between">



                                                <div class="row">
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Invention Title</p>
                                                    <p class="col-sm-9">{{ $entry->inventiontitle }}</p>
                                                    <hr>

                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Name</p>
                                                    <p class="col-sm-9">{{ $entry->name }}</p>
                                                    <hr>

                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Applicant Id</p>
                                                    <p class="col-sm-9">{{ $entry->applicantid }}</p>
                                                    <hr>

                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Applicant Address
                                                    </p>
                                                    <p class="col-sm-9">{{ $entry->applicantaddress }}</p>
                                                    <hr>

                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Applicant
                                                        Nationality
                                                    </p>
                                                    <p class="col-sm-9">{{ $entry->applicantnationality }}</p>
                                                    <hr>

                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Telephone</p>
                                                    <p class="col-sm-9">{{ $entry->telno }}</p>
                                                    <hr>

                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Fax</p>
                                                    <p class="col-sm-9">{{ $entry->faxno }}</p>
                                                    <hr>

                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Innovator Status
                                                    </p>
                                                    <p class="col-sm-9">{{ $entry->innovator_status }}</p>
                                                    <hr>

                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Innovator Name</p>
                                                    <p class="col-sm-9">{{ $entry->innovator_name }}</p>
                                                    <hr>

                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Innovator Address
                                                    </p>
                                                    <p class="col-sm-9">{{ $entry->innovator_address }}</p>
                                                    <hr>

                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Divisional</p>
                                                    <p class="col-sm-9">{{ $entry->divisional }}</p>
                                                    <hr>

                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Filing Date</p>
                                                    <p class="col-sm-9">{{ $entry->filingdate }}</p>
                                                    <hr>

                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Priority Date</p>
                                                    <p class="col-sm-9">{{ $entry->prioritydate }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Initial Application
                                                    </p>
                                                    <p class="col-sm-9">{{ $entry->initialapplication }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Initial Filing</p>
                                                    <p class="col-sm-9">{{ $entry->initialfiling }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Claim Country</p>
                                                    <p class="col-sm-9">{{ $entry->claimcountry }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Filing Claim</p>
                                                    <p class="col-sm-9">{{ $entry->filingclaim }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Claim Application
                                                    </p>
                                                    <p class="col-sm-9">{{ $entry->claimapplication }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Patent Symbol</p>
                                                    <p class="col-sm-9">{{ $entry->patentsymbol }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Early Application
                                                    </p>
                                                    <p class="col-sm-9">{{ $entry->earlyapplication }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Created At</p>
                                                    <p class="col-sm-9">{{ $entry->created_at->diffForHumans() }}</p>
                                                    <hr>
@if ($entry->status == 'approved' || $entry->status == 'denied')
    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">
        {{ $entry->status == 'approved' ? 'Approved Date' : 'Denied Date' }}
    </p>
    <p class="col-sm-9">
        {{ $entry->status == 'approved' ? $entry->approved_date : $entry->denied_date }}
    </p>
@endif
     <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Status</p>
                                                    <p class="col-sm-9">
                                                        @if ($entry->is_complete == 'Pending')
                                                            <span
                                                                class="badge badge-soft-warning badge-border">{{ $entry->is_complete }}</span>
                                                        @elseif($entry->is_complete == 'approved')
                                                            <span
                                                                class="badge badge-soft-success badge-border">{{ $entry->is_complete }}</span>
                                                        @else
                                                            <span
                                                                class="badge badge-soft-danger badge-border">{{ $entry->is_complete }}</span>
                                                        @endif

                                                    </p>
                                                    <hr>

                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Comment</p>
                                                    <p class="col-sm-9">{{ $entry->comment }}</p>
                                                    <hr>





                                                </div>
                                            @break

                                            @default
                                                <p>No data found</p>
                                        @endswitch
                                    @else
                                        <p>No data found</p>
                                @endif


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
