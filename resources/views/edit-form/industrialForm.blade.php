<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/feather/feather.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/icons/flags/flags.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <style>
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
</head>

<body>
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

                                                    <div class="media d-flex">
                                                        <div class="media-body flex-grow-1">
                                                            <a href=""
                                                                class="dropdown-item">{{ $notification->data['data']['message'] }}</a>
                                                            <p class="noti-time"><span
                                                                    class="notification-time">{{ $notification->created_at->diffForHumans() }}</span>
                                                            </p>
                                                        </div>
                                                    </div>

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
            {{-- <nav>
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
            </nav> --}}
        </div>
    </header>




    <h1>Industrial Design Form Submission</h1>
    <form method="POST"
        action="{{ route('saveItemIndust.update', ['formType' => $entry->formType, 'id' => $entry->id]) }}"
        accept-charset="UTF-8" class="patentForm" enctype="multipart/form-data">
        @method('PUT')
        {{ csrf_field() }}

        <fieldset>

            <!-- Form Name -->
            <legend class="legends">1. Invention</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="inventiontitle">Title of Invention</label>
                <div class="col-md-10">
                    <input id="inventiontitle" name="inventiontitle" type="text" placeholder=""
                        class="form-control input-md" required="" value="{{ $entry->inventiontitle }}">

                </div>
            </div>
        </fieldset>

        <fieldset>

            <!-- Form Name -->
            <legend>Industrial Form Submission</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="name">1. Full name and address of / each
                    applicant:</label>
                <div class="col-md-5">
                    <input id="name" name="name" type="text" placeholder=""
                        class="form-control input-md" required="" value="{{ $entry->name }}">
                    <span class="help-block">(Names of individuals including all partners in a firm shall be given in
                        full. Underline the surname or family name. For a corporate body give its company name). If the
                        applicant is a corporate body, give country / state of incorporation.</span>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <br><label class="col-md-10 control-label" for="author">2. Full name and address of the
                    author:</label>
                <div class="col-md-10">
                    <input id="author" name="author" type="text" placeholder=""
                        class="form-control input-md" required="" value="{{ $entry->author }}">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="agent_name">3. Name of agent (if applicable):</label>
                <div class="col-md-10">
                    <input id="textinput" name="agent_name" type="text" placeholder=""
                        class="form-control input-md" required="" value="{{ $entry->agent_name }}">
                    <span class="help-block">Address for service in Malaysia to which correspondence should be sent:
                        (If
                        agent is appointed, Form ID 10 shall be submitted together with this form)</span>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <br><label class="col-md-10 control-label" for="article">4. Name of the particular article or set of
                    articles to which the design applies:</label>
                <div class="col-md-10">
                    <input id="article" name="article" type="text" placeholder=""
                        class="form-control input-md" required="" value="{{ $entry->article }}">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="classification">5. Classification</label>
                <div class="col-md-10">
                    <input id="classification" name="classification" type="text" placeholder=""
                        class="form-control input-md" required="" value="{{ $entry->classification }}">
                    <span class="help-block">Enter the class and subclass number in accordance with the International
                        Classification for Industrial Designs.</span>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <br><label class="col-md-10 control-label" for="view">6. View(s):</label>
                <div class="col-md-10">
                    <input id="view" name="view" type="text" placeholder=""
                        class="form-control input-md" required="" value="{{ $entry->view }}">
                    <span class="help-block">Enter the number(s) and which view(s) to be gazette.</span>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <br><label class="col-md-10 control-label" for="multi">7. Multiple applications:</label>
                <div class="col-md-10">
                    <input id="multi" name="multi" type="text" placeholder=""
                        class="form-control input-md" value="{{ $entry->multi }}">
                    <span class="help-block">Enter the number of industrial design applied for registration (if
                        any)</span><br>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <br><label class="col-md-10 control-label" for="association">8. Association:</label>
                <div class="col-md-10">
                    <input id="association" name="association" type="text" placeholder=""
                        class="form-control input-md" required="" value="{{ $entry->association }}">
                    <span class="help-block">Enter the application number of registration number of the earlier design
                        with which the applicant seeks association under section 23 and regulation 17.</span>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <br><label class="col-md-10 control-label" for="priority">9. Declaration of priority (if any):</label>
                <div class="col-md-10">
                    <span class="help-block">Give the convention country and filing date of any previous application
                        made abroad form which is claimed under section 17.</span>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <br><label class="col-md-10 control-label" for="prioCountry"></label>
                <div class="col-md-10">
                    <input id="prioCountry" name="prioCountry" type="text" placeholder="Country"
                        class="form-control input-md" value="{{ $entry->prioCountry }}">

                </div>

                <label class="col-md-10 control-label" for="prioNo"></label>
                <div class="col-md-10">
                    <input id="prioNo" name="prioNo" type="text" placeholder="Number"
                        class="form-control input-md" value="{{ $entry->prioNo }}">

                </div>
                <div>
                    <label for="prioDate"></label>
                    <input type="date" id="prioDate" name="prioDate" value="{{ $entry->prioDate }}">
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="ten">10. If the details in column 9 applies, and the
                    previous application was not made in the name(s) given in column 1, give details of the instrument
                    (for example, deed of assignment) which gives the applicant the right to apply for registration.
                    Include appropriate name(s) and date(s):</label>
                <div class="col-md-5">
                    <input id="ten" name="ten" type="text" placeholder=""
                        class="form-control input-md" value="{{ $entry->ten }}">
                    <span class="help-block"><br>(If this information is not given at the time this Form is filed, you
                        must submit it before this industrial design is registered).</span>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <br><label class="col-md-10 control-label" for="divisional">11. Divisional application: Give the number
                    and filing</label>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="divNo"></label>
                <div class="col-md-2">
                    <input id="divNo" name="divNo" type="text" placeholder="Number"
                        class="form-control input-md" value="{{ $entry->divNo }}">

                </div>
                <div>
                    <label for="divDate"></label>
                    <input type="date" id="divDate" placeholder="Date of filing" name="divDate"
                        value="{{ $entry->divDate }}">
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="malay">12. Name and telephone number of person to
                    contact in Malaysia:</label>
                <div class="col-md-10">
                    <input id="malay" name="malay" type="text" placeholder=""
                        class="form-control input-md" required="" value="{{ $entry->malay }}">

                </div>
            </div>

        </fieldset>
        <div class="button-container">
            <input type="submit" value="Update">
            <input type="reset">
        </div>
    </form>


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
