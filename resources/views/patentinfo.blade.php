<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Patent Info</title>
    <style type="text/css">
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


        .container-footer {
            max-width: 1000px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            text-align: center;
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

        @import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro");


        details summary::-webkit-details-marker {
            display: none;
        }

        details summary::before {
            content: "";
            position: absolute;
            left: 0;
            no-repeat 50% 50% / 1em 1em;
            width: 1.5em;
            height: 1.5em;
            transition: transform 0.1s linear;
            margin-left: 10%;
        }

        summary {
            margin-left: 10%;
            margin-right: 10%;
            width: 80%;
            padding: 20px;
            padding-left: 25px;
            border-bottom: 1px solid #ccc;
        }

        summary:hover {
            color: #007bff;
        }

        summary:focus {
            outline: none;
        }

        details[open] summary:before {
            transform: rotate(90deg);
        }

        details[open]>summary {
            color: #007bff;
        }

        details[open]>summary~* {
            animation: open 1s ease;
            margin-left: 12%;
            margin-right: 11%;
        }

        p.source {
            padding-top: 50px;
            font-size: 0.75em;
            text-align: center;
        }

        @keyframes open {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .button-28 {
            appearance: none;
            background-color: transparent;
            border: 2px solid #092044;
            border-radius: 15px;
            box-sizing: border-box;
            color: #3B3B3B;
            cursor: pointer;
            display: inline-block;
            font-family: Roobert, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 16px;
            font-weight: 600;
            line-height: normal;
            margin: 0;
            min-height: 60px;
            min-width: 0;
            outline: none;
            padding: 16px 24px;
            text-align: center;
            text-decoration: none;
            transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            width: 13%;
            will-change: transform;
        }

        .button-28:disabled {
            pointer-events: none;
        }

        .button-28:hover {
            color: #fff;
            background-color: #092044;
            box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
            transform: translateY(-2px);
        }

        .button-28:active {
            box-shadow: none;
            transform: translateY(0);
        }

        .box {
            text-align: center;
            margin-top: 30px;
            margin-bottom: 45px;
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

<body>
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
                                                src="{{ asset('images/profile/' . Auth::user()->image) }}" width="31"
                                                alt="Profile">
                                        @else
                                            <img class="rounded-circle"
                                                src="{{ asset('assets/img/profiles/icons8-user-100.png') }}"
                                                width="31" alt="Profile">
                                        @endif
                                    </div>
                                    <div class="user-text">
                                        <h6>@if (Auth::check()) 
                                                {{ Auth::user()->name }}</h6>
                                            @else
                                                <p class="text-muted mb-0">User</p>
                                            @endif
                                    </div> 
                                </div>
                                    @if (Auth::check()) 
                                        <a class="dropdown-item" href="{{ route('user.profile', Auth::user()->id) }}">Profile</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="GET" class="d-none">
                                            @csrf
                                        </form>
                                    @endif
                            </div>
                        @endif
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-10 offset-1">
                    <h2 style="text-align: center">Patent Information</h2>
                    <br />
                    <details>
                        <summary>What is a Patent?</summary>
                        <p>A patent is a form of intellectual property right granted by a government to an inventor,
                            giving them the exclusive right to make, use, and sell their invention for a limited period
                            of time, usually 20 years from the filing date of the patent application. In return for
                            disclosing their invention to the public, the inventor receives the right to prevent others
                            from using, making, or selling the patented invention without their permission.</p>
                    </details>
                    <details>
                        <summary>Patentable Inventions</summary>
                        <p>Patentable inventions refer to creations or discoveries that meet certain criteria set by
                            patent laws. Generally, for an invention to be patentable, it must be novel (new),
                            non-obvious (not readily evident to someone skilled in the field), and useful (have a
                            practical application). Patentable inventions can include products, processes, machines,
                            compositions of matter, and improvements to existing inventions.</p>
                    </details>
                    <details>
                        <summary>Non-Patentable Inventions</summary>
                        <p>
                            Non-patentable refers to inventions or discoveries that do not meet the criteria for
                            patentability and therefore cannot be granted patent protection. While the specific criteria
                            for patentability may vary depending on the jurisdiction, some common reasons why inventions
                            may be deemed non-patentable include:<br>

                            <br><b>1.Lack of Novelty:</b> An invention is considered non-patentable if it lacks novelty,
                            meaning it is not new or original. If an invention has been disclosed or made available to
                            the public before the patent application filing date, it may not meet the novelty
                            requirement.<br>

                            <br><b>2.Obviousness:</b> Inventions that would have been obvious to someone skilled in the
                            relevant field at the time of invention are generally considered non-patentable. This
                            criterion aims to prevent the patenting of minor variations or combinations of existing
                            technologies that would be obvious to practitioners in the field.<br>

                            <br><b>3.Lack of Utility:</b> Patent law typically requires inventions to have a practical
                            utility or usefulness. Inventions that lack any discernible practical application or do not
                            work as intended may be deemed non-patentable.<br>

                            <br><b>4.Subject Matter Exclusions:</b> Certain types of subject matter may be explicitly
                            excluded from patent protection, such as abstract ideas, laws of nature, natural phenomena,
                            mathematical formulas, and methods of doing business. These exclusions aim to ensure that
                            patents are granted only for inventions that provide tangible, practical benefits.<br>

                            <br><b>5.Public Policy Considerations:</b> Inventions that are contrary to public policy or
                            morality may also be deemed non-patentable. For example, inventions that are harmful to
                            public health or safety, or those that promote illegal activities, may be rejected on these
                            grounds.<br>

                            <br><b>6.Inadequate Disclosure:</b> Patent applications must include sufficient disclosure
                            of the invention to enable a person skilled in the relevant field to replicate or implement
                            the invention without undue experimentation. Inventions with inadequate or insufficient
                            disclosure may be rejected for patent protection.
                        </p>
                    </details>
                    <details>
                        <summary>Importance of Patent Registration</summary>
                        <p><b>Exclusive Rights:</b> Patent registration grants inventors exclusive rights to their
                            inventions, allowing them to prevent others from using, making, or selling the patented
                            invention without their consent. This exclusivity enables inventors to capitalize on their
                            innovations and recoup investments in research and development.<br>
                            <br><b>Market Advantage:</b> Patents can provide a competitive edge in the marketplace by
                            offering protection against competitors who may attempt to replicate or capitalize on the
                            invention. This advantage can help companies establish market dominance and capture greater
                            market share.<br>
                            <br><b>Incentive for Innovation: </b>Patent protection incentivizes innovation by rewarding
                            inventors with a period of exclusivity, during which they can profit from their inventions.
                            This encourages individuals and companies to invest resources into research and development,
                            leading to the creation of new technologies and advancements that benefit society as a
                            whole.<br>
                            <br><b>Attracting Investment and Funding:</b> Patents can enhance the attractiveness of a
                            company or individual to investors and potential partners by demonstrating their commitment
                            to innovation and their ability to protect valuable intellectual property assets. This can
                            facilitate access to funding, partnerships, and collaborations that support further
                            development and commercialization efforts.<br>
                            <br><b>Licensing Opportunities:</b> Patent holders can generate additional revenue streams
                            by licensing their patented inventions to third parties for use in exchange for royalties or
                            other forms of compensation. Licensing agreements allow inventors to leverage their
                            intellectual property without bearing the full burden of manufacturing, marketing, and
                            distribution.
                        </p>
                    </details>
                </div>

                <div class="box">
                    <br><br>
                    <a href="{{ route('patent') }}">
                        <button class="button-28" role="button">Apply Now</button></a>
                </div>

    </main>
</body>
<br><br><br><br><br><br>
<br>
<br>
<footer style="background-color: #092044">
    <div class="container">
        <p style="color: #fff">&copy; SRDC 2024</p>
    </div>
</footer>

<script type="text/javascript">
    // Fetch all details element
    const details = Array.from(document.querySelectorAll("details"));

    // Add onclick listeners
    details.forEach(targetDetail => {
        targetDetail.addEventListener("click", () => {
            // Close all details that are not targetDetail
            details.forEach(detail => {
                if (detail !== targetDetail) {
                    detail.removeAttribute("open");
                }
            });
        });
    });
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
