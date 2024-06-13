<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Détails de la Candidature</title>
    <!-- Inclusion de Bootstrap CSS pour le style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <!-- Conteneur principal -->
    <div class="container mt-5">
        <h1>Détails de la Candidature</h1>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Biographie</h5>
                <p class="card-text">{{ $candidature->biographie }}</p>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Motivation</h5>
                <p class="card-text">{{ $candidature->motivation }}</p>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Informations de l'Utilisateur</h5>
                <p><strong>Nom :</strong> {{ $candidature->user->nom }}</p>
                <p><strong>Prénom :</strong> {{ $candidature->user->prenom }}</p>
                <p><strong>Email :</strong> {{ $candidature->user->email }}</p>
                <p><strong>Téléphone :</strong> {{ $candidature->user->telephone }}</p>
                <p><strong>Date de naissance :</strong> {{ $candidature->user->date_naissance }}</p>
            </div>
        </div>
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
        </div>
        <a href="/candidature" class="btn btn-primary">Retour</a>
    </div>

    <!-- Inclusion de Bootstrap JS pour les fonctionnalités interactives -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
