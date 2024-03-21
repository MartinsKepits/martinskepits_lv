<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Styles -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <nav class="navbar navbar-expand-xxl">
        <div class="container-lg">
            <div class="navbar-col-left col-lg-3 col-6">
                <a href="/" class="navbar-logo">
                    <img src="{{ url('storage/images/mk-logo.png') }}" alt="Martins Kepits website logo" />
                </a>
            </div>

            <div class="navbar-col-center col-lg-6">
                <div class="menu-header px-4">
                    <a href="/" class="menu-logo">
                        <img src="{{ url('storage/images/mk-logo.png') }}" alt="Martins Kepits website logo" />
                    </a>
                    <div class="navbar-toggle">
                        <div class="line line-1"></div>
                        <div class="line line-transition line-2"></div>
                        <div class="line line-3"></div>
                    </div>
                </div>
                <div class="menu-links px-4 py-5 px-lg-0 py-lg-0">
                    <a href="#next-section" class="menu-link">{{ __('Home') }}</a>
                    <a href="#about-me" class="menu-link">{{ __('About me') }}</a>
                    <a href="#projects" class="menu-link">{{ __('Projects') }}</a>
                    <a href="#contact" class="menu-link">{{ __('Contact') }}</a>
                </div>

                <div class="menu-footer">
                    <a href="#Phone">Phone</a>
                    <a href="#Email">Email</a>
                    <a href="#LinkedIn">LinkedIn</a>
                    <a href="#Github">Github</a>
                </div>
            </div>

            <div class="navbar-col-right col-lg-3 col-6">
                <a href="#contact" class="contact-me-btn">{{ __('Contact Me') }}</a>
                <div class="navbar-toggle">
                    <div class="line line-1"></div>
                    <div class="line line-transition line-2"></div>
                    <div class="line line-3"></div>
                </div>
            </div>
            <div class="navbar-menu-bg"></div>
        </div>
    </nav>

    <main role="main">
        @yield('content')
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
</body>

</html>