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
            <h1>Modifier le statut de la candidature</h1>
            <form action="{{ route('candidature.update', ['id' => $candidature->id]) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="statut">Statut</label>
                    <select name="statut" id="statut" class="form-control">
                        <option value="en attente" {{ $candidature->statut == 'en attente' ? 'selected' : '' }}>En attente</option>
                        <option value="acceptée" {{ $candidature->statut == 'acceptée' ? 'selected' : '' }}>Acceptée</option>
                        <option value="rejeté" {{ $candidature->statut == 'rejeté' ? 'selected' : '' }}>Rejeté</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Valider</button>
            </form>
        </div>

        <!-- Inclusion de Bootstrap JS pour les fonctionnalités interactives -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </div>
</body>
</html>
