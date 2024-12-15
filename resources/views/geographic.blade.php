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


    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
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
        <div style="">
            <h1> Geographical Form </h1>

            <form method="post" action="{{ route('saveItem') }}" accept-charset="UTF-8"
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
                    <legend class="legends">2. Application Details</legend>

                    <!-- Applicant Name-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="name">a. Applicant's name</label>
                        <div class="col-md-10">
                            <input id="applicantname" name="name" type="text" placeholder=""
                                class="form-control input-md" required />

                        </div>
                    </div>

                    <!-- Applicant Type-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="applicanttype">b. Applicant type</label>
                        <div class="col-md-10">
                            <input id="applicanttype" name="applicanttype" type="text" placeholder=""
                                class="form-control input-md" required />

                        </div>
                    </div>

                    <!-- Nationality -->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="nationality">c. Country of
                            Establishment/Nationality</label>
                        <div class="col-md-10">
                            <input id="nationality" name="nationality" type="text" placeholder=""
                                class="form-control input-md" required />

                        </div>
                    </div>

                    <br>

                    <!-- Address of the applicant -->


                    <div class="form-group">
                        <label class="col-md-10 control-label" for="address">d. Address of the applicant (in
                            Malaysia)</label>
                    </div>

                    <br>

                    <fieldset>
                        <!-- Postcode -->
                        <div class="form-group">
                            <label class="col-md-10 control-label" for="postcode">i. Postcode</label>
                            <div class="col-md-10">
                                <input id="postcode" name="postcode" type="text" placeholder=""
                                    class="form-control input-md" required />

                            </div>


                            <!-- Town-->
                            <div class="form-group">
                                <label class="col-md-10 control-label" for="town">ii. Town</label>
                                <div class="col-md-10">
                                    <input id="town" name="town" type="text" placeholder=""
                                        class="form-control input-md" required />

                                </div>

                                <!-- State/Country -->
                                <div class="form-group">
                                    <label class="col-md-10 control-label" for="state">iii. State/Country</label>
                                    <div class="col-md-10">
                                        <input id="state" name="state" type="text" placeholder=""
                                            class="form-control input-md" required />

                                    </div>

                                    <!-- Telephone -->
                                    <div class="form-group">
                                        <label class="col-md-10 control-label" for="telephone">iv. Telephone</label>
                                        <div class="col-md-10">
                                            <input id="telephone" name="telephone" type="text" placeholder=""
                                                class="form-control input-md" required />

                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <div class="form-group">
                                        <label class="col-md-10 control-label" for="email">v. Email</label>
                                        <div class="col-md-10">
                                            <input id="email" name="email" type="text" placeholder=""
                                                class="form-control input-md" required />

                                        </div>
                                    </div>

                                    <!-- Website -->
                                    <div class="form-group">
                                        <label class="col-md-10 control-label" for="website">vi. Website (if
                                            any)</label>
                                        <div class="col-md-10">
                                            <input id="website" name="website" type="text" placeholder=""
                                                class="form-control input-md" required />

                                        </div>
                                    </div>
                    </fieldset>

                    <br>

                    <!-- Address for service of the applicant -->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="address">e. Address for Service of the
                            Applicant</label>
                    </div>
                    <br>

                    <fieldset>
                        <!-- Postcode -->
                        <div class="form-group">
                            <label class="col-md-10 control-label" for="postcodeservice">i. Postcode</label>
                            <div class="col-md-10">
                                <input id="postcodeservice" name="postcodeservice" type="text" placeholder=""
                                    class="form-control input-md" required />

                            </div>
                        </div>

                        <!-- Town -->
                        <div class="form-group">
                            <label class="col-md-10 control-label" for="townservice">ii. Town</label>
                            <div class="col-md-10">
                                <input id="townservice" name="townservice" type="text" placeholder=""
                                    class="form-control input-md" required />

                            </div>
                        </div>

                        <!-- State/Country -->
                        <div class="form-group">
                            <label class="col-md-10 control-label" for="stateservice">iii. State/Country</label>
                            <div class="col-md-10">
                                <input id="stateservice" name="stateservice" type="text" placeholder=""
                                    class="form-control input-md" required />

                            </div>
                        </div>
                    </fieldset>

                    <!-- Representation of the geographical indication -->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="representation">f. Representation of the
                            Geographical Indication</label>
                        <div class="col-md-10">
                            <input id="representation" name="representation" type="text" placeholder=""
                                class="form-control input-md" required />

                        </div>
                    </div>

                    <!-- Variant of geographical indication -->

                    <div class="form-group">
                        <label class="col-md-10 control-label" for="variant">g. If this application is for
                            registration of a variant of geographical indication, please fill in this
                            column.</label><br>

                        <fieldset>
                            <small class="form-text text-muted">Please indicate:</small><br><br>
                            <label class="col-md-10 control-label" for="earlygi">i. The representation of the earlier
                                geographical indication</label>
                            <div class="col-md-10">
                                <input id="earlygi" name="earlygi" type="text" placeholder=""
                                    class="form-control input-md" required />
                                <label class="col-md-10 control-label" for="emailgi">ii. The registration number or
                                    the application number of that earlier geographical indication:</label>
                                <div class="col-md-10">
                                    <input id="emailgi" name="emailgi" type="text" placeholder=""
                                        class="form-control input-md" required />
                        </fieldset>


                        <!-- Translation & Transliteration -->
                        <div class="form-group">
                            <label class="col-md-10 control-label" for="trans">h. Translation &
                                Transliteration</label><br>
                            <small class="form-text text-muted">If the geographical indication contains or consists of
                                a word or words in non-Roman character or in a language other than the national language
                                or English, please fill in this column.</small><br><br>
                            <label>Select which is applicable:</label>
                            <br>
                            <div class="checks">
                                <input type="checkbox" class="form-check-input" id="non_roman" name="non_roman[]">
                                <label class="form-check-label" for="non_roman" value="non-roman">NON-ROMAN
                                    CHARACTER</label>
                            </div>
                            <div class="checks">
                                <input type="checkbox" class="form-check-input" id="non_national"
                                    name="non_national[]">
                                <label class="form-check-label" for="non_national" value="non-national">NON-NATIONAL
                                    LANGUAGE OR ENGLISH</label>
                            </div>
                        </div>
                        <div id="non_roman_details" style="display: none;">
                            <div class="form-group">
                                <label for="character">Character or script of the geographical indication:</label>
                                <input type="text" class="form-control" id="character" name="character">
                            </div>
                            <div class="form-group">
                                <label for="transliteration">Transliteration:</label>
                                <input type="text" class="form-control" id="transliteration"
                                    name="transliteration">
                            </div>
                            <div class="form-group">
                                <label for="translation">Translation into national language or English:</label>
                                <input type="text" class="form-control" id="translation" name="translation">
                            </div>
                        </div>
                        <div id="non_national_details" style="display: none;">
                            <div class="form-group">
                                <label for="language">Language of the word:</label>
                                <input type="text" class="form-control" id="language" name="language">
                            </div>
                            <div class="form-group">
                                <label for="translation_national">Translation of the geographical indication into
                                    national language or English:</label>
                                <input type="text" class="form-control" id="translation_national"
                                    name="translation_national">
                            </div>
                        </div>

                        <script>
                            // Script to show/hide details based on checkbox selection
                            document.getElementById("non_roman").addEventListener("change", function() {
                                document.getElementById("non_roman_details").style.display = this.checked ? "block" : "none";
                            });
                            document.getElementById("non_national").addEventListener("change", function() {
                                document.getElementById("non_national_details").style.display = this.checked ? "block" : "none";
                            });
                        </script>
                </fieldset>

                <fieldset>

                    <legend class="legends">3. Class</legend>

                    <!-- Class -->
                    <div class="col-md-10">
                        <input id="class" name="class" type="text" placeholder=""
                            class="form-control input-md" required />

                    </div>
                </fieldset>


                <fieldset>
                    <legend class="legends">4. List of Goods</legend>


                    <!-- List of goods -->
                    <div class="col-md-10">
                        <input id="listofgoods" name="listofgoods" type="text" placeholder=""
                            class="form-control input-md" required />

                    </div>
                </fieldset>


                <!-- Proof of protection -->
                <fieldset>
                    <legend class="legends">5. Proof of Protection</legend>

                    <div class="form-group">
                        <label for="date_of_protection">Date of protection:</label>
                        <input type="date" class="form-control" id="date_of_protection" name="date_of_protection"
                            required />
                    </div>
                    <div class="form-group">
                        <label for="goods_description">Goods related to protection:</label>
                        <textarea class="form-control" id="goods_description" name="goods_description" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="supporting_documents1">Attach supporting documents:</label>
                        <input type="file" class="form-control-file" id="supporting_documents1"
                            name="supporting_documents1">
                    </div>
                </fieldset>


                <!-- The Quality, Reputation or other characteristics of the goods -->

                <fieldset>
                    <legend class="legends">6. The Quality, Reputation or other characteristics of the goods</legend>


                    <div class="form-group">
                        <label>Geographical area:</label>
                        <small class="form-text text-muted">Please attach the picture or map of the area.</small>
                        <br><br>
                        <input type="file" class="form-control-file" id="area_picture" name="area_picture">
                    </div>

                    <br><br>

                    <div class="form-group">
                        <label>Physical characteristics of the goods:</label>
                        <ul>
                            <li><input type="text" class="form-control" name="colour" placeholder="Colour"></li>
                            <li><input type="text" class="form-control" name="shape" placeholder="Shape"></li>
                            <li><input type="text" class="form-control" name="texture" placeholder="Texture">
                            </li>
                            <li><input type="text" class="form-control" name="size" placeholder="Size"></li>
                            <li><input type="text" class="form-control" name="weight" placeholder="Weight"></li>
                            <li><input type="text" class="form-control" name="taste" placeholder="Taste"></li>
                        </ul>
                    </div>

                    <div class="form-group">
                        <label for="proof_of_origin">Proof of origin:</label>
                        <input type="text" class="form-control" id="proof_of_origin" name="proof_of_origin">
                    </div>

                    <div class="form-group">
                        <label for="causal_link">Causal link between the geographical area and characteristics:</label>
                        <textarea class="form-control" id="causal_link" name="causal_link" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="processing_techniques">Specific steps or processing techniques:</label>
                        <textarea class="form-control" id="processing_techniques" name="processing_techniques" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="labelling_description">Description of labelling:</label>
                        <textarea class="form-control" id="labelling_description" name="labelling_description" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="award_recognition">Award or recognition:</label>
                        <textarea class="form-control" id="award_recognition" name="award_recognition" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="inspection_body">Inspection body or authority:</label>
                        <textarea class="form-control" id="inspection_body" name="inspection_body" rows="3"></textarea>
                    </div>
                </fieldset>


                <!-- Capacity in which the applicant is filing an application for registration -->

                <fieldset>
                    <legend class="legends">7. Capacity in which the applicant is filing an application for
                        registration</legend>



                    <div class="form-group">
                        <label>Capacity in which the applicant is filing:</label>
                        <div class="checks">
                            <input type="checkbox" class="form-check-input" id="association" name="association[]"
                                value="association">
                            <label class="form-check-label" for="association">In relation to any applicant who is an
                                association, the name and address of the members of the association</label>
                        </div>
                        <div class="checks">
                            <input type="checkbox" class="form-check-input" id="competent_authority"
                                name="association[]" value="competent_authority">
                            <label class="form-check-label" for="competent_authority">In relation to any applicant who
                                is a competent authority, the name and address of producers under the control of such
                                competent authority</label>
                        </div>
                    </div>
                    <small>Note: Please state the name and address of the person in (a) or (b) on a separate sheet which
                        must be firmly annexed to this form.</small>

                    <br><br>

                    <div class="form-group">
                        <label for="supporting_documents">Additional attachments:</label>
                        <input type="file" class="form-control-file" id="supporting_documents"
                            name="supporting_documents">
                    </div>
                    <div class="pdpaa">
                        <p>By submitting the form, you hereby consent into signing the <a
                                href="{{ route('help') }}#PDPA">PDPA</a>
                            to the Sarawak Research and Development Council
                            (Research Council) and other relevant agencies and associates </p>
                    </div>

        </div>

        </fieldset>




        <div class="button-container">
            <input type="submit" value="Submit">
            <input type="reset">
        </div>

        </form>
        <br><br>
        <footer style="background-color: #092044">

            <p style="color: #fff">&copy; SRDC 2024</p>

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
