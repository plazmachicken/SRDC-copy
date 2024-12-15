<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Industrial Design Basic Info</title>
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

                    <!--Fixing error-->
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
                    <h2 style="text-align: center">Industrial Design Information</h2>
                    <br />
                    <details>
                        <summary>What is Industrial Design?</summary>
                        <p>Industrial design refers to the ornamental or aesthetic aspect of an article, typically
                            stemming from its visual features, such as shape, configuration, pattern, or ornamentation.
                            It relates to the unique and original appearance of a product that enhances its visual
                            appeal and distinguishes it from similar products in the marketplace. Industrial design is
                            an important aspect of product development and marketing, influencing consumer preferences,
                            brand identity, and market competitiveness.</p>
                    </details>
                    <details>
                        <summary>Registrable Industrial Design</summary>
                        <p>A registrable industrial design is one that meets the legal requirements for registration
                            under applicable laws and regulations. These requirements may vary depending on the
                            jurisdiction but generally include criteria such as novelty, originality, and industrial
                            applicability. A registrable industrial design typically possesses distinctive visual
                            features that are not purely functional and are capable of being protected under industrial
                            design law.</p>
                    </details>
                    <details>
                        <summary>Non-registrable Industrial Design</summary>
                        <p>A non-registrable industrial design refers to a design that does not meet the criteria for
                            registration or protection under industrial design law. This may include designs that lack
                            novelty or originality, are purely functional, or are dictated solely by technical or
                            functional considerations. Non-registrable industrial designs may not be eligible for legal
                            protection or enforcement against unauthorized use by competitors</p>
                    </details>
                    <details>
                        <summary>Importance of Industrial Design Registration</summary>
                        <p>
                            <b>1.Legal protection: </b>Registered industrial designs receive legal protection under
                            industrial design law, granting the owner exclusive rights to use the design and prevent
                            others from making, using, or selling products that infringe upon the registered design.
                            This protection helps safeguard the investment in product development and design innovation,
                            discouraging imitation and counterfeiting.<br>
                            <br><b>2.Market exclusivity:</b>Registration provides the owner with a monopoly over the use
                            of the registered design, allowing them to establish market exclusivity and differentiate
                            their products from competitors. This exclusivity can enhance brand recognition, consumer
                            perception, and market competitiveness, providing a competitive advantage in the
                            marketplace.<br>
                            <br><b>3.Enforcement rights:</b>Registered design owners have the right to enforce their
                            design rights against infringers through legal action, including seeking injunctions,
                            damages, and other remedies for infringement. Registration facilitates the enforcement of
                            design rights by establishing a prima facie evidence of ownership and validity, simplifying
                            the legal process and increasing the likelihood of successful enforcement actions.<br>
                            <br><b>4.Commercialization opportunities:</b>Registered industrial designs can be licensed,
                            franchised, or sold to third parties, creating opportunities for revenue generation and
                            commercialization. Licensing agreements allow other companies to use the registered design
                            in exchange for royalties or licensing fees, enabling the owner to monetize their design
                            assets and expand their market reach.<br>
                            <br><b>5.Brand enhancement: </b>Industrial design registration contributes to brand
                            enhancement by enhancing the visual appeal, quality, and distinctiveness of products
                            associated with the registered design. Registered designs can help build brand loyalty,
                            consumer trust, and brand reputation, fostering long-term relationships with customers and
                            enhancing the overall value of the brand.<br>
                        </p>
                    </details>
                    <details>
                        <summary>Period of Registration</summary>
                        <p>1. A registered industrial design is given an initial protection period of 5 years from the
                            date of filing.<br>
                            <br>2. Extendable for a further four consecutive terms. The maximum protection period is 25
                            years.
                        </p>
                    </details>
                    <details>
                        <summary>Who may apply?</summary>
                        <p>1. Author<br>
                            <br>2. Company<br>
                            <br>3. Individual
                        </p>
                    </details>
                </div>
                <div class="box">
                    <br><br>
                    <a href="{{ route('industrialForm') }}">
                        <button class="button-28" role="button">Apply Now</button>
                    </a>
                </div>
    </main>
</body>
<footer style="background-color: #092044">
    <br>
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
