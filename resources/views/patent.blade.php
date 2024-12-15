<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patent Info</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/feather/feather.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/icons/flags/flags.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <style>
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
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        form {
            max-width: 800px;
            margin: 0 auto;
        }

        fieldset {
            border: 2px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }

        legend {
            font-size: 20px;
            font-weight: bold;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #666;
        }

        .checks {
            display: flex;
        }

        input[type="text"],
        textarea,
        .input-file {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="checkbox"],
        input[type="radio"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }




        textarea {
            height: 150px;
            resize: vertical;
        }

        .checkbox,
        .radio {
            margin-bottom: 10px;
        }

        .checkbox label,
        .radio label {
            display: inline-block;
            margin-right: 20px;
            font-weight: normal;
            color: #666;
        }

        .checkbox input[type="checkbox"],
        .radio input[type="radio"] {
            margin-right: 5px;
            display: inline-block;
            vertical-align: middle;
        }

        input[type="date"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .button-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        input[type="submit"],
        input[type="reset"] {
            padding: 5px 5px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
            width: 110px;
            /* Adjust width as needed */
            margin: 0 10px;
            /* Add some space between buttons */
            transition: 0.5s ease-in-out;
        }

        input[type="reset"] {
            background-color: #d72f2f;
            /* Red color */
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
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

        h1 {
            margin: 0;
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
    </style>
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
                </ul>
            </nav>
        </div>
    </header>

    <h1>Patent Form Submission</h1>
    <form method="post" action="{{ route('saveItemPatent') }}" accept-charset="UTF-8" class="patentForm"
        enctype="multipart/form-data">
        {{ csrf_field() }}

        <fieldset>


            <!-- Form Name -->
            <legend class="legends">1. Invention</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="inventiontitle">Title of Invention</label>
                <div class="col-md-10">
                    <input id="inventiontitle" name="inventiontitle" type="text" placeholder=""
                        class="form-control input-md" required />

                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend class="legends">2. Applicant Info</legend>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="name">Applicant Name</label>
                <div class="col-md-10">
                    <input id="applicantname" name="name" type="text" placeholder=""
                        class="form-control input-md" required />

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="applicantid">I.C / Passport No</label>
                <div class="col-md-10">
                    <input id="applicantid" name="applicantid" type="text" placeholder=""
                        class="form-control input-md" required />

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="applicantaddress">Address</label>
                <div class="col-md-10">
                    <input id="applicantaddress" name="applicantaddress" type="text" placeholder=""
                        class="form-control input-md" required />

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="serviceadd">Address for service in Malaysia</label>
                <div class="col-md-10">
                    <input id="serviceadd" name="serviceadd" type="text" placeholder=""
                        class="form-control input-md" required />

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="applicantnationality">Nationality</label>
                <div class="col-md-10">
                    <input id="applicantnationality" name="applicantnationality" type="text" placeholder=""
                        class="form-control input-md" required />

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="permresidence">Permanent residence or principal place of
                    business </label>
                <div class="col-md-10">
                    <input id="permresidence" name="permresidence" type="text" placeholder=""
                        class="form-control input-md" required />

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="telno">Telephone No</label>
                <div class="col-md-10">
                    <input id="telno" name="telno" type="text" placeholder="012-3456789"
                        class="form-control input-md" required />

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="faxno">Fax No</label>
                <div class="col-md-10">
                    <input id="faxno" name="faxno" type="text" placeholder=""
                        class="form-control input-md" required />

                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend class="legends">3. Inventor Status</legend>
            <!-- Text input-->
            <div class="form-group">
                <label><input type="radio" name="inventor_status" value="inventor"> Yes</label>
                <label><input type="radio" name="inventor_status" value="not_inventor"> No</label>

                <div id="inventor_info" style="display: none;">
                    <h3>If the applicant is not the inventor:</h3>
                    <label>Name of inventor: <input type="text" name="inventor_name"></label><br>
                    <label>Address of inventor: <input type="text" name="inventor_address"></label><br>
                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend class="legends">4. Agent or Representative</legend>
            <!-- Text input-->
            <div class="form-group">
                <label><input type="radio" name="agent_status" value="agent_appointed"
                        onchange="handleAgentStatus()">Yes</label>
                <label><input type="radio" name="agent_status" value="representative_appointed"
                        onchange="handleAgentStatus()">No</label>

                <div id="agent_info" style="display: none;">
                    <h3>Agent appointed:</h3>
                    <label>Agent’s registration No. <input type="text" name="agent_register_no"></label><br>
                </div>

                <div id="representative_info" style="display: none;">
                    <h3>Representative appointed:</h3>
                    <label>Representative's Name: <input type="text" name="representative_name"></label><br>
                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend class="legends">5. Divisional Application</legend>
            <!-- Multiple Radios (inline) -->
            <div class="form-group">
                <label class="col-md-10 control-label" for="divisional">This application is a divisional
                    application</label>
                <div class="col-md-10">
                    <label class="radio-inline" for="divisional-0">
                        <input type="radio" name="divisional" id="divisional-0" value="Yes">
                        Yes
                    </label>
                    <label class="radio-inline" for="divisional-1">
                        <input type="radio" name="divisional" id="divisional-1" value="No">
                        No
                    </label>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="filingdate">The benefit of the filing date</label>
                <div class="col-md-10">
                    <input id="filingdate" name="filingdate" type="date" placeholder="MM/DD/YYYY"
                        class="form-control input-md" required />

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="prioritydate">Priority Date</label>
                <div class="col-md-10">
                    <input id="prioritydate" name="prioritydate" type="date" placeholder="MM/DD/YYYY"
                        class="form-control input-md" required />

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="initialapplication">Initial Application No.</label>
                <div class="col-md-10">
                    <input id="initialapplication" name="initialapplication" type="text" placeholder=""
                        class="form-control input-md" required />

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="initialfiling">Date of Filing of initial
                    application</label>
                <div class="col-md-10">
                    <input id="initialfiling" name="initialfiling" type="date" placeholder="MM/DD/YYYY"
                        class="form-control input-md" required />

                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend class="legends">6. Priority Claim</legend>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="claimcountry">Country (if the earlier application is a
                    regional or international application, indicate the office with which it is filed)</label>
                <div class="col-md-10">
                    <input id="claimcountry" name="claimcountry" type="text" placeholder=""
                        class="form-control input-md" required />

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="filingclaim">Filing Date</label>
                <div class="col-md-10">
                    <input id="filingclaim" name="filingclaim" type="date" placeholder="MM/DD/YYYY"
                        class="form-control input-md" required />

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="claimapplication">Application No.</label>
                <div class="col-md-10">
                    <input id="claimapplication" name="claimapplication" type="text" placeholder=""
                        class="form-control input-md" required />

                </div>
            </div>

            <!-- Multiple Radios (inline) -->
            <div class="form-group">
                <label class="col-md-10 control-label" for="patentsymbol">Symbol of the International Patent
                    Classification allocated</label>
                <div class="col-md-10">
                    <label class="radio-inline" for="patentsymbol-0">
                        <input type="radio" name="patentsymbol" id="patentsymbol-0" value="Yes">
                        Yes
                    </label>
                    <label class="radio-inline" for="patentsymbol-1">
                        <input type="radio" name="patentsymbol" id="patentsymbol-1" value="No">
                        No
                    </label>
                </div>
            </div>

            <!-- Multiple Radios (inline) -->
            <div class="form-group">
                <label class="col-md-10 control-label" for="earlyapplication">The priority of more than one earlier
                    application is claimed</label>
                <div class="col-md-10">
                    <label class="radio-inline" for="earlyapplication-0">
                        <input type="radio" name="earlyapplication" id="earlyapplication-0" value="Yes">
                        Yes
                    </label>
                    <label class="radio-inline" for="earlyapplication-1">
                        <input type="radio" name="earlyapplication" id="earlyapplication-1" value="No">
                        No
                    </label>
                </div>
            </div>

            <div class="pdpaa">
                <p>By submitting the form, you hereby consent into signing the <a
                        href="{{ route('help') }}#PDPA">PDPA</a> to the Sarawak Research and Development Council
                    (Research Council) and other relevant agencies and associates </p>
            </div>
        </fieldset>

        <!-- Button (Double) -->
        <div class="button-container">
            <input type="submit" value="Submit">
            <input type="reset">
        </div>

    </form>
    <br><br>
    <footer style="background-color: #092044">

        <p style="color: #fff">&copy; SRDC 2024</p>

    </footer>

    <script>
        document.querySelectorAll('input[name="inventor_status"]').forEach(function(radio) {
            radio.addEventListener('change', function() {
                var inventorInfo = document.getElementById('inventor_info');
                if (this.value === 'not_inventor' && this.checked) {
                    inventorInfo.style.display = 'block';
                } else {
                    inventorInfo.style.display = 'none';
                }
            });
        });

        function handleAgentStatus() {
            var agentStatus = document.querySelector('input[name="agent_status"]:checked').value;
            var agentInfo = document.getElementById('agent_info');
            var representativeInfo = document.getElementById('representative_info');

            if (agentStatus === 'agent_appointed') {
                agentInfo.style.display = 'block';
                representativeInfo.style.display = 'none';
            } else if (agentStatus === 'representative_appointed') {
                agentInfo.style.display = 'none';
                representativeInfo.style.display = 'block';
            }
        }
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
