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
  font-family: 'Nunito Sans', sans-serif;
}

      .card-equal-height {
        height: 100%;
        width: 19rem;
        background-color: #fff; /* Couleur de fond de la carte */
  border-radius: 10px; /* Coins arrondis */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Ombre subtile */
  padding: 10px; /* Espacement interne */
  margin: 10px; /* Espacement externe */
        
      
    }
   
    .card-text p {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 3; /* Number of lines to show */
        -webkit-box-orient: vertical;
    }
    .form-inline {
      order: -1
    }
   .flexer {
    display: flex;
    justify-content: space-between;
    
   }
   .add a {
    font-size: 24px;
    font-weight: bold;
    color: #000000;
    
   }
   .flexer #titre h1 {
    font-size: 42px;
    font-weight: :bold;
   }
   .contain {
    width: 98%;
    margin: 0 auto;
    
}
.titre h2 {
  font-size: 22px;
  color: #CE0033;
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
                <a href="#" class="nav-link active">
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
          <div class="contain" >
            <div class="header">
               
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
        <!-- Formulaire de recherche -->
        <form action="{{ route('search-formations') }}" method="GET">
            <div class=" d-flex">
                <input type="text" class="mr-2 form-control" id="query" name="query" placeholder="Entrez votre recherche...">
                <button type="submit" class="btn btn-dark">Rechercher</button>

            </div>
        </form>
            </div>
            <div class="flexer">
              <div id="titre">
                <h1 style="font-size: 42px; font-weight:bold">Les formations</h1>
              </div>
              <div class="add mb-5">
                  <a href="{{ route('ajoutFormationForm') }}"><img src="{{ asset('img/add.svg') }}" alt="">Ajouter une formation</a>
              </div>
            </div>
            
          

            
            <div class="ref mb-5">
              <div class="row">
                @forelse ($cohortes as $cohorte)
                <div class="col-md-4 mb-4 flex">
                      <div class="card card-equal-height">
                          <div class="card-body d-flex flex-column">
                              <h5 class="card-title">
                                  <h3>
                                      <a href="{{ route('detail-formation-personnel', $cohorte->id) }}" style="color: #000000; font-size:20px; font-weight:500">
                                          {{ $cohorte->referentiel->libelle }}
                                      </a>
                                  </h3>
                              </h5>
                              <p class="card-text">
                                  <p style="font-size: 16px">{{ Str::limit($cohorte->description, 70) }}</p> <!-- Limite à 100 caractères -->
                              </p>
                              <div class="mt-auto d-flex justify-content-between">
                                  <a href="{{ route('supprimer-formation', $cohorte->id) }}">
                                      <button class="btn btn-danger text-white">Supprimer</button>
                                  </a>
                                  
                              </div>
                          </div>
                      </div>
                  </div>
                  @empty
                  <p class="text-center">Aucune formation trouvée.</p>
              @endforelse                  
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
