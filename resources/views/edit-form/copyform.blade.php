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
        width: 200px;
        height: auto;
        margin: 15px;
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
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Application Form</title>

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
                                                    @foreach (auth()->user()->unreadNotifications()->orderBy('created_at', 'desc')->get()  as $notification)
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


            <!-- Form Name -->
            <h1>Copyright Form Submission</h1>

            <form method="POST" action="{{ route('saveItemCopy.update', ['formType' => $entry->formType, 'id' => $entry->id]) }}" accept-charset="UTF-8" class="patentForm"
                enctype="multipart/form-data">
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
                    <legend class="legends">1. Applicant</legend>

                    <!-- Title of Work field -->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="worktitle">Title of Work</label>
                        <div class="col-md-10">
                            <input id="worktitle" name="worktitle" type="text"
                                placeholder="Title of work in its original language" class="form-control input-md"
                                required="" value="{{ $entry->worktitle }}">
                        </div>
                    </div>

                    <!-- Translation of Work field -->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="worktranslation">Translation</label>
                        <div class="col-md-10">
                            <input id="worktranslation" name="worktranslation" type="text"
                                placeholder="Only fill if the title of work is neither in Bahasa nor English"
                                class="form-control input-md" value="{{ $entry->worktranslation }}">
                        </div>
                    </div>

                    <!-- Transliteration of Work field -->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="worktransliteration">Transliteration</label>
                        <div class="col-md-10">
                            <input id="worktransliteration" name="worktransliteration" type="text"
                                placeholder="Only fill if the title of work is neither in Bahasa nor English"
                                class="form-control input-md" value="{{ $entry->worktransliteration }}">
                        </div>
                    </div>

                    <!-- Language of Work field -->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="worklanguage">Name of the Language</label>
                        <div class="col-md-10">
                            <input id="worklanguage" name="worklanguage" type="text"
                                placeholder="Language used in the work" class="form-control input-md" value="{{ $entry->worklanguage }}">
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend class="legends">2. Category of Works</legend>

                    <!-- Copyright checkbox (inline) -->
                    <div class="form-group">
                        <label>Please tick only ONE category of work in item (i) or (ii)</label><br>
                        <label>(i) Copyright Work</label>

                        <div class="checks">
                            <label class="checkbox-inline" for="copyrightwork-0">
                                <input type="checkbox" name="copyrightwork[]" id="copyrightwork-0" value="literary" @checked(in_array('literary', explode(', ', $entry->copyrightwork)))>
                                Literary
                            </label>
                            <label class="checkbox-inline" for="copyrightwork-1">
                                <input type="checkbox" name="copyrightwork[]" id="copyrightwork-1" value="musical" @checked(in_array('musical', explode(', ', $entry->copyrightwork)))>
                                Musical
                            </label>
                            <label class="checkbox-inline" for="copyrightwork-2">
                                <input type="checkbox" name="copyrightwork[]" id="copyrightwork-2" value="artistic" @checked(in_array('artistic', explode(', ', $entry->copyrightwork)))>
                                Artistic
                            </label>
                            <label class="checkbox-inline" for="copyrightwork-3">
                                <input type="checkbox" name="copyrightwork[]" id="copyrightwork-3" value="film" @checked(in_array('film', explode(', ', $entry->copyrightwork)))>
                                Film
                            </label>
                            <label class="checkbox-inline" for="copyrightwork-4">
                                <input type="checkbox" name="copyrightwork[]" id="copyrightwork-4"
                                    value="soundrecording" @checked(in_array('soundrecording', explode(', ', $entry->copyrightwork)))>
                                Sound Recording
                            </label>
                            <label class="checkbox-inline" for="copyrightwork-5">
                                <input type="checkbox" name="copyrightwork[]" id="copyrightwork-5"
                                    value="broadcast" @checked(in_array('broadcast', explode(', ', $entry->copyrightwork)))>
                                Broadcast
                            </label>
                        </div>
                    </div>

                    <!-- Derivative work checkbox -->
                    <div class="form-group">
                        <label>(ii) Derivative Work</label>

                        <div class="checks">
                            <label class="checks" for="derivativework-0">
                                <input type="checkbox" name="derivativework[]" id="derivativework-0"
                                    value="translation" @checked(in_array('translation', explode(', ', $entry->derivativework)))>
                                Translation
                            </label>
                        </div>

                        <div class="checks">
                            <label class="checks" for="derivativework-1">
                                <input type="checkbox" name="derivativework[]" id="derivativework-1"
                                    value="adaptation" @checked(in_array('adaptation', explode(', ', $entry->derivativework)))>
                                Adaptation
                            </label>
                        </div>

                        <div class="checks">
                            <label class="checks" for="derivativework-2">
                                <input type="checkbox" name="derivativework[]" id="derivativework-2"
                                    value="arrangement" @checked(in_array('arrangement', explode(', ', $entry->derivativework)))>
                                    Arrangement
                                </label>
                        </div>

                        <div class="checks">
                            <label class="checks" for="derivativework-3">
                                <input type="checkbox" name="derivativework[]" id="derivativework-3"
                                    value="collection" @checked(in_array('collection', explode(', ', $entry->derivativework)))>
                                Collection of work or compilation of mere data (database)
                            </label>
                        </div>

                        <div class="checks">
                            <label class="checks" for="derivativework-5">
                                <input type="checkbox" name="derivativework[]" id="derivativework-5" value="other" @checked(in_array('other', explode(', ', $entry->derivativework)))>
                                Other transformation of work eligible for copyright
                            </label>
                        </div>
                    </div>

                    <!-- Date created-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="datecreate">Date of Creation</label>
                        <div class="col-md-2">
                            <input id="datecreate" name="datecreate" type="date" placeholder="DD/MM/YYYY"
                                class="form-control input-md" required="" value="{{ $entry->datecreate }}">

                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend class="legend">3. Publication Status</legend>

                    <!-- Publication status -->
                    <div class="form-group">
                        <label><input type="radio" name="publication_status" @checked($entry->publication_status == 'published') value="published"> Published</label>
                        <label><input type="radio" name="publication_status" @checked($entry->publication_status == 'unpublished') value="unpublished">
                            Unpublished</label>

                        <div id="published_info" style="display: none;">
                            <h3>If Published:</h3>
                            <label>Year of Compilation: <input type="text" name="year_compilation"></label><br>
                            <label>Date of First Publication: <input type="date" name="date_first_publication"
                                    placeholder="MM/DD/YYYY" value="{{ $entry->date_first_publication }}"></label><br>
                            <label>Country of Publication: <input type="text"
                                    name="country_publication" value="{{ $entry->country_publication }}"></label><br>
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend class="legend">4. Author</legend>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="authorname">Author Name</label>
                        <div class="col-md-10">
                            <input id="authorname" name="authorname" type="text" placeholder=""
                                class="form-control input-md" value="{{ $entry->authorname }}">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="authorid">I.C / Passport No</label>
                        <div class="col-md-10">
                            <input id="authorid" name="authorid" type="text" placeholder=""
                                class="form-control input-md" value="{{ $entry->authorid }}">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="authornationality">Nationality</label>
                        <div class="col-md-10">
                            <input id="authornationality" name="authornationality" type="text" placeholder=""
                                class="form-control input-md" value="{{ $entry->authornationality }}">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="authoraddress">Address</label>
                        <div class="col-md-10">
                            <input id="authoraddress" name="authoraddress" type="text" placeholder=""
                                class="form-control input-md" value="{{ $entry->authoraddress }}">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="authorpostcode">Postcode</label>
                        <div class="col-md-10">
                            <input id="authorpostcode" name="authorpostcode" type="text" placeholder=""
                                class="form-control input-md" value="{{ $entry->authorpostcode }}">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="authorcity">City</label>
                        <div class="col-md-10">
                            <input id="authorcity" name="authorcity" type="text" placeholder=""
                                class="form-control input-md" value="{{ $entry->authorcity }}">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="authorstate">State</label>
                        <div class="col-md-10">
                            <input id="authorstate" name="authorstate" type="text" placeholder=""
                                class="form-control input-md" value="{{ $entry->authorstate }}">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="authorcountry">Country</label>
                        <div class="col-md-10">
                            <input id="authorcountry" name="authorcountry" type="text" placeholder=""
                                class="form-control input-md" required="" value="{{ $entry->authorcountry }}">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="authoremail">Email</label>
                        <div class="col-md-10">
                            <input id="authoremail" name="authoremail" type="text" placeholder=""
                                class="form-control input-md" required="" value="{{ $entry->authoremail }}">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="telno">Telephone No</label>
                        <div class="col-md-10">
                            <input id="telno" name="telno" type="text" placeholder="012-3456789"
                                class="form-control input-md" required="" value="{{ $entry->telno }}">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="faxno">Fax No</label>
                        <div class="col-md-10">
                            <input id="faxno" name="faxno" type="text" placeholder=""
                                class="form-control input-md" value="{{ $entry->faxno }}">

                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend class="legend">5. Owner</legend>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="ownername">Owner Name</label>
                        <div class="col-md-10">
                            <input id="ownername" name="ownername" type="text" placeholder=""
                                class="form-control input-md" required="" value="{{ $entry->ownername }}">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="ownerid">I.C / Passport No</label>
                        <div class="col-md-10">
                            <input id="ownerid" name="ownerid" type="text" placeholder=""
                                class="form-control input-md" required="" value="{{ $entry->ownerid }}">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="companyname">Company Name</label>
                        <div class="col-md-10">
                            <input id="companyname" name="companyname" type="text" placeholder=""
                                class="form-control input-md" value="{{ $entry->companyname }}">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="companyno">Company Registration No</label>
                        <div class="col-md-10">
                            <input id="companyno" name="companyno" type="text" placeholder=""
                                class="form-control input-md" value="{{ $entry->companyno }}">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="owneradd">Address</label>
                        <div class="col-md-10">
                            <input id="owneradd" name="owneradd" type="text" placeholder=""
                                class="form-control input-md" value="{{ $entry->owneradd }}">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="ownerpostcode">Postcode</label>
                        <div class="col-md-10">
                            <input id="ownerpostcode" name="ownerpostcode" type="text" placeholder=""
                                class="form-control input-md" value="{{ $entry->ownerpostcode }}">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="ownercity">City</label>
                        <div class="col-md-10">
                            <input id="ownercity" name="ownercity" type="text" placeholder=""
                                class="form-control input-md" value="{{ $entry->ownercity }}">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="ownernationality">Nationality</label>
                        <div class="col-md-10">
                            <input id="ownernationality" name="ownernationality" type="text" placeholder=""
                                class="form-control input-md" value="{{ $entry->ownernationality }}">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="ownerstate">State</label>
                        <div class="col-md-10">
                            <input id="ownerstate" name="ownerstate" type="text" placeholder=""
                                class="form-control input-md" value="{{ $entry->ownerstate }}">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="ownercountry">Country</label>
                        <div class="col-md-10">
                            <input id="ownercountry" name="ownercountry" type="text" placeholder=""
                                class="form-control input-md" value="{{ $entry->ownercountry }}">
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="ownertelno">Telephone No</label>
                        <div class="col-md-10">
                            <input id="ownertelno" name="ownertelno" type="text" placeholder="012-3456789"
                                class="form-control input-md" value="{{ $entry->ownertelno }}">


                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="owneremail">E-mail</label>
                        <div class="col-md-10">
                            <input id="owneremail" name="owneremail" type="text" placeholder=""
                                class="form-control input-md" value="{{ $entry->owneremail }}">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="ownerfaxno">Fax No</label>
                        <div class="col-md-10">
                            <input id="ownerfaxno" name="ownerfaxno" type="text" placeholder=""
                                class="form-control input-md" value="{{ $entry->ownerfaxno }}">

                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend class="legend">6. Licensee</legend>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="licenseename">Licensee Name</label>
                        <div class="col-md-10">
                            <input id="licenseename" name="licenseename" type="text" placeholder=""
                                class="form-control input-md" value="{{ $entry->licenseename }}">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="licenseeid">I.C / Passport No</label>
                        <div class="col-md-10">
                            <input id="licenseeid" name="licenseeid" type="text" placeholder=""
                                class="form-control input-md" value="{{ $entry->licenseeid }}">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="licenseecompanyname">Company Name</label>
                        <div class="col-md-10">
                            <input id="licenseecompanyname" name="licenseecompanyname" type="text" placeholder=""
                                class="form-control input-md" value="{{ $entry->licenseecompanyname }}">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="licenseecompno">Company Registration No</label>
                        <div class="col-md-10">
                            <input id="licenseecompno" name="licenseecompno" type="text" placeholder=""
                                class="form-control input-md" value="{{ $entry->licenseecompno }}">


                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="licenseeadd">Address</label>
                        <div class="col-md-10">
                            <input id="licenseeadd" name="licenseeadd" type="text" placeholder=""
                                class="form-control input-md" value="{{ $entry->licenseeadd }}">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="licenseepostcode">Postcode</label>
                        <div class="col-md-10">
                            <input id="licenseepostcode" name="licenseepostcode" type="text" placeholder=""
                                class="form-control input-md" value="{{ $entry->licenseepostcode }}">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="licenseecity">City</label>
                        <div class="col-md-10">
                            <input id="licenseecity" name="licenseecity" type="text" placeholder=""
                                class="form-control input-md" value="{{ $entry->licenseecity }}">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="licenseenationality">Nationality </label>
                        <div class="col-md-10">
                            <input id="licenseenationality" name="licenseenationality" type="text" placeholder=""
                                class="form-control input-md" value="{{ $entry->licenseenationality }}">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="licenseestate">State</label>
                        <div class="col-md-10">
                            <input id="licenseestate" name="licenseestate" type="text" placeholder=""
                                class="form-control input-md" value="{{ $entry->licenseestate }}">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="licenseecountry">Country</label>
                        <div class="col-md-10">
                            <input id="licenseecountry" name="licenseecountry" type="text" placeholder=""
                                class="form-control input-md" value="{{ $entry->licenseecountry }}">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="licenseetelno">Telephone No</label>
                        <div class="col-md-10">
                            <input id="licenseetelno" name="licenseetelno" type="text" placeholder="012-3456789"
                                class="form-control input-md" value="{{ $entry->licenseetelno }}">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="licenseeemail">E-mail</label>
                        <div class="col-md-10">
                            <input id="licenseeemail" name="licenseeemail" type="text" placeholder=""
                                class="form-control input-md" value="{{ $entry->licenseeemail }}">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-10 control-label" for="licenseefaxno">Fax No</label>
                        <div class="col-md-10">
                            <input id="licenseefaxno" name="licenseefaxno" type="text" placeholder=""
                                class="form-control input-md" value="{{ $entry->licenseefaxno }}">

                        </div>
                    </div>
                </fieldset>

                <div class="button-container">
                    <input type="submit" value="Update">
                    <input type="reset">
                </div>

                <!-- </fieldset> -->
            </form>


            <!-- </fieldset>
</form>
-->

            <script>
                // Show published info section if "Published" checkbox is checked
                document.querySelectorAll('input[name="publication_status"]').forEach(function(checkbox) {
                    checkbox.addEventListener('change', function() {
                        var publishedInfo = document.getElementById('published_info');
                        if (this.value === 'published' && this.checked) {
                            publishedInfo.style.display = 'block';
                        } else {
                            publishedInfo.style.display = 'none';
                        }
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
        </body>

        </html>

    </div>
</body>

</html>
