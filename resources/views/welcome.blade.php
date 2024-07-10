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
        body{
            margin: 0px;

        }
        .carousel-item {
            height: 70vh; /* Prendre toute la hauteur de la fenêtre */
        }
        .carousel-item img {
            height: 100%; /* Prendre toute la hauteur de la div parente */
        
        }
        h3{
                color: #1E2172;
                text-align: center;
                font-size: 26px;
                font-weight: 700;
                margin-top: 50px;
                margin-bottom: 60px;
            }
        .apropos{
            display: flex;
            justify-content: center;
            /* margin-left: 220px;
            margin-right: 100px; */

            .text{
            text-align: center;
            width: 500px;
            height: 500px;
            margin-top: 10px;
            font-size: 20px;
            font-weight: 600;
            margin-left: 120px;
            margin-top: 50px;
        }
        }
        .images{
          display: flex;
        }
        .image1{
           width: 240px;
           height: 400px;
           margin: 5px;
           margin-top: 60px;
           border-radius: 10px;
        }
        .image2{
           width: 240px;
           height: 460px;
           margin: 5px;
           border-radius: 10px;
        }
        .image3{
           width: 240px;
           height: 380px;
           margin: 5px;
           margin-top: 60px;
           border-radius: 10px;
        }
.card-img-top{
    width: 300px;
    height: 200px;
}
.evenements{
    margin: 40px;
    display: flex;
    flex-direction: row;
    /* flex-wrap: wrap; */
    justify-content: center;
    gap: 18px;

}
.evenement{
    background: rgba(214, 17, 26, 0.05);
    padding-top:40px;
    padding-bottom: 30px;
}
.text{
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
.card{
    width: 400px;
height: 543px;
border-radius: 12px;
}
.card img{
    width: 400px;
height: 312px;
flex-shrink: 0;
}
.card-title{
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

/* Assignment 1/Small Title */
font-family: Montserrat;
font-size: 20px;
font-style: normal;
font-weight: 600;
line-height: normal;
}
.info_detail{
    margin-top: 40px;
    display: flex;
    flex-direction: row;
    gap: 12px;
}
.date_evenement{
    color: #1E4C72;
text-align: center;
font-family: Montserrat;
font-size: 24px;
font-style: normal;
font-weight: 600;
line-height: normal;
}
.info_detail2{
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
        .offres{
            display: flex;
        }
        .block2{
            margin-left: -100px;
            margin-top: 80px;
        }
        .block3{
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
        <a class="navbar-brand" href="{{ route('user.events') }}">Événements</a>
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

    <section>
    <h3>A propos de nous</h3>
      <div class="apropos">
        <div class="images">
          <div ><img src="{{ asset('images/Rectangle 65.png') }}" alt=""class="image1"> </div>

          <div ><img src="{{ asset('images/Rectangle 66.png') }}" alt=""class="image2">  </div>

          <div><img src="{{ asset('images/Rectangle 67.png') }}" alt=""class="image3">  </div>
        </div>
        <div class="text">
          <p>Notre société vise à rassembler tout ce dont vous avez besoin en un seul endroit.</p>
          <p>Vous souhaitez vous convertir à un nouveau métier ? Vous voulez vous détendre ? Trouver des événements qui vous intéressent, qui sucitent votre curiosité ? Vous êtes au bon endroit.</p>
          <p>Notre société vise à rassembler tout ce dont vous avez besoin en un seul endroit.</p>
          <p>Vous souhaitez vous convertir à un nouveau métier ? Vous voulez vous détendre ? Trouver des événements qui vous intéressent, qui sucitent votre curiosité ? Vous êtes au bon endroit.</p>
        </div>
      </div>
    </section>

    <section class="evenement">
        <h3>Événements à venir</h3>
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
    </section>

    <div class="container content-section">
        <h2 class="offers-title">Nos Offres</h2>
        <div class="row offres">
            <div class="col-md-3 block1">
            <div class="event-block"></div>
                <img src=" {{asset('images/Rectangle 50.png')}}" alt="">
                <img src=" {{asset('images/Rectangle 50.png')}}" alt="">
                <img src=" {{asset('images/Rectangle 51.png')}}" alt="">
                <img src=" {{asset('images/Rectangle 52.png')}}" alt="">
            </div>
            <div class="col-md-3 block2">
            <img src=" {{asset('images/Rectangle 54.png')}}" alt="">
                <img src=" {{asset('images/Rectangle 55.png')}}" alt="">
                <img src=" {{asset('images/Rectangle 56.png')}}" alt="">
            </div>
            <div class="col-md-3 block3">
            <img src=" {{asset('images/Rectangle 57.png')}}" alt="">
                <img src=" {{asset('images/Rectangle 58.png')}}" alt="">
                <img src=" {{asset('images/Rectangle 52.png')}}" alt="">
            </div>
            <div class="col-md-3">
                <h4>Des événements sur :</h4>
                <ul class="event-list">
                    <li>La prise de parole en public</li>
                    <li>La maîtrise de l’art</li>
                    <li>Ateliers Culturels</li>
                    <li>L’essor de la technologie</li>
                    <li>Comment faire partie du progrès</li>
                </ul>
            </div>
        </div>
    </div>

    <section>
        <h3>Association</h3>
        <div class="eventContainer">
    @foreach($evenements as $evenement)

        <div class="cardEvent">
            <div class="imgPartie">
            <img src="{{ asset('images/' . $evenement->image) }}" class="card-img-top" alt="{{ $evenement->nom }}" width="300" height="300">
            </div>
            <div class="contenue">
                <div class="titre">
                    <h3>{{ $evenement->nom }} </h3>
                </div>
                <div class="details">
                    <div class="dateHeure">
                        <div class="date">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="25" viewBox="0 0 21 25" fill="none"><mask id="mask0_386_645" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="21" height="25"><rect width="20.1437" height="25" fill="#D9D9D9"/></mask><g mask="url(#mask0_386_645)"><path d="M4.19662 22.9162C3.73499 22.9162 3.33981 22.7122 3.01108 22.3042C2.68234 21.8962 2.51797 21.4057 2.51797 20.8328V6.24949C2.51797 5.67657 2.68234 5.18612 3.01108 4.77814C3.33981 4.37015 3.73499 4.16616 4.19662 4.16616H5.03594V2.08282H6.71459V4.16616H13.4292V2.08282H15.1078V4.16616H15.9471C16.4088 4.16616 16.8039 4.37015 17.1327 4.77814C17.4614 5.18612 17.6258 5.67657 17.6258 6.24949V20.8328C17.6258 21.4057 17.4614 21.8962 17.1327 22.3042C16.8039 22.7122 16.4088 22.9162 15.9471 22.9162H4.19662ZM4.19662 20.8328H15.9471V10.4162H4.19662V20.8328ZM4.19662 8.33282H15.9471V6.24949H4.19662V8.33282ZM10.0719 14.5828C9.83407 14.5828 9.63473 14.483 9.47386 14.2833C9.31299 14.0837 9.23256 13.8363 9.23256 13.5412C9.23256 13.246 9.31299 12.9986 9.47386 12.799C9.63473 12.5993 9.83407 12.4995 10.0719 12.4995C10.3097 12.4995 10.509 12.5993 10.6699 12.799C10.8308 12.9986 10.9112 13.246 10.9112 13.5412C10.9112 13.8363 10.8308 14.0837 10.6699 14.2833C10.509 14.483 10.3097 14.5828 10.0719 14.5828ZM6.71459 14.5828C6.47678 14.5828 6.27744 14.483 6.11657 14.2833C5.9557 14.0837 5.87527 13.8363 5.87527 13.5412C5.87527 13.246 5.9557 12.9986 6.11657 12.799C6.27744 12.5993 6.47678 12.4995 6.71459 12.4995C6.9524 12.4995 7.15174 12.5993 7.31261 12.799C7.47348 12.9986 7.55391 13.246 7.55391 13.5412C7.55391 13.8363 7.47348 14.0837 7.31261 14.2833C7.15174 14.483 6.9524 14.5828 6.71459 14.5828ZM13.4292 14.5828C13.1914 14.5828 12.992 14.483 12.8312 14.2833C12.6703 14.0837 12.5898 13.8363 12.5898 13.5412C12.5898 13.246 12.6703 12.9986 12.8312 12.799C12.992 12.5993 13.1914 12.4995 13.4292 12.4995C13.667 12.4995 13.8663 12.5993 14.0272 12.799C14.1881 12.9986 14.2685 13.246 14.2685 13.5412C14.2685 13.8363 14.1881 14.0837 14.0272 14.2833C13.8663 14.483 13.667 14.5828 13.4292 14.5828ZM10.0719 18.7495C9.83407 18.7495 9.63473 18.6497 9.47386 18.45C9.31299 18.2504 9.23256 18.003 9.23256 17.7078C9.23256 17.4127 9.31299 17.1653 9.47386 16.9656C9.63473 16.766 9.83407 16.6662 10.0719 16.6662C10.3097 16.6662 10.509 16.766 10.6699 16.9656C10.8308 17.1653 10.9112 17.4127 10.9112 17.7078C10.9112 18.003 10.8308 18.2504 10.6699 18.45C10.509 18.6497 10.3097 18.7495 10.0719 18.7495ZM6.71459 18.7495C6.47678 18.7495 6.27744 18.6497 6.11657 18.45C5.9557 18.2504 5.87527 18.003 5.87527 17.7078C5.87527 17.4127 5.9557 17.1653 6.11657 16.9656C6.27744 16.766 6.47678 16.6662 6.71459 16.6662C6.9524 16.6662 7.15174 16.766 7.31261 16.9656C7.47348 17.1653 7.55391 17.4127 7.55391 17.7078C7.55391 18.003 7.47348 18.2504 7.31261 18.45C7.15174 18.6497 6.9524 18.7495 6.71459 18.7495ZM13.4292 18.7495C13.1914 18.7495 12.992 18.6497 12.8312 18.45C12.6703 18.2504 12.5898 18.003 12.5898 17.7078C12.5898 17.4127 12.6703 17.1653 12.8312 16.9656C12.992 16.766 13.1914 16.6662 13.4292 16.6662C13.667 16.6662 13.8663 16.766 14.0272 16.9656C14.1881 17.1653 14.2685 17.4127 14.2685 17.7078C14.2685 18.003 14.1881 18.2504 14.0272 18.45C13.8663 18.6497 13.667 18.7495 13.4292 18.7495Z" fill="#CE0033"/></g></svg>
                        <span>{{$evenement->date_evenement}}</span>
                        </div>
                        <div class="heure">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="25" viewBox="0 0 21 25" fill="none"><mask id="mask0_386_648" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="21" height="25"><rect width="20.1437" height="25" fill="#D9D9D9"/></mask><g mask="url(#mask0_386_648)"> <path d="M10.0719 22.9163C9.02273 22.9163 8.04002 22.6689 7.12376 22.1741C6.2075 21.6793 5.41014 21.0109 4.73169 20.1689C4.05324 19.3269 3.51467 18.3373 3.11599 17.2001C2.71731 16.063 2.51798 14.8433 2.51798 13.5413C2.51798 12.2392 2.71731 11.0196 3.11599 9.88241C3.51467 8.74525 4.05324 7.75567 4.73169 6.91366C5.41014 6.07164 6.2075 5.40324 7.12376 4.90845C8.04002 4.41366 9.02273 4.16626 10.0719 4.16626C11.121 4.16626 12.1037 4.41366 13.02 4.90845C13.9363 5.40324 14.7336 6.07164 15.4121 6.91366C16.0905 7.75567 16.6291 8.74525 17.0278 9.88241C17.4264 11.0196 17.6258 12.2392 17.6258 13.5413C17.6258 14.8433 17.4264 16.063 17.0278 17.2001C16.6291 18.3373 16.0905 19.3269 15.4121 20.1689C14.7336 21.0109 13.9363 21.6793 13.02 22.1741C12.1037 22.6689 11.121 22.9163 10.0719 22.9163ZM12.422 17.9163L13.597 16.4579L10.9112 13.1246V8.33293H9.23256V13.9579L12.422 17.9163ZM4.70021 2.44751L5.87527 3.90584L2.30814 8.33293L1.13309 6.87459L4.70021 2.44751ZM15.4435 2.44751L19.0107 6.87459L17.8356 8.33293L14.2685 3.90584L15.4435 2.44751ZM10.0719 20.8329C11.7086 20.8329 13.0969 20.1255 14.237 18.7105C15.3771 17.2956 15.9471 15.5725 15.9471 13.5413C15.9471 11.51 15.3771 9.78692 14.237 8.37199C13.0969 6.95706 11.7086 6.24959 10.0719 6.24959C8.4352 6.24959 7.04682 6.95706 5.90674 8.37199C4.76666 9.78692 4.19662 11.51 4.19662 13.5413C4.19662 15.5725 4.76666 17.2956 5.90674 18.7105C7.04682 20.1255 8.4352 20.8329 10.0719 20.8329Z" fill="#CE0033"/></g></svg>
                        <span>{{$evenement->heure_debut}} -{{$evenement->heure_fin}}</span>
                        </div>
                    </div>
                    <div class="lieuBillet">
                        <div class="lieu">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="25" viewBox="0 0 21 25" fill="none"><mask id="mask0_386_651" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="21" height="25"><rect width="20.1437" height="25" fill="#D9D9D9"/></mask><g mask="url(#mask0_386_651)"><path d="M10.0719 22.9162C8.9108 22.9162 7.81968 22.6427 6.7985 22.0958C5.77733 21.549 4.88904 20.8068 4.13365 19.8693C3.37826 18.9318 2.78025 17.8294 2.3396 16.562C1.89896 15.2946 1.67863 13.9405 1.67863 12.4995C1.67863 11.0585 1.89896 9.70435 2.3396 8.43699C2.78025 7.16963 3.37826 6.0672 4.13365 5.1297C4.88904 4.1922 5.77733 3.45001 6.7985 2.90314C7.81968 2.35626 8.9108 2.08282 10.0719 2.08282C11.2329 2.08282 12.324 2.35626 13.3452 2.90314C14.3664 3.45001 15.2547 4.1922 16.0101 5.1297C16.7655 6.0672 17.3635 7.16963 17.8041 8.43699C18.2448 9.70435 18.4651 11.0585 18.4651 12.4995C18.4651 13.9405 18.2448 15.2946 17.8041 16.562C17.3635 17.8294 16.7655 18.9318 16.0101 19.8693C15.2547 20.8068 14.3664 21.549 13.3452 22.0958C12.324 22.6427 11.2329 22.9162 10.0719 22.9162ZM10.0719 18.2287C10.7014 17.4474 11.2609 16.6401 11.7505 15.8068C12.1702 15.095 12.5549 14.3137 12.9046 13.463C13.2543 12.6123 13.4292 11.7703 13.4292 10.937C13.4292 9.79116 13.1004 8.81026 12.4429 7.99428C11.7855 7.17831 10.9951 6.77032 10.0719 6.77032C9.14861 6.77032 8.35824 7.17831 7.70078 7.99428C7.04331 8.81026 6.71457 9.79116 6.71457 10.937C6.71457 11.7703 6.88943 12.6123 7.23915 13.463C7.58887 14.3137 7.97355 15.095 8.39322 15.8068C8.88282 16.6401 9.44237 17.4474 10.0719 18.2287ZM10.0719 12.4995C9.72214 12.4995 9.42488 12.3476 9.18008 12.0438C8.93528 11.7399 8.81288 11.371 8.81288 10.937C8.81288 10.503 8.93528 10.134 9.18008 9.83022C9.42488 9.5264 9.72214 9.37449 10.0719 9.37449C10.4216 9.37449 10.7188 9.5264 10.9636 9.83022C11.2084 10.134 11.3308 10.503 11.3308 10.937C11.3308 11.371 11.2084 11.7399 10.9636 12.0438C10.7188 12.3476 10.4216 12.4995 10.0719 12.4995Z" fill="#CE0033"/></g></svg>
                        <span>{{$evenement->lieu}}</span>
                        </div>
                        <div class="billet">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="25" viewBox="0 0 19 25" fill="none"><path d="M5.23077 17.2152C4.86026 17.2152 4.54968 17.1107 4.29904 16.9016C4.0484 16.6925 3.92308 16.4334 3.92308 16.1243V13.9425C4.29359 13.9425 4.60417 13.8379 4.85481 13.6288C5.10545 13.4197 5.23077 13.1607 5.23077 12.8516C5.23077 12.5425 5.10545 12.2834 4.85481 12.0743C4.60417 11.8652 4.29359 11.7607 3.92308 11.7607V9.57884C3.92308 9.26974 4.0484 9.01065 4.29904 8.80156C4.54968 8.59247 4.86026 8.48793 5.23077 8.48793H13.0769C13.4474 8.48793 13.758 8.59247 14.0087 8.80156C14.2593 9.01065 14.3846 9.26974 14.3846 9.57884V11.7607C14.0141 11.7607 13.7035 11.8652 13.4529 12.0743C13.2022 12.2834 13.0769 12.5425 13.0769 12.8516C13.0769 13.1607 13.2022 13.4197 13.4529 13.6288C13.7035 13.8379 14.0141 13.9425 14.3846 13.9425V16.1243C14.3846 16.4334 14.2593 16.6925 14.0087 16.9016C13.758 17.1107 13.4474 17.2152 13.0769 17.2152H5.23077ZM9.15385 15.5788C9.32821 15.5788 9.48077 15.5243 9.61154 15.4152C9.74231 15.3061 9.80769 15.1788 9.80769 15.0334C9.80769 14.8879 9.74231 14.7607 9.61154 14.6516C9.48077 14.5425 9.32821 14.4879 9.15385 14.4879C8.97949 14.4879 8.82692 14.5425 8.69615 14.6516C8.56539 14.7607 8.5 14.8879 8.5 15.0334C8.5 15.1788 8.56539 15.3061 8.69615 15.4152C8.82692 15.5243 8.97949 15.5788 9.15385 15.5788ZM9.15385 13.397C9.32821 13.397 9.48077 13.3425 9.61154 13.2334C9.74231 13.1243 9.80769 12.997 9.80769 12.8516C9.80769 12.7061 9.74231 12.5788 9.61154 12.4697C9.48077 12.3607 9.32821 12.3061 9.15385 12.3061C8.97949 12.3061 8.82692 12.3607 8.69615 12.4697C8.56539 12.5788 8.5 12.7061 8.5 12.8516C8.5 12.997 8.56539 13.1243 8.69615 13.2334C8.82692 13.3425 8.97949 13.397 9.15385 13.397ZM9.15385 11.2152C9.32821 11.2152 9.48077 11.1607 9.61154 11.0516C9.74231 10.9425 9.80769 10.8152 9.80769 10.6697C9.80769 10.5243 9.74231 10.397 9.61154 10.2879C9.48077 10.1788 9.32821 10.1243 9.15385 10.1243C8.97949 10.1243 8.82692 10.1788 8.69615 10.2879C8.56539 10.397 8.5 10.5243 8.5 10.6697C8.5 10.8152 8.56539 10.9425 8.69615 11.0516C8.82692 11.1607 8.97949 11.2152 9.15385 11.2152ZM2.61538 24.8516C1.89615 24.8516 1.28045 24.6379 0.768269 24.2107C0.25609 23.7834 0 23.2697 0 22.6697V3.03338C0 2.43338 0.25609 1.91974 0.768269 1.49247C1.28045 1.0652 1.89615 0.851562 2.61538 0.851562H15.6923C16.4115 0.851562 17.0272 1.0652 17.5394 1.49247C18.0516 1.91974 18.3077 2.43338 18.3077 3.03338V22.6697C18.3077 23.2697 18.0516 23.7834 17.5394 24.2107C17.0272 24.6379 16.4115 24.8516 15.6923 24.8516H2.61538ZM2.61538 21.5788V22.6697H15.6923V21.5788H2.61538ZM2.61538 19.397H15.6923V6.30611H2.61538V19.397ZM2.61538 4.12429H15.6923V3.03338H2.61538V4.12429Z" fill="#CE0033"/></svg>
                            <span>{{$evenement->nombre_places}}</span>
                        </div>
                    </div>
                    <div class="association">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="25" viewBox="0 0 23 25" fill="none"><mask id="mask0_386_654" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="23" height="25"><rect width="23" height="25" fill="#D9D9D9"/></mask><g mask="url(#mask0_386_654)"><path d="M8.38542 23.359C7.65069 23.359 6.99184 23.1507 6.40885 22.734C5.82587 22.3174 5.37465 21.7445 5.05521 21.0153C4.79965 21.3799 4.47622 21.662 4.0849 21.8617C3.69358 22.0613 3.29028 22.1611 2.875 22.1611C2.06042 22.1611 1.3776 21.8573 0.826562 21.2497C0.275521 20.642 0 19.9042 0 19.0361C0 18.2896 0.223611 17.6169 0.670833 17.0179C1.11806 16.4189 1.68507 16.0761 2.37188 15.9893C2.14826 15.642 1.97656 15.2731 1.85677 14.8825C1.73698 14.4919 1.67708 14.0795 1.67708 13.6455C1.67708 12.9511 1.8408 12.3 2.16823 11.6924C2.49566 11.0847 2.95486 10.59 3.54583 10.208C3.62569 10.5205 3.73351 10.8547 3.86927 11.2106C4.00503 11.5665 4.16076 11.8747 4.33646 12.1351C4.11285 12.3261 3.93715 12.5561 3.80938 12.8252C3.6816 13.0943 3.61771 13.3764 3.61771 13.6715C3.61771 14.6438 3.98507 15.2427 4.71979 15.4684C5.45451 15.6941 6.14931 15.8764 6.80417 16.0153L7.25938 16.8486C7.08368 17.4042 6.93194 17.8773 6.80417 18.2679C6.67639 18.6585 6.6125 19.0101 6.6125 19.3226C6.6125 19.8434 6.7842 20.2992 7.1276 20.6898C7.47101 21.0804 7.89028 21.2757 8.38542 21.2757C8.99236 21.2757 9.49549 20.9806 9.89479 20.3903C10.2941 19.8 10.6215 19.1056 10.8771 18.307C11.1326 17.5084 11.3283 16.7011 11.4641 15.8851C11.5998 15.0691 11.7076 14.4441 11.7875 14.0101L13.6562 14.557C13.5125 15.3382 13.3368 16.2323 13.1292 17.2393C12.9215 18.2462 12.63 19.2054 12.2547 20.1169C11.8793 21.0283 11.3842 21.7965 10.7693 22.4215C10.1543 23.0465 9.35972 23.359 8.38542 23.359ZM2.875 20.0778C3.14653 20.0778 3.37413 19.978 3.55781 19.7783C3.74149 19.5787 3.83333 19.3313 3.83333 19.0361C3.83333 18.741 3.74149 18.4936 3.55781 18.2939C3.37413 18.0943 3.14653 17.9945 2.875 17.9945C2.60347 17.9945 2.37587 18.0943 2.19219 18.2939C2.00851 18.4936 1.91667 18.741 1.91667 19.0361C1.91667 19.3313 2.00851 19.5787 2.19219 19.7783C2.37587 19.978 2.60347 20.0778 2.875 20.0778ZM9.67917 15.9632C8.94444 15.2514 8.2776 14.5873 7.67865 13.971C7.07969 13.3547 6.56458 12.7558 6.13333 12.1742C5.70208 11.5926 5.37066 11.011 5.13906 10.4294C4.90747 9.84776 4.79167 9.24447 4.79167 8.61947C4.79167 7.49099 5.14705 6.54047 5.85781 5.7679C6.56858 4.99533 7.44306 4.60905 8.48125 4.60905C8.54514 4.60905 8.60104 4.61339 8.64896 4.62207C8.69688 4.63075 8.75278 4.63509 8.81667 4.63509C8.75278 4.46148 8.70486 4.28787 8.67292 4.11426C8.64097 3.94065 8.625 3.75835 8.625 3.56738C8.625 2.69933 8.90451 1.96148 9.46354 1.35384C10.0226 0.746202 10.7014 0.442383 11.5 0.442383C12.2986 0.442383 12.9774 0.746202 13.5365 1.35384C14.0955 1.96148 14.375 2.69933 14.375 3.56738C14.375 3.75835 14.359 3.93631 14.3271 4.10124C14.2951 4.26617 14.2472 4.43544 14.1833 4.60905H14.5188C15.4771 4.60905 16.2917 4.94325 16.9625 5.61165C17.6333 6.28006 18.0326 7.10905 18.1604 8.09863C17.8729 8.04655 17.5495 8.02051 17.1901 8.02051C16.8307 8.02051 16.4993 8.03787 16.1958 8.07259C16.084 7.67329 15.8804 7.34342 15.5849 7.08301C15.2894 6.82259 14.934 6.69238 14.5188 6.69238C13.9597 6.69238 13.5245 6.87033 13.213 7.22624C12.9016 7.58214 12.4743 8.09863 11.9312 8.77572H11.0448C10.4858 8.06391 10.0505 7.53874 9.73906 7.2002C9.4276 6.86165 9.00833 6.69238 8.48125 6.69238C7.97014 6.69238 7.54687 6.87467 7.21146 7.23926C6.87604 7.60384 6.70833 8.06391 6.70833 8.61947C6.70833 9.01877 6.81215 9.4311 7.01979 9.85645C7.22743 10.2818 7.51892 10.7332 7.89427 11.2106C8.26962 11.688 8.72483 12.1959 9.2599 12.734C9.79497 13.2722 10.3899 13.8538 11.0448 14.4788L9.67917 15.9632ZM11.5 4.60905C11.7715 4.60905 11.9991 4.50922 12.1828 4.30957C12.3665 4.10992 12.4583 3.86252 12.4583 3.56738C12.4583 3.27224 12.3665 3.02485 12.1828 2.8252C11.9991 2.62554 11.7715 2.52572 11.5 2.52572C11.2285 2.52572 11.0009 2.62554 10.8172 2.8252C10.6335 3.02485 10.5417 3.27224 10.5417 3.56738C10.5417 3.86252 10.6335 4.10992 10.8172 4.30957C11.0009 4.50922 11.2285 4.60905 11.5 4.60905ZM14.5906 23.359C14.2392 23.359 13.8918 23.307 13.5484 23.2028C13.205 23.0986 12.8736 22.9337 12.5542 22.708C12.7299 22.465 12.9056 22.1785 13.0813 21.8486C13.2569 21.5188 13.4167 21.215 13.5604 20.9372C13.7361 21.0587 13.9118 21.1455 14.0875 21.1976C14.2632 21.2497 14.4389 21.2757 14.6146 21.2757C15.1257 21.2757 15.553 21.0804 15.8964 20.6898C16.2398 20.2992 16.4115 19.8347 16.4115 19.2965C16.4115 18.9667 16.3476 18.6108 16.2198 18.2288C16.092 17.8469 15.9403 17.3781 15.7646 16.8226L16.2198 15.9893C16.8906 15.8504 17.5894 15.6681 18.3161 15.4424C19.0429 15.2167 19.4062 14.6177 19.4062 13.6455C19.4062 12.9511 19.1707 12.4476 18.6995 12.1351C18.2283 11.8226 17.7132 11.6663 17.1542 11.6663C16.4833 11.6663 15.7007 11.8052 14.8062 12.083C13.9118 12.3608 12.8656 12.7167 11.6677 13.1507L11.1646 11.1195C12.4104 10.6854 13.5205 10.3209 14.4948 10.0257C15.4691 9.73058 16.3635 9.58301 17.1781 9.58301C18.2802 9.58301 19.2465 9.93891 20.0771 10.6507C20.9076 11.3625 21.3229 12.3608 21.3229 13.6455C21.3229 14.0795 21.263 14.4919 21.1432 14.8825C21.0234 15.2731 20.8517 15.642 20.6281 15.9893C21.3149 16.0761 21.8819 16.4189 22.3292 17.0179C22.7764 17.6169 23 18.2896 23 19.0361C23 19.9042 22.7245 20.642 22.1734 21.2497C21.6224 21.8573 20.9396 22.1611 20.125 22.1611C19.7097 22.1611 19.3064 22.0613 18.9151 21.8617C18.5238 21.662 18.2003 21.3799 17.9448 21.0153C17.6253 21.7445 17.1741 22.3174 16.5911 22.734C16.0082 23.1507 15.3413 23.359 14.5906 23.359ZM20.149 20.0778C20.4205 20.0778 20.6441 19.978 20.8198 19.7783C20.9955 19.5787 21.0833 19.3313 21.0833 19.0361C21.0833 18.741 20.9915 18.4893 20.8078 18.2809C20.6241 18.0726 20.3965 17.9684 20.125 17.9684C19.8535 17.9684 19.6259 18.0683 19.4422 18.2679C19.2585 18.4676 19.1667 18.715 19.1667 19.0101C19.1667 19.3052 19.2625 19.557 19.4542 19.7653C19.6458 19.9736 19.8774 20.0778 20.149 20.0778Z" fill="#CE0033"/></g></svg>
                    <span>{{$evenement->categorie}}</span>
                    </div>
                </div>
                <div class="btn_add_delte">
                <div class="btn_add">
                    <a href="{{ route('events.edit', $evenement->id) }}"><span>Modifier</span></a>
                    
                </div>
               
                <form action="{{ route('events.destroy', $evenement->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn_delete" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet événement ?')">Supprimer</button>
                                </form>
            </div>
            </div>
            
        </div>
        @endforeach

    </div>

    </section>

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
