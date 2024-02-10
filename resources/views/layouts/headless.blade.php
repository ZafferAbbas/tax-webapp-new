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

    <script src="https://unpkg.com/feather-icons"></script>
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
    <!-- Page Title -->
    <title>Vrexx | @yield('title')</title>
</head>


<body>
    @yield('content')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ url('/assets/js/theme.bundle.js') }}"></script>
    <script src="{{ url('/assets/js/script.js') }}"></script>

    <script>
        feather.replace();
    </script>
</body>

</html>
