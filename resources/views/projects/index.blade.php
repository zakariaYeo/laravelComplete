@extends('layouts.app')
@section('title','Mes projets')
@section('content')
{{-- <div class="container py-4">
    <div class="page-header">
        <h1 class="text-center display-5 text-muted"><i class="fas fa-book mr-sm-2"></i>Mes projets</h1>
    </div>
    <hr class="py-1">
    <div class="row">
        <div class="col-12 col-md-8">
            <div class="card">
                <div class="card-header text-white bg-primary" style="font-size: 1rem;">
                    <i class="fas fa-book mr-sm-1"></i>
                    Mes projets
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p class="text-muted lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna
                            aliqua. Ut enim ad minim
                            veniam, quis .</p>
                    </blockquote>
                    <div class="embed-responsive embed-responsive-16by9 img-thumbnail">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                    </div>
                    <div class="py-4"></div>
                    <div class="card">
                        <div class="card-header">
                            <p class="text-center text-muted lead">Tout le matériel didactique, y compris les vidéos, les exercices et le code source est protégé par le </p>
                            <div class="row">
                                <div class="col-md-6 offset-md-3">
                                    <button type="button" class="btn btn-outline-dark btn-block" style="font-size: 1rem;" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="windev laravel">Mes réalisations<i
                                          class="fas fa-mouse ml-sm-2"></i></button>
                                </div>
                                <div class="row py-3">
                                    <div class="col">
                                        <div class="collapse multi-collapse" id="windev">
                                            <div class="card card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="collapse multi-collapse" id="laravel">
                                            <div class="card card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="cardC">
                <div class="top-section">
                    <img src="./img/avatar.jpg" alt="mon profile">

                    <div class="name">
                        Yéo <br>
                        <span>M. Zakaria</span>
                    </div>
                </div>

                <div class="info-section py-2">
                    <h2>De qui s'agit-il ?
                        <div class="borderC"></div>
                    </h2>
                    <p class="py-3">
                        Développeur Laravel/VueJs,
                        Zakaria est un grand passionné du développement Dekstop & Web.
                    </p>
                </div>
            </div>
            <div class="py-2"></div>
            <div class="card">
                <div class="card-header text-white bg-success" style="font-size: 1rem;">
                    <i class="fas fa-microphone mr-sm-1"></i>
                    Usage personnel
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p class="text-muted lead">Tout le matériel didactique, y compris les vidéos, les exercices et le code source est protégé par le droit d'auteur et est uniquement destiné à un usage individuel. Chaque personne devra donc
                            acheter sa propre copie. Merci pour votre soutien.</p>
                    </blockquote>
                </div>
            </div>
            <div class="py-2"></div>
            <div class="card">
                <div class="card-header text-white bg-success" style="font-size: 1rem;">
                    <i class="fas fa-microphone mr-sm-1"></i>
                    Formation
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p class="text-muted lead">Tout le matériel didactique, y compris les vidéos, les exercices et le code source est protégé par le droit d'auteur et est uniquement destiné à un usage individuel. Chaque personne devra donc
                            acheter sa propre copie. Merci pour votre soutien.</p>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="row">
    <div class="col-12 col-md-6">
        <div class="container">
            <p class="display-3 py-5" style="font-weight:900; color:#0fbcf9;">Vous êtes intéressé par ???</p>
            <hr>

            <p class="h4" style="font-weight: 350">Formez-vous gratuitement avec des teachers compétents prêts à vous
                aider <i class="fas fa-smile-wink" style="color: #0fbcf9;"></i></p>
            <hr>
        </div>
    </div>
    <div class="col-12 col-md-6"
        style="background: url('./img/formations/formations/_1.jpg') no-repeat; height: 400px; width:100%; background-repeat:
                no-repeat; background-size: cover; background-position: center center; overflow: hidden; clip-path : polygon(0 0,100% 0,100% 100%,0 85%);">
    </div>
</div>
<div class="row" style="background:#0fbcf9; color:#fff;height:120px;">
    <div class="col-md-6 offset-md-3 py-5">
        <p style="font-size:15px; font-weight:800">Vous êtes intéressé par ???</p>
    </div>
</div>
<div class="container py-1">
    <p style="font-size: 30px; font-weight:700;">Dans quel domaine souhaitez-vous vous former ?</p>
    <button class="btnF">Développement Backend</button><br>
    <button class="btnF">Développement frontend</button>
    <hr>
</div>
<div class="containerT">
    <div class="pricing-table table1">
        <div class="pricing-header"
            style="background: url('./img/formations/formations/html&css.jpg') 50% 50% no-repeat; height: 200px; width:100%; background-repeat: no-repeat; background-size: cover; background-position: center center; overflow: hidden;">
        </div>
        <ul class="pricing-list">
            <li class="text-muted"><i class="fas fa-globe mr-sm-1"></i>Développement
            </li>
            <div class="borderT"></div>
            <li class="text-muted-bold">Apprenez à créer votre site web avec HTML et CSS
            </li>
        </ul>
        <a href="{{ route('my_projects') }}"><i class="fas fa-eye mr-sm-1" width="1.3em"
                height="1.3em"></i>Commencez</a>
    </div>
    <div class="pricing-table table1">
        <div class="pricing-header"
            style="background: url('./img/formations/formations/javascript.jpg') 50% 50% no-repeat; height: 200px; width:100%; background-repeat: no-repeat; background-size: cover; background-position: center center; overflow: hidden;">
        </div>
        <ul class="pricing-list">
            <li class="text-muted"><i class="fas fa-globe mr-sm-1"></i>Développement
            </li>
            <div class="borderT"></div>
            <li class="text-muted-bold">Apprenez à programmer avec javascript
            </li>
        </ul>
        <a href="{{ route('my_projects') }}"><i class="fas fa-eye mr-sm-1" width="1.3em"
                height="1.3em"></i>Commencez</a>
    </div>
    <div class="pricing-table table1">
        <div class="pricing-header"
            style="background: url('./img/formations/formations/java.jpg') 50% 50% no-repeat; height: 200px; width:100%; background-repeat: no-repeat; background-size: cover; background-position: center center; overflow: hidden;">
        </div>
        <ul class="pricing-list">
            <li class="text-muted"><i class="fas fa-globe mr-sm-1"></i>Développement
            </li>
            <div class="borderT"></div>
            <li class="text-muted-bold">Apprenez à programmer avec java
            </li>
        </ul>
        <a href="{{ route('my_projects') }}"><i class="fas fa-eye mr-sm-1" width="1.3em"
                height="1.3em"></i>Commencez</a>
    </div>
</div>
<div class="containerT">
    <div class="pricing-table table1">
        <div class="pricing-header"
            style="background: url('./img/formations/formations/python.jpg') 50% 50% no-repeat; height: 200px; width:100%; background-repeat: no-repeat; background-size: cover; background-position: center center; overflow: hidden;">
        </div>
        <ul class="pricing-list">
            <li class="text-muted"><i class="fas fa-globe mr-sm-1"></i>Développement
            </li>
            <div class="borderT"></div>
            <li class="text-muted-bold">Apprenez à programmer avec python
            </li>
        </ul>
        <a href="{{ route('my_projects') }}"><i class="fas fa-eye mr-sm-1" width="1.3em"
                height="1.3em"></i>Commencez</a>
    </div>
    <div class="pricing-table table1">
        <div class="pricing-header"
            style="background: url('./img/formations/formations/php-mysql.jpg') 50% 50% no-repeat; height: 200px; width:100%; background-repeat: no-repeat; background-size: cover; background-position: center center; overflow: hidden;">
        </div>
        <ul class="pricing-list">
            <li class="text-muted"><i class="fas fa-globe mr-sm-1"></i>Développement
            </li>
            <div class="borderT"></div>
            <li class="text-muted-bold">Concevez vos sites web avec PHP & MYSQL
            </li>
        </ul>
        <a href="{{ route('my_projects') }}"><i class="fas fa-eye mr-sm-1" width="1.3em"
                height="1.3em"></i>Commencez</a>
    </div>
    <div class="pricing-table table1">
        <div class="pricing-header"
            style="background: url('./img/formations/formations/java.jpg') 50% 50% no-repeat; height: 200px; width:100%; background-repeat: no-repeat; background-size: cover; background-position: center center; overflow: hidden;">
        </div>
        <ul class="pricing-list">
            <li class="text-muted"><i class="fas fa-globe mr-sm-1"></i>Développement
            </li>
            <div class="borderT"></div>
            <li class="text-muted-bold">Apprenez à programmer avec java
            </li>
        </ul>
        <a href="{{ route('my_projects') }}"><i class="fas fa-eye mr-sm-1" width="1.3em"
                height="1.3em"></i>Commencez</a>
    </div>
</div>
</div>
@endsection
