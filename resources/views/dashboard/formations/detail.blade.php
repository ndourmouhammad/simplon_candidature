<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Plateforme de gestion des candidatures de Simplon SENEGAL</title>
    <link rel="stylesheet" href="{{ asset('candidatss/style.css') }}" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
      body {
    background-color: #F0F0F0;
    color: #000;
 
}

.container {
    width: 90%;
    margin: auto;
    padding: 20px;
}

.introduction h1 {
    color: #CE0033;
    font-size: 42px;
    font-style: bold;
}
.introduction .cohorte{
  color: #CE0033;
  font-size: 14px;
}

.introduction p {
    font-size: 16px;
    margin-bottom: 20px;
}

.info {
    margin-top: 20px;
}

.competences-visees {
  font-size: 20px;
  font-style: bold;
}

.info-utiles h3 {
    font-size: 20px;
    margin: 5px 0;
}



.competences h1 {
    font-size: 20px;
    margin-top: 40px;
    
}

.competences ul {
    list-style-type: none;
    padding: 0;
}

.competences ul li {
    font-size: 1.2em;
    margin: 5px 0;
}

.update-button {
    margin-top: 40px;
   
}

.update-button button {
    background-color: #ffa500;
    color: #000;
    font-size: 1.2em;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    border-radius: 6px
}

.update-button button:hover {
    background-color: #ff4c4c;
    color: #fff;
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
                    
                
                <span class="font-weight-bold">{{ Auth::user()->prenom }} {{ Auth::user()->nom }}</span>
                <span>{{ Auth::user()->role }}</span>
            
        </div>
            </div>

          </div>
          <div >
            <div class="header container">
                <h1>Les détails de la formation</h1>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="form-inline">
                    <input type="text" class="form-control mr-2" id="emailFilter" placeholder="adresse email">
                    <button class="btn btn-dark" onclick="filterTable()">filtrer</button>
                </div>
            </div>
            
               
            <div class="container">
              <div class="introduction">
                  <h1>{{ $cohorte->referentiel->libelle }} </h1>
                  <p class="cohorte">Cohorte {{ $cohorte->promo }}</p>
                  <p class="desc">{{ $cohorte->referentiel->description }}</p>
              </div>
              
              <div class="competences">
                <h1>Compétences visées</h1>
                <ul>
                    @foreach($cohorte->referentiel->competences as $competence)
                        <li>{{ $competence->libelle }}</li>
                    @endforeach
                </ul>
            </div>

              <div class="competences">
                <h1 >Les dates utiles</h1>
                  <div class="competences">
                    <ul>
                      <li>Date début de la formation : <span class="competences">{{ $cohorte->date_debut }}</span></li>
                      <li>Date fin de la formation (prévue) : <span class="competences">{{ $cohorte->date_fin }}</span></li>
                      <li>Date limite de l'appel à candidature : <span class="competences">{{ $cohorte->date_limite }} </span></li>
                      <li>Date de finalisation des entretiens : <span class="competences">{{ $cohorte->date_decision }}</span></li>
                      <li>Durée de la formation : <span class="competences">{{ $cohorte->duree }} mois</span></h3>
                      
                      </ul>
                      
                  </div>
              </div>

              <div class="competences">
                <ul>
                  <li>Lieu de la formation : <span class="date-limite">{{ $cohorte->lieu_formation }}</span></li>
                  <li>Nombre de participants : <span class="date-limite">{{ $cohorte->nombre_participants }} participants</span></li>
                  <li>Type de formation : <span class="date-limite">formation métier</span></li>
                </ul>
            </div>

              
             
      
              <div class="update-button">
                  <a href="{{ route('modifierFormationForm', $cohorte->id) }}"><button>Mettre à jour la formation</button></a>
              </div>
              
          </div>

        </main>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
