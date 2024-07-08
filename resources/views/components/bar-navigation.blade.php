
<div class="nav-bar">
    <div class="logo">
        <h2>BYONA.Event</h2>
    </div>
    <div class="navigation-lien">
        <span class="lien1">Accueil</span>
        <span>Événements</span>
    </div>
    <div class="auth-btn">
    @auth
            <!-- Utilisateur connecté -->
            <div class="dropdown">
                <button>{{ Auth::user()->name }}</button>
                <div class="dropdown-content">
                    @if (Auth::user()->hasRole('association'))
                        <a href="/association/dashboard">Tableau de bord</a>
                    @elseif (Auth::user()->hasRole('admin'))
                        <a href="/dashboard/admin">Tableau de bord </a>
                    @elseif (Auth::user()->hasRole('user'))
                        <a href="{{ route('user.dashboard') }}">Tableau de bord</a>
                    @endif
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Déconnexion
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        @else
            <!-- Utilisateur non connecté -->
            <div class="register">
                <a class="nav-link" href="{{ route('register.user') }}"><span>Inscription</span></a>
            </div>
            <div class="login">
                <a class="nav-link" href="{{ route('login') }}"><span>Connexion</span></a>
            </div>
        @endauth
    </div>
</div>

<style>

.nav-bar{
    margin-top: 20px;
    padding-top: 20px;
    display: flex;
    justify-content: space-evenly;
    text-align: center;
    background: #1E4C72;
    height: 75px;
    color: #FFF;
}
.logo{
    color: var(--couleur-primaire, #FFF);
font-family: Montserrat;
font-size: 20px;
font-style: normal;
font-weight: 700;
line-height: normal;
}
.navigation-lien{
    display: flex;
    justify-content: space-evenly;
    gap: 90px;
    color: var(--Assignment-1-White, var(--couleur-primaire, #FFF));
text-align: center;
font-family: Montserrat;
font-size: 15px;
font-style: normal;
font-weight: 600;
line-height: normal;
}
.lien1{

    border-bottom: 5px solid #D6111A;
}
.auth-btn{
    display: flex;
    justify-content: center;
align-items: center;
align-content: center;
    flex-direction: row;
    gap: 50px;
}
.evenements .card a{
    margin-top: 50px;
}
.login{
width: 182px;
height: 43px;
flex-shrink: 0;
border-radius: 20px;
border: 2px solid #1E4C72;
background: var(--couleur-primaire, #FFF);
color: var(--couleur-tertiaire, #000);
text-align: center;
font-family: Montserrat;
font-size: 16px;
font-style: normal;
font-weight: 500;
line-height: normal;
display: flex;
justify-content: center;
align-items: center;
align-content: center;
}
.login a{
    color: #1E4C72;
}
.jour{
    color: #D6111A;
text-align: center;
font-family: Montserrat;
font-size: 26px;
font-style: normal;
font-weight: 700;
line-height: normal;
} .dropdown {
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
</style>