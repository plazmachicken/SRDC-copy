<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Confedu - Dashboard</title>

    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">

    <style type="text/css">
        @font-face {
            font-family: Roboto;
            font-style: normal;
            font-weight: 400;
            src: url({{ asset('assets/fonts/vietnamese400normal.woff2') }});
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: normal;
            font-weight: 400;
            src: url({{ asset('assets/fonts/cyrillic400normal.woff2') }});
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: normal;
            font-weight: 400;
            src: url({{ asset('assets/fonts/greek-ext400normal.woff2') }});
            unicode-range: U+1F00-1FFF;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: normal;
            font-weight: 400;
            src: url({{ asset('assets/fonts/cyrillic-ext400normal.woff2') }});
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: normal;
            font-weight: 400;
            src: url({{ asset('assets/fonts/latin-ext400normal.woff2') }});
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: normal;
            font-weight: 400;
            src: url({{ asset('assets/fonts/greek400normal.woff2') }});
            unicode-range: U+0370-03FF;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: normal;
            font-weight: 400;
            src: url({{ asset('assets/fonts/latin400normal.woff2') }});
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: normal;
            font-weight: 500;
            src: url({{ asset('assets/fonts/greek500normal.woff2') }});
            unicode-range: U+0370-03FF;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: normal;
            font-weight: 500;
            src: url({{ asset('assets/fonts/latin500normal.woff2') }});
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: normal;
            font-weight: 500;
            src: url({{ asset('assets/fonts/latin-ext500normal.woff2') }});
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: normal;
            font-weight: 500;
            src: url({{ asset('assets/fonts/greek-ext500normal.woff2') }});
            unicode-range: U+1F00-1FFF;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: normal;
            font-weight: 500;
            src: url({{ asset('assets/fonts/cyrillic-ext500normal.woff2') }});
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: normal;
            font-weight: 500;
            src: url({{ asset('assets/fonts/vietnamese500normal.woff2') }});
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: normal;
            font-weight: 500;
            src: url({{ asset('assets/fonts/cyrillic500normal.woff2') }});
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: normal;
            font-weight: 700;
            src: url({{ asset('assets/fonts/cyrillic700normal.woff2') }});
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: normal;
            font-weight: 700;
            src: url({{ asset('assets/fonts/latin-ext700normal.woff2') }});
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: normal;
            font-weight: 700;
            src: url({{ asset('assets/fonts/vietnamese700normal.woff2') }});
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: normal;
            font-weight: 700;
            src: url({{ asset('assets/fonts/cyrillic-ext700normal.woff2') }});
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: normal;
            font-weight: 700;
            src: url({{ asset('assets/fonts/greek700normal.woff2') }});
            unicode-range: U+0370-03FF;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: normal;
            font-weight: 700;
            src: url({{ asset('assets/fonts/greek-ext700normal.woff2') }});
            unicode-range: U+1F00-1FFF;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: normal;
            font-weight: 700;
            src: url({{ asset('assets/fonts/latin700normal.woff2') }});
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: normal;
            font-weight: 900;
            src: url({{ asset('assets/fonts/cyrillic-ext900normal.woff2') }});
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: normal;
            font-weight: 900;
            src: url({{ asset('assets/fonts/cyrillic900normal.woff2') }});
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: normal;
            font-weight: 900;
            src: url({{ asset('assets/fonts/latin-ext900normal.woff2') }});
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: normal;
            font-weight: 900;
            src: url({{ asset('assets/fonts/greek-ext900normal.woff2') }});
            unicode-range: U+1F00-1FFF;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: normal;
            font-weight: 900;
            src: url({{ asset('assets/fonts/latin900normal.woff2') }});
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: normal;
            font-weight: 900;
            src: url({{ asset('assets/fonts/vietnamese900normal.woff2') }});
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: normal;
            font-weight: 900;
            src: url({{ asset('assets/fonts/greek900normal.woff2') }});
            unicode-range: U+0370-03FF;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: italic;
            font-weight: 400;
            src: url({{ asset('assets/fonts/cyrillic-ext400italic.woff2') }});
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: italic;
            font-weight: 400;
            src: url({{ asset('assets/fonts/latin-ext400italic.woff2') }});
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: italic;
            font-weight: 400;
            src: url({{ asset('assets/fonts/vietnamese400italic.woff2') }});
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: italic;
            font-weight: 400;
            src: url({{ asset('assets/fonts/latin400italic.woff2') }});
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: italic;
            font-weight: 400;
            src: url({{ asset('assets/fonts/greek400italic.woff2') }});
            unicode-range: U+0370-03FF;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: italic;
            font-weight: 400;
            src: url({{ asset('assets/fonts/cyrillic400italic.woff2') }});
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: italic;
            font-weight: 400;
            src: url({{ asset('assets/fonts/greek-ext400italic.woff2') }});
            unicode-range: U+1F00-1FFF;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: italic;
            font-weight: 500;
            src: url({{ asset('assets/fonts/greek500italic.woff2') }});
            unicode-range: U+0370-03FF;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: italic;
            font-weight: 500;
            src: url({{ asset('assets/fonts/cyrillic-ext500italic.woff2') }});
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: italic;
            font-weight: 500;
            src: url({{ asset('assets/fonts/greek-ext500italic.woff2') }});
            unicode-range: U+1F00-1FFF;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: italic;
            font-weight: 500;
            src: url({{ asset('assets/fonts/latin500italic.woff2') }});
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: italic;
            font-weight: 500;
            src: url({{ asset('assets/fonts/latin-ext500italic.woff2') }});
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: italic;
            font-weight: 500;
            src: url({{ asset('assets/fonts/vietnamese500italic.woff2') }});
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: italic;
            font-weight: 500;
            src: url({{ asset('assets/fonts/cyrillic500italic.woff2') }});
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: italic;
            font-weight: 700;
            src: url({{ asset('assets/fonts/cyrillic-ext700italic.woff2') }});
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: italic;
            font-weight: 700;
            src: url({{ asset('assets/fonts/greek700italic.woff2') }});
            unicode-range: U+0370-03FF;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: italic;
            font-weight: 700;
            src: url({{ asset('assets/fonts/greek-ext700italic.woff2') }});
            unicode-range: U+1F00-1FFF;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: italic;
            font-weight: 700;
            src: url({{ asset('assets/fonts/cyrillic700italic.woff2') }});
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: italic;
            font-weight: 700;
            src: url({{ asset('assets/fonts/latin-ext700italic.woff2') }});
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: italic;
            font-weight: 700;
            src: url({{ asset('assets/fonts/latin700italic.woff2') }});
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: Roboto;
            font-style: italic;
            font-weight: 700;
            src: url({{ asset('assets/fonts/vietnamese700italic.woff2') }});
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }
    </style>

    <!-- CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <style>
        /* Adjust z-index for Bootstrap Datepicker */
        .datepicker {
            z-index: 9999 !important;
            /* Ensure it appears above other elements */
        }
    </style>
    <!-- JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.datepicker').datepicker();
        });
    </script>

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

    <div class="main-wrapper">

        <div class="header">
            <div class="header-left">
                <a href="{{ route('index_home') }}" class="logo">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                </a>
                <a href="{{ route('index_home') }}" class="logo logo-small">
                    <img src="{{ asset('assets/img/logo-small.png') }}" alt="Logo" width="30" height="30">
                </a>
            </div>

            <div class="menu-toggle">
                <a href="javascript:void(0);" id="toggle_btn">
                    <i class="fas fa-bars"></i>
                </a>
            </div>

            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>

            <ul class="nav user-menu">
                <li class="nav-item dropdown noti-dropdown language-drop me-2">
                    <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
                        @if (app()->getLocale() == 'en')
                            <img src="{{ asset('assets/img/icons/header-icon-01.svg') }}" alt="en">
                        @else
                            <img src="{{ asset('assets/img/icons/icons8-spain-48.png') }}" alt="sp">
                        @endif
                    </a>
                    <div class="dropdown-menu ">
                        <div class="noti-content">
                            <div>
                                <a class="dropdown-item selected" href="{{ route('changeLang', 'en') }}"><i
                                        class="flag flag-lr me-2"></i>{{ __('messages.English') }}</a>
                                <a class="dropdown-item" href="{{ route('changeLang', 'sp') }}"><i
                                        class="flag flag-es me-2"></i>{{ __('messages.Spanish') }}</a>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown has-arrow new-user-menus">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <div class="user-img">

                            @if (Auth::user()->profile_picture)
                                <img class="rounded-circle" src="{{ asset('images/profile/' . Auth::user()->profile_picture) }}"
                                    width="31" alt="{{ __('messages.Profile') }}">
                            @else
                                <img class="rounded-circle" src="{{ asset('assets/img/profiles/avatar-01.jpg') }}"
                                    width="31" alt="{{ __('messages.Profile') }}">
                            @endif
                            <div class="user-text">
                                <h6>{{ Auth::user()->name }}</h6>
                                <p class="text-muted mb-0">{{ __('messages.Admin') }}</p>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                               @if (Auth::user()->profile_picture)
                                <img class="rounded-circle" src="{{ asset('images/profile/' . Auth::user()->profile_picture) }}"
                                    width="31" alt="{{ __('messages.Profile') }}">
                            @else
                                <img class="rounded-circle" src="{{ asset('assets/img/profiles/avatar-01.jpg') }}"
                                    width="31" alt="{{ __('messages.Profile') }}">
                            @endif
                            </div>
                            <div class="user-text">
                                <h6>{{ Auth::user()->name }}</h6>
                                <p class="text-muted mb-0">{{ __('messages.Admin') }}</p>
                            </div>
                        </div>
                        <a class="dropdown-item"
                            href="{{ route('admin.profile.edit', Auth::user()->id) }}">{{ __('messages.Profile') }}</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('messages.Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>



        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            <span>{{ __('messages.Main_Menu') }}</span>
                        </li>
                        <li> <a href="{{ route('admin.home') }}"><i class="feather-grid"></i> <span>
                                    {{ __('messages.Dashboard') }}</span></a></li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-graduation-cap"></i>
                                <span>{{ __('messages.Students') }}</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('student.index') }}">{{ __('messages.Student_List') }}</a></li>
                                <li><a href="{{ route('student.create') }}">{{ __('messages.Student_Add') }}</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-chalkboard-teacher"></i>
                                <span>{{ __('messages.Teachers') }}</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('teacher.index') }}">{{ __('messages.Teacher_List') }}</a></li>
                                <li><a href="{{ route('teacher.create') }}">{{ __('messages.Teacher_Add') }}</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-book-reader"></i>
                                <span>{{ __('messages.Courses') }}</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('courses.index') }}">{{ __('messages.Course_List') }}</a></li>
                                <li><a href="{{ route('courses.create') }}">{{ __('messages.Course_Add') }}</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-clipboard"></i>
                                <span>{{ __('messages.Units') }}</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('units.index') }}">{{ __('messages.Unit_List') }}</a></li>
                                <li><a href="{{ route('units.create') }}">{{ __('messages.Unit_Add') }}</a></li>
                            </ul>
                        </li>
                        <li class="active"><a href="{{ route('admin.profile.edit', Auth::user()->id) }}"><i
                            class="fas fa-user"></i> <span>{{ __('messages.My_Profile') }}</span></a></li>
                    </ul>
                </div>
            </div>
        </div>




        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Blank Page</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>

                            </ul>
                        </div>
                    </div>
                </div>

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

                <div class="row">
                    <div class="col-sm-12">
                        Contents here
                    </div>
                </div>

            

            </div>
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
