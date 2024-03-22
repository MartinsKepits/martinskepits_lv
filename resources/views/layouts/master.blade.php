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

    <footer class="footer">
        <img class="footer-bg" src="{{ url('storage/images/footer-bg.png') }}" alt="">
        <div class="footer-content">
            <div class="container-lg">
                <div class="row footer-row-one">
                    <div class="col-md-8 col-sm-12">
                        <h3 class="footer-heading">{{ __('Let’s Collaborate!') }}</h3>
                        <ul class="footer-contacts">
                            <li class="footer-contact"><a href=""><img src="{{ url('storage/images/email.png') }}" />martinskepitslv@gmail.com</a></li>
                            <li class="footer-contact"><a href=""><img src="{{ url('storage/images/phone.png') }}" />+371 26984195</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="footer-social-links">
                            <span class="footer-social-links-heading"><img src="{{ url('storage/images/plane.png') }}" />{{ __('Follow Me') }}</span>
                            <ul class="footer-social-links">
                                <li><a href="">Github</a></li>
                                <li><a href="">LinkedIn</a></li>
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
                                <a href="#next-section" class="menu-link">{{ __('Home') }}</a>
                                <a href="#about-me" class="menu-link">{{ __('About me') }}</a>
                                <a href="#projects" class="menu-link">{{ __('Projects') }}</a>
                                <a href="#contact" class="menu-link">{{ __('Contact') }}</a>
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

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
</body>

</html>