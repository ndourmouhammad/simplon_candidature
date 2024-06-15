<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $cohorte->referentiel->libelle }}</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
    <link rel="stylesheet" href="{{ asset('candidatss/formation.css') }}" />
    <style>
        
        @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,400;6..12,700&display=swap');

        body {
            font-family: 'Nunito Sans', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        
        header {
            background-color: #fff;
            width: 100%;
            height: 70px;
            color: black;
        }

        .header .logo {
            width: 150px;
        }

        .nav .nav-link {
            margin-left: 20px;
            font-weight: bold;
            color: #000000 !important; /* Forcing the color black */
        }

        .section-title {
            margin-top: 40px;
            font-weight: bold;
        }

        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 100%;
            height: 100%;
        }

        .card-title {
            font-size: 18px;
            font-weight: bold;
        }

        .card-text {
            font-size: 14px;
        }

        .banniere {
            height: 296px;
            background-color: #c3002f;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: start;
            justify-content: center;
            padding-left: 25px;
            gap: 25px;
            color: #fff;
        } 

        main {
            flex: 1;
        }

        .footer {
            background-color: #d21d1c;
            text-align: center;
            color: white;
        }
        .footer{
            background-color: #c3002f
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
                <li class="nav-item">
                    <a class="nav-link" href="#">A propos</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('formations') }}">Nos formations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                @auth
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-person-circle"></i>  <span class="font-weight-bold">{{ Auth::user()->prenom }} {{ Auth::user()->nom }}</span></a>
                </li> 
                <li class="nav-item">
                  <a href="{{ route('auth.deconnexion') }}" class="btn btn-outline-danger">Déonnexion</a>
                </li>
                @endauth
            </ul>
        </div>
    </nav>

    <!-- Banner -->
    <div class="mb-4 banniere">
        
        <a href="{{ url()->previous() }}" class="btn btn-light text-danger">Retour</a>
    </div>

    <main class="main-entier mb-5">
        <div class="introduction">
            <h1>{{ $cohorte->referentiel->libelle }}</h1>
            <p>{{ $cohorte->referentiel->description }}</p>
        </div>

        <div class="info">
            <div class="info-utiles">
                <h3>Date limite de candidature : <span class="date-limite">{{ $cohorte->date_limite }}</span></h3>
                <hr>
                <p>Devenez compétents en quelques mois avec cette formation.</p>
                <div class="pratique">100% PRATIQUE</div>
                <p>Type de référentiel : {{$cohorte->referentiel->type}}</p>
                <p>{{ $cohorte->referentiel->libelle }} P{{ $cohorte->libelle }}</p>
                <p>Début : {{$cohorte->date_debut}} / Fin : {{$cohorte->date_fin}}</p>
                <p>Durée :  {{ $cohorte->duree}} mois</p>
                        <p>Lieu : {{$cohorte->lieu_formation}}</p>
                        <p>Date de limite de la candidature : {{ $cohorte->date_limite }}</p>
                        <p>Bénificiaires : {{$cohorte->nombre_participants }} participants</p>
                    <a href="{{ route('ajouter_candidature', ['cohorte_id' => $cohorte->id]) }}"><button class="btn btn-danger text-white">Postuler</button></a>
            </div>
            <img src="{{ asset('img/Rectangle.png') }}" alt="">
        </div>
        <div class="competences">
            <div class="techniques">
            <h1>Compétences techniques</h1>
              
                  @foreach($cohorte->referentiel->competences as $competence)
                  
              @if ($competence->type == "techniques")
              
              <li>{{ $competence->libelle }}</li>
              @endif
          @endforeach
              </div>
              <div class="transversales">
                <h1>Compétences transversales</h1>
                  @foreach($cohorte->referentiel->competences as $competence)
                  
                  @if ($competence->type == "transversales")
                  
                  <li>{{ $competence->libelle }}</li>
                  @endif
              @endforeach
              </div>
          </div>
    </main>

    <div class="info-section">
        <div class="row">
            <div class="col-md-12 text-center bg-light py-3">
                <img src="https://simplon.sn/wp-content/uploads/2023/07/logo-simplonSenegal.png" alt="Logo" class="img-fluid" />
            </div>
            <div class="footer d-flex" >
            <div class="col-md-4  justify-content-center  py-4">
                <i class="bi bi-geo-alt text-light"></i>
                <p class="text-white pl-2">Cite keur gorgui</p>
            </div>
            <div class="col-md-4  justify-content-center  py-4">
                <i class="bi bi-telephone text-light"></i>
                <p class="text-white pl-2">+221 33 824 29 27</p>
            </div>
            <div class="col-md-4  justify-content-center  py-4">
                <i class="bi bi-envelope text-light"></i>
                <p class="text-white pl-2">Simplon@gmail.com</p>
            </div>
        </div>
        </div>
    </div>
    
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
    </html>