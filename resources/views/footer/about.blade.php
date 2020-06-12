@extends('layouts.app')
@section('title','A propos de moi')
@section('content')
<div class="container py-4">
    <div class="page-header">
        <h1 class="text-center display-5 text-muted"><i class="fas fa-user mr-sm-2"></i>A propos de moi</h1>
    </div>
    <hr class="py-1">
    <div class="row">
        <div class="col-12 col-md-8">
            <div class="cardC">
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p class="text-muted lead text-center">Développeur Web et Deskstop résidant à Abidjan en Côte d'Ivoire.</p>
                        <p class="text-muted lead text-center">Titulaire d'une Licence en Sciences Informatiques option Développement d'applications et Système d'Informations, je suis actuellement un développeur nomade mais je reste à l'écoute d'une
                            bonne opportunité d'emploi <i class="fas fa-smile-wink team"></i></p>
                        <p class="text-muted lead text-center">J'aime bien parler en PHP, Windev, HTML/CSS/JavaScript, C#, SQL, et aujourd'hui avec 11InCercle, mon objectif est de vous aider à découvrir chacune de ces
                            technologies par la pratique.</p>
                    </blockquote>
                    <div class="py-4"></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="cardC">
                <div class="top-section">
                    <img src="./img/avatar.jpg" alt="">
                    <div class="name">
                        Yéo <br>
                        <span>M. Zakaria</span>
                    </div>
                </div>
                <div class="info-section">
                    <div class="ma">
                        <a href="" class="fab fa-facebook-f"></a>
                        <a href="" class="fab fa-twitter"></a>
                        <a href="" class="fab fa-instagram"></a>
                        <a href="" class="fab fa-youtube"></a>
                        <a href="" class="fab fa-whatsapp"></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


@endsection
