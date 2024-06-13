<!DOCTYPE html>
<html>
<head>
    <title>Créer un Référentiel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Créer un Référentiel</h1>
    <form action="{{ route('referentiels.store') }}" method="POST">
        @csrf
        <h3>Détails du Référentiel</h3>
        <div class="form-group">
            <label for="libelle">Libellé</label>
            <input type="text" class="form-control" id="libelle" name="libelle" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <select class="form-control" id="type" name="type" required>
                <option value="initiation">Initiation</option>
                <option value="métier">Métier</option>
                <option value="spécialisation">Spécialisation</option>
            </select>
        </div>

        <h3>Compétences Associées</h3>
        <div class="form-group">
            @foreach($competences as $competence)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="competences[]" value="{{ $competence->id }}" id="competence{{ $competence->id }}">
                    <label class="form-check-label" for="competence{{ $competence->id }}">
                        {{ $competence->libelle }}
                    </label>
                </div>
            @endforeach
        </div>

        <h3>Détails de la Cohorte</h3>
        <div class="form-group">
            <label for="cohorte_libelle">Libellé</label>
            <input type="text" class="form-control" id="cohorte_libelle" name="cohorte_libelle" required>
        </div>
        <div class="form-group">
            <label for="cohorte_description">Description</label>
            <textarea class="form-control" id="cohorte_description" name="cohorte_description" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="cohorte_date_debut">Date de Début</label>
            <input type="date" class="form-control" id="cohorte_date_debut" name="cohorte_date_debut" required>
        </div>
        <div class="form-group">
            <label for="cohorte_date_fin">Date de Fin</label>
            <input type="date" class="form-control" id="cohorte_date_fin" name="cohorte_date_fin" required>
        </div>
        <div class="form-group">
            <label for="cohorte_lieu_formation">Lieu de Formation</label>
            <input type="text" class="form-control" id="cohorte_lieu_formation" name="cohorte_lieu_formation" required>
        </div>
        <div class="form-group">
            <label for="cohorte_nombre_participants">Nombre de Participants</label>
            <input type="number" class="form-control" id="cohorte_nombre_participants" name="cohorte_nombre_participants" required>
        </div>

        <button type="submit" class="btn btn-primary">Créer</button>
    </form>
</div>
</body>
</html>
