<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Help</title>
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

        section {
            margin-bottom: 20px;
            /* Add space between sections */
        }

        h2 {
            margin-bottom: 10px;
            /* Add space below headings */
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

        .container {
            display: flex;
            align-items: flex-start;
            margin: 20px;
            display: block;
        }

        .container .content {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .container .content .left-side {
            width: 40%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 15px;
            position: relative;
        }

        .content .left-side::before {
            content: "";
            position: absolute;
            height: 70%;
            width: 2px;
            right: -15px;
            top: 50%;
            transform: translateY(-50%);
            background: #afafb6;
        }

        .content .left-side .details {
            margin: 14px;
            text-align: center;
        }

        .content .left-side .details i {
            font-size: 30px;
            color: #3e2093;
            margin-bottom: 10px;
        }

        .content .left-side .details .topic {
            font-size: 18px;
            font-weight: 500;
        }

        .content .left-side .details .text-one,
        .content .left-side .details .text-two {
            font-size: 12px;
            color: #afafb6;
        }

        .container .content .right-side {
            width: 75%;
            margin-left: 75px;
        }

        .content .right-side .topic-text {
            font-size: 23px;
            font-weight: 600;
            color: #3e2093;
        }

        .right-side .input-box {
            height: 55px;
            width: 100%;
            margin: 12px 0;
        }

        .right-side .input-box input,
        .right-side .input-box textarea {
            height: 100%;
            width: 100%;
            border: none;
            outline: none;
            font-size: 16px;
            background: #f0f1f8;
            border-radius: 6px;
            padding: 0 15px;
            resize: none;
        }

        .right-side .message-box {
            min-height: 110px;
        }

        .right-side .input-box textarea {
            padding-top: 6px;
        }

        .right-side .button {
            display: inline-block;
            margin-top: 12px;
        }

        .right-side .button input[type="submit"] {
            background-color: transparent;
            border: 2px solid #092044;
            color: #092044;
            font-size: 18px;
            padding: 8px 16px;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .button input[type="submit"]:hover {
            background: #092044;
            color: #ffffff;
        }

        @media (max-width: 950px) {
            .container {
                width: 90%;
                padding: 30px 40px 40px 35px;
            }

            .container .content .right-side {
                width: 75%;
                margin-left: 55px;
            }
        }

        @media (max-width: 820px) {
            .container {
                margin: 40px 0;
                height: 100%;
            }

            .container .content {
                flex-direction: column-reverse;
            }

            .container .content .left-side {
                width: 100%;
                flex-direction: row;
                margin-top: 40px;
                justify-content: center;
                flex-wrap: wrap;
            }

            .container .content .left-side::before {
                display: none;
            }

            .container .content .right-side {
                width: 100%;
                margin-left: 0;
            }
        }

        .icon {
            width: 20px;
            height: auto;
        }

        .banner {
            width: 100%;
            height: auto;
        }

        /* Container Styles */
        .container-nav {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #092044;
            box-sizing: border-box;
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
        <div class="container">
            <h3>Guidelines</h3>
            <p>The Sarawak Innovation Repository encompasses a wide array of innovative ideas and concepts spanning
                various disciplines, originating from members of the public, universities, and schools. This repository
                serves as a platform to collect and nurture promising ideas, facilitating their development into
                impactful innovations by collaborating agencies.</p>
            <br>
            <h3>How to Submit</h3>
            <p>To register, simply click on the "Submission" button, which will redirect you to a dedicated webpage for
                idea submission. When submitting your idea, please provide comprehensive information to ensure the
                committee gains a clear understanding of your proposal. Ideas can be submitted individually or as part
                of a group effort. If you're concerned about the confidentiality of your idea, you can provide a rough
                outline initially. Upon review, we may invite you to further elaborate before the committee. The
                committee will assess the submitted ideas and determine their potential for development. If your idea is
                selected, you will receive assistance and support throughout the development process.<br>

                <br>Your contributions play a vital role in driving innovation within Sarawak. We encourage you to share
                your ideas and be part of our journey towards a more innovative future.
            </p><br>
            <h3>Submission Criteria</h3>
            <div>
                <ul>
                    <li><b>Impact:</b> The innovation should have a tangible potential impact on Sarawak's society,
                        economy, or environment. This could be solving a pressing local issue, improving efficiency, or
                        creating economic opportunities.</li>
                    <li><b>Feasibility:</b> The innovation should be technically achievable and have a realistic plan
                        for implementation. This considers resources, technological readiness, and potential roadblocks.
                    </li>
                    <li><b>Relevance to Sarawak:</b> The innovation should address challenges or opportunities specific
                        to the Sarawakian context. This prioritizes solutions with strong local resonance.</li>

                </ul>
            </div><br>
            <h3>FAQ</h3><br>
            <h3>General:</h3>
            <p><b>What is the Sarawak Innovation Repository?</b></p>
            <p>The Sarawak Innovation Repository is a platform that showcases, connects, and empowers innovation in
                Sarawak. It provides a central location for innovators, researchers, investors, and the public to
                discover, share, and collaborate on innovative ideas.</p><br>
            <p><b>Who can use the Sarawak Innovation Repository?</b></p>
            <p>Anyone with an interest in innovation can use the repository. This includes innovators, researchers,
                entrepreneurs, investors, students, and the general public.</p><br>
            <p><b>Is it free to use the Sarawak Innovation Repository?</b></p>
            <p>Yes, the Sarawak Innovation Repository is completely free to use.</p><br>
            <h3>Submitting Innovations:</h3>
            <p><b>What types of innovations can I submit to the repository?</b></p>
            <p>You can submit any type of innovation developed in Sarawak, regardless of its stage of development. This
                could include new products, processes, services, or business models.</p><br>
            <p><b>How do I submit an innovation to the repository?</b></p>
            <p>The process for submitting an innovation is simple and straightforward. You will need to create an
                account and fill out a form with details about your innovation.</p><br>
            <p><b>What happens after I submit my innovation?</b></p>
            <p>Following your submission, our team will review your innovation for a good fit with our platform. If
                approved, we'll reach out to discuss exciting possibilities and explore ways to support your project's
                success.</p><br>
            <h3>Additional Resources:</h3>
            <p><b>Does the repository offer any resources for innovators?</b></p>
            <p>Yes, the repository may offer resources such as guides, or funding opportunities to help innovators
                succeed.</p><br>
            <br>
            <p><a id="PDPA"><b>Privacy Policy Sarawak Research and Development Council’s IdeaKamek & IP Depository
                        System </b></a></p>
            <p>By submitting the form, you hereby consent to the Sarawak Research and Development Council (Research
                Council) and other relevant agencies and associates to:<br><br>

            <ul>
                <li>- Collect, store and process your personal data that you provide in the form such as your full name,
                    passport or identity card number, and other relevant data as required and May disclose your Personal
                    Data to relevant governmental authorities or third parties where required by law or for legal
                    purposes.</li>

                <li>- In addition, your personal data may be shared with any company or agency within the Research
                    Council or government agencies. </li>

                <li>- You may at any time apply to the Research Council to have access to your personal data which are
                    shared by Research Council.</li>
            </ul>

            For the avoidance of doubt, Personal Data includes all data defined within the Personal Data Protection Act
            2010 including all data you had disclosed to the Research Council in this system.<br><br>

            The Research Council is committed to protecting your personal data. If you have questions or comments about
            the Research Council’s administration of personal data, please contact us at: <a
                href="mailto:user01srdc@gmail.com">user01srdc@gmail.com</a> or <a
                href="mailto:srdcresearchunit@gmail.com">srdcresearchunit@gmail.com</a> <br><br><br><br>

        </div>

    </main>
    <footer style="background-color: #092044">
        <div>
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
