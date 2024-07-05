<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Détails de l'événement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<style>
    .nav{
width: 100%;
height: 75px;
flex-shrink: 0;
background: #1E4C72;
margin-top: 32px;
color: var(--couleur-primaire, #FFF);
font-family: Montserrat;
font-size: 20px;
font-style: normal;
font-weight: 700;
line-height: normal;
display: flex;
flex-direction: row;
justify-content: center;
align-items: center;
gap: 75px;
    }
    a{
        text-decoration: none;
        color: var(--Assignment-1-White, var(--couleur-primaire, #FFF));
text-align: center;
font-family: Montserrat;
font-size: 16px;
font-style: normal;
font-weight: 500;
line-height: normal;
    }
    .a{
        text-decoration: none;
    }
    .navbar-nav{
        display: flex;
        flex-direction: row;
        align-items: center;
        text-align: center;
        gap: 20px;
    }
    .btn_deconnexion{
        width: 182px;
height: 43px;
flex-shrink: 0;
border-radius: 20px;
border: 2px solid #1E4C72;
background: var(--couleur-primaire, #FFF);
    }
    .btn_deconn{
        border: 0px;
    }
    .contenaire{
        margin-left: 245px;
        margin-right: 245px;
        margin-bottom: 300px;
    }
    .infos-principal{
        margin-top: 65px;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-around;
        color: #6E6E6E;
font-family: Montserrat;
font-size: 16px;
font-style: normal;
font-weight: 600;
line-height: normal;
    }
    .infos2{
        display: flex;
        flex-direction: row;
        gap: 98px;
        margin-top: 95px;
    }
    .partie1 img{
        width: 402px;
height: 239px;
flex-shrink: 0;
    }
    .partie2 h2{
        color: #1E4C72;
font-family: Montserrat;
font-size: 14px;
font-style: normal;
font-weight: 600;
line-height: normal;
    }
    .partie2 p{
        color: rgba(0, 0, 0, 0.69);
font-family: Montserrat;
font-size: 13px;
font-style: normal;
font-weight: 600;
line-height: normal;
    }
    .parti2 .btn{
        width: 486px;
height: 50px;
flex-shrink: 0;
border: 1px solid #068632;
    }


    .custom-form {
    display: flex;
    justify-content: center;


}

.custom-button {
    background-color: #007bff; /* Couleur de fond */
   border: 1px solid #068632;
   margin: 20px 0;
    width: 486px;
height: 50px;
border-radius: 10px;
border: 2px solid #068632;
background: var(--couleur-primaire, #FFF);
color: #068632;
font-family: "Open Sans";
font-size: 16px;
font-style: normal;
font-weight: 600;
line-height: normal;
}

.custom-button:hover {
    background-color: white; /* Couleur de fond au survol */
    color: black; /* Couleur du texte au survol */
    border: 2px solid #007bff; /* Bordure au survol */
}
.footer{
    width: 100%;
height: 482px;
flex-shrink: 0;
background: #1E4C72;
}
.footer .container{
    margin-top: 100px;
  
    display: flex;
    justify-content: center;
    gap: 80px;
}
.item-container{
    display: flex;
    flex-direction: column;
    gap: 12px;
    
}
.item-container{
    margin-top: 50px;
    padding-top: 80px;
}
.item-container h3{
    color: var(--Assignment-1-White, var(--couleur-primaire, #FFF));
font-family: Montserrat;
font-size: 24px;
font-style: normal;
font-weight: 600;
line-height: normal;
}
.item-container span{
    color: #A9A9A9;
font-family: "Open Sans";
font-size: 18px;
font-style: normal;
font-weight: 400;
line-height: normal;
}
footer{
    background: #1E4C72;
    padding-top: 20px;
    padding-bottom: 20px;
    display: flex;
    justify-content: center;
    border-top: 1px solid #A9A9A9;
    color: #A9A9A9;
font-family: "Open Sans";
font-size: 18px;
font-style: normal;
font-weight: 400;
line-height: normal;

}
.btn_{
    color: #D6111A;
}

</style>
<body>
<div class="nav">
<h3>BYONA.Event</h3>
<a href="#"><span>Accueil</span></a>
<a href="#"><span>Évenements</span></a>

<ul class="navbar-nav mr-auto">
              
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile.edit') }}">Profil</a>
                </li>
                <li class="">
                    <form class="btn_deconnexion" action="{{ route('logout') }}" method="POST" >
                        @csrf
                        <button type="submit" class=btn_deconn">Déconnexion</button>
                    </form>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Connexion</a>
                </li>
                @endauth
            </ul>
</div>


<div class="contenaire">
    <div class="infos-principal">
        <p><strong>Date:</strong> {{ $evenement->categorie }}</p>
        <p><strong>Date:</strong> {{ $evenement->nom }}</p>
        <p><strong>Date:</strong> {{ $evenement->nombre_places }}</p>

    </div>
    <div class="infos2">
        <div class="partie1">
             <img src="{{ asset('images/' . $evenement->image) }}" alt="{{ $evenement->nom }}" >
    <p><strong>Lieu de l'evenemnt:</strong> {{ $evenement->lieu }}</p>
    <p><strong>Date de l'evenement </strong> {{ $evenement->date_evenement }}</p>
    <p><strong>Heure de derooulement </strong> {{ $evenement->heure_debut }} - {{ $evenement->heure_fin }}</p>
    <p><strong>Date de l'evenement </strong> {{ $evenement->date_cloture_inscription }}</p>
    <a href="{{ route('home') }}" class="btn_ ">Annuler</a>


        </div>
        <div class="partie2">
            <h2>Description :</h2>
    <p><strong>Description:</strong> {{ $evenement->description }}</p>
    
    <form action="{{ route('reservations.store', $evenement->id) }}" method="POST" class="custom-form">
    @csrf
    <button type="submit" class="custom-button">Réserver</button>
</form>

        </div>
    </div>
</div>
<div class="footer">
<div class="container">
    <div class="item-container">
        <h3>Nos pages</h3>
        <span>À Propos de nous</span>
        <span>Nous contacter</span>
        <span>Associations</span>
        <span>FAQs</span>
        <span>Politique de confidentialité</span>
    </div>
    <div class="item-container">
        <h3>Aide</h3>
        <span>Support compte</span>
        <span>Liste des événements</span>
        
    </div>
    <div class="item-container">
        <h3>Categories</h3>
        <span>Technologie</span>
        <span>Festivales</span>
        <span>Business</span>
        <span>Nouritures & Boissons</span>
        <span>Art & Culture</span>
        <span>Sport</span>
        <span>Conférence</span>
    </div>
    <div class="item-container">
        <h3>Suivez-nous</h3>
        <span>Facebook</span>
        <span>Instagram</span>
        <span>Twitter</span>
        <span>Youtube</span>

    </div>
</div>
</div>
<footer>
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none">
  <circle cx="9" cy="8.5" r="8" stroke="#A9A9A9"/>
  <mask id="path-2-inside-1_429_1631" fill="white">
    <path d="M13.0025 11.0849C12.3945 11.8077 11.5817 12.3294 10.6713 12.5812C9.76091 12.833 8.79558 12.8031 7.9025 12.4955C7.00941 12.1879 6.23046 11.617 5.66825 10.8579C5.10604 10.0989 4.78696 9.18733 4.75302 8.24336C4.71908 7.29939 4.97189 6.36728 5.47814 5.56982C5.98439 4.77236 6.72033 4.14695 7.58902 3.776C8.45771 3.40504 9.41839 3.30592 10.3445 3.49171C11.2706 3.6775 12.1188 4.13948 12.7772 4.81678L11.5033 6.05505C11.0951 5.63512 10.5693 5.3487 9.9951 5.23351C9.4209 5.11832 8.82528 5.17977 8.28669 5.40977C7.7481 5.63976 7.29182 6.02751 6.97795 6.52193C6.66407 7.01636 6.50733 7.59427 6.52837 8.17953C6.54941 8.76479 6.74725 9.32995 7.09582 9.80056C7.44439 10.2712 7.92734 10.6252 8.48105 10.8159C9.03476 11.0066 9.63326 11.0251 10.1977 10.869C10.7622 10.7129 11.2661 10.3894 11.6431 9.94127L13.0025 11.0849Z"/>
  </mask>
  <path d="M13.0025 11.0849C12.3945 11.8077 11.5817 12.3294 10.6713 12.5812C9.76091 12.833 8.79558 12.8031 7.9025 12.4955C7.00941 12.1879 6.23046 11.617 5.66825 10.8579C5.10604 10.0989 4.78696 9.18733 4.75302 8.24336C4.71908 7.29939 4.97189 6.36728 5.47814 5.56982C5.98439 4.77236 6.72033 4.14695 7.58902 3.776C8.45771 3.40504 9.41839 3.30592 10.3445 3.49171C11.2706 3.6775 12.1188 4.13948 12.7772 4.81678L11.5033 6.05505C11.0951 5.63512 10.5693 5.3487 9.9951 5.23351C9.4209 5.11832 8.82528 5.17977 8.28669 5.40977C7.7481 5.63976 7.29182 6.02751 6.97795 6.52193C6.66407 7.01636 6.50733 7.59427 6.52837 8.17953C6.54941 8.76479 6.74725 9.32995 7.09582 9.80056C7.44439 10.2712 7.92734 10.6252 8.48105 10.8159C9.03476 11.0066 9.63326 11.0251 10.1977 10.869C10.7622 10.7129 11.2661 10.3894 11.6431 9.94127L13.0025 11.0849Z" stroke="#A9A9A9" stroke-width="2" mask="url(#path-2-inside-1_429_1631)"/>
</svg>2023 BYONA.EVENT. All rights reserved.
</footer>
</body>
</html>


