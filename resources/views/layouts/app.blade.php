<!DOCTYPE html>
<html lang="en" data-theme="light" data-sidebar-behaviour="fixed" data-navigation-color="inverted" data-is-fluid="true">
<!-- Mirrored from dashly-theme.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jan 2024 20:34:04 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta content="Webinning" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ url('/assets/css/theme.bundle.css') }}" id="stylesheetLTR" />
    <link rel="stylesheet" href="{{ url('/assets/css/theme.rtl.bundle.css') }}" id="stylesheetRTL" />
    <link rel="stylesheet" href="{{ url('/assets/css/style.css') }}" />

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&amp;display=swap" />
    <link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');"
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&amp;display=swap" />

    <!-- no-JS fallback -->
    <noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&amp;display=swap" />
    </noscript>

    <script>
        // Theme switcher

        let themeSwitcher = document.getElementById("themeSwitcher");

        const getPreferredTheme = () => {
            if (localStorage.getItem("theme") != null) {
                return localStorage.getItem("theme");
            }

            return document.documentElement.dataset.theme;
        };

        const setTheme = function(theme) {
            if (
                theme === "auto" &&
                window.matchMedia("(prefers-color-scheme: dark)").matches
            ) {
                document.documentElement.dataset.theme = window.matchMedia(
                        "(prefers-color-scheme: dark)"
                    ).matches ?
                    "dark" :
                    "light";
            } else {
                document.documentElement.dataset.theme = theme;
            }

            localStorage.setItem("theme", theme);
        };

        const showActiveTheme = (theme) => {
            const activeBtn = document.querySelector(
                `[data-theme-value="${theme}"]`
            );

            document.querySelectorAll("[data-theme-value]").forEach((element) => {
                element.classList.remove("active");
            });

            activeBtn && activeBtn.classList.add("active");

            // Set button if demo mode is enabled
            document
                .querySelectorAll('[data-theme-control="theme"]')
                .forEach((element) => {
                    if (element.value == theme) {
                        element.checked = true;
                    }
                });
        };

        function reloadPage() {
            window.location = window.location.pathname;
        }

        setTheme(getPreferredTheme());

        if (typeof themeSwitcher != "undefined") {
            window
                .matchMedia("(prefers-color-scheme: dark)")
                .addEventListener("change", (e) => {
                    if (localStorage.getItem("theme") != null) {
                        if (localStorage.getItem("theme") == "auto") {
                            reloadPage();
                        }
                    }
                });

            window.addEventListener("load", () => {
                showActiveTheme(getPreferredTheme());

                document.querySelectorAll("[data-theme-value]").forEach((element) => {
                    element.addEventListener("click", () => {
                        const theme = element.getAttribute("data-theme-value");

                        localStorage.setItem("theme", theme);
                        reloadPage();
                    });
                });
            });
        }
    </script>
    <!-- Favicon -->
    <link rel="icon" href="{{ url('/assets/favicon/favicon.ico') }}" sizes="any" />
    <script>
        var themeConfig = {
            theme: JSON.parse('"light"'),
            isRTL: JSON.parse("false"),
            isFluid: JSON.parse("true"),
            sidebarBehaviour: JSON.parse('"fixed"'),
            navigationColor: JSON.parse('"inverted"'),
        };

        var isRTL = localStorage.getItem("isRTL") === "true",
            isFluid = localStorage.getItem("isFluid") === "true",
            theme = localStorage.getItem("theme"),
            sidebarSizing = localStorage.getItem("sidebarSizing"),
            linkLTR = document.getElementById("stylesheetLTR"),
            linkRTL = document.getElementById("stylesheetRTL"),
            html = document.documentElement;

        if (isRTL) {
            linkLTR.setAttribute("disabled", "");
            linkRTL.removeAttribute("disabled");
            html.setAttribute("dir", "rtl");
        } else {
            linkRTL.setAttribute("disabled", "");
            linkLTR.removeAttribute("disabled");
            html.removeAttribute("dir");
        }
    </script>

    <script src="https://unpkg.com/feather-icons"></script>
    <title>Vrexx | @yield('title')</title>
