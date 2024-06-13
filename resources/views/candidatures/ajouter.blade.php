<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App Laravel</title>
    <!-- Chargement de Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <!-- Conteneur principal -->
    <div class="container">
        <div class="row">
            <div class="col s12">
                <!-- Titre de la page -->
                <h1>Soumettre une candidature</h1>
                <!-- Ligne de séparation -->
                <hr>
                <!-- Affichage des messages de statut -->
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
              

                <!-- Formulaire de soumission de candidature -->
                <form action="/ajouter/traitement" method="POST" class="form-group">
                    @csrf
                    <div class="mb-3">
                        <label for="cohorte_id" class="form-label">ID Cohorte</label>
                        <input type="text" class="form-control @error('cohorte_id') is-invalid @enderror" id="cohorte_id" name="cohorte_id" value="{{ old('cohorte_id') }}">
                        @error('cohorte_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="user_id" class="form-label">ID Utilisateur</label>
                        <input type="text" class="form-control @error('user_id') is-invalid @enderror" id="user_id" name="user_id" value="{{ old('user_id') }}">
                        @error('user_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="biographie" class="form-label">Biographie</label>
                        <textarea class="form-control @error('biographie') is-invalid @enderror" id="biographie" name="biographie" rows="4">{{ old('biographie') }}</textarea>
                        @error('biographie')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="motivation" class="form-label">Motivation</label>
                        <textarea class="form-control @error('motivation') is-invalid @enderror" id="motivation" name="motivation" rows="4">{{ old('motivation') }}</textarea>
                        @error('motivation')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <!-- Boutons de soumission et de retour -->
                    <br>
                    <button type="submit" class="btn btn-primary">Soumettre la candidature</button>
                    <br>
                    <a href="/candidature" class="btn btn-danger">Retourner</a>
                </form>

            </div>
        </div>
    </div>

    <!-- Chargement de Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
