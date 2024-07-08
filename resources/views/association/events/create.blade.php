
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
</style>
<style>
   
    .body{
background-color: #FFF;
    }
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
        background: var(--couleur-primaire, #FFF);
box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset, 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
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
    .nav-bar{
        width: 100%;
height: 80px;
flex-shrink: 0;
border-radius: 0px 0px 12px 12px;
background: #1E4C72;
}
</style>
<div class="body">
<div class="nav-bar">

</div>
<div class="page">

       
<body>
<x-side-barAssoc />

</body>
</html>

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
                    <a href="/dashboard/association" class=" btn btn-annuler">Annuler</a>
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
</div>
