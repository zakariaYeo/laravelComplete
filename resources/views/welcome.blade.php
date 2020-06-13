@extends('layouts.app')
@section('title','Home')
@section('content')
<div style="background: url('./img/welcome/bg.jpg') 50% 50% no-repeat; height: 600px; width:100%; background-repeat: no-repeat; background-size: cover; background-position: center center; overflow: hidden; clip-path : polygon(0 0,100% 0,100% 100%,0 85%);
">
    <div class="text-center" style="color:#ddd; padding:60px;">
        <h1 class="display-1">11InCercle</h1>
        <h3 class="lead display-4">Apprenez à coder très très facilement et à votre rythme.</h3>
        <br/>
        <p class="text-center">
            <button type="button" class="btn btn-lg btn btn-outline-light" href="#">Choisir une formation <i
                    class="fas fa-mouse ml-sm-2"></i></button>
        </p>
    </div>
</div>
{{-- Card --}}

<div class="containerT">
    <div class="pricing-table table1">
        <div class="pricing-header">
            <div class="price"><img src="./img/YMZ.png" class="rounded-circle mx-auto d-block py-2"
                    style="width: 5.5rem;" alt="..."></div>
            <div class="titleT text-muted">Mes projets</div>
        </div>
        <ul class="pricing-list">
            <li class="text-muted"><i class="fas fa-desktop mr-sm-1"></i>Desktop | <i
                    class="fas fa-globe mr-sm-1"></i>Web</li>
            <div class="borderT"></div>
            <li>
                <p class="text-muted text-center">Vous trouverez dans cette section les différents projets sur
                    lesquelles j'ai travillé, des applications Dekstop et des applications Web.</p>
            </li>
        </ul>
        <a href="{{ route('my_projects') }}"><i class="fas fa-eye mr-sm-1" width="1.3em" height="1.3em"></i>Jeter un
            coup d'oeil</a>
    </div>

    <div class="pricing-table table1">
        <div class="pricing-header">
            <div class="price"><img src="./img/YMZ.png" class="rounded-circle mx-auto d-block py-2"
                    style="width: 5.5rem;" alt="..."></div>
            <div class="titleT text-muted">Quelques idées</div>
        </div>
        <ul class="pricing-list">
            <li class="text-muted"><i class="fas fa-desktop mr-sm-1"></i>Desktop | <i
                    class="fas fa-globe mr-sm-1"></i>Web</li>
            <div class="borderT"></div>
            <li>
                <p class="text-muted text-center">Cette section aborde des sujets futuristes, mes idées de oufs sur des
                    appli que je compte réaliser, j'aurais besoin de vous :).</p>
            </li>
        </ul>
        <a href="#"><i class="fas fa-eye mr-sm-1" width="1.3em" height="1.3em"></i>Jeter un coup d'oeil</a>
    </div>

    <div class="pricing-table table1">
        <div class="pricing-header">
            <div class="price"><img src="./img/YMZ.png" class="rounded-circle mx-auto d-block py-2"
                    style="width: 5.5rem;" alt="..."></div>
            <div class="titleT text-muted">Ma formation</div>
        </div>
        <ul class="pricing-list">
            <li class="text-muted"><i class="fas fa-desktop mr-sm-1"></i>Desktop | <i
                    class="fas fa-globe mr-sm-1"></i>Web</li>
            <div class="borderT"></div>
            <li>
                <p class="text-muted text-center">Vous saurez tout sur ma formation et mes compétences aussi, comment
                    j'ai fait pour arriver à ce niveau et pourquoi.</p>
            </li>
        </ul>
        <a href="#"><i class="fas fa-eye mr-sm-1" width="1.3em" height="1.3em"></i>Jeter un coup d'oeil</a>
    </div>
</div>
@endsection