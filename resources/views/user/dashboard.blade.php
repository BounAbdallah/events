<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Utilisateur</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .profile-info {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            display: flex;
            margin-left: 100px;
        }
        .profile-info p {
            margin: 0;
        }
        .reservation-card {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 20px;
        }
        .infos{
            margin-left: 60px;
        }
        .reservation-card img {
            width: 100%;
            height: auto;
        }
        .reservation-card .details {
            padding: 15px;
        }
        .reservation-card .details h5 {
            margin-top: 0;
        }
        .navbar-custom {
            background-color: #0056b3;
        }
        .nav-link{
            color: #fff;
            font-weight: 600;
        }
        .nav-link:active {
            color: #fff;
            font-weight: 600;
            border-bottom: 2px red solid;
        }
        .navbar-brand{
            color: #fff;
            font-weight: 600;
        }
        .notification-icon {
            margin-left: 5px;
            color: yellow; /* Couleur de votre choix */
        }
        .fas{
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="/">BYONA.Event</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/evenements">Événements</a>
                    </li>
                </ul>
                @auth
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i> {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <div class="dropdown-divider"></div>
                            <form action="{{ route('logout') }}" method="POST" class="dropdown-item">
                                @csrf
                                <button type="submit" class="btn btn-link"><i class="fas fa-sign-out-alt"></i> Déconnexion</button>
                            </form>
                        </div>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span ><i class="fas fa-bell"></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <div class="dropdown-divider"></div>
                            <form action="{{ route('logout') }}" method="POST" class="dropdown-item">
                                @csrf
                                <button type="submit" class="btn btn-link"><i class="fas fa-sign-out-alt"></i> Déconnexion</button>
                            </form>
                        </div>
                    </li>
                </ul>
                @else
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Connexion</a>
                    </li>
                </ul>
                @endauth
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="profile-info">
            <div class="">
            <h4><i class="fas fa-user"></i>Profil</h4>
            </div>
                <div class="infos">
                <p><i class="fas fa-user"></i> Prénom : {{ Auth::user()->name }}</p>
                <p><i class="fas fa-envelope"></i> Adresse email : {{ Auth::user()->email }}</p>
                </div>

                <div class="infos">
                <p><i class="fas fa-phone"></i> Numéro de téléphone : 777908197</p>
                <p><i class="fas fa-map-marker-alt"></i> Adresse : Dieuppeul 1</p>
                </div>
        </div>

        <h4><i class="fas fa-calendar-check"></i> Mes réservations</h4>
        <div class="row">
            @foreach (['confirmed', 'refused'] as $status)
                <div class="col-md-6">
                    <div class="reservation-card">
                        <img src="https://via.placeholder.com/500x300" alt="Image de l'événement">
                        <div class="details">
                            <h5><i class="fas fa-calendar-alt"></i> Takussanou Baabel</h5>
                            <p><i class="fas fa-clock"></i> Date : 10/09/2024</p>
                            <p><i class="fas fa-clock"></i> Heure : 17:30 - 22:30</p>
                            <p><i class="fas fa-map-marker-alt"></i> Lieu : Dakar, Liberté 3</p>
                            <p><i class="fas fa-users"></i> Places : 150/200</p>
                            <p><i class="fas fa-info-circle"></i> Status : {{ $status === 'confirmed' ? 'Confirmé' : 'Refusé' }}</p>
                            <a href="#" class="btn btn-primary"><i class="fas fa-info-circle"></i> Détails de l'événement</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
