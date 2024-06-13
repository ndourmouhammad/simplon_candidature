<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste des candidatures</title>
    <!-- Inclusion de Bootstrap CSS pour le style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
</head>
<body>
    <!-- Conteneur principal -->
    <div class="container mt-5">
        <!-- Titre de la page -->
        <!-- Bouton pour ajouter un nouvel article -->
        {{-- <a href="/ajouter/candidature" class="btn btn-primary"></a>    --}}

        <!-- Grille Bootstrap pour afficher les articles -->
        <div class="container">
            <h1>Détails de la Candidature</h1>
   

            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Biographie</h5>
                </div>
            </div>
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
            <div class="mb-3">
                <label for="user_id" class="form-label">ID Utilisateur</label>
                <input type="text" class="form-control" id="user_id" name="user_id" value="{{ old('user_id') }}">
            </div>
            <div class="mb-3">
                <label for="cohorte_id" class="form-label">ID Cohorte</label>
                <input type="text" class="form-control" id="cohorte_id" name="cohorte_id" value="{{ old('cohorte_id') }}">
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Informations de l'Utilisateur</h5>
                    <p><strong>Nom :</strong> {{ $candidature->user->nom }}</p>
                    <p><strong>Prenom :</strong> {{ $candidature->user->prenom }}</p>
                    <p><strong>Email :</strong> {{ $candidature->user->email }}</p>
                    <p><strong>Téléphone :</strong> {{ $candidature->user->telephone }}</p>
                    <p><strong>Date de naissance :</strong> {{ $candidature->user->date_naissance }}</p>
                    <p><strong>Email :</strong> {{ $candidature->user->email }}</p>

                    <!-- Ajoutez d'autres informations de l'utilisateur si nécessaire -->
                </div>
            </div>
            <a href="/candidature" class="btn btn-primary">Retourner</a>
        </div>
        
    </div>

    <!-- Inclusion de Bootstrap JS pour les fonctionnalités interactives -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
