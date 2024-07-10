


<style>


@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

    .container {
        width: 1086px;
height: 1015px;
flex-shrink: 0;
}

.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.styled-table thead tr {
    background: #D9D9D9;
    border: 1px solid #1E4C72;
    color: #ffffff;
    text-align: left;
}

.styled-table th,
.styled-table td {
    border: 1px solid #1E4C72;

    padding: 12px 15px;
}

.styled-table tbody tr {
    border-bottom: 1px solid #1E4C72;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #1E4C72;
}

.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}

.btn {
    display: inline-block;
    font-weight: 400;
    color: #212529;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary:hover {
    color: #fff;
    background-color: #0056b3;
    border-color: #004085;
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
    .nav-bar{
color: #ffffff;
align-items: center;
width: 100%;
height: 80px;
flex-shrink: 0;
border-radius: 0px 0px 12px 12px;
background: #1E4C72;
display: flex;
justify-content: space-evenly;
text-align: center;
    }
    .eventContainer{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        gap: 25px;
    }
    .reservations {
    margin-bottom: 20px;
}
body {
  font-family: sans-serif;
  margin: 0;
  padding: 0;
}
.body{
background-color: #FFF;
    }

.container {
  width: 90%;
  margin: 0 auto;
  padding: 20px;
}

.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding-bottom: 20px;
  border-bottom: 1px solid #ccc;
}

.header h1 {
  font-size: 24px;
  margin: 0;
}

.nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

.nav li {
  display: inline-block;
  margin-right: 20px;
}

.nav a {
  text-decoration: none;
  color: #333;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropbtn {
  padding: 8px 15px;
  background-color: #eee;
  border: 1px solid #ccc;
  cursor: pointer;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
  background-color: #f1f1f1;
}

.search-bar {
  margin-bottom: 20px;
}

.search-bar input[type="text"] {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.search-bar button[type="button"] {
  padding: 10px 15px;
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.table-container {
  overflow-x: auto;
}

table {
  width: 80%;
  border-collapse: collapse;
  margin-bottom: 20px;
}

th, td {
  padding: 8px;
  border: 1px solid #ccc;
  text-align: left;
}

th {
  background-color: #f9f9f9;
}

.action-btn {
  padding: 5px 10px;
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-right: 5px;
}

.action-btn.validate {
  background-color: #28a745;
}

.action-btn.refuse {
  background-color: #dc3545;
}

.footer {
  text-align: center;
  padding: 10px;
  border-top: 1px solid #ccc;
}

.main{
    margin-top: 85px;
  margin-left: 20px;

}
.btn_page{
    width: 10%;
}
.search-bar{
    display: flex;
    justify-content: right;
    margin-right: 245px;
}
.search-bar input{
    width: 444px;
height: 45px;
flex-shrink: 0;
border-radius: 10px;
border: 2px solid #1E4C72;
background: rgba(169, 169, 169, 0.14);
}
.search-bar button{
    width: 145.1px;
height: 45px;
flex-shrink: 0;
border-radius: 20px;
background: #1E4C72;
}
.dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .dropdown button {
            background-color: #1E4C72;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }
        .logo{
            color: var(--couleur-primaire, #FFF);
font-family: Montserrat;
font-size: 20px;
font-style: normal;
font-weight: 700;
line-height: normal;
        }
</style>
</style>







<div class="body">

<x-bar-navigation/>
<div class="page">
<x-side-barAssoc />

<div class="container">
<main class="main">


    <div class="table-container">
        <table>
            <thead>
            <tr>
                    <th>Titre</th>
                    <th>Lieu</th>
                    <th>Date</th>
                    <th>Places disponibles</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($evenements as $evenement)
                    <tr>
                        <td>{{ $evenement->nom }}</td>
                        <td>{{ $evenement->lieu }}</td>
                        <td>{{ $evenement->date_evenement }}</td>
                        <td>{{ $evenement->places_disponibles }} / {{ $evenement->nombre_places }}</td>
                        <td>
                            <a href="{{ route('events.manage', $evenement->id) }}" class="btn btn-primary">Gérer</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
       
    </div>
</main>



</div>

</div>
</div>
