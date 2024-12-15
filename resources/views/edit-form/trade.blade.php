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
                                <form id="logout-form" action="{{ route('logout') }}" method="GET"
                                    class="d-none">
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

    <h1>Trademark Form Submission</h1>

    <h2>Guidelines</h2>
    <ol>
        <li>If a form field is not applicable to you, kindly leave it blank.</li>
        <li></li>
    </ol>
    <form method="POST"
        action="{{ route('saveItemtrade.update', ['formType' => $entry->formType, 'id' => $entry->id]) }}"
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
            <legend class="legends">1. Applicant</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="name">Full Name</label>
                <div class="col-md-10">
                    <input id="name" name="name" type="text" placeholder=""
                        class="form-control input-md" required="" value="{{ $entry->name }}">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="applicant_type">Applicant type (Specify whether
                    Person/individual, body corporate, partnership, LLP, association/body authority or Other)</label>
                <div class="col-md-10">
                    <input id="applicant_type" name="applicant_type" type="text" placeholder=""
                        class="form-control input-md" required="" value="{{ $entry->applicant_type }}">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="business_registration">Company Registration No. (For
                    company
                    or businesses registered in Malaysia only)</label>
                <div class="col-md-10">
                    <input id="business_registration" name="business_registration" type="text" placeholder=""
                        class="form-control input-md" value="{{ $entry->business_registration }}">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="business_address">Business Address • If the address is not
                    within Malaysia, you must also complete section 2 below • If you want to use an address other than
                    the business address, please also complete item 3</label>
                <div class="col-md-10">
                    <input id="business_address" name="business_address" type="text" placeholder=""
                        class="form-control input-md" required="" value="{{ $entry->business_address }}">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="phone_num">Telephone (For Malaysian applicant only)</label>
                <div class="col-md-10">
                    <input id="phone_num" name="phone_num" type="text" placeholder=""
                        class="form-control input-md" value="{{ $entry->phone_num }}">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="reference">Applicant’s Reference (If any and no agent
                    appointed)</label>
                <div class="col-md-10">
                    <input id="reference" name="reference" type="text" placeholder=""
                        class="form-control input-md" value="{{ $entry->reference }}">

                </div>
            </div>
        </fieldset>


        <fieldset>
            <legend class="legend">2. Type of Trademark</legend>


            <!-- Multiple Checkboxes -->
            <div class="form-group">
                <label>Type of Trademark to be registered</label><br>

                <div class="checks">
                    <input class="checks" type="checkbox" name="trade_type[]" id="trade_type-0"
                        @checked($entry->reference == 'Trademark') value="Trademark">
                    <label for="trade_type-0">Trademark</label>
                </div>

                <div class="checks">
                    <input class="checks" type="checkbox" name="trade_type[]" id="trade_type-1"
                        @checked($entry->reference == 'Collective Mark') value="Collective Mark">
                    <label for="trade_type-1">Collective Mark</label>
                </div>

                <div class="checks">
                    <input class="checks" type="checkbox" name="trade_type[]" id="trade_type-2"
                        @checked($entry->reference == 'Certification Mark') value="Certification Mark">
                    <label for="trade_type-2">Certification Mark</label>
                </div>

            </div>
        </fieldset>

        <fieldset>
            <legend class="legend">3. Nature of Trademark</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="word">Word</label>
                <div class="col-md-10">
                    <input id="word" name="word" type="text"
                        placeholder="Please type the trademark here:" class="form-control input-md"
                        value="{{ $entry->word }}">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="device">Device</label>
                <div class="col-md-10">
                    <input id="device" name="device" type="text"
                        placeholder="Please attached or affixed the trade mark in the box in Section 5"
                        class="form-control input-md" value="{{ $entry->device }}">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="word_device">Combination of Word and Device</label>
                <div class="col-md-10">
                    <input id="word_device" name="word_device" type="text"
                        placeholder="Please type the word trademark here and attached or affixed the trade mark in the box in Section 5"
                        class="form-control input-md" value="{{ $entry->word_device }}">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="shape">Shape of goods or their packaging</label>
                <div class="col-md-10">
                    <input id="shape" name="shape" type="text"
                        placeholder="Please fill the description of the trademark in Section 4 and attached or affixed the trademark in the box in Section 5 Please indicate the number of views in the box. The maximum number of images per trademark is 4"
                        class="form-control input-md" value="{{ $entry->shape }}">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="styleword">Stylized Word</label>
                <div class="col-md-10">
                    <input id="styleword" name="styleword" type="text"
                        placeholder="Please type the word trademark here and attached or affixed the trade  mark in the box in Section 5"
                        class="form-control input-md" value="{{ $entry->styleword }}">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="color">Colour</label>
                <div class="col-md-10">
                    <input id="color" name="color" type="text"
                        placeholder="Please provide pantone code here and attached or affixed the trademark  in the box in Section 5"
                        class="form-control input-md" value="{{ $entry->color }}">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="sound">Sound</label>
                <div class="col-md-10">
                    <input id="sound" name="sound" type="text"
                        placeholder="Please fill up the description of the trademark in Section 4 and provide  MP3 of the sound"
                        class="form-control input-md" value="{{ $entry->sound }}">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="scent">Scent</label>
                <div class="col-md-10">
                    <input id="scent" name="scent" type="text"
                        placeholder="Please fill up the description of the trademark in Section 4"
                        class="form-control input-md" value="{{ $entry->scent }}">
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="hologram">Hologram</label>
                <div class="col-md-10">
                    <input id="hologram" name="hologram" type="text"
                        placeholder="Please fill the description of the trademark in Section 4 and attached or  affixed the trademark in the box in Section 5"
                        class="form-control input-md" value="{{ $entry->hologram }}">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="positioning">Postioning</label>
                <div class="col-md-10">
                    <input id="positioning" name="positioning" type="text"
                        placeholder="Please fill the description of the trademark in Section 4 and attached or  affixed the trademark in the box in Section 5"
                        class="form-control input-md" value="{{ $entry->positioning }}">
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="motion">Sequence of Motion</label>
                <div class="col-md-10">
                    <input id="motion" name="motion" type="text"
                        placeholder="Please fill the description of the trademark in Section 4 and attached or  affixed the trademark in the box in Section 5"
                        class="form-control input-md" value="{{ $entry->motion }}">

                </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-10 control-label" for="combination">Any combination of the above (please mark also
                    the nature of trademark to be combined)</label>
                <div class="col-md-10">
                    <textarea class="form-control" id="textarea" name="combination">{{ $entry->combination }}</textarea>
                </div>
            </div>

        </fieldset>

        <fieldset>
            <legend class="legend">4. Description of Trademark</legend>

            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-10 control-label" for="description">Description of the trademark if
                    required.</label>
                <div class="col-md-10">
                    <textarea class="form-control" id="description" name="description">{{ $entry->description }}</textarea>
                </div>
            </div>

        </fieldset>

        <fieldset>
            <legend class="legend">5. The Trademark</legend>

            <!-- Multiple Radios -->
            <div class="form-group">
                <label class="col-md-10 control-label" for="trademark_color">Please mark off which is applicable. The
                    representation of trademark must be firmly attached or affixed in the provided area below.</label>
                <div class="col-md-10">
                    <div class="radio">
                        <label for="trademark-0">
                            <input type="radio" name="trademark_color" id="trademark-0"
                                @checked($entry->trademark_color == 'Black & White') value="Black & White">
                            Representation of the trademark is in black &amp; white
                        </label>
                    </div>
                    <div class="radio">
                        <label for="trademark-1">
                            <input type="radio" name="trademark_color" id="trademark-1" value="Color"
                                @checked($entry->trademark_color == 'Color')>
                            Representation of the trademark is in colour. If colour(s) is/are claimed. Please provide
                            colour or combination of colours claimed and indication of the parts of the trademark which
                            is in colour
                            <textarea class="form-control" id="colorDescription" name="colorDescription">{{ $entry->color_description }}</textarea>
                        </label>
                    </div>
                </div>
            </div>

            <!-- File Button -->
            <div class="form-group">
                <label class="col-md-10 control-label" for="graphic">The size of the representation of the trademark
                    or graphic representation of the sign shall be more than 2cm x 2cm and less than 10cm x
                    10cm.</label>
                <div class="col-md-10">
                    <input id="graphic" name="graphic" class="input-file" type="file">
                </div>
            </div>

        </fieldset>

        <fieldset>
            <legend class="legend">6. Disclaimer</legend>

            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-10 control-label" for="disclaimer">If you want to voluntarily disclaim any rights
                    to any specified element(s) or word(s) of the trademark, please indicate here</label>
                <div class="col-md-10">
                    <textarea class="form-control" id="disclaimer" name="disclaimer">{{ $entry->disclaimer }}</textarea>
                </div>
            </div>

        </fieldset>

        <fieldset>

            <legend class="legend">7. Date Of First Use</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-10 control-label" for="firstuse">State the date of first use in Malaysia, if this
                    is known. (dd/mm/yyyy):</label>
                <div class="col-md-10">
                    <input id="textinput" name="firstuse" type="date" placeholder="DD/MM/YYYY"
                        class="form-control input-md" value="{{ $entry->firstuse }}">

                </div>
            </div>

            <div class="form-group">
                <label class="col-md-10 control-label" for="additionalDocs">Additional Attachments</label>
                <div class="col-md-10">
                    <input id="filebutton" name="additionalDocs" class="input-file" type="file">
                </div>
            </div>

        </fieldset>

        <div class="button-container">
            <input type="submit" value="Update">
            <input type="reset">
        </div>



    </form>

    </div>


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