</head>


<body>
    @section('sidebar')

        <!-- THEME CONFIGURATION -->
        <script>
            let themeAttrs = document.documentElement.dataset;

            for (let attr in themeAttrs) {
                if (localStorage.getItem(attr) != null) {
                    document.documentElement.dataset[attr] = localStorage.getItem(attr);

                    if (theme === 'auto') {
                        document.documentElement.dataset.theme = window.matchMedia('(prefers-color-scheme: dark)').matches ?
                            'dark' : 'light';

                        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
                            e.matches ? document.documentElement.dataset.theme = 'dark' : document.documentElement
                                .dataset.theme = 'light';
                        });
                    }
                }
            }
        </script>
        <!-- NAVIGATION -->
        <nav id="mainNavbar" class="navbar navbar-vertical navbar-expand-lg scrollbar bg-dark navbar-dark">

            <!-- Theme configuration (navbar) -->
            <script>
                let navigationColor = localStorage.getItem('navigationColor'),
                    navbar = document.getElementById('mainNavbar');

                if (navigationColor != null && navbar != null) {
                    if (navigationColor == 'inverted') {
                        navbar.classList.add('bg-dark', 'navbar-dark');
                        navbar.classList.remove('bg-white', 'navbar-light');
                    } else {
                        navbar.classList.add('bg-white', 'navbar-light');
                        navbar.classList.remove('bg-dark', 'navbar-dark');
                    }
                }
            </script>
            <div class="container-fluid">

                <!-- Brand -->
                <a class="navbar-brand" href="index.html">
                    <img src="https://d33wubrfki0l68.cloudfront.net/33193ecc0db7caa7d7efee3dca8af1b145fa2135/16978/assets/images/logo-small.svg"
                        class="navbar-brand-img logo-light logo-small" alt="..." width="19" height="25">
                    <img src="https://d33wubrfki0l68.cloudfront.net/ba6b91b7d508187d153e48318c22d0773a9cedfc/36afa/assets/images/logo.svg"
                        class="navbar-brand-img logo-light logo-large" alt="..." width="125" height="25">

                    <img src="https://d33wubrfki0l68.cloudfront.net/8b6c92837e3b7aa8c9017d33298ead6b9b859d79/fa79b/assets/images/logo-dark-small.svg"
                        class="navbar-brand-img logo-dark logo-small" alt="..." width="19" height="25">
                    <img src="https://d33wubrfki0l68.cloudfront.net/55307694d1a6b107d2d87c838a1aaede85cd3d84/66f18/assets/images/logo-dark.svg"
                        class="navbar-brand-img logo-dark logo-large" alt="..." width="125" height="25">
                </a>

                <!-- Navbar toggler -->
                <a href="javascript: void(0);" class="navbar-toggler" data-bs-toggle="collapse"
                    data-bs-target="#sidenavCollapse" aria-controls="sidenavCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </a>

                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenavCollapse">

                    <!-- Navigation -->
                    <ul class="navbar-nav mb-lg-7">
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'index' ? 'active' : '' }}"
                                href="{{ route('index') }}">
                                <img class="nav-link-icon" src="{{ url('/assets/images/icons/dashboard.svg') }}"
                                    alt="Dashboard">
                                <span>Dashboard</span>
                            </a>
                        </li>
                    </ul>
                    <!-- End of Navigation -->

                </div>
                <!-- End of Collapse -->
            </div>
        </nav>
        <!-- MAIN CONTENT -->
        <main>

            <!-- HEADER -->
            <header class="container-fluid d-flex py-6 mb-4">
                <!-- Search -->
                <form class="d-none d-md-inline-block me-auto">
                    <div class="input-group input-group-merge">

                        <!-- Input -->
                        <input type="text" class="form-control bg-light-green border-light-green w-250px"
                            placeholder="Search..." aria-label="Search for any term">

                        <!-- Button -->
                        <span class="input-group-text bg-light-green border-light-green p-0">

                            <!-- Button -->
                            <button class="btn btn-primary rounded-2 w-30px h-30px p-0 mx-1" type="button"
                                aria-label="Search button">
                                <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.750 9.812 A9.063 9.063 0 1 0 18.876 9.812 A9.063 9.063 0 1 0 0.750 9.812 Z"
                                        fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" transform="translate(-3.056 4.62) rotate(-23.025)" />
                                    <path d="M16.221 16.22L23.25 23.25" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                </svg>
                            </button>
                        </span>
                    </div>
                </form>

                <!-- Top buttons -->
                <div class="d-flex align-items-center ms-auto me-n1 me-lg-n2">

                    <!-- Dropdown -->
                    <div class="dropdown" id="themeSwitcher">
                        <a href="javascript: void(0);"
                            class="dropdown-toggle no-arrow d-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mx-1 mx-lg-2 w-40px h-40px link-secondary"
                            role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            data-bs-offset="0,0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="18" width="18">
                                <g>
                                    <path
                                        d="M12,4.64A7.36,7.36,0,1,0,19.36,12,7.37,7.37,0,0,0,12,4.64Zm0,12.72A5.36,5.36,0,1,1,17.36,12,5.37,5.37,0,0,1,12,17.36Z"
                                        style="fill: currentColor" />
                                    <path d="M12,3.47a1,1,0,0,0,1-1V1a1,1,0,0,0-2,0V2.47A1,1,0,0,0,12,3.47Z"
                                        style="fill: currentColor" />
                                    <path
                                        d="M4.55,6a1,1,0,0,0,.71.29A1,1,0,0,0,6,6,1,1,0,0,0,6,4.55l-1-1A1,1,0,0,0,3.51,4.93Z"
                                        style="fill: currentColor" />
                                    <path d="M2.47,11H1a1,1,0,0,0,0,2H2.47a1,1,0,1,0,0-2Z" style="fill: currentColor" />
                                    <path
                                        d="M4.55,18l-1,1a1,1,0,0,0,0,1.42,1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29l1-1A1,1,0,0,0,4.55,18Z"
                                        style="fill: currentColor" />
                                    <path d="M12,20.53a1,1,0,0,0-1,1V23a1,1,0,0,0,2,0V21.53A1,1,0,0,0,12,20.53Z"
                                        style="fill: currentColor" />
                                    <path
                                        d="M19.45,18A1,1,0,0,0,18,19.45l1,1a1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.42Z"
                                        style="fill: currentColor" />
                                    <path d="M23,11H21.53a1,1,0,0,0,0,2H23a1,1,0,0,0,0-2Z" style="fill: currentColor" />
                                    <path
                                        d="M18.74,6.26A1,1,0,0,0,19.45,6l1-1a1,1,0,1,0-1.42-1.42l-1,1A1,1,0,0,0,18,6,1,1,0,0,0,18.74,6.26Z"
                                        style="fill: currentColor" />
                                </g>
                            </svg>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <button type="button" class="dropdown-item active" data-theme-value="light">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2"
                                        height="18" width="18">
                                        <g>
                                            <path
                                                d="M12,4.64A7.36,7.36,0,1,0,19.36,12,7.37,7.37,0,0,0,12,4.64Zm0,12.72A5.36,5.36,0,1,1,17.36,12,5.37,5.37,0,0,1,12,17.36Z"
                                                style="fill: currentColor" />
                                            <path d="M12,3.47a1,1,0,0,0,1-1V1a1,1,0,0,0-2,0V2.47A1,1,0,0,0,12,3.47Z"
                                                style="fill: currentColor" />
                                            <path
                                                d="M4.55,6a1,1,0,0,0,.71.29A1,1,0,0,0,6,6,1,1,0,0,0,6,4.55l-1-1A1,1,0,0,0,3.51,4.93Z"
                                                style="fill: currentColor" />
                                            <path d="M2.47,11H1a1,1,0,0,0,0,2H2.47a1,1,0,1,0,0-2Z"
                                                style="fill: currentColor" />
                                            <path
                                                d="M4.55,18l-1,1a1,1,0,0,0,0,1.42,1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29l1-1A1,1,0,0,0,4.55,18Z"
                                                style="fill: currentColor" />
                                            <path d="M12,20.53a1,1,0,0,0-1,1V23a1,1,0,0,0,2,0V21.53A1,1,0,0,0,12,20.53Z"
                                                style="fill: currentColor" />
                                            <path
                                                d="M19.45,18A1,1,0,0,0,18,19.45l1,1a1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.42Z"
                                                style="fill: currentColor" />
                                            <path d="M23,11H21.53a1,1,0,0,0,0,2H23a1,1,0,0,0,0-2Z"
                                                style="fill: currentColor" />
                                            <path
                                                d="M18.74,6.26A1,1,0,0,0,19.45,6l1-1a1,1,0,1,0-1.42-1.42l-1,1A1,1,0,0,0,18,6,1,1,0,0,0,18.74,6.26Z"
                                                style="fill: currentColor" />
                                        </g>
                                    </svg>
                                    Light mode
                                </button>
                            </li>
                            <li>
                                <button type="button" class="dropdown-item" data-theme-value="dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2"
                                        height="18" width="18">
                                        <path
                                            d="M19.57,23.34a1,1,0,0,0,0-1.9,9.94,9.94,0,0,1,0-18.88,1,1,0,0,0,.68-.94,1,1,0,0,0-.68-.95A11.58,11.58,0,0,0,8.88,2.18,12.33,12.33,0,0,0,3.75,12a12.31,12.31,0,0,0,5.11,9.79A11.49,11.49,0,0,0,15.61,24,12.55,12.55,0,0,0,19.57,23.34ZM10,20.17A10.29,10.29,0,0,1,5.75,12a10.32,10.32,0,0,1,4.3-8.19A9.34,9.34,0,0,1,15.59,2a.17.17,0,0,1,.17.13.18.18,0,0,1-.07.2,11.94,11.94,0,0,0-.18,19.21.25.25,0,0,1-.16.45A9.5,9.5,0,0,1,10,20.17Z"
                                            style="fill: currentColor" />
                                    </svg>
                                    Dark mode
                                </button>
                            </li>
                            <li>
                                <button type="button" class="dropdown-item" data-theme-value="auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2"
                                        height="18" width="18">
                                        <path
                                            d="M24,12a1,1,0,0,0-1-1H19.09a.51.51,0,0,1-.49-.4,6.83,6.83,0,0,0-.94-2.28.5.5,0,0,1,.06-.63l2.77-2.76a1,1,0,1,0-1.42-1.42L16.31,6.28a.5.5,0,0,1-.63.06A6.83,6.83,0,0,0,13.4,5.4a.5.5,0,0,1-.4-.49V1a1,1,0,0,0-2,0V4.91a.51.51,0,0,1-.4.49,6.83,6.83,0,0,0-2.28.94.5.5,0,0,1-.63-.06L4.93,3.51A1,1,0,0,0,3.51,4.93L6.28,7.69a.5.5,0,0,1,.06.63A6.83,6.83,0,0,0,5.4,10.6a.5.5,0,0,1-.49.4H1a1,1,0,0,0,0,2H4.91a.51.51,0,0,1,.49.4,6.83,6.83,0,0,0,.94,2.28.5.5,0,0,1-.06.63L3.51,19.07a1,1,0,1,0,1.42,1.42l2.76-2.77a.5.5,0,0,1,.63-.06,6.83,6.83,0,0,0,2.28.94.5.5,0,0,1,.4.49V23a1,1,0,0,0,2,0V19.09a.51.51,0,0,1,.4-.49,6.83,6.83,0,0,0,2.28-.94.5.5,0,0,1,.63.06l2.76,2.77a1,1,0,1,0,1.42-1.42l-2.77-2.76a.5.5,0,0,1-.06-.63,6.83,6.83,0,0,0,.94-2.28.5.5,0,0,1,.49-.4H23A1,1,0,0,0,24,12Zm-8.74,2.5A5.76,5.76,0,0,1,9.5,8.74a5.66,5.66,0,0,1,.16-1.31A.49.49,0,0,1,10,7.07a5.36,5.36,0,0,1,1.8-.31,5.47,5.47,0,0,1,5.46,5.46,5.36,5.36,0,0,1-.31,1.8.49.49,0,0,1-.35.32A5.53,5.53,0,0,1,15.26,14.5Z"
                                            style="fill: currentColor" />
                                    </svg>
                                    Auto
                                </button>
                            </li>
                        </ul>
                    </div>

                    <!-- Separator -->
                    <div class="vr bg-gray-700 mx-2 mx-lg-3"></div>

                    <!-- Dropdown -->
                    <div class="dropdown">
                        <a href="javascript: void(0);"
                            class="dropdown-toggle no-arrow d-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mx-1 mx-lg-2 w-40px h-40px"
                            role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            data-bs-offset="0,0">
                            <span class="avatar avatar-circle avatar-xxs"><img class="avatar-img"
                                    src="https://d33wubrfki0l68.cloudfront.net/8ab0a140561aa1ea23abaa0101bd41b9b1d0cb12/e951b/assets/images/flags/1x1/us.svg"
                                    alt="..." width="18" height="18"></span>
                        </a>

                    </div>

                    <!-- Separator -->
                    <div class="vr bg-gray-700 mx-2 mx-lg-3"></div>

                    <!-- Custmization offcanvas -->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCustomize"
                        aria-labelledby="offcanvasCustomizeTitle">
                        <div class="offcanvas-body pt-7 pb-5 position-relative">

                            <button type="button" class="btn-close position-absolute top-0 end-0 mt-5 me-5"
                                data-bs-dismiss="offcanvas" aria-label="Close"></button>

                            <div class="text-center">
                                <img src="https://d33wubrfki0l68.cloudfront.net/0e108d71de2aec22aae71d891ecabd0ec28dc2bb/8484b/assets/images/illustrations/customization-illustration.svg"
                                    alt="..." class="img-fluid w-50 mb-5" width="170" height="170">
                                <h3 class="mb-2" id="offcanvasCustomizeTitle">Make Dashly Your Own</h3>
                                <p class="mb-0">Set preferences that will be cookied for your live preview demonstration
                                </p>
                            </div>

                            <hr>

                            <h4 class="mb-0">Color Scheme</h4>
                            <p class="text-secondary fs-5 mb-4">Overall light or dark presentation.</p>
                            <div class="btn-group w-100 mb-7" role="group" aria-label="Light/dark switcher">
                                <input type="radio" class="btn-check" name="theme" id="lightMode" value="light"
                                    data-theme-control="theme">
                                <label
                                    class="btn btn-outline-primary px-3 w-100 d-flex align-items-center justify-content-center"
                                    for="lightMode">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2"
                                        height="18" width="18">
                                        <g>
                                            <path
                                                d="M12,4.64A7.36,7.36,0,1,0,19.36,12,7.37,7.37,0,0,0,12,4.64Zm0,12.72A5.36,5.36,0,1,1,17.36,12,5.37,5.37,0,0,1,12,17.36Z"
                                                style="fill: currentColor" />
                                            <path d="M12,3.47a1,1,0,0,0,1-1V1a1,1,0,0,0-2,0V2.47A1,1,0,0,0,12,3.47Z"
                                                style="fill: currentColor" />
                                            <path
                                                d="M4.55,6a1,1,0,0,0,.71.29A1,1,0,0,0,6,6,1,1,0,0,0,6,4.55l-1-1A1,1,0,0,0,3.51,4.93Z"
                                                style="fill: currentColor" />
                                            <path d="M2.47,11H1a1,1,0,0,0,0,2H2.47a1,1,0,1,0,0-2Z"
                                                style="fill: currentColor" />
                                            <path
                                                d="M4.55,18l-1,1a1,1,0,0,0,0,1.42,1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29l1-1A1,1,0,0,0,4.55,18Z"
                                                style="fill: currentColor" />
                                            <path d="M12,20.53a1,1,0,0,0-1,1V23a1,1,0,0,0,2,0V21.53A1,1,0,0,0,12,20.53Z"
                                                style="fill: currentColor" />
                                            <path
                                                d="M19.45,18A1,1,0,0,0,18,19.45l1,1a1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.42Z"
                                                style="fill: currentColor" />
                                            <path d="M23,11H21.53a1,1,0,0,0,0,2H23a1,1,0,0,0,0-2Z"
                                                style="fill: currentColor" />
                                            <path
                                                d="M18.74,6.26A1,1,0,0,0,19.45,6l1-1a1,1,0,1,0-1.42-1.42l-1,1A1,1,0,0,0,18,6,1,1,0,0,0,18.74,6.26Z"
                                                style="fill: currentColor" />
                                        </g>
                                    </svg>
                                    Light
                                </label>

                                <input type="radio" class="btn-check" name="theme" id="darkMode" value="dark"
                                    data-theme-control="theme">
                                <label
                                    class="btn btn-outline-primary px-3 w-100 d-flex align-items-center justify-content-center"
                                    for="darkMode">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2"
                                        height="18" width="18">
                                        <path
                                            d="M19.57,23.34a1,1,0,0,0,0-1.9,9.94,9.94,0,0,1,0-18.88,1,1,0,0,0,.68-.94,1,1,0,0,0-.68-.95A11.58,11.58,0,0,0,8.88,2.18,12.33,12.33,0,0,0,3.75,12a12.31,12.31,0,0,0,5.11,9.79A11.49,11.49,0,0,0,15.61,24,12.55,12.55,0,0,0,19.57,23.34ZM10,20.17A10.29,10.29,0,0,1,5.75,12a10.32,10.32,0,0,1,4.3-8.19A9.34,9.34,0,0,1,15.59,2a.17.17,0,0,1,.17.13.18.18,0,0,1-.07.2,11.94,11.94,0,0,0-.18,19.21.25.25,0,0,1-.16.45A9.5,9.5,0,0,1,10,20.17Z"
                                            style="fill: currentColor" />
                                    </svg>
                                    Dark
                                </label>

                                <input type="radio" class="btn-check" name="theme" id="autoMode" value="auto"
                                    data-theme-control="theme">
                                <label
                                    class="btn btn-outline-primary px-3 w-100 d-flex align-items-center justify-content-center"
                                    for="autoMode">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2"
                                        height="18" width="18">
                                        <path
                                            d="M24,12a1,1,0,0,0-1-1H19.09a.51.51,0,0,1-.49-.4,6.83,6.83,0,0,0-.94-2.28.5.5,0,0,1,.06-.63l2.77-2.76a1,1,0,1,0-1.42-1.42L16.31,6.28a.5.5,0,0,1-.63.06A6.83,6.83,0,0,0,13.4,5.4a.5.5,0,0,1-.4-.49V1a1,1,0,0,0-2,0V4.91a.51.51,0,0,1-.4.49,6.83,6.83,0,0,0-2.28.94.5.5,0,0,1-.63-.06L4.93,3.51A1,1,0,0,0,3.51,4.93L6.28,7.69a.5.5,0,0,1,.06.63A6.83,6.83,0,0,0,5.4,10.6a.5.5,0,0,1-.49.4H1a1,1,0,0,0,0,2H4.91a.51.51,0,0,1,.49.4,6.83,6.83,0,0,0,.94,2.28.5.5,0,0,1-.06.63L3.51,19.07a1,1,0,1,0,1.42,1.42l2.76-2.77a.5.5,0,0,1,.63-.06,6.83,6.83,0,0,0,2.28.94.5.5,0,0,1,.4.49V23a1,1,0,0,0,2,0V19.09a.51.51,0,0,1,.4-.49,6.83,6.83,0,0,0,2.28-.94.5.5,0,0,1,.63.06l2.76,2.77a1,1,0,1,0,1.42-1.42l-2.77-2.76a.5.5,0,0,1-.06-.63,6.83,6.83,0,0,0,.94-2.28.5.5,0,0,1,.49-.4H23A1,1,0,0,0,24,12Zm-8.74,2.5A5.76,5.76,0,0,1,9.5,8.74a5.66,5.66,0,0,1,.16-1.31A.49.49,0,0,1,10,7.07a5.36,5.36,0,0,1,1.8-.31,5.47,5.47,0,0,1,5.46,5.46,5.36,5.36,0,0,1-.31,1.8.49.49,0,0,1-.35.32A5.53,5.53,0,0,1,15.26,14.5Z"
                                            style="fill: currentColor" />
                                    </svg>
                                    Auto
                                </label>
                            </div>

                            <h4 class="mb-0">Navigation Color</h4>
                            <p class="text-secondary fs-5 mb-4">Usually dictated by the color scheme, but can be
                                overriden.</p>
                            <div class="btn-group w-100 mb-7" role="group" aria-label="Navigation color switcher">
                                <input type="radio" class="btn-check" name="navigationColor" id="defaultColor"
                                    value="default" data-theme-control="navigationColor">
                                <label class="btn btn-outline-primary w-50" for="defaultColor">
                                    Default
                                </label>

                                <input type="radio" class="btn-check" name="navigationColor" id="invertedColor"
                                    value="inverted" data-theme-control="navigationColor">
                                <label class="btn btn-outline-primary w-50" for="invertedColor">
                                    Inverted
                                </label>
                            </div>

                            <h4 class="mb-0">Sidebar behaviour</h4>
                            <p class="text-secondary fs-5 mb-4">Standard navigation sizing or minified icons with
                                dropdowns.</p>
                            <div class="btn-group w-100 mb-7" role="group" aria-label="Sidebar layout switcher">
                                <input type="radio" class="btn-check" name="sidebarSizing" id="fixed"
                                    value="fixed" data-theme-control="sidebarBehaviour">
                                <label class="btn btn-outline-primary px-3 w-100" for="fixed">
                                    Fixed
                                </label>

                                <input type="radio" class="btn-check" name="sidebarSizing" id="condensed"
                                    value="condensed" data-theme-control="sidebarBehaviour">
                                <label class="btn btn-outline-primary px-3 w-100" for="condensed">
                                    Condensed
                                </label>

                                <input type="radio" class="btn-check" name="sidebarSizing" id="scrollable"
                                    value="scrollable" data-theme-control="sidebarBehaviour">
                                <label class="btn btn-outline-primary px-3 w-100" for="scrollable">
                                    Scrollable
                                </label>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-6">
                                <div class="d-flex flex-column">
                                    <label class="h4 mb-0 d-flex align-items-center" for="isFluid">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2"
                                            height="16" width="16">
                                            <path
                                                d="M4.79,17.21a1,1,0,0,0,.71.29.84.84,0,0,0,.38-.08,1,1,0,0,0,.62-.92v-3a.25.25,0,0,1,.25-.25h10.5a.25.25,0,0,1,.25.25v3a1,1,0,0,0,.62.92.84.84,0,0,0,.38.08,1,1,0,0,0,.71-.29l4.5-4.5a1,1,0,0,0,0-1.42l-4.5-4.5a1,1,0,0,0-1.09-.21,1,1,0,0,0-.62.92v3a.25.25,0,0,1-.25.25H6.75a.25.25,0,0,1-.25-.25v-3a1,1,0,0,0-.62-.92,1,1,0,0,0-1.09.21l-4.5,4.5a1,1,0,0,0,0,1.42Z"
                                                style="fill: currentColor" />
                                        </svg>
                                        Fluid layout
                                    </label>
                                    <p class="text-secondary fs-5 mb-0">Toggle container layout system</p>
                                </div>

                                <div class="form-check form-switch mb-0">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        data-theme-control="isFluid" id="isFluid" aria-label="Fluid layout switcher"
                                        checked>
                                </div>
                            </div>


                            <div class="d-flex justify-content-between align-items-center mb-5">
                                <div class="d-flex flex-column">
                                    <label class="h4 mb-0 d-flex align-items-center" for="isRTL">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2"
                                            height="16" width="16">
                                            <g>
                                                <path
                                                    d="M4.15,15.85A.47.47,0,0,0,4.5,16a.43.43,0,0,0,.19,0A.5.5,0,0,0,5,15.5V13a.25.25,0,0,1,.25-.25H11.5a1.25,1.25,0,0,0,0-2.5H5.25A.25.25,0,0,1,5,10V7.5A.49.49,0,0,0,4.69,7a.47.47,0,0,0-.54.11l-4,4a.48.48,0,0,0,0,.7Z"
                                                    style="fill: currentColor" />
                                                <rect x="15.5" width="8.5" height="24" rx="2"
                                                    style="fill: currentColor" />
                                            </g>
                                        </svg>
                                        RTL Mode
                                    </label>
                                    <p class="text-secondary fs-5 mb-0">Switch your language direction</p>
                                </div>

                                <div class="form-check form-switch mb-0">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        data-theme-control="isRTL" id="isRTL" aria-label="RTL switcher">
                                </div>
                            </div>

                            <div class="row gx-4 mt-auto">
                                <div class="col-12">
                                    <hr>
                                </div>
                                <div class="col-lg mb-3">
                                    <button class="btn btn-light w-100 d-flex align-items-center justify-content-center"
                                        id="resetThemeConfig">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2"
                                            height="16" width="16">
                                            <path
                                                d="M12.57,1.26A10.81,10.81,0,0,0,2.82,8.4a.25.25,0,0,1-.27.16L.86,8.31a.52.52,0,0,0-.49.21.51.51,0,0,0,0,.53L3,13.75a.51.51,0,0,0,.43.25.52.52,0,0,0,.36-.14l3.77-3.75a.5.5,0,0,0-.28-.85L5.59,9a.26.26,0,0,1-.18-.13.24.24,0,0,1,0-.22,8.26,8.26,0,1,1,7.87,11.59,1.25,1.25,0,1,0,.09,2.5,10.75,10.75,0,0,0-.79-21.49Z"
                                                style="fill: currentColor" />
                                        </svg>
                                        Reset
                                    </button>
                                </div>
                                <div class="col-lg mb-3">
                                    <button class="btn btn-dark w-100 d-flex align-items-center justify-content-center"
                                        id="previewThemeConfig">
                                        Preview
                                    </button>
                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href="javascript: void(0);"
                            class="dropdown-toggle no-arrow d-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mx-1 mx-lg-2 w-40px h-40px"
                            role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                            aria-expanded="false" data-bs-offset="0,0">
                            <div class="avatar avatar-circle avatar-sm avatar-online">
                                <img src="" alt="..." class="avatar-img" width="40" height="40">
                            </div>
                        </a>

                        <div class="dropdown-menu">
                            <div class="dropdown-item-text">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-sm avatar-circle">
                                        <img src="" alt="..." class="avatar-img" width="40"
                                            height="40">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h4 class="mb-0">Ellie Tucker</h4>
                                        <p class="card-text">ellie.tucker@dashly.com</p>
                                    </div>
                                </div>
                            </div>

                            <hr class="dropdown-divider">
                            <a class="dropdown-item" href="javascript: void(0);">Settings</a>
                            <hr class="dropdown-divider">
                            @if (auth()->check())
                                <a href="{{ route('logout') }}" class="dropdown-item"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </header>
        @show

        <div class="container-fluid">
            @yield('content')
            <!-- / .container-fluid -->

            <!-- Footer-->
            <!-- Footer -->
            <footer class="mt-auto">
                <div class="container-fluid mt-4 mb-6 text-muted">
                    <div class="row justify-content-between">
                        <div class="col">© Dashly. 2023 Webinning.</div>

                        <div class="col-auto">v1.5.0</div>
                    </div>
                    <!-- / .row -->
                </div>
            </footer>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ url('/assets/js/theme.bundle.js') }}"></script>
    <script src="{{ url('/assets/js/script.js') }}"></script>
    <script>
        feather.replace();
    </script>
</body>

</html>
