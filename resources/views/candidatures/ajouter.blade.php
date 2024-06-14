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
            width: 75vh;
        }
        .image-background img {
            max-width: 100%;
            margin-top: -300px;
        }
        .form-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100vh; /* Prendre toute la hauteur de la fenêtre */
            border-radius: 10px;
        }
        .btn-envoyer {
    background-color: black; /* Fond noir */
    color: white; /* Texte blanc */
    border-color: black; /* Bordure noire */
    margin-right: 10px; /* Espacement entre les boutons */
}

.btn-envoyer:hover {
    background-color: white; /* Fond blanc au survol */
    color: black; /* Texte noir au survol */
}

.btn-annuler {
    background-color: transparent; /* Fond transparent */
    color: red; /* Texte rouge */
}

.btn-annuler:hover {
    background-color: red; /* Fond rouge au survol */
    color: white; /* Texte blanc au survol */
}
.form-title {
    margin-left: 2px; /* Marge de 75px entre le fond noir et le titre */
    font-size: 35px;
    font-weight: bold;
}
.form-container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    height: 100vh; /* Prendre toute la hauteur de la fenêtre */
    padding-top: 75px; /* Ajouter une marge en haut de 75px */
    padding-left: 55px; /* Ajouter une marge à gauche de 75px */
    padding-right: 55px; /* Ajouter une marge à droite de 75px */
    font-weight: 600;
}
.form-label,
.form-control {
    margin-top: 10px; /* Marge entre les labels/inputs et le fond noir */
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
                <img src="{{ asset('img/image-4.png') }}" class="img-fluid" alt="...">

            </div>

            <!-- Section du formulaire à droite -->
            <div class="col-md-6 form-container">
                <!-- Titre de la page au-dessus du formulaire -->
                <h1 class="form-title">Formulaire de candidature</h1>
               
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
                        <label for="cv_professionnel" class="form-label">Curriculum vitae</label>
                        <input type="file" class="form-control @error('cv_professionnel') is-invalid @enderror" id="cv_professionnel" name="cv_professionnel">
                        @error('cv_professionnel')
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
                    <button type="submit" class="btn btn-envoyer">Envoyer</button>
                    <a href="/candidature" class="btn btn-annuler">Annuler</a>
                </form>
            </div>
        </div>
    </div>

    <!-- Chargement de Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
