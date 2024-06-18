<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail de la formation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KY4o8EID6gzl32nTbDZnO4QEOQn19TkvT0eO6h5bZMtLqFJumHsygHg2A+3LBmR1EnbEJ6fnXw9HBEOU8t19RQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">

    <style>
         @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,400;6..12,700&display=swap');
        body {
            background-color: #F0F0F0;
            font-family: 'Nunito Sans', sans-serif;
            background: #ffffff;
        }
        .navbar-light {
            background-color: #fff !important;
        }
        .accueil {
            margin: 0;
            padding: 0;
        }
        .intro {
            position: relative; /* Position relative pour permettre le positionnement absolu du pseudo-élément */
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 30px;
            width: 60%;
            height: 50%;
        }
        .intro::before {
            content: "";
            position: absolute;
            top: -15px; /* Position juste au-dessus de .date-info */
            left: 0;
            width: calc(100% - 20px); /* Largeur égale à celle de .date-column-container moins les paddings */
            height: 20px; /* Hauteur de la zone rouge */
            background-color: #CE0033; /* Couleur rouge */
            border-radius: 10px 10px 0 0; /* Coins arrondis en haut */
        }
        .bannier {
            background-color: #CE0033;
            color: white;
            text-align: center;
            padding: 50px 20px;
        }
        .bannier h1 {
            margin-bottom: 20px;
            font-size: 2.5em;
        }
        .bannier p {
            margin-bottom: 20px;
            font-size: 1.2em;
        }
        .candidater-button {
            background-color: white;
            color: #CE0033;
            border: 2px solid #CE0033;
            padding: 10px 20px;
            font-size: 1em;
            cursor: pointer;
            border-radius: 5px;
        }
        .candidater-button:hover {
            background-color: #CE0033;
            color: white;
        }
        .content-section {
            display: flex;
            justify-content: space-between;
            padding: 50px 20px;
            position: relative;
            gap: 2.5rem
        }
        .content-section .red-strip {
            width: 100%;
            height: 5px; /* Ajustez la hauteur selon vos besoins */
            background-color: #CE0033;
            position: absolute;
            top: 0;
            left: 0;
        }
        .content-section .text-container {
            flex: 1;
            margin-right: 20px;
        }
        .content-section .card {
            flex: 1;
        }
        .card img {
            position: absolute;
            top: -10px;
            height: 90%;
            width: 100%;
            border-radius: 10px;
            border-top-left-radius: 30px;
            border-top-right-radius: 158px;
            border-bottom-left-radius: 150px;
        }
        .intro {
            flex: 1;
            padding: 50px 20px;
            background-color: #ffffff;
        }
        .date-red {
           color: #CE0033;
           font-size: 36px;
        }
        .intro h1 {
            color: #CE0033;
            font-size: 2.5em;
        }
        .intro p {
            margin: 20px 0;
            line-height: 1.6;
        }
        .pourcentage {
            background: #CE0033;
            color: #ffffff;
            padding: 8px;
            width: 80%;
            justify-content: center;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
            font-weight: bold;
        }

        #btn {
            background-color: #CE0033;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 1em;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .btn:hover {
            background-color: #CE0033;
        }
        .description {
            text-align: center;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            width: 80%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .description h1 {
            font-size: 40px;
            font-weight: bold;
            color: #CE0033
        }
        .content-section1 {
            display: flex;
            justify-content: space-between;
            padding: 50px 20px;
            position: relative;
        }
        .card {
            position: relative;
            width: 750px;
            height: 600px;
            background: #EFADBE;
            border-top-left-radius: 50px;
            border-top-right-radius: 140px;
            border-bottom-left-radius: 180px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            margin-bottom: 50px;
            margin-top: 60px;
            padding-bottom: 30px;
        }
        
        .info-section {
            background-color: #F0F0F0;
        }

        .info-section img {
            width: 150px;
        }

        .info-section .col-md-4 {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .info-section i {
            font-size: 1.5em;
        }

        .info-section p {
            margin-left: 10px;
            margin-bottom: 0;
        }
        .container .nav-color .nav-link {
    color: #000000 !important;
}

.card1 {
    position: relative;
    width: 600px;
    height: 800px;
    background: #CE0033;
    color: #fff;
    border-top-left-radius: 50px;
    border-top-right-radius: 140px;
    border-bottom-left-radius: 191px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); /* Ajout de l'ombre sous le card */
    overflow: hidden; /* Pour cacher le débordement de l'image */
    margin-bottom: 50px;
    margin-top: 200px;
    padding-bottom: 90px;

}
.card1 li::before {
    content: "\2713"; /* Code Unicode pour l'icône de coche */
    font-family: 'Material Symbols Outlined', sans-serif; /* Nom de la police */
    font-size: 20px; /* Taille de la police */
    color: white; /* Couleur de l'icône */
    margin-right: 10px; /* Marge à droite pour l'espacement */

}
/* .card-box img {
    width: 400px;
    height: 400px;
    box-shadow: -10px 50px 10px #CE0033;
    border-top-left-radius: 50px;
    border-top-right-radius: 140px;
    border-bottom-left-radius: 191px;
} */
.card2 {
    position: relative;
    width: 600px;
    height: 800px;
    background: #090002;
    color: #fff;
    border-top-left-radius: 50px;
    border-top-right-radius: 140px;
    border-bottom-left-radius: 191px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); /* Ajout de l'ombre sous le card */
    overflow: hidden; /* Pour cacher le débordement de l'image */
    margin-bottom: 50px;
    margin-top: 60px;
}
.card1 li {
    justify-content: center;
    text-align: left;
    width: 60%;
    font-size: 30px;
    padding-left: 40px; /* Ajout d'un espacement à gauche */
    position: relative; /* Position relative pour placer l'icône absolument */
}

