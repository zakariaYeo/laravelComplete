<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', '11InCercle') }} - @yield('title')</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link rel="icon" type="image/png" href="img/icon/YMZ.ico" />
        <link href="https://fonts.googleapis.com/css?family=montserrat" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    </head>

    <body>
        <div id="app">
            <header class="sticky-top">
                <div class="inner-width">
                    <a href="{{ route('welcome') }}" class="logo"><img src="./img/YMZ.png" alt="Logo 11InCercle">
                    </a>
                    <a class="navbar-brand" href="{{ route('welcome') }}"><strong
                            style="color: #0fbcf9;">11</strong>In<strong style="color: #0fbcf9;">C</strong>ercle</a>
                    <i class=" menu-toggle-btn fas fa-bars"></i>
                    </button>
                    <nav class="navigation-menu">
                        <a href="{{ route('welcome') }}">Formations</a>
                        <a href="{{ route('our_services') }}">Nos services</a>
                        <a href="#">A propos</a>
                        <a href="#">Contact</a>
                        <!-- Authentication Links -->
                        @guest
                        <a class="btnLog" href="{{ route('login') }}">{{ __('Se connecter') }}<i
                                class="fas fa fa-sign-in-alt works ml-sm-2"></i></a>
                        @else
                        <a id="navbarDropdown" class="btnLog" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item btnLog" href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();" style="background: #dd4343;">
                                {{ __('Déconnexion') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                        {{-- @endif --}}
                        @endguest
                    </nav>
                </div>
            </header>
            <main class="py-0">
                @yield('content')
            </main>
        </div>
        <div class="row py-5">
            <div class="col-md-6 offset-md-3 mt-3">
                <button type="button" class="btnGreen btn-block" style="font-size: 1rem;">Mon pannel
                    admin<i class="fas fa-smile-wink ml-sm-2"></i></button>
            </div>
        </div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="col-md-2">
                            <img src="./img/YMZ.png" class="rounded-circle mx-auto d-block py-3" style="width: 4rem;"
                                alt="mes projets">
                        </div>
                        <p class="lead"><i class="fas fa-bell mr-sm-2"></i>Recevez toute l'actualité du site dans votre
                            boîte mail</p>
                        <div class="newsletter">
                            <form action="" class="newsletter-form">
                                <input type="email" class="emailInput" placeholder="Email">
                                <input type="submit" class="btnN" value="Envoyer">
                            </form>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <h6>Liens utils</h6>
                        <div class="py-1"></div>
                        <ul class="footer-links">
                            <li><a href="#">Formations</a></li>
                            <li><a href="#">UI Design</a></li>
                            <li><a href="#">PHP</a></li>
                            <li><a href="#">Java</a></li>
                            <li><a href="#">Android</a></li>
                            <li><a href="#">Templates</a></li>
                        </ul>
                    </div>

                    <div class="col-xs-6 col-md-3">
                        <h6>Me contacter</h6>
                        <div class="py-1"></div>
                        <ul class="footer-links">
                            <li><a href="{{ route('about') }}">Fondateur</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#staticBackdrop">Contact</a></li>
                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false"
                                tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true"
                                style="background-color: #2f3640;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <span class="login100-form-avatar">
                                                <img src="./img/YMZ.png" class="rounded-circle mx-auto d-block"
                                                    style="width: 5rem;" alt="mes projets">
                                            </span>
                                            <div class="py-2"></div>
                                            <h1 class="section-title"><strong
                                                    style="color:#0fbcf9; font-size:30px;">11</strong>In<strong
                                                    style="color:#0fbcf9; font-size:30px;">C</strong>ercle</h1>
                                            <div class="borderS"></div>
                                            <div class="container">
                                                <p>
                                                    <strong>Coordonnées</strong> <br />
                                                    Riviéra 3 Nouveau Camp,Cocody<br />
                                                    Abidjan Côte d'Ivoire<br />
                                                    (+225) 59 20 11 58<br />
                                                    <a href="#"><i class="fas fa-envelope team mr-sm-1"></i>Envoyer un
                                                        courriel</a>
                                                </p>
                                                <p>
                                                    <strong>Pour toute information</strong><br />
                                                    <a href="#">hello@11InCercle.org</a><br />
                                                    <a href="#">facebook.com/11InCercle</a><br />
                                                    <a href="#">tweeter.com/11InCercle</a><br />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="login100-form-btn"
                                                data-dismiss="modal">Fermer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <li><a href="{{ route('privacy_policy') }}">Politique de confidentialité</a></li>
                            <li><a href="{{ route('terms_of_use') }}">Conditions d'utilisation</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by
                            <a href="#">Zakaria M. Yeo</a>.
                        </p>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <ul class="social-icons">
                            <div class="middle">
                                <a class="btn1" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn1" href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="btn1" href="#">
                                    <i class="fab fa-google"></i>
                                </a>
                                <a class="btn1" href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn1" href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer -->
        <button id="topBtn"><i class="fas fa-arrow-up"></i></button>

        <script type="text/javascript">
            // Active toogle button navigation
            $(document).ready(function () {
                $(".menu-toggle-btn").click(function () {
                    $(this).toggleClass("fa-times");
                    $(".navigation-menu").toggleClass("active");
                });
            });
            //Send up page
            $(document).ready(function () {
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 500) {
                        $("#topBtn").fadeIn();
                    } else {
                        $("#topBtn").fadeOut();
                    }
                });
                $("#topBtn").click(function () {
                    $('html ,body').animate({
                        scrollTop: 0
                    }, 800);
                });
            });
        </script>
        <script type="text/javascript" src="./js/main.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
        </script>
    </body>

</html>
