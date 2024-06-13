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
                <a href="#" class="nav-link">
                    <img src="{{ asset('img/candidats.svg') }}" alt="candidature"> 
                    <span>Candidatures</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
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
                    <span class="badge badge-secondary">Chef de projet</span>
                    <span class="font-weight-bold">Wahab Diallo</span>
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
            
               
            <div class="container mt-5">

                <div class="container">
                    <form action="{{ route('modifier-formation', $cohorte->id) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="libelle">Libelle de la formation</label>
                                    <input type="text" class="form-control" id="libelle" name="libelle" value="{{ $cohorte->libelle }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="promo">Promotion</label>
                                    <input type="number" class="form-control" id="promo" name="promo" value="{{ $cohorte->promo }}" required>
                                </div>
                            </div>
                        </div>
                
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" name="description" required>{{ $cohorte->description }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="competences">Compétences</label>
                                    <select name="competences[]" id="competences" class="form-control" multiple required>
                                        @foreach($competences as $competence)
                                            <option value="{{ $competence->id }}" {{ in_array($competence->id, $selectedCompetences) ? 'selected' : '' }}>{{ $competence->libelle }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date_debut">Date début</label>
                                    <input type="date" class="form-control" id="date_debut" name="date_debut" value="{{ $cohorte->date_debut }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date_fin">Date fin</label>
                                    <input type="date" class="form-control" id="date_fin" name="date_fin" value="{{ $cohorte->date_fin }}" required>
                                </div>
                            </div>
                        </div>
                
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date_limite">Date limite</label>
                                    <input type="date" class="form-control" id="date_limite" name="date_limite" value="{{ $cohorte->date_limite }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date_decision">Date décision</label>
                                    <input type="date" class="form-control" id="date_decision" name="date_decision" value="{{ $cohorte->date_decision }}" required>
                                </div>
                            </div>
                        </div>
                
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="duree">Durée</label>
                                    <input type="number" class="form-control" id="duree" name="duree" value="{{ $cohorte->duree }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre_participants">Nombre de participants</label>
                                    <input type="number" class="form-control" id="nombre_participants" name="nombre_participants" value="{{ $cohorte->nombre_participants }}" required>
                                </div>
                            </div>
                        </div>
                
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lieu_formation">Lieu de la formation</label>
                                    <input type="text" class="form-control" id="lieu_formation" name="lieu_formation" value="{{ $cohorte->lieu_formation }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="referentiel_id">Référentiel</label>
                                    <select name="referentiel_id" id="referentiel_id" class="form-control" required>
                                        @foreach($referentiels as $referentiel)
                                            <option value="{{ $referentiel->id }}" {{ $cohorte->referentiel_id == $referentiel->id ? 'selected' : '' }}>{{ $referentiel->libelle }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                
                        <button type="submit" class="btn btn-primary">Mettre à jour</button>
                    </form>
                </div>
                
            </div>
        
            <!-- jQuery and Select2 JS -->
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('.select2').select2({
                        placeholder: "Sélectionnez des compétences",
                        allowClear: true
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
