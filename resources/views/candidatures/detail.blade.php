<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KY4o8EID6gzl32nTbDZnO4QEOQn19TkvT0eO6h5bZMtLqFJumHsygHg2A+3LBmR1EnbEJ6fnXw9HBEOU8t19RQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('formationCss/accueil.css') }}" />
    <style>
        body {
            background-color: #F0F0F0;
            font-family: 'nunito-sans', sans-serif;
        }
        .navbar-light {
            background-color: #fff !important;
        }
    </style>
</head>
<body>
    <div class="accueil container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="https://simplon.sn/wp-content/uploads/2023/07/logo-simplonSenegal.png" alt="Logo" width="130px" class="image" /></a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">A propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nos formations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-person-circle"></i> Mon compte</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Conteneur principal -->
        <div class="container mt-5">
            <!-- Titre de la page -->
            <h1>{{ $candidature->user->prenom }} {{ $candidature->user->nom }}</h1>
            
            <!-- Informations de l'utilisateur avec icônes -->
            <p><i class="fas fa-birthday-cake"></i> {{ $candidature->user->date_naissance }}</p>
            <p><i class="fas fa-phone"></i> {{ $candidature->user->telephone }}</p>
            <p><i class="fas fa-envelope"></i> {{ $candidature->user->email }}</p>
            
            <!-- Informations de la cohorte -->
            <p><strong>Cohorte :</strong> {{ $candidature->cohorte->libelle }}</p>

            <!-- Section biographie -->
            <hr>
            <h2>Biographie</h2>
            <p>{{ $candidature->biographie }}</p>

            <!-- Section motivation -->
            <hr>
            <h2>Motivation</h2>
            <p>{{ $candidature->motivation }}</p>

            <!-- Section CV professionnel -->
            <hr>
            <h2>CV Professionnel</h2>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">CV Professionnel</h5>
                @if ($candidature->cv_professionnel)
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="{{ asset('storage/' . $candidature->cv_professionnel) }}" style="width: 100%; height: 500px;"></iframe>
                    </div>
                @else
                    <p>Aucun CV téléchargé</p>
                @endif
            </div>

            <!-- Bouton de retour -->
            <a href="/candidature" class="btn btn-primary mt-3">Retourner</a>
        </div>

        <!-- Inclusion de Bootstrap JS pour les fonctionnalités interactives -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </div>
</body>
</html>
