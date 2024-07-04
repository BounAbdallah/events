<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un événement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
</head>
<body>




<x-app-layout>
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
</style>
<style>
   
     .form-container {

            width: 964px;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            margin: auto;
            margin-top: 50px;
            padding: 10px;
        }
     h1 {
             display: flex;
            text-align: center;
            justify-content: center;
            align-self: center;
            align-items: center;
           
            color: #1E4C72;
font-family: Montserrat;
font-size: 16px;
font-style: normal;
font-weight: 700;
line-height: normal;
        }
    .side-bar{
        margin-top: 102px;

        width: 265px;
        height: 724px;
        flex-shrink: 0;
        border-radius: 12px;
        background: rgba(30, 76, 114, 0.12);
        margin-left: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;

    }
    .imageProfil{
        width: 90px;
        height: 90px;
        border-radius:100%;

    }
    .btn-navig{
        display: flex;
        width: 244px;
        padding: 14px 18px;
        align-items: center;
        gap: 20px;
        border-radius: 12px;
        background: #1E4C72;
        color: var(--couleur-primaire, #FFF);
        text-align: center;
        font-family: Montserrat;
        font-size: 20px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
        margin-top: 30px;
    }
    .btn-naviga{
        display: flex;
        width: 244px;
        padding: 14px 18px;
        align-items: center;
        gap: 20px;
        border-radius: 12px;
        border: 3px solid #1E4C72;
        margin-top: 10px;
    }
    .page{

        display: flex;
        flex-direction:row;
    }
    .contenu-page{
        margin-left: 45px;
        margin-top: 35px;
    }
    .btn-add{
        display: inline-flex;
        padding: 14px 18px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        border-radius: 8px;
        background: #1E4C72;
        color: var(--couleur-primaire, #FFF);
        text-align: center;
        font-family: Montserrat;
        font-size: 20px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
    }
    .imgPartie img{
        width: 178px;
height: 297px;
flex-shrink: 0;
border-radius: 12px 0px 0px 12px;

    }
    .cardEvent{
        margin-top: 20px;
        display: flex;
        flex-direction: row;
        width: 527px;
        height: 297px;
        flex-shrink: 0;
        border-radius: 12px;
        background: var(--couleur-primaire, #FFF);
    }
    .titre{
        display: flex;
        justify-content: center;
        text-align: center;
        margin-left: 40px;
        margin-top: 25px;
        color: #1E4C72;
        text-align: center;
        font-family: Montserrat;
        font-size: 24px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }
    .dateHeure, .lieuBillet, .association{
        display: flex;
        gap: 20px;
        flex-direction: row;
        color: #1E4C72;
        text-align: center;
        font-family: Montserrat;
        font-size: 20px;
        font-style: normal;
        font-weight: 700;
        margin-top: 18px;
        margin-left: 40px;
        line-height: normal;
    }
    .date, .heure, .lieu ,.billet , .association{
        display: flex;
        gap: 4px;
        align-items: center;
        text-align: center;
    }
    .btn_add_delte{
        display: flex;
        flex-direction: row;
        gap: 23px;
        margin-left: 34px;
    }
    .btn_add{
        display: flex;
width: 132px;
height: 45px;
padding: 10px;
justify-content: center;
align-items: center;
gap: 10px;
flex-shrink: 0;
border-radius: 8px;
background: linear-gradient(0deg, #068632 0%, #068632 100%), linear-gradient(0deg, #068632 0%, #068632 100%), #068632;
color: var(--couleur-primaire, #FFF);
text-align: center;
font-family: Montserrat;
font-size: 12px;
font-style: normal;
font-weight: 700;
line-height: normal;
margin-top: 22px;
    }

    .btn_delete{
        display: flex;
margin-top: 22px;

width: 132px;
height: 45px;
padding: 10px;
justify-content: center;
align-items: center;
gap: 10px;
flex-shrink: 0;
border-radius: 8px;
background: linear-gradient(0deg, #D6111A 0%, #D6111A 100%), linear-gradient(0deg, #068632 0%, #068632 100%), #068632;
color: var(--couleur-primaire, #FFF);
text-align: center;
font-family: Montserrat;
font-size: 12px;
font-style: normal;
font-weight: 700;
line-height: normal;

    }
    .input-field {
        border: 0px;
        width: 400px;
        color: rgba(29, 29, 29, 0.47);
font-family: Montserrat;
font-size: 14px;
font-style: normal;
font-weight: 400;
line-height: normal;
height: 50px;
flex-shrink: 0;
border-radius: 10px;
background: #D5DDE5;
    }
    .mb-3{
        display: flex;
        flex-direction: column;
    }
    .form-label{
        color: #1E4C72;
font-family: Montserrat;
font-size: 16px;
font-style: normal;
font-weight: 600;
line-height: normal;
    }
    form{
    display: flex;
    gap: 50px;
    margin-left: 40px;
    margin-top: 30px;
    flex-direction:row;
    flex-wrap: wrap;
}
.parti3{
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    text-align: center;
    vertical-align: middle;
    gap: 520px;
}
.btn-enregistrer{
    width: 110px;
height: 48.635px;
flex-shrink: 0;
border-radius: 10px;
border: 1px solid #07A23C;
background: var(--couleur-primaire, #FFF);
color: #07A23C;
font-family: "Open Sans";
font-size: 15px;
font-style: normal;
font-weight: 600;
line-height: normal;
margin-left: 600px;
}
.btn-annuler{
    width: 110px;
height: 48.635px;
flex-shrink: 0;
border-radius: 10px;
border: 1px solid #D6111A;
background: var(--couleur-primaire, #FFF);
color: #D6111A;
font-family: "Open Sans";
font-size: 15px;
font-style: normal;
font-weight: 600;
line-height: normal;
}
body{
        background: #FFF;
        color: #FFF;
    }
</style>
<div class="page">
<div class="side-bar">
    <div class="imageProfil">
        <img src="{{ asset('images/1.png')}}" alt="image du profil association">
    </div>
    <div class="navigations">
        <div class="btn-naviga">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
  <mask id="mask0_386_709" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="30" height="30">
    <rect width="30" height="30" fill="#D9D9D9"/>
  </mask>
  <g mask="url(#mask0_386_709)">
    <path d="M7.5 23.75H22.5V21.25H7.5V23.75ZM7.5 18.75H22.5V16.25H7.5V18.75ZM7.5 13.75H22.5V12.625L20.6875 11.25H9.3125L7.5 12.625V13.75ZM12.5625 8.75H17.4375L15 6.90625L12.5625 8.75ZM5 26.25V14.5312L2.75 16.25L1.25 14.25L5 11.375V7.5H7.5V9.46875L15 3.75L28.75 14.25L27.25 16.2188L25 14.5312V26.25H5ZM5 6.25C5 5.20833 5.36458 4.32292 6.09375 3.59375C6.82292 2.86458 7.70833 2.5 8.75 2.5C9.10417 2.5 9.40104 2.38021 9.64063 2.14063C9.88021 1.90104 10 1.60417 10 1.25H12.5C12.5 2.29167 12.1354 3.17708 11.4062 3.90625C10.6771 4.63542 9.79167 5 8.75 5C8.39583 5 8.09896 5.11979 7.85937 5.35938C7.61979 5.59896 7.5 5.89583 7.5 6.25H5Z" fill="white"/>
  </g>
</svg>
            <h3>Accueil</h3>
        </div>
        <div class="btn-navig">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
  <mask id="mask0_404_133" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="30" height="30">
    <rect width="30" height="30" fill="#D9D9D9"/>
  </mask>
  <g mask="url(#mask0_404_133)">
    <path d="M13.75 21.25H16.25V16.25H21.25V13.75H16.25V8.75H13.75V13.75H8.75V16.25H13.75V21.25ZM15 27.5C13.2708 27.5 11.6458 27.1719 10.125 26.5156C8.60417 25.8594 7.28125 24.9688 6.15625 23.8438C5.03125 22.7188 4.14063 21.3958 3.48438 19.875C2.82812 18.3542 2.5 16.7292 2.5 15C2.5 13.2708 2.82812 11.6458 3.48438 10.125C4.14063 8.60417 5.03125 7.28125 6.15625 6.15625C7.28125 5.03125 8.60417 4.14063 10.125 3.48438C11.6458 2.82812 13.2708 2.5 15 2.5C16.7292 2.5 18.3542 2.82812 19.875 3.48438C21.3958 4.14063 22.7188 5.03125 23.8438 6.15625C24.9688 7.28125 25.8594 8.60417 26.5156 10.125C27.1719 11.6458 27.5 13.2708 27.5 15C27.5 16.7292 27.1719 18.3542 26.5156 19.875C25.8594 21.3958 24.9688 22.7188 23.8438 23.8438C22.7188 24.9688 21.3958 25.8594 19.875 26.5156C18.3542 27.1719 16.7292 27.5 15 27.5ZM15 25C17.7917 25 20.1562 24.0312 22.0938 22.0938C24.0312 20.1562 25 17.7917 25 15C25 12.2083 24.0312 9.84375 22.0938 7.90625C20.1562 5.96875 17.7917 5 15 5C12.2083 5 9.84375 5.96875 7.90625 7.90625C5.96875 9.84375 5 12.2083 5 15C5 17.7917 5.96875 20.1562 7.90625 22.0938C9.84375 24.0312 12.2083 25 15 25Z" fill="white"/>
  </g>
</svg>
            <h3>Nouveau</h3>
        </div>
        <div class="btn-naviga">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <mask id="mask0_386_720" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
    <rect width="24" height="24" fill="#D9D9D9"/>
  </mask>
  <g mask="url(#mask0_386_720)">
    <path d="M9.2 16L12 13.9L14.75 16L13.7 12.6L16.5 10.4H13.1L12 7L10.9 10.4H7.5L10.25 12.6L9.2 16ZM4 20C3.45 20 2.97917 19.8042 2.5875 19.4125C2.19583 19.0208 2 18.55 2 18V14.625C2 14.4417 2.05833 14.2833 2.175 14.15C2.29167 14.0167 2.44167 13.9333 2.625 13.9C3.025 13.7667 3.35417 13.525 3.6125 13.175C3.87083 12.825 4 12.4333 4 12C4 11.5667 3.87083 11.175 3.6125 10.825C3.35417 10.475 3.025 10.2333 2.625 10.1C2.44167 10.0667 2.29167 9.98333 2.175 9.85C2.05833 9.71667 2 9.55833 2 9.375V6C2 5.45 2.19583 4.97917 2.5875 4.5875C2.97917 4.19583 3.45 4 4 4H20C20.55 4 21.0208 4.19583 21.4125 4.5875C21.8042 4.97917 22 5.45 22 6V9.375C22 9.55833 21.9417 9.71667 21.825 9.85C21.7083 9.98333 21.5583 10.0667 21.375 10.1C20.975 10.2333 20.6458 10.475 20.3875 10.825C20.1292 11.175 20 11.5667 20 12C20 12.4333 20.1292 12.825 20.3875 13.175C20.6458 13.525 20.975 13.7667 21.375 13.9C21.5583 13.9333 21.7083 14.0167 21.825 14.15C21.9417 14.2833 22 14.4417 22 14.625V18C22 18.55 21.8042 19.0208 21.4125 19.4125C21.0208 19.8042 20.55 20 20 20H4ZM4 18H20V15.45C19.3833 15.0833 18.8958 14.5958 18.5375 13.9875C18.1792 13.3792 18 12.7167 18 12C18 11.2833 18.1792 10.6208 18.5375 10.0125C18.8958 9.40417 19.3833 8.91667 20 8.55V6H4V8.55C4.61667 8.91667 5.10417 9.40417 5.4625 10.0125C5.82083 10.6208 6 11.2833 6 12C6 12.7167 5.82083 13.3792 5.4625 13.9875C5.10417 14.5958 4.61667 15.0833 4 15.45V18Z" fill="#1E4C72"/>
  </g>
</svg>
            <h3>Evénement</h3>
        </div>
        <div class="btn-naviga">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
  <mask id="mask0_386_725" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="30" height="30">
    <rect width="30" height="30" fill="#D9D9D9"/>
  </mask>
  <g mask="url(#mask0_386_725)">
    <path d="M2.5 25V21.5C2.5 20.8125 2.67708 20.1667 3.03125 19.5625C3.38542 18.9583 3.875 18.5 4.5 18.1875C5.5625 17.6458 6.76042 17.1875 8.09375 16.8125C9.42708 16.4375 10.8958 16.25 12.5 16.25C13.125 16.25 13.7344 16.2812 14.3281 16.3437C14.9219 16.4062 15.5 16.5 16.0625 16.625L13.875 18.8125C13.6458 18.7708 13.4219 18.75 13.2031 18.75H12.5C11.0208 18.75 9.69271 18.9271 8.51562 19.2812C7.33854 19.6354 6.375 20.0208 5.625 20.4375C5.4375 20.5417 5.28646 20.6875 5.17188 20.875C5.05729 21.0625 5 21.2708 5 21.5V22.5H12.8125L15.3125 25H2.5ZM19.4375 25.5L15.125 21.1875L16.875 19.4375L19.4375 22L25.75 15.6875L27.5 17.4375L19.4375 25.5ZM12.5 15C11.125 15 9.94792 14.5104 8.96875 13.5312C7.98958 12.5521 7.5 11.375 7.5 10C7.5 8.625 7.98958 7.44792 8.96875 6.46875C9.94792 5.48958 11.125 5 12.5 5C13.875 5 15.0521 5.48958 16.0312 6.46875C17.0104 7.44792 17.5 8.625 17.5 10C17.5 11.375 17.0104 12.5521 16.0312 13.5312C15.0521 14.5104 13.875 15 12.5 15ZM12.5 12.5C13.1875 12.5 13.776 12.2552 14.2656 11.7656C14.7552 11.276 15 10.6875 15 10C15 9.3125 14.7552 8.72396 14.2656 8.23437C13.776 7.74479 13.1875 7.5 12.5 7.5C11.8125 7.5 11.224 7.74479 10.7344 8.23437C10.2448 8.72396 10 9.3125 10 10C10 10.6875 10.2448 11.276 10.7344 11.7656C11.224 12.2552 11.8125 12.5 12.5 12.5Z" fill="#1E4C72"/>
  </g>
</svg>
            <h3>Inscrits</h3>
        </div>
        <div class="btn-naviga">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
  <mask id="mask0_386_730" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="30" height="30">
    <rect width="30" height="30" fill="#D9D9D9"/>
  </mask>
  <g mask="url(#mask0_386_730)">
    <path d="M5 26.25V18.75H25V26.25H22.5V21.25H7.5V26.25H5ZM5.625 17.5C5.10417 17.5 4.66146 17.3177 4.29688 16.9531C3.93229 16.5885 3.75 16.1458 3.75 15.625C3.75 15.1042 3.93229 14.6615 4.29688 14.2969C4.66146 13.9323 5.10417 13.75 5.625 13.75C6.14583 13.75 6.58854 13.9323 6.95312 14.2969C7.31771 14.6615 7.5 15.1042 7.5 15.625C7.5 16.1458 7.31771 16.5885 6.95312 16.9531C6.58854 17.3177 6.14583 17.5 5.625 17.5ZM8.75 17.5V6.25C8.75 5.5625 8.99479 4.97396 9.48438 4.48438C9.97396 3.99479 10.5625 3.75 11.25 3.75H18.75C19.4375 3.75 20.026 3.99479 20.5156 4.48438C21.0052 4.97396 21.25 5.5625 21.25 6.25V17.5H8.75ZM24.375 17.5C23.8542 17.5 23.4115 17.3177 23.0469 16.9531C22.6823 16.5885 22.5 16.1458 22.5 15.625C22.5 15.1042 22.6823 14.6615 23.0469 14.2969C23.4115 13.9323 23.8542 13.75 24.375 13.75C24.8958 13.75 25.3385 13.9323 25.7031 14.2969C26.0677 14.6615 26.25 15.1042 26.25 15.625C26.25 16.1458 26.0677 16.5885 25.7031 16.9531C25.3385 17.3177 24.8958 17.5 24.375 17.5ZM11.25 15H18.75V6.25H11.25V15Z" fill="#1E4C72"/>
  </g>
</svg>
            <h3>Reservation</h3>
        </div>
    </div>
</div>
<div class="contenu-page">
    <div class="sction-btn">
        
    </div>
    <div class="eventContainer">
    <div class="form-container">

<h1>Créer un Événement</h1>
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="partie1">
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input class="input-field" type="text" class="form-control" id="nom" name="nom" required>
        </div>

        <div class="mb-3">
            <label for="lieu" class="form-label">Lieu</label>
            <textarea class="form-control" id="lieu" name="lieu" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="date_evenement" class="form-label">Date de l'événement</label>
            <input class="input-field" type="date" class="form-control" id="date_evenement" name="date_evenement" required>
        </div>

        <div class="mb-3">
            <label for="heure_debut" class="form-label">Heure de début</label>
            <input class="input-field" type="time" class="form-control" id="heure_debut" name="heure_debut" required>
        </div>

        <div class="mb-3">
            <label for="heure_fin" class="form-label">Heure de fin</label>
            <input class="input-field" type="time" class="form-control" id="heure_fin" name="heure_fin" required>
        </div>
    </div>
    <div class="partie2">
        <div class="mb-3">
            <label for="date_cloture_inscription" class="form-label">Date de clôture des inscriptions</label>
            <input class="input-field" type="date" class="form-control" id="date_cloture_inscription" name="date_cloture_inscription" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input class="input-field" type="file" class="form-control" id="image" name="image" accept="image/*" required>
        </div>
        
        <div class="mb-3">
            <label for="nombre_places" class="form-label">Nombre des places</label>
            <input class="input-field" type="number" class="form-control" id="nombre_places" name="nombre_places" required>
        </div>

        <div class="mb-3">
            <label for="categorie" class="form-label">Catégorie</label>
            <select class="form-select" id="categorie" name="categorie" required>
    @foreach($categories as $categorie)
        <option value="{{ $categorie }}">{{ $categorie }}</option>
    @endforeach
</select>
        </div>

        <div class="mb-3">
            <label for="statut" class="form-label">Statut</label>
            <select name="statut" class="form-control">
    @foreach($statuts as $statut)
        <option value="{{ $statut }}">{{ $statut }}</option>
    @endforeach
</select>
        </div>
    </div>
    <div class="parti3">
                   
                

                <div class="mt-3 text-center">
                    <a href="{{ route('events.index') }}" class=" btn btn-annuler">Annuler</a>
                </div>
                </div>
                
                <div class="text-center">
                        <button type="submit" class="btn btn-enregistrer">Enrégistrer</button>
                    </div>
            </form>

            
            </div>
        </div>
    </div>
</div>
    </div>
            
        </div>

    </div>
</div>
  
</div>
</x-app-layout>