<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App Laravel</title>
    <!-- Chargement de Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Ajout de styles personnalisés -->
    <style>
        .image-background {
            background-color: #212529;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Prendre toute la hauteur de la fenêtre */
        }
        .image-background img {
            max-width: 100%;
            height: auto;
        }
        .form-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100vh; /* Prendre toute la hauteur de la fenêtre */
        }
    </style>
</head>
<body>
    <!-- Conteneur principal -->
    <div class="container-fluid">
        <div class="row">
            <!-- Section de l'image à gauche avec fond personnalisé -->
            <div class="col-md-6 image-background">
                <link rel="stylesheet" href="{{ asset('tableau/style.css') }}" />
                <img src="{{ asset('img/couverture5.webp') }}" class="img-fluid" alt="...">

                <img src="{{ asset('img/couverture5.webp') }}" alt="Image descriptive" class="img-fluid">
            </div>

            <!-- Section du formulaire à droite -->
            <div class="col-md-6 form-container">
                <!-- Titre de la page au-dessus du formulaire -->
                <h1>Soumettre une candidature</h1>
               
                <!-- Affichage des messages de statut -->
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
              
                <!-- Formulaire de soumission de candidature -->
                <form action="{{ route('ajouter_candidature_traitement') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Champ caché pour l'ID de la cohorte -->
                    <input type="hidden" name="cohorte_id" value="{{ $cohorte_id }}">
                
                    <!-- Les autres champs du formulaire -->
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
                    <div class="mb-3">
                        <label for="cv_professionnel" class="form-label">Télécharger votre CV</label>
                        <input type="file" class="form-control @error('cv_professionnel') is-invalid @enderror" id="cv_professionnel" name="cv_professionnel">
                        @error('cv_professionnel')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                
                    <!-- Boutons de soumission et de retour -->
                    <button type="submit" class="btn btn-primary">Soumettre la candidature</button>
                    <a href="/candidature" class="btn btn-danger">Retourner</a>
                </form>
            </div>
        </div>
    </div>

    <!-- Chargement de Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
