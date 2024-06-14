<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Formations</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('formationCss/accueil.css') }}" />
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,400;6..12,700&display=swap');
body {
  
}
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

        .footer {
            background-color: #d21d1c;
            text-align: center;
            color: white;
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
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-person-circle"></i> Mon compte</a>
                </li> --}}
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
    <div class="mt-4 banniere">
        <h2 class="font-weight-bold text-white">Nos formations</h2>
        <button class="btn btn-light">Se connecter</button>
    </div>

    <!-- Main Content -->
    <main class="container mt-5">
        <div class="mb-5">
            
            
            <div class="row">
                @foreach($cohortes as $cohorte)
                <!-- Cards go here -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"> <h3>{{ $cohorte->libelle }}</h3></h5>
                            <p class="card-text"><p>{{ $cohorte->description }}</p>
                            <a href="{{route('detail-formation', $cohorte->id)}}" class="btn btn-light">Voir</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
        </div>
    </main>
   
  
    
    
    



    <!-- Footer -->
    <footer class="footer bg-danger text-white py-4">
        <div class="container text-center">
            <p>Cite keur gorgui | +221 33 824 29 27 | Simplon@gmail.com</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
