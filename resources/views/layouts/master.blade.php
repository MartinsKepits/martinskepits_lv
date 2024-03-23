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
        <div class="container-lg px-4">
            <div class="navbar-col-left col-lg-3 col-6">
                <a href="/" class="navbar-logo">
                    <img src="{{ url('storage/images/mk-logo.webp') }}" alt="Martins Kepits website logo" />
                </a>
            </div>

            <div class="navbar-col-center col-lg-6">
                <div class="menu-header px-4">
                    <a href="/" class="menu-logo">
                        <img src="{{ url('storage/images/mk-logo.webp') }}" alt="Martins Kepits website logo" />
                    </a>
                    <div class="navbar-toggle">
                        <div class="line line-1"></div>
                        <div class="line line-transition line-2"></div>
                        <div class="line line-3"></div>
                    </div>
                </div>
                <div class="menu-links px-4 py-5 px-lg-0 py-lg-0">
                    <a href="/" class="menu-link">{{ __('Home') }}</a>
                    <a href="#about-me" class="menu-link">{{ __('About me') }}</a>
                    <a href="#projects" class="menu-link">{{ __('Projects') }}</a>
                    <a href="/contact" class="menu-link">{{ __('Contact') }}</a>
                </div>

                <div class="menu-footer">
                    <a href="tel:+37126984195"><i class="fa-solid fa-phone"></i></a>
                    <a href="mailto:martinskepitslv@gmail.com"><i class="fa-solid fa-envelope"></i></a>
                    <a href="https://www.linkedin.com/in/m%C4%81rti%C5%86%C5%A1-%C4%B7ep%C4%ABts-6a1a85245/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="https://github.com/MartinsKepits" target="_blank"><i class="fa-brands fa-github"></i></a>
                </div>
            </div>

            <div class="navbar-col-right col-lg-3 col-6">
                <a href="/contact" class="contact-me-btn">{{ __('Contact Me') }}</a>
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

    <footer class="footer">
        <img class="footer-bg" src="{{ url('storage/images/footer-bg.webp') }}" alt="">
        <div class="footer-content">
            <div class="container-lg px-4">
                <div class="row footer-row-one">
                    <div class="col-md-8 col-sm-12">
                        <h3 class="footer-heading">{{ __('Let’s Collaborate!') }}</h3>
                        <ul class="footer-contacts">
                            <li class="footer-contact"><a href="mailto:martinskepitslv@gmail.com"><i class="fa-solid fa-envelope"></i>martinskepitslv@gmail.com</a></li>
                            <li class="footer-contact"><a href="tel:+37126984195"><i class="fa-solid fa-phone"></i>+371 26984195</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="footer-social-links">
                            <span class="footer-social-links-heading"><i class="fa-regular fa-paper-plane"></i>{{ __('Follow Me') }}</span>
                            <ul class="footer-social-links">
                                <li><a href="https://github.com/MartinsKepits" target="_blank">Github</a></li>
                                <li><a href="https://www.linkedin.com/in/m%C4%81rti%C5%86%C5%A1-%C4%B7ep%C4%ABts-6a1a85245/" target="_blank">LinkedIn</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-row-two">
                    <button class="back-to-top-btn">{{ __('Back To Top') }}</button>
                </div>
            </div>

            <div class="footer-row-three">
                <div class="container-lg">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <span class="footer-copyright">© 2024 Mārtiņš Ķepīts</span>
                        </div>
                        <div class="footer-menu-col col-lg-6 col-md-12">
                            <div class="footer-menu">
                                <a href="/" class="menu-link">{{ __('Home') }}</a>
                                <a href="#about-me" class="menu-link">{{ __('About me') }}</a>
                                <a href="#projects" class="menu-link">{{ __('Projects') }}</a>
                                <a href="/contact" class="menu-link">{{ __('Contact') }}</a>
                            </div>
                            <div class="navbar-toggle">
                                <div class="line line-1"></div>
                                <div class="line line-transition line-2"></div>
                                <div class="line line-3"></div>
                            </div>
                        </div>
                        <div class="footer-build-by-col col-lg-3 col-6 ">
                            <span class="footer-build-by">{{ __('Build by')}} <span>Mārtiņš Ķepīts</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>