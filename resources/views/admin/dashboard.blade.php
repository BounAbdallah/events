

<style>
    
    
   
    .page{

        display: flex;
        flex-direction:row;
    }
    .contenu-page{
        margin-left: 35px;
        margin-top: 35px;
    }
    .body{
background-color: #FFF;
    }
    .btn-add{
        display: inline-flex;
        padding: 4px 8px;
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
height: 350px;
flex-shrink: 0;
border-radius: 12px 0px 0px 12px;

    }
    .cardEvent{
        margin-top: 20px;
        display: flex;
        flex-direction: row;
        width: 500px;
        height: 350px;
        flex-shrink: 0;
        border-radius: 12px;
        background: var(--couleur-primaire, #FFF);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Ombre portée */

    }
    .titre{
        display: flex;
        justify-content: center;
        text-align: center;
        margin-left: 20px;
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
        margin: 0px;
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
        gap: 20px;
        align-items: center;
        text-align: center;
        margin-left: 1px;
        justify-content: center;
        margin-bottom: 20px;
    }
    .btn_add{
        display: flex;
        width: 100px;
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
width: 100px;
height: 60px;
padding: 10px;
justify-content: center;
align-items: center;
gap: 10px;
flex-shrink: 0;
border-radius: 8px;
background:#D6111A;
color: var(--couleur-primaire, #FFF);
text-align: center;
font-family: Montserrat;
font-size: 12px;
font-style: normal;
font-weight: 700;
line-height: normal;
margin-top: 30px;
border: 0px;
    }
    a{
        text-decoration: none;
        color: #FFF;
    }
    .nav-bar{
        width: 100%;
height: 80px;
flex-shrink: 0;
border-radius: 0px 0px 12px 12px;
background: #1E4C72;
    }
    .eventContainer{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-evenly;
        gap: 25px;
    }
.competeur{
    display: flex;
    justify-content: space-evenly;
    margin-top: 170px;
}
.compteur-item{
    display: flex;
    flex-direction: column;
width: 386px;
height: 174px;
justify-content: center;
align-items: center;
flex-shrink: 0;
border-radius: 12px;
background: #01054E;
color: #FFF;
}
.compteur-item span{
    color: var(--couleur-primaire, #FFF);
text-align: center;
font-family: Montserrat;
font-size: 48px;
font-style: normal;
font-weight: 700;
line-height: normal;
}
.compteur-item p{
    color: var(--couleur-primaire, #FFF);
text-align: center;
font-family: Montserrat;
font-size: 20px;
font-style: normal;
font-weight: 700;
line-height: normal;
}
</style>
<div class="body">
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<div class="nav-bar">

</div>
<div class="user">
@auth
    <p>{{ Auth::user()->name }} Bienvenue dans votre espace de travail!</p>
@endauth
</div>
<div class="competeur">
        <div class="compteur-item">
            <span>{{ $inactiveAssociationsCount }}</span>
            <p>Association Inactive</p>
        </div>
        <div class="compteur-item">
            <span>{{$activeAssociationsCount}}</span>
            <p>Association valide</p>
        </div>
        <div class="compteur-item">
            <span>{{$totalEvenements}}</span>
            <p>Evenement total</p>
        </div>
        </div>
<div class="page">
    
<div class="liste_association">
<section class="pending-associations">
                <h2>Liste des Association en attente de validation</h2>
                <table class="associations-table">
                    <thead>
                        <tr>
                            <th>Ninéa</th>
                            <th>Nom</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tbody>
       @foreach($inactiveAssociations as $inactiveAssoc) 

                        <tr>
                            <td>{{ $inactiveAssoc->association_ninea  }}</td>
                            <td>{{ $inactiveAssoc->name  }}</td>
                            <td class="action_btn">
                                <button class="btn-action1 validate">Valider</button>
                                <button class="btn-action2 reject">Refuser</button>
                            </td>
                        </tr>
@endforeach
                    </tbody>
                </table>
            </section>
</div>
<div class="section_ajout">
<div class="add-role-form">
                <h2>Ajouter Rôle</h2>
                <form action="{{ route('admin.roles.store') }}">
                    <div class="p1">
                    <label for="name">Nom du rôle :</label>
            <input type="text" name="name" class="form-control" id="name" required>
                </div>
                    <button type="submit">Ajouter</button>
                </form>
            </div>
</div>
  
</div>
</div>

<style>
    .page{
        display: flex;
        align-items: center;
        gap: 50px;
    }
    .pending-associations h2{
        color: #1E4C72;
font-family: Montserrat;
font-size: 16px;
font-style: normal;
font-weight: 600;
line-height: normal;
    }
.liste_association{
    width: 600px;
    margin-top: 50px;
    margin-left: 80px;

}
.associations-table {
    width: 100%;
    border-collapse: collapse;
    border: 1px solid #ddd;
}
.user{
    color: #1E2172;
font-family: Montserrat;
font-size: 24px;
font-style: normal;
font-weight: 700;
line-height: normal;
margin-top: 90px;
margin-left: 34px;
}

th, td {
    padding: 8px;
    border: 1px solid #ddd;
    text-align: left;
}

th {
    background-color: #f0f0f0;
    font-weight: bold;
}

.btn-action1 {
    background-color: #4CAF50;
    color: white;
    width: 100px;
height: 35px;
    padding: 5px 10px;
    border: none;
    cursor: pointer;
    margin: 5px;
    border-radius: 8px;

}
.action_btn{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
}
.btn-action2 {
    background-color: #D6111A;
    color: white;
    width: 100px;
height: 35px;
    padding: 5px 10px;
    border: none;
    cursor: pointer;
    margin: 5px;
    border-radius: 8px;

}
.btn-accepter{
    display: flex;
width: 100px;
height: 35px;
padding: 10px;
justify-content: center;
align-items: center;
gap: 10px;
flex-shrink: 0;
}

.add-role-form{
    margin-top: 160px;
    width: 600px;
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset, 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    flex-direction: column;
    border-radius: 10px;

}

.add-role-form2{
    margin-top:10px;
    width: 600px;
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset, 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    flex-direction: column;
    border-radius: 10px;

}
.add-role-form form, .add-role-form2 form{
    display: flex;
    flex-direction: row;
    width: 80%;
}
.add-role-form label, .add-role-form2 label {
    display: block;
    margin-bottom: 5px;
}

.add-role-form input, .add-role-form2 input {
    width: 400px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.add-role-form button, .add-role-form2 button {
    width: 130;
    height: 40px;
    background-color: #4CAF50;
    color: white;
    padding: 05px 20px;
    border: none;
    cursor: pointer;
    margin-top: 20px;
    margin-left: 20px;
    border-radius: 12px;
}

.add-role-form button:hover {
    background-color: #45a049;
}
</style>

<style>
    
    
   
    .page{

        display: flex;
        flex-direction:row;
    }
    .contenu-page{
        margin-left: 35px;
        margin-top: 35px;
    }
    .body{
background-color: #FFF;
    }
    .btn-add{
        display: inline-flex;
        padding: 4px 8px;
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
height: 350px;
flex-shrink: 0;
border-radius: 12px 0px 0px 12px;

    }
    .cardEvent{
        margin-top: 20px;
        display: flex;
        flex-direction: row;
        width: 500px;
        height: 350px;
        flex-shrink: 0;
        border-radius: 12px;
        background: var(--couleur-primaire, #FFF);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Ombre portée */

    }
    .titre{
        display: flex;
        justify-content: center;
        text-align: center;
        margin-left: 20px;
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
        margin: 0px;
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
        gap: 20px;
        align-items: center;
        text-align: center;
        margin-left: 1px;
        justify-content: center;
        margin-bottom: 20px;
    }
    .btn_add{
        display: flex;
        width: 100px;
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
width: 100px;
height: 60px;
padding: 10px;
justify-content: center;
align-items: center;
gap: 10px;
flex-shrink: 0;
border-radius: 8px;
background:#D6111A;
color: var(--couleur-primaire, #FFF);
text-align: center;
font-family: Montserrat;
font-size: 12px;
font-style: normal;
font-weight: 700;
line-height: normal;
margin-top: 30px;
border: 0px;
    }
    a{
        text-decoration: none;
        color: #FFF;
    }
    .nav-bar{
        width: 100%;
height: 80px;
flex-shrink: 0;
border-radius: 0px 0px 12px 12px;
background: #1E4C72;
    }
    .eventContainer{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-evenly;
        gap: 25px;
    }
.competeur{
    display: flex;
    justify-content: space-evenly;
    margin-top: 170px;
}
.compteur-item{
    display: flex;
    flex-direction: column;
width: 386px;
height: 174px;
justify-content: center;
align-items: center;
flex-shrink: 0;
border-radius: 12px;
background: #01054E;
color: #FFF;
}
</style>