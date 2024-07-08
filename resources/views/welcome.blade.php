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

@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

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
            margin-right: 100px; */}
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

.apropos
     .images{
          display: flex;
        }
        .apropos  .image1{
           width: 240px;
           height: 400px;
           margin: 5px;
           margin-top: 60px;
           border-radius: 10px;
        }
       .apropos .image2{
           width: 240px;
           height: 460px;
           margin: 5px;
           border-radius: 10px;
        }
      .apropos  .image3{
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
    margin: 30px;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-evenly;
    gap:80px;

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
    width:400px;
height: 600px;
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
.btn_voir{
    margin-top: 20px;
    text-decoration: none;
    text-align: center;
}
.btn_show{
    padding-top: 10px;
    text-align: center;
    width: 102.612px;
height: 35.872px;
flex-shrink: 0;
border-radius: 5px;
background: #068632;
color: var(--couleur-primaire, #FFF);
font-family: Montserrat;
font-size: 14px;
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
    margin-left: 40px;
    overflow: hidden;
color: var(--Assignment-1-Dark-Grey, #5A5A5A);
text-overflow: ellipsis;
font-family: "Open Sans";
font-size: 18px;
font-style: normal;
font-weight: 600;
line-height: normal;
}
.nav{
width: 100%;
height: 75px;
flex-shrink: 0;
background: #1E4C72;
margin-top: 32px;
text-align: center;
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
text-align: center;
padding-bottom: 20px;
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
    /* .navbar-nav{
        display: flex;
        flex-direction: row;
        align-items: center;
        text-align: center;
        gap: 20px;
    } */
   
    .offres{
        margin-left: 50px;
    padding-bottom: 60px;
        display: flex;
        flex-direction: row;

    }
    .offres .images{
        gap: 70px;
        text-align: center;
        margin-left: 150px;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }
   .images img{
        width: 134px;
height: 144px;
flex-shrink: 0;
border-radius: 10px;
    }
.images1, .images2, .images3{
    gap: 20px;
width: 134px;
height: 144px;
display: flex;
flex-wrap:nowrap;
flex-direction: column;
}
.images2{
    margin-top: 121px;
}
.images3{
    margin-top:200px;
}

.text-offres{
    display: flex;
    flex-direction: column;
    gap: 50px;
}
.text-offres .titre{
    margin-top: 20px;
    color: #1E4C72;
font-family: Montserrat;
font-size: 24px;
font-style: normal;
font-weight: 700;
line-height: normal;
}
.text-offres .liste{
    color: #1E4C72;
    gap: 50px;
font-family: Montserrat;
font-size: 24px;
font-style: normal;
font-weight: 700;
line-height: normal;
text-align: left;
margin-top: 180px;
}
.partenaires{
margin-top:350px;
width: 100%;
height: 698px;
flex-shrink: 0;
background: #D9D9D9;
display: flex;
flex-direction: column;
text-align: center;
justify-content: center;

}
.groupe1{
    gap: 40px;
    justify-content: center;
    display: flex;
    flex-direction: row;
    align-items: center;
    align-content: center;
    text-align: center;
}
.groupe1 img{
    width: 194px;
height: 194px;
flex-shrink: 0;
border-radius: 194px;
border: 2px solid #1E2172;
}
.groupe2{
    margin-top: 80px;
    gap: 40px;
    justify-content: center;
    display: flex;
    flex-direction: row;
    align-items: center;
    align-content: center;
    text-align: center;
}
.groupe2 img{
    width: 194px;
height: 194px;
flex-shrink: 0;
border-radius: 194px;
border: 2px solid #1E2172;
}
.partenaire{
    display: flex;
    flex-direction: column;
}
.footer{
    width: 100%;
height: 550px;
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
    </style>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>


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


            
       <x-bar-navigation/>

            

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
    <h3>À propos de nous</h3>
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
            <div class="card">
                <div class="card">
                    <img src="{{ asset('images/' . $evenement->image) }}" class="card-img-top" alt="{{ $evenement->nom }}" width="300" height="300">
                    <div class="card-body">
                        <h5 class="card-title">{{ $evenement->nom }}</h5>
                        <div class="info_detail">
                            <div class="date_evenement">
                                
                            <span style="font-size: larger;">{{ \Carbon\Carbon::parse($evenement->date_evenement)->translatedFormat('F') }}</span><br>
                           <span class="jour"> {{ \Carbon\Carbon::parse($evenement->date_evenement)->translatedFormat('j') }}  </span>                          </div>
                           <div class="info_detail2">
                           <p class="card-text">
    {{ \Carbon\Carbon::parse($evenement->heure_debut)->translatedFormat('H:i') }} - {{ \Carbon\Carbon::parse($evenement->heure_fin)->translatedFormat('H:i') }}</p>                            

                            <p>Places disponibles : {{ $evenement->places_disponibles }} / {{ $evenement->nombre_places }}</p>

                           </div>
                        </div>
                        <div class="btn_voir">
                        <a href="{{ route('event.show', $evenement->id) }}"> <div class="btn_show">Voir plus</div></a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </section>

    <section>
    <h3>Nos Offres</h3>

        <div class="offres">


        <div class="images">
            <div class="images1">
                <img src="{{ asset('images/Rectangle 67.png') }}" alt="">
                <img src="{{ asset('images/Rectangle 67.png') }}" alt="">
                <img src="{{ asset('images/Rectangle 67.png') }}" alt="">
                <img src="{{ asset('images/Rectangle 67.png') }}" alt="">
            </div>

            <div class="images2">
                <img src="{{ asset('images/Rectangle 67.png') }}" alt="">
                <img src="{{ asset('images/Rectangle 67.png') }}" alt="">
            <img src="{{ asset('images/Rectangle 67.png') }}" alt="">

            </div>

            <div class="images3">
            <img src="{{ asset('images/Rectangle 67.png') }}" alt="">
            <img src="{{ asset('images/Rectangle 67.png') }}" alt="">

            </div>

            <div class="text-offres">
                <h2 class="titre">Des événements sur :</h2>
                <div class="liste">
                    <p>Découvrez nos offres d'emploi et de stage</p>
                    <p>Recevez des candidatures à votre école</p>
                    <p>Trouvez des formations gratuites et payantes</p>
                    <p>Découvrez nos offres d'emploi et de stage</p>
                </div>
            </div>
            </div>
        </div>
    </section>
    <section class="partenaires">
        <div class="groupe1">
            <div class="partenaire">
                <img src="{{ asset('images/Rectangle 67.png') }}" alt="">
                <span>Simplon</span>
            </div>
            <div class="partenaire">
                <img src="{{ asset('images/Rectangle 67.png') }}" alt="">
                <span>Simplon</span>
            </div>
            <div class="partenaire">
                <img src="{{ asset('images/Rectangle 67.png') }}" alt="">
                <span>Simplon</span>
            </div>
            <div class="partenaire">
                <img src="{{ asset('images/Rectangle 67.png') }}" alt="">
                <span>Simplon</span>
            </div>
            <div class="partenaire">
                <img src="{{ asset('images/Rectangle 67.png') }}" alt="">
                <span>Simplon</span>
            </div>
            
        </div>
        <div class="groupe2">
            <div class="partenaire">
                <img src="{{ asset('images/Rectangle 67.png') }}" alt="">
                <span>Simplon</span>
            </div>
            <div class="partenaire">
                <img src="{{ asset('images/Rectangle 67.png') }}" alt="">
                <span>Simplon</span>
            </div>
            <div class="partenaire">
                <img src="{{ asset('images/Rectangle 67.png') }}" alt="">
                <span>Simplon</span>
            </div>
            <div class="partenaire">
                <img src="{{ asset('images/Rectangle 67.png') }}" alt="">
                <span>Simplon</span>
            </div>
            <div class="partenaire">
                <img src="{{ asset('images/Rectangle 67.png') }}" alt="">
                <span>Simplon</span>
            </div>
            
        </div>
    </section>


    <!-- Footer  -->


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


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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






