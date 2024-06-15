<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Plateforme de gestion des candidatures de Simplon SENEGAL</title>
    <link rel="stylesheet" href="{{ asset('tableau/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('candidatss/style.css') }}" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;700&display=swap');

      body {
        font-family: 'Nunito Sans', sans-serif;
      }

      .dashboard .text-wrapper-11 {
        position: absolute;
        width: 411px;
        top: 679px;
        left: 320px;
        color: #000000;
        font-size: var(--titre-qccueil-font-size);
        letter-spacing: var(--titre-qccueil-letter-spacing);
        line-height: var(--titre-qccueil-line-height);
        white-space: nowrap;
        font-style: var(--titre-qccueil-font-style);
      }
  
      .dashboard .frame-5 {
        position: absolute;
        width: 1033px;
        height: 140px;
        top: 772px;
        left: 320px;
        background-color: #ffffff;
        border-radius: 8px;
        overflow: hidden;
      }
  
      .dashboard .group-7,
      .dashboard .group-10,
      .dashboard .group-11,
      .dashboard .group-12,
      .dashboard .group-13 {
        position: absolute;
        width: 193px;
        height: 53px;
      }
  
      .dashboard .group-8 {
        position: absolute;
        width: 137px;
        height: 46px;
        top: 0;
        left: 0;
      }
  
      .dashboard .group-9 {
        position: relative;
        width: 141px;
        height: 46px;
      }
  
      .dashboard .text-wrapper-12 {
        position: absolute;
        width: 137px;
        top: -1px;
        left: -1px;
        -webkit-text-stroke: 1px #4c464633;
        font-weight: var(--titre-font-weight);
        color: #000000;
        font-size: var(--titre-font-size);
        letter-spacing: var(--titre-letter-spacing);
        line-height: var(--titre-line-height);
        white-space: nowrap;
        font-style: var(--titre-font-style);
      }
  
      .dashboard .text-wrapper-13 {
        position: absolute;
        width: 137px;
        top: 30px;
        left: -1px;
        -webkit-text-stroke: 1px #4c464633;
        font-weight: 400;
        color: #0000009e;
        font-size: 20px;
        letter-spacing: 0;
        line-height: normal;
        white-space: nowrap;
      }
  
      .dashboard .line {
        position: absolute;
        width: 1px;
        height: 50px;
        top: 3px;
        left: 193px;
        object-fit: cover;
      }
  
      .card {
        border-radius: 8px;
        background-color: #c3002f; /* Fond rouge */
        margin-bottom: 30px;
      }

      .card-img-bottom {
        width: 390px; /* Agrandissement de la taille de l'image */
        height: 219px;
      }

      .card-title,
      .card-text {
        color: rgb(12, 12, 12); /* Texte noir */
        margin-right: 30px;
      }

      .card-welcome {
        font-size: 32px; /* Taille de police augmentée */
        font-weight: 700
      }

      .card-custom {
        background-color: white;
        color: #c3002f; /* Texte rouge */
        width: 272px; /* Largeur de la carte */
        height: 163px; /* Hauteur de la carte */
        border: 2px solid #ede0e3; /* Couleur des bordures de la carte */
        margin: 10px; /* Espacement entre les cartes */
      }

      .icon-wrapper {
        font-size: 2rem;
        margin-right: 1rem;
        color: #c3002f; /* Couleur de l'icône */
        border: 2px solid #f6e9ec; /* Bordure solide de couleur rouge */
        border-radius: 50px; /* Bord arrondi */
        padding: 10px; /* Espace autour de l'icône à l'intérieur de la bordure */
      }

      .card-spacing {
        margin-right: 50px; /* Espace entre les cartes */
      }

      .card-spacing:last-child {
        margin-right: 0; /* Suppression de la marge droite pour la dernière carte */
      }

      @media (min-width: 992px) {
        .ml-lg-auto {
          margin-left: auto !important; /* Décalage du texte vers la gauche sur les écrans de grande taille */
        }
      }

      .container-custom {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        background-color: #ffffff; /* Fond blanc */
        padding: 20px;
      }
      h1 {
        font-size: 42px;
        font-weight: bold;
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
            <img class="logo mb-5" src="{{ asset('img/logo.png') }}" alt="Simplon Logo" />
            <ul class="nav flex-column mt-5">
              <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link active">
                    <img src="{{ asset('img/dashboard.svg') }}" alt="tableau"> 
                    <span>Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('formations-personnel') }}" class="nav-link ">
                    <img src="{{ asset('img/black.svg') }}" alt="formation"> 
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

          <div class="card">
            <div class="card-body d-flex justify-content-between align-items-center">
              <div class="mr-lg-3">
                <h5 class="card-title text-white">{{ date('d M Y') }}</h5>
                <p class="card-text card-welcome text-white">Bienvenue, {{ Auth::user()->prenom }}!</p>
                <p class="card-text"><small class="text-body-secondary text-white">Restez toujours au courant de votre profil</small></p>
              </div>
              <img src="{{ asset('img/image-4.png') }}" class="card-img-bottom ml-lg-3" alt="...">
            </div>
          </div>

          <div>
            <h1>Statistiques</h1>
            <div class="container mt-4">
              <div class="d-flex flex-wrap">
                <div class="card card-custom card-spacing mb-3">
                  <div class="card-body d-flex align-items-center">
                    <div class="icon-wrapper">
                      <i class="fas fa-users"></i>
                    </div>
                    <div>
                      <h5 class="card-title">{{ $nombreCandidatures }}</h5>
                      <p class="card-text">Candidatures</p>
                    </div>
                  </div>
                </div>
                <div class="card card-custom card-spacing mb-3">
                  <div class="card-body d-flex align-items-center">
                    <div class="icon-wrapper">
                      <i class="fas fa-user"></i>
                    </div>
                    <div>
                      <h5 class="card-title">{{ $nombreCandidats }}</h5>
                      <p class="card-text">Candidats</p>
                    </div>
                  </div>
                </div>
                <div class="card card-custom mb-3">
                  <div class="card-body d-flex align-items-center">
                    <div class="icon-wrapper">
                      <i class="fas fa-school"></i>
                    </div>
                    <div>
                      <h5 class="card-title">{{ $nombreFormations }}</h5>
                      <p class="card-text">Formations</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div>
            <h1>Formations à venir</h1>
            <div class="container-custom card-body d-flex justify-content-around">
              <div>
                <h5 class="card-title">P8 DWWM</h5>
                <p class="card-text">21/12/2024</p>
              </div>
              <div>
                <h5 class="card-title">P3 REF DIG</h5>
                <p class="card-text">21/12/2024</p>
              </div>
              <div>
                <h5 class="card-title">P4 REF DIG</h5>
                <p class="card-text">21/12/2024</p>
              </div>
              <div>
                <h5 class="card-title">P4 REF DIG</h5>
                <p class="card-text">21/12/2024</p>
              </div>
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
