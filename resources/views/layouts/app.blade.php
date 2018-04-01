<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="../assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        {{-- THESE ARE 2 IMPORTNT TO GET CSRF TOKEN ERROR SOLVED! --}}
            <meta name="csrf-token" content="{{ csrf_token()}}">
            <script>window.Laravel = { csrfToken: '{{ csrf_token()}}'}</script>
        <title>Laravue application - laravel exploring with LuckyGiga</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
        <!-- CSS Files -->
        <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="./assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
        {{--  <link href="{{ asset('css/app.css') }}" rel="stylesheet">  --}}
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="./assets/css/demo.css" rel="stylesheet" />
    </head>
    <body>

    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="350">
        <div class="container">
            <div class="dropdown button-dropdown">
                <a href="#" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                    <span class="button-bar"></span>
                    <span class="button-bar"></span>
                    <span class="button-bar"></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-header">Dropdown header</a>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">One more separated link</a>
                </div>
            </div>
            <div class="navbar-translate">
                <a class="navbar-brand" href="/" rel="tooltip" title="Adapted & coded by LuckyGiga.com" data-placement="bottom">
                    Laravue
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Main Page</a></li>
                    @if (Route::has('login'))
                            @auth
                                <li class="nav-item"><a href="{{ url('/home') }}" class="nav-link">Home</a></li>
                            @else
                                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                            @endauth
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="http://luckygiga.com" target="_blank">Visit our website</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/LuckyGiga/Laravue" target="_blank">Github</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/KLukiyan" target="_blank">
                            <i class="fa fa-twitter"></i>
                            <p class="d-lg-none d-xl-none">Twitter</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/LuckyGigaPrague" target="_blank">
                            <i class="fa fa-facebook-square"></i>
                            <p class="d-lg-none d-xl-none">Facebook</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/kiril.lukiyan/" target="_blank">
                            <i class="fa fa-instagram"></i>
                            <p class="d-lg-none d-xl-none">Instagram</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper">
        <div class="page-header page-header-small">
                <div class="page-header-image" data-parallax="true" style="background-image: url('../assets/img/bg6.jpg');">
                </div>
                <div class="container">
                    <div class="content-center">
                        <h1 class="title">The power of Laravel + Vue</h1>
                        <div class="text-center">
                            <a href="https://www.facebook.com/LuckyGigaPrague" target="_blank" class="btn btn-primary btn-icon btn-round">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a href="https://twitter.com/KLukiyan" target="_blank" class="btn btn-primary btn-icon btn-round">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="http://luckygiga.com" target="_blank" class="btn btn-primary btn-icon btn-round">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    @yield('content')

        <footer class="footer footer-default">
            <div class="container">
                <nav>
                    <ul>
                        <li>
                            <a href="http://luckygiga.com">
                                LuckyGiga
                            </a>
                        </li>
                        <li>
                            <a href="http://luckygiga.com">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://luckygiga.com">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Designed by
                    <a href="creative-tim.com" target="_blank">Creative Team</a>. Coded by
                    <a href="http://luckygiga.com" target="_blank">LuckyGiga</a>.
                </div>
            </div>
        </footer>
    </div>
    </body>


    <!--   Core JS Files   -->
        <script src="./assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
        <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
        <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
        <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
        <script src="./assets/js/plugins/bootstrap-switch.js"></script>
        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
        <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
        <script src="./assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
        <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
        <script src="./assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                // the body of this function is in assets/js/now-ui-kit.js
                nowuiKit.initSliders();
            });

            function scrollToDownload() {

                if ($('.section-download').length != 0) {
                    $("html, body").animate({
                        scrollTop: $('.section-download').offset().top
                    }, 1000);
                }
            }
        </script>
        <script src="{{ asset('js/app.js')}}"></script>


</html>
