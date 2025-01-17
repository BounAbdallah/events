<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            margin: 0px;
        }
        .carousel-item {
            height: 70vh; /* Prendre toute la hauteur de la fenêtre */
        }
        .carousel-item img {
            height: 100%; /* Prendre toute la hauteur de la div parente */
        }
        h3 {
            color: #1E2172;
            text-align: center;
            font-size: 26px;
            font-weight: 700;
            margin-top: 50px;
            margin-bottom: 60px;
        }
        .apropos {
            display: flex;
            justify-content: center;
        }
        .text {
            text-align: center;
            width: 500px;
            height: 500px;
            margin-top: 10px;
            font-size: 20px;
            font-weight: 600;
            margin-left: 120px;
            margin-top: 50px;
        }
        .images {
            display: flex;
        }
        .image1 {
            width: 240px;
            height: 400px;
            margin: 5px;
            margin-top: 60px;
            border-radius: 10px;
        }
        .image2 {
            width: 240px;
            height: 460px;
            margin: 5px;
            border-radius: 10px;
        }
        .image3 {
            width: 240px;
            height: 380px;
            margin: 5px;
            margin-top: 60px;
            border-radius: 10px;
        }
        .card-img-top {
            width: 300px;
            height: 200px;
        }
        .evenements {
            margin: 40px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            gap: 18px;
        }
        .evenement {
            background: rgba(214, 17, 26, 0.05);
            padding-top: 40px;
            padding-bottom: 30px;
        }
        .text {
            display: flex;
            justify-content: right;
            flex-direction: column;
            align-items: start;
            width: 458px;
            height: 363px;
            flex-shrink: 0;
            text-align: right;
            color: var(--couleur-tertiaire, #000);
            text-align: justify;
            font-family: Montserrat;
            font-size: 16px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
            letter-spacing: 0.32px;
        }
        .card {
            width: 400px;
            height: 543px;
            border-radius: 12px;
        }
        .card img {
            width: 400px;
            height: 312px;
            flex-shrink: 0;
        }
        .card-title {
            width: 317px;
            height: 43px;
            background: #D6111A;
            margin-top: -80px;
            margin-left: -25px;
            border-radius: 0px 6px 0px 0px;
            background: #D6111A;
            display: flex;
            width: 317px;
            height: 43px;
            padding: 5px 10px;
            justify-content: center;
            align-items: center;
            gap: 10px;
            flex-shrink: 0;
            color: var(--couleur-primaire, #FFF);
            font-family: Montserrat;
            font-size: 20px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
        }
        .info_detail {
            margin-top: 40px;
            display: flex;
            flex-direction: row;
            gap: 12px;
        }
        .date_evenement {
            color: #1E4C72;
            text-align: center;
            font-family: Montserrat;
            font-size: 24px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
        }
        .info_detail2 {
            overflow: hidden;
            color: var(--Assignment-1-Dark-Grey, #5A5A5A);
            text-overflow: ellipsis;
            font-family: "Open Sans";
            font-size: 18px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
        }
        .event-image {
            width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
        .event-block {
            width: 100px;
            height: 100px;
            background-color: #d9534f;
            margin-bottom: 40px;
            margin-left: -100px;
            border-radius: 10px;
        }
        .content-section {
            margin-top: 50px;
        }
        .offers-title {
            text-align: center;
            font-weight: bold;
            color: #002366;
            margin-bottom: 30px;
        }
        .event-list {
            list-style-type: none;
            padding: 0;
        }
        .event-list li {
            margin-bottom: 10px;
            color: #002366;
            font-weight: bold;
        }
        .offres {
            display: flex;
        }
        .block2 {
            margin-left: -100px;
            margin-top: 80px;
        }
        .block3 {
            margin-left: -100px;
            margin-top: 180px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Accueil</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/">Événements</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile.edit') }}">Profil</a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST" class="nav-link">
                        @csrf
                        <button type="submit" class="btn btn-link">Déconnexion</button>
                    </form>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Connexion</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/1.png') }}" class="d-block w-100" alt="Slide 1">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/2.png') }}" class="d-block w-100" alt="Slide 2">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/4.png') }}" class="d-block w-100" alt="Slide 4">
        </div>
    </div>
</div>

<div class="evenements">
            @foreach($evenements as $evenement)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('images/' . $evenement->image) }}" class="card-img-top" alt="{{ $evenement->nom }}" width="300" height="300">
                    <div class="card-body">
                        <h5 class="card-title">{{ $evenement->nom }}</h5>
                        <div class="info_detail">
                            <div class="date_evenement">
                            <p class="card-text">{{ \Carbon\Carbon::parse($evenement->date_evenement)->translatedFormat('F d') }}</p>
                            </div>
                           <div class="info_detail2">
                           <p class="card-text">{{ $evenement->heure_debut }} - {{ $evenement->heure_fin }}</p>
                            <p class="card-text">{{ $evenement->date_evenement }}</p>
                            <p class="card-text"> {{ $evenement->date_evenement }}</p>
                            <p class="card-text">{{ $evenement->lieu }}</p>
                           </div>
                        </div>
                        <!-- Ajoutez d'autres détails d'événement que vous souhaitez afficher -->
                        <a href="{{ route('event.show', $evenement->id) }}" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>

<script>
    // Optionnel : Pour s'assurer que le carrousel démarre automatiquement au chargement de la page
    $(document).ready(function(){
        $('#carouselExampleControls').carousel({
            interval: 3000
        });
    });
</script>
</body>
</html>
