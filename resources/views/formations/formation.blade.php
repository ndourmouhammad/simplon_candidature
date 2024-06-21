<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Formations</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="{{ asset('formationCss/accueil.css') }}" />
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

        .section-title {
            margin-top: 40px;
            font-weight: bold;
        }

        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 100%;
            height: 250px; /* Define a fixed height for the cards */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow: hidden;
        }

        h3{
            font-size: 16px;
            font-weight: bold;
            height: 40px; 
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .card-text {
            font-size: 14px;
            flex-grow: 1; 
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }

        .banniere {
            height: 250px;
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

        .footer{
            background-color: #c3002f
        }

        .btn-outline-primary {
            width: 100%; /* Ensure the button takes the full width of the card */
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

    <!-- Banner -->
    <div class="pt-4 banniere">
        <h2 class="font-weight-bold text-light" >Nos formations</h2>
    </div>

    

    <!-- Main Content -->
    <main class="container mt-5 ">
        <div class="d-flex justify-content-between align-items-center  my-5">
            <h2></h2>
        <!-- Formulaire de recherche -->
        <form action="{{ route('search-formations') }}" method="GET">
            <div class=" d-flex">
                <input type="text" class="form-controlv mr-2" id="query" name="query" placeholder="Entrez votre recherche...">
                <button type="submit" class="btn btn-dark">Rechercher</button>
    </div>
</div>
    <div>
        @if(session('status'))
        <div class="alert alert-danger">
            {{ session('status') }}
        </div>
    @endif
    </div>
        <div class="mb-5">
            <div class="row">
                @forelse ($cohortes as $cohorte)
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><h3>{{ $cohorte->referentiel->libelle }}</h3></h5>
                            <p class="card-text">{{ Str::limit($cohorte->description, 70) }}</p>
                            <a href="{{route('detail-formation', $cohorte->id)}}" class="btn btn-outline-dark mt-auto">Voir</a>
                        </div>
                    </div>
                </div>
                @empty
                <p class="text-center">Aucune formation trouvée.</p>
            @endforelse
            </div>
        </div>
    </main>
    
<!-- Info Section -->
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