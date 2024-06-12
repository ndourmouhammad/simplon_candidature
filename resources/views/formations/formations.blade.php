<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Créer un Referentiel</title>
</head>
<body>
    <div class="my-5">
        <h3 class="text-wrapper-17">Créer un Referentiel</h3>
        <form method="POST" action="{{ route('enregistrer', ['id' => $livre->id]) }}">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputLibelle">Libelle</label>
                    <input type="text" class="form-control" id="inputLibelle" placeholder="Libelle" value="{{ referentiel->libelle}}" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputType">Type</label>
                    <select class="form-control" id="inputType" name="type" required  value="{{ refrentiel->type}}">
                        <option value="initiation">Initiation</option>
                        <option value="métier">Métier</option>
                        <option value="spécialisation">Spécialisation</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputDescription">Description</label>
                <textarea class="form-control" id="inputDescription" rows="3" placeholder="Description"  required>{{ $referentiel->description}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>
</body>
</html>
