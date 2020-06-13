@extends('layouts.app')
@section('title','Home')
@section('content')
<div style="background: url('./img/welcome/bg5.png') 50% 50% no-repeat; height: 600px; width:100%; background-repeat: no-repeat; background-size: cover; background-position: center center; overflow: hidden; clip-path : polygon(0 0,100% 0,100% 100%,0 85%);
">
    <div class="row">
        <div class="col-12 col-md-7">

        </div>
        <div class="col-12 col-md-5">
            <div class="container" style="color:#ddd; padding:60px;">
                <h2 class="display-3">Formez-vous<br />à votre rythme</h2>
                <p class="py-2" style="font-weight: 500; font-size:1rem;">Étudiez à tout moment le sujet que
                    vous<br />souhaitez et formez-vous auprès des
                    meilleurs.</p>
                <button type="button" class="btnWhite" href="#">En savoir plus</button>
            </div>

        </div>
    </div>
</div>

{{-- Card --}}

<div class="containerT">
    {{-- <div class="pricing-table table1">
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
    </div> --}}


    <div class="pricing-table table1">
            <div class="pricing-header" style="background: url('./img/formations/_1.jpg') 50% 50% no-repeat; height: 300px; width:100%; background-repeat: no-repeat; background-size: cover; background-position: center center; overflow: hidden;">
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
        <div class="pricing-header" style="background: url('./img/formations/_2.jpg') 50% 50% no-repeat; height: 300px; width:100%; background-repeat: no-repeat; background-size: cover; background-position: center center; overflow: hidden;">
            <div class="titleT text-muted">Quelques idées</div>
        </div>
        <ul class="pricing-list">
            <li class="text-muted"><i class="fas fa-desktop mr-sm-1"></i>Desktop | <i class="fas fa-globe mr-sm-1"></i>Web
            </li>
            <div class="borderT"></div>
            <li>
                <p class="text-muted text-center">Cette section aborde des sujets futuristes, mes idées de oufs sur des
                    appli que je compte réaliser, j'aurais besoin de vous :).</p>
            </li>
        </ul>
        <a href="#"><i class="fas fa-eye mr-sm-1" width="1.3em" height="1.3em"></i>Jeter un coup d'oeil</a>
    </div>

    <div class="pricing-table table1">
        <div class="pricing-header" style="background: url('./img/formations/_3.png') 50% 50% no-repeat; height: 300px; width:100%; background-repeat: no-repeat; background-size: cover; background-position: center center; overflow: hidden;">

            <div class="titleT text-muted">Ma formation</div>
        </div>
        <ul class="pricing-list">
            <li class="text-muted"><i class="fas fa-desktop mr-sm-1"></i>Desktop | <i class="fas fa-globe mr-sm-1"></i>Web
            </li>
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
