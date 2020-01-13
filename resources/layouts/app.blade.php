<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MaSanté</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="icon" href="img2/favicon.png">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css2/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('css2/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('css2/owl.carousel.min.css')}}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{asset('css2/themify-icons.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('css2/flaticon.css')}}">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="{{asset('css2/magnific-popup.css')}}">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="{{asset('css2/nice-select.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('css2/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('css2/style.css')}}">
    <link rel="stylesheet" href="{{asset('css2/app.css')}}">
    <!-- Styles -->
    <link href="{{ asset('app.css') }}" rel="stylesheet">
    <link href="{{ asset('img2') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="#"> <img src="img2/logo2.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent" >
                            @if (Route::has('login'))
                            <ul class="navbar-nav align-items-center">
                            @auth
                            <a href="{{ url('/home') }}" class="nav-link">Home</a>
                            @else
                                <li class="nav-item active">
                                    <a class="nav-link" href="">Acceuil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">A propos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login-medecin') }}">Medecin</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Patients
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('login') }}">Connexion</a>
                                        <a class="dropdown-item" href="{{ route('register') }}">Inscription</a>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#comment">Contact</a>
                                </li>
                                <li class="d-none d-lg-block">
                                    <a class="btn_1" href="#">learn more</a>
                                </li>
                                @endauth
                            </ul>
                            @endif
                        </div>


                    </nav>
                </div>
            </div>
        </div>
    </header>

        <main class="py-4" style="margin-top: 50px;">
            @yield('content')
        </main>
    </div>

    <script src="{{asset('js2/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('js2/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('js2/bootstrap.min.js')}}"></script>
    <!-- easing js -->
    <script src="{{asset('js2/jquery.magnific-popup.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('js2/swiper.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('js2/masonry.pkgd.js')}}"></script>
    <!-- particles js -->
    <script src="{{asset('js2/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js2/jquery.nice-select.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('js2/slick.min.js')}}"></script>
    <script src="{{asset('js2/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js2/waypoints.min.js')}}"></script>
    <!-- contact js -->
    <script src="{{asset('js2/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('js/jquery.form.js')}}"></script>
    <script src="{{asset('js2/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js2/mail-script.js')}}"></script>
    <script src="{{asset('js2/contact.js')}}"></script>
    <!-- custom js -->
    <script src="{{asset('js2/custom.js')}}"></script>
    <script src="{{asset('js2/app.js')}}"></script>
</body>
</html>
