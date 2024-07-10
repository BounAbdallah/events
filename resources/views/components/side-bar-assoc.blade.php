<div class="side-bar">
    <div class="imageProfil">
        <img src="{{ asset('images/1.png') }}" alt="image du profil association">
    </div>
    <div class="navigations">
        <a href="/dashboard/association">
            <img src="{{ asset('images/icon_home.png') }}" alt="favicon accueil">
            <h3>Accueil</h3>
        </a>
        <a href="/events/create">
            <img src="{{ asset('images/add_circle_blanc.png') }}" alt="favicon nouveau">
            <h3>Nouveau</h3>
        </a>
        <a href="/events">
            <img src="{{ asset('images/local_activity_') }}" alt="favicon événement">
            <h3>Evénement</h3>
        </a>
        <a href="{{ route('association.reservation') }}s">
            <img src="{{ asset('images/icon_home.png') }}" alt="favicon inscrits">
            <h3>Inscrits</h3>
        </a>
        <a href="">
            <img src="{{ asset('images/event_bleu.png') }}" alt="favicon reservation">
            <h3>Reservation</h3>
        </a>
    </div>
</div>

<style>
    .side-bar {
        margin-top: 102px;
        width: 320px;
        height: 724px;
        flex-shrink: 0;
        border-radius: 12px;
        background: rgba(30, 76, 114, 0.12);
        margin-left: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        color: #FFF;
    }
    .imageProfil {
        width: 90px;
        height: 90px;
        border-radius: 100%;
    }
    .navigations a {
        margin: 12px;
        margin-top: 40px;
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 10px;
        text-decoration: none;
        color: #000;
        border: 1px solid #1E4C72;
        display: flex;
width: 244px;
padding: 14px 18px;
align-items: center;
gap: 20px;
border-radius: 12px;
border: 3px solid #1E4C72;
color: #FFF;
    }
    .navigations a:hover {
        background-color: #1E4C72; /* Couleur de fond au survol */
        color: #FFF; /* Couleur du texte au survol */
    }
    .navigations img {
        width: 24px; /* Taille des favicon */
        height: 24px;
    }
    .navigations h3 {
        font-family: Montserrat;
        font-size: 20px;
        font-weight: 600;
        line-height: normal;
        margin: 0;
    }
    .imageProfil img{
        width: 100px;
height: 100px;
flex-shrink: 0;
border-radius: 100%;
margin-bottom: 50px;

    }
    .imageProfi{
        margin: 100px;
        padding-bottom: 200px;
    }
</style>
