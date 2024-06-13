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
        body {
            font-family: Arial, sans-serif;
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
        .container .nav-color .nav-link {
    color: #000000 !important;
}


    </style>
</head>
<body>
    <!-- Header -->
    <header class="header ">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center ">
                <img src="{{ asset('img/logo-s.png') }}" alt="Simplon Senegal" class="logo">
                <nav class="nav nav-color">
                    <a href="#" class="nav-link" >Accueil</a>
                    <a href="#" class="nav-link" >À propos</a>
                    <a href="{{ route('formations') }}" class="nav-link" >Nos formations</a>
                    <a href="#" class="nav-link" >Contact</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Banner -->
    <div class="mb-4 banniere">
        
        <button class="btn btn-light text-danger">Candidater</button>
    </div>

    <main class="main-entier">
        <div class="introduction">
            <h1>{{ $cohorte->referentiel->libelle }}</h1>
            <p>{{ $cohorte->referentiel->description }}</p>
        </div>

        <div class="info">
            <div class="info-utiles">
                <h3>Date limite de candidature : <span class="date-limite">19 / 09/ 2024</span></h3>
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
                    <button class="btn btn-danger text-white">Postuler</button>
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

        <!-- Footer -->
        <footer class="footer bg-danger text-white py-4 mt-5">
            <div class="container text-center">
                <p>Cite keur gorgui | +221 33 824 29 27 | Simplon@gmail.com</p>
            </div>
        </footer>
    
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
    </html>
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{ $cohorte->referentiel->libelle }} {{ $cohorte->libelle }}
    <p>{{ $cohorte->description }}</p>
    <p>date debut et date fin : du {{$cohorte->date_debut}} au {{$cohorte->date_fin}}</p>
    <p>Nombre participants : {{$cohorte->nombre_participants}}</p>
    <p>Lieu : {{$cohorte->lieu_formation}}</p>
    <p>Type de référentiel : {{$cohorte->referentiel->type}}</p>
    <p>Competences:</p>
    <ul>
        @foreach($cohorte->referentiel->competences as $competence)
            <h1>Composants {{ $competence->type }}</h1>
            <li>{{ $competence->libelle }}</li>
        @endforeach
    </ul>
</body>
</html> --}}