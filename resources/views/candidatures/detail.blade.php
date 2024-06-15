<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('formationCss/accueil.css') }}" />
  <style>
    .footer-bg {
      background-color: #C3002F;
    }
    .candidate-name {
      font-family: 'Nunito', sans-serif;
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 32px;
    }
    .profile-info, .contact-icons, .card-body, .pdf-link {
      margin-bottom: 32px;
    
    }
    .contact-icons {
      display: flex;
    }
    .contact-icons a {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
      margin-right: 10px;
      font-family: 'nunito', sans-serif;
      font-weight: 500;
      color: black;
    }
    .contact-icons img {
      margin-right: 10px;
    }
    .card-body {
      margin-left:-20px;
    
    }
    .pdf-link {
      margin-left:0px;

    }
  </style>
</head>
<body>
  <div class="accueil container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#"><img src="https://simplon.sn/wp-content/uploads/2023/07/logo-simplonSenegal.png" alt="Logo" width="130px" class="image" /></a>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#a-propos">A propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('formations') }}">Nos formations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
          @auth
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-person-circle"></i> <span class="font-weight-bold">{{ Auth::user()->prenom }} {{ Auth::user()->nom }}</span></a>
          </li> 
          <li class="nav-item">
            <a href="{{ route('auth.deconnexion') }}" class="btn btn-outline-danger">Déconnexion</a>
          </li>
          @endauth
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <!-- Content can be added here if needed -->
      </div>

      <!-- Conteneur principal -->
      <div class="container mt-5">
        <div class="profile-info">
          <h4 class="candidate-name">{{ $candidature->user->prenom }} {{ $candidature->user->nom }}</h4>
          <p class="formation">Formation postuleé : {{ $candidature->cohorte->referentiel->libelle }} P#{{$candidature->cohorte->promo}}</p>
          <p class="formation">Date et lieu de naissance : {{ $candidature->user->date_naissance }}</p>
        </div>
        
        <div class="contact-icons mb-4">
          <a href="#"><img src="{{ asset('img/icon.svg') }}" alt="Adresse" class="mr-2">{{ $candidature->user->adresse }}</a>
          <a href="#"><img src="{{ asset('img/Phone.svg') }}" alt="Téléphone" class="mr-2">{{ $candidature->user->telephone }}</a>
          <a href="#"><img src="{{ asset('img/Mail.svg') }}" alt="Email" class="mr-2">{{ $candidature->user->email }}</a>
        </div>
        
        <div class="card-body">
          <h5 class="card-title">Biographie</h5>
          <p class="card-text">{{ $candidature->biographie }}</p>
        </div>
        
        <div class="card-body">
          <h5 class="card-title">Motivation</h5>
          <p class="card-text">{{ $candidature->motivation }}</p>
        </div>
        
        <div class="pdf-link">
          <h5>Curriculum vitae</h5>
          <a href="{{ Storage::url($candidature->cv_professionnel) }}" target="_blank"><img src="{{ asset('img/image5.png') }}" alt="CV"></a>
        </div>
      </div>
    </main>

    <footer class="footer-bg text-white">
      <div class="text-center py-3 bg-light">
        <img src="https://simplon.sn/wp-content/uploads/2023/07/logo-simplonSenegal.png" alt="Logo" class="img-fluid" width="150px" />
      </div>
      <div class="row text-center py-4">
        <div class="col-md-4 d-flex justify-content-center">
          <i class="bi bi-geo-alt mr-2"></i>
          <p>Cite keur gorgui</p>
        </div>
        <div class="col-md-4 d-flex justify-content-center">
          <i class="bi bi-telephone mr-2"></i>
          <p>+221 33 824 29 27</p>
        </div>
        <div class="col-md-4 d-flex justify-content-center">
          <i class="bi bi-envelope mr-2"></i>
          <p>Simplon@gmail.com</p>
        </div>
      </div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </div>
</body>
</html>
