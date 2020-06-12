<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '11InCercle') }} - Login</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>

    <!-- Styles -->
    <link rel="icon" type="image/png" href="img/icon/YMZ.ico" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/util.css') }}" rel="stylesheet">
</head>

<body>
    <div class="limiter py-4">
        <div class="container">
            <div class="container-login100">
                <div class="wrap-login100 py-3">
                    <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                        @csrf
                        <span class="login100-form-avatar">
                            <a href="{{ url('/') }}"><img src="./img/YMZ.png" alt="Logo">
                            </a>
                        </span>
                        <div class="py-1"></div>
                        <span class="login100-form-title">
                          <strong style="color: #0fbcf9;">11</strong>In<strong style="color: #0fbcf9;">C</strong>ercle
                            <p class="text-muted py-2">Connectez-vous afin d'accéder à vos cours</p>
                        </span>
                        <div class="wrap-input100 validate-input py-1">
                            <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Adresse Email" required autocomplete="email" autofocus>
                            <span class="focus-input100"></span>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="py-3"></div>

                        <div class="wrap-input100 validate-input py-1">
                            <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" placeholder="Mot de passe" required autocomplete="current-password">
                            <span class="focus-input100"></span>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="py-2"></div>
                        <ul class="login-more py-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="txt1" for="remember">
                                    {{ __('Se souvenir de moi') }}
                                </label>
                            </div>
                        </ul>

                        <div class="container-login100-form-btn">
                            <button type="submit" class="login100-form-btn">
                                {{ __('Se connecter') }}
                            </button>
                        </div>
                        <div class="py-2"></div>
                        <ul class="login-more py-2">
                            @if (Route::has('password.request'))
                            <li class="m-b-8">
                                <span class="txt1">
                                    Oublié
                                </span>
                                <a href="{{ route('password.request') }}" class="txt2">
                                    {{ __('Email / Mot de passe ?') }}
                                </a>
                            </li>
                            @endif
                            <li>
                                <span class="txt1">
                                    Vous n'avez pas de compte?
                                </span>

                                <a href="{{ route('register') }}" class="txt2">
                                    {{ __('Inscrivez-vous') }}
                                </a>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="dropDownSelect1"></div>
    </div>
    </div>
    <link href="{{ asset('js/main.js') }}" rel="stylesheet">
</body>

</html>
