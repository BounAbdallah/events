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

.btn_{
    color: #D6111A;
}

</style>
<body><x-bar-navigation/>


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
<x-footer />

</body>
</html>


