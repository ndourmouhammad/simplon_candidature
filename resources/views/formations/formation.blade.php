<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Formations</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
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
    <header class="header ">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center py-3">
                <img src="{{ asset('img/logo-s.png') }}" alt="Simplon Senegal" class="logo">
                <nav class="nav">
                    <a href="#" class="nav-link text-dark">Accueil</a>
                    <a href="#" class="nav-link text-dark">À propos</a>
                    <a href="#" class="nav-link text-dark">Nos formations</a>
                    <a href="#" class="nav-link text-dark">Contact</a>
                </nav>
            </div>
        </div>
    </header>

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
                            <h5 class="card-title"> <h3>{{ $cohorte->referentiel->libelle }} P#{{ $cohorte->libelle }}</h3></h5>
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
