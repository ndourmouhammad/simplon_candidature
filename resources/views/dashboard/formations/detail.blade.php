<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Plateforme de gestion des candidatures de Simplon SENEGAL</title>
    <link rel="stylesheet" href="{{ asset('candidatss/style.css') }}" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,400;6..12,700&display=swap');


      body {
    background-color: #F0F0F0;
    color: #000;
    font-family: 'Nunito Sans', sans-serif;
 
}

.contain {
    width: 98%;
    margin: 0 auto;
    
}
.titre h2 {
  font-size: 22px;
  color: #CE0033;
}


.info {
    margin-top: 20px;
}

.competences ul {
    list-style-type: none;
    padding: 0;
}


.update-button {
    margin-top: 40px;
   
}.cohorte {
  color: #CE0033
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

.introduction h1 {
  font-weight: bold;
  font-size: 42px;
  color: #CE0033;
}
h4 {
  font-weight: bold;
  font-size: 20px;
}
li, p {
  font-size: 16px;
font-style:regular;
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
                    <span>Dashboard</span>
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
                    <h2>Plateforme de gestion des candidatures de Simplon SENEGAL</h2>
                </div>
            </div>
            <div class="col-md-4 text-md-right">
              <div class="btn-group">
                    
                
                <span class="font-weight-bold">{{ Auth::user()->prenom }} {{ Auth::user()->nom }}</span>
                <span>{{ Auth::user()->role }}</span>
            
        </div>
            </div>

          </div>
          <div  class="contain">
            <div class=" header ">
                <h1>Les détails de la formation</h1>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                
            </div>
            
               
            <div class="">
              <div class="introduction">
                  <h1>{{ $cohorte->referentiel->libelle }} </h1>
                  <p class="cohorte">Cohorte {{ $cohorte->promo }}</p>
                  <h4>Présentation</h4>
                  <p>{{ $cohorte->referentiel->description }}</p>
              </div>
              
              <div class="competences">
                <h4>Compétences visées</h4>
                <ul>
                    @foreach($cohorte->referentiel->competences as $competence)
                    <ul>
                      <li>{{ $competence->libelle }}</li>
                    </ul>
                        
                    @endforeach
                </ul>
            </div>

              <div class="competences">
                <h4 >Les dates utiles</h4>
                  <div class="competences">
                    <ul>
                      <li>Date début de la formation : {{ $cohorte->date_debut }}</li>
                      <li>Date fin de la formation (prévue) : {{ $cohorte->date_fin }}</li>
                      <li>Date limite de l'appel à candidature : {{ $cohorte->date_limite }} </li>
                      <li>Date de finalisation des entretiens : {{ $cohorte->date_decision }}</li>
                      <li>Durée de la formation : {{ $cohorte->duree }} mois</p>
                    </ul>
                      
                      
                      
                      
                  </div>
              </div>

              <div class="competences">
                <h4>Lieu de la formation</h4>
                <ul>
                  <li>{{ $cohorte->lieu_formation }}</li>
                </ul>
                
                <h4>Nombre de participants</h4>
                <ul>
                  <li>{{ $cohorte->nombre_participants }} participants</li>
                </ul>
                

                <h4>Type de référentiel</h4>
                <ul>
                  <li>{{$cohorte->referentiel->type}}</li>
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
