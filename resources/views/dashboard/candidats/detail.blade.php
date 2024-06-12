<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Plateforme de gestion des candidatures de Simplon SENEGAL</title>
    <link rel="stylesheet" href="{{ asset('candidatss/style.css') }}" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <img class="logo" src="{{ asset('img/logo.png') }}" alt="Simplon Logo" />
            <ul class="nav flex-column">
              <li class="nav-item">
                <a href="#" class="nav-link ">
                    <img src="{{ asset('img/dashboard-24.svg') }}" alt="tableau"> 
                    <span>Tableau de bord</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                    <img src="{{ asset('img/school-24dp-fill0-wght400-grad0-opsz24-1.svg') }}" alt="formation"> 
                    <span>Formations</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link active">
                    <img src="{{ asset('img/person-24.svg') }}" alt="candidats"> 
                    <span>Candidats</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                    <img src="{{ asset('img/groups-24dp-fill0-wght400-grad0-opsz24-1.svg') }}" alt="candidature"> 
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
             
            <div class="container mt-5">
                <div class="profile-info">
                    <h4 class="candidate-name">{{ $candidat->prenom }} {{ $candidat->nom }}</h4>
                    <p class="formation">Formation postuleé : Adefnipa</p>
                </div>
                <div class="contact-icons mb-4">
                    <a href="#"><img src="{{ asset('img/icon.svg') }}" alt="" class="mr-2 ">{{ $candidat->adresse }}</a>
                    <a href="#"><img src="{{ asset('img/Phone.svg') }}" alt="" class="mr-2">{{ $candidat->telephone }}</a>
                    <a href="#"><img src="{{ asset('img/Mail.svg') }}" alt="" class="mr-2">{{ $candidat->email }}</a>
                </div>
                <div class="biographie">
                    <h4>Biographie</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="description">
                    <h4>Description</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="pdf-link">
                    <a href="path/to/cv.pdf" target="_blank"><img src="{{ asset('img/image5.png') }}" alt=""></a>
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