.card2 li {
    justify-content: center;
    text-align: left;
    width: 60%;
    font-size: 30px;
    padding-left: 40px; /* Ajout d'un espacement à gauche */
    position: relative; /* Position relative pour placer l'icône absolument */
}

.card1 li::before,
.card2 li::before {
    content: "\2713"; /* Code Unicode pour l'icône de coche */
    font-family: 'Material Symbols Outlined', sans-serif; /* Nom de la police */
    font-size: 20px; /* Taille de la police */
    color: white; /* Couleur de l'icône */
    position: absolute; /* Position absolue */
    left: 0; /* Positionnement absolu à gauche */
    top: 50%; /* Centrage vertical */
    transform: translateY(-50%); /* Décalage vertical de moitié de la hauteur */
    margin-right: 10px; /* Marge à droite pour l'espacement */
}
.card1,.card2  h3 {
  padding-left: 30px;
  padding-top: 10px;
  font-size: 35px;
}
.card2 , .card1 h3 {
    padding-left: 30px;
    padding-top: 10px;
    font-size: 35px;
}

.footer-logo {
    background-color: #F0F0F0;
    padding: 20px;
    text-align: center;
}

.footer-icon {
    background-color: #CE0033;
    padding: 20px;
    text-align: center;
}

.footer-icon i {
    font-size: 2rem;
    color: #fff;
}
.date-deadline h2, developer-info {
    font-size: 24px;
    font-weight: bold;
}
.contain {
    width: 100%;
    margin: 0 auto;
    
}
#red {
    background: #CE0033
}
.retour {
    width: 80%;
    margin: 0 auto;
}

    </style>
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="https://simplon.sn/wp-content/uploads/2023/07/logo-simplonSenegal.png" alt="Logo" width="130px" class="image" /></a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('accueil') }}">Accueil</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#">A propos</a>
                </li> --}}
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('formations') }}">Nos formations</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li> --}}
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('candidatures-historique') }}"><i class="bi bi-person-circle"></i>  <span class="font-weight-bold">{{ Auth::user()->prenom }} {{ Auth::user()->nom }}</span></a>
                </li> 
                <li class="nav-item">
                    <a href="{{ route('auth.deconnexion') }}" class="btn btn-outline-danger">Déconnexion</a>
                </li>
                @endauth
            </ul>
        </div>
    </nav>



        <div class="mb-4 bannier">
            <h1>Bienvenue sur la page détail de la formation</h1>
            <p>Rejoignez-nous dès aujourd'hui et faites la différence !</p>
            
            <a href="{{ route('ajouter_candidature', ['cohorte_id' => $cohorte->id]) }}">
                <button class="candidater-button">Candidater</button>
            </a>
        </div>
        
        <div class="contain">
            <div class="retour">
                <a href="{{ route('formations') }}">
                    <button class="candidater-button ">Retour</button>
                </a>
            </div>
        <div class="description">
            <h1>{{ $cohorte->referentiel->libelle }}</h1>
            <p>{{ $cohorte->referentiel->description }}</p>
        </div>
        <main class="main-entier">
           
        <section class="content-section">
            <div class="intro">
                <div class="date-info">
                    <div class="date-column-container">
                        <div class="date-column">
                            <div class="date-deadline">
                                <h2>Date limite de la candidature : <span class="date-red" style="text-transform: lowercase">{{ $cohorte->date_limite }}</span></h2>
                               
                                <hr>
                            </div>
                            <div class="developer-info" style="text-transform: lowercase">
                                <h2>Devenez des professionnels en queslques mois</h2>
                            </div>
                            <p class="pourcentage">100% de pratique</p>
                            <p>Type de formation : {{$cohorte->referentiel->type}}</p>
                            {{-- <p>{{ $cohorte->referentiel->libelle }} P{{ $cohorte->libelle }}</p> --}}
                            <div class="location-info">
                                <p>{{ $cohorte->referentiel->libelle }} P#{{ $cohorte->promo }}</p>
                                <p> Début : {{$cohorte->date_debut}} / Fin : {{$cohorte->date_fin}}</p>
                                <p>{{ $cohorte->duree}} mois</p>
                                <p>{{$cohorte->lieu_formation}}</p>
                                <p></span>Bénificiaires : {{$cohorte->nombre_participants }} participants</p>

                                <a href="{{ route('ajouter_candidature', ['cohorte_id' => $cohorte->id]) }}"><button class="btn btn-danger text-white">Postuler</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="https://media.istockphoto.com/id/1321462048/photo/digital-transformation-concept-system-engineering-binary-code-programming.jpg?s=1024x1024&w=is&k=20&c=SpP0lU7M-NkRIWUxZdL2rB_MtfegprwutPvbdy0TmMU=" alt="Image promotionnelle">
            </div>
        </section>

        <section class="content-section1">
            <div class="card1">
                <h3>compétences Techniques</h3><br>
                    @foreach($cohorte->referentiel->competences as $competence)
                        @if ($competence->type == "techniques")
                        <ul>
                            <li>{{ $competence->libelle }}</li>
                        </ul>
                        @endif
                    @endforeach
            </div>
            <div class="card2">
                <h3>Compétences Transversales</h3><br>
                    @foreach($cohorte->referentiel->competences as $competence)

                        @if ($competence->type == "transversales")

                        <ul>
                            <li>{{ $competence->libelle }}</li>
                        </ul>
                        @endif
                    @endforeach
            </div>
        </section>
    </div>
        <!-- <div class="card-box">
            <img src="https://media.istockphoto.com/id/1321462048/photo/digital-transformation-concept-system-engineering-binary-code-programming.jpg?s=1024x1024&w=is&k=20&c=SpP0lU7M-NkRIWUxZdL2rB_MtfegprwutPvbdy0TmMU=" alt="Image promotionnelle">
        </div> -->
    <!-- Footer -->
  <footer class="footer-bg text-white">
    <div class="text-center py-3 bg-light">
      <img src="https://simplon.sn/wp-content/uploads/2023/07/logo-simplonSenegal.png" alt="Logo" class="img-fluid" width="150px">
    </div>
    <div id="red">
        <div class="container py-4">
            <div class="row text-center">
              <div class="col-md-4 d-flex justify-content-center">
                <i class="bi bi-geo-alt mr-2"></i>
                <p>Cité Keur Gorgui</p>
              </div>
              <div class="col-md-4 d-flex justify-content-center">
                <i class="bi bi-telephone mr-2"></i>
                <p>+221 33 824 29 27</p>
              </div>
              <div class="col-md-4 d-flex justify-content-center">
                <i class="bi bi-envelope mr-2"></i>
                <p>Simplon@gmail.com</p>
              </div>
            </div>
          </div>
    </div>
  </footer>
  
  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
 
