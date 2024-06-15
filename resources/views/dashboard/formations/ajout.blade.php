<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Plateforme de gestion des candidatures de Simplon SENEGAL</title>
    <link rel="stylesheet" href="{{ asset('candidatss/style.css') }}" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <style>
        .select2-selection__choice {
            background-color: #007bff !important;
            color: white !important;
        }
        .select2-selection__choice__remove {
            color: white !important;
        }
        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            border: 1px solid #007bff !important;
        }
        @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,400;6..12,700&display=swap');
body {
  font-family: 'Nunito Sans', sans-serif;
}
.container h1 {
    font-size: 42px;
    font-weight: 900
}
label {
    font-size: 20px;
    font-weight: 500
}
input{
    border: #000 1px solid;
    border-radius: 10px;
}
.info-utiles button {
    width: 30%;
  }
  form-row {
    display: flex;
    justify-content: space-between
  }
    </style>

  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <img class="logo" src="{{ asset('img/logo.png') }}" alt="Simplon Logo" />
            <ul class="nav flex-column">
              <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link ">
                    <img src="{{ asset('img/dashboard-24.svg') }}" alt="tableau"> 
                    <span>Tableau de bord</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('formations-personnel') }}" class="nav-link active">
                    <img src="{{ asset('img/school.svg') }}" alt="formation"> 
                    <span>Formations</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('candidats') }}" class="nav-link">
                    <img src="{{ asset('img/person.svg') }}" alt="candidats"> 
                    <span>Candidats</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('candidatures-personnel') }}" class="nav-link">
                    <img src="{{ asset('img/candidats.svg') }}" alt="candidature"> 
                    <span>Candidatures</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('auth.deconnexion') }}" class="nav-link">
                    <img src="{{ asset('img/logout-24dp-fill0-wght400-grad0-opsz24-1.svg') }}" alt="deconnexion"> 
                    <span>Déconnexion</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
        
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            
            <div class="col-md-8">
                <div class="titre">
                    <h5>Plateforme de gestion des candidatures de Simplon SENEGAL</h5>
                </div>
            </div>
            <div class="col-md-4 text-md-right">
                <div class="btn-group">
                    
                
                        <span class="font-weight-bold">{{ Auth::user()->prenom }} {{ Auth::user()->nom }}</span>
                        <span>{{ Auth::user()->role }}</span>
                    
                </div>
            </div>

          </div>
          <div >
            <div class="header container">
                <h1>Ajouter une nouvelle formation</h1>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                
            </div>
            
               
            <div class="container mt-2">
                <form action="{{ route('ajout-formation') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="libelle" class="form-label">Libelle de la formation</label>
                            <input type="text" class="form-control" id="libelle" name="libelle" placeholder="le nom de la formation" value="{{ old('libelle') }}">
                            @error('libelle')
                            <div class="error text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="promo" class="form-label">La promo</label>
                            <input type="number" class="form-control" id="promo" name="promo" placeholder="la promotion" value="{{ old('promo') }}">
                            @error('promo')
                            <div class="error text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="description" class="form-label">La présentation</label>
                            <textarea class="form-control" id="description" name="description" rows="4" placeholder="présentation de la formation" >{{ old('description') }}</textarea>
                            @error('description')
                            <div class="error text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="competences">Compétences</label>
                            @foreach($competences as $competence)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="competence{{ $competence->id }}" name="competences[]" value="{{ $competence->id }}">
                                <label class="form-check-label" for="competence{{ $competence->id }}">
                                    {{ $competence->libelle }}
                                </label>
                            </div>
                            @endforeach
                            @error('competences')
                            <div class="error text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="date_debut" class="form-label">Date début</label>
                            <input type="date" class="form-control" id="date_debut" name="date_debut" value="{{ old('date_debut') }}">
                            @error('date_debut')
                            <div class="error text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="date_fin" class="form-label">Date fin</label>
                            <input type="date" class="form-control" id="date_fin" name="date_fin" value="{{ old('date_fin') }}">
                            @error('date_fin')
                            <div class="error text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="date_limite" class="form-label">Date limite des candidautres</label>
                            <input type="date" class="form-control" id="date_limite" name="date_limite" value="{{ old('date_limite') }}">
                            @error('date_limite')
                            <div class="error text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="date_decision" class="form-label">Date de finalisation des entretiens</label>
                            <input type="date" class="form-control" id="date_decision" name="date_decision"  value="{{ old('date_decision') }}">
                            @error('date_decision')
                            <div class="error text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="duree" class="form-label">Durée de la formation</label>
                            <input type="number" class="form-control" id="duree" name="duree" placeholder="durée de la formation" value="{{ old('duree') }}">
                            @error('duree')
                            <div class="error text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nombre_participants" class="form-label">Nombre de participants</label>
                            <input type="number" class="form-control" id="nombre_participants" name="nombre_participants" placeholder="nombre de participants" value="{{ old('nombre_participants') }}">
                            @error('nombre_participants')
                            <div class="error text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="lieu_formation" class="form-label">Lieu de la formation</label>
                            <input type="text" class="form-control" id="lieu_formation" name="lieu_formation" placeholder="lieu de la formation" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="referentiel_id">Référentiel</label>
                            <select name="referentiel_id" id="referentiel_id" class="form-control">
                                @foreach($referentiels as $referentiel)
                                <option value="{{ $referentiel->id }}">{{ $referentiel->libelle }}</option>
                                @endforeach
                            </select>
                            @error('libelle')
                            <div class="error text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>
                    
                    <button type="submit"  class="btn btn-dark text-white py-2" style="width: 18%">Envoyer</button>
                </form>   
            </div>
        
            <!-- jQuery and Select2 JS -->
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
            <script>
                $(document).ready(function() {
                    // Initialisation de Select2 pour d'autres champs si nécessaire
                    $('.select2').select2({
                        placeholder: "Sélectionnez des compétences",
                        allowClear: true
                    });
            
                    // Désactiver Select2 pour le champ des compétences
                    $('#competences').select2('destroy');
            
                    // Option pour effacer les compétences sélectionnées
                    $('.select2-selection__clear').on('click', function() {
                        $('#competences').val(null).trigger('change');
                    });
                });
            </script>
            
        

        </main>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
