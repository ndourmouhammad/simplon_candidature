<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('formationCss/accueil.css') }}" />
  <title>Historiques des candidatures</title>
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
    main {
      width: 90%;
      margin: 0 auto;
      margin-top: 10px;;
    }
    table {
      text-align: center;
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
            <a class="nav-link " href="{{ route('accueil') }}">Accueil</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="#a-propos">A propos</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" href="{{ route('formations') }}">Nos formations</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li> --}}
          @auth
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('candidatures-historique') }}">
              <i class="bi bi-person-circle"></i> <span class="font-weight-bold">{{ Auth::user()->prenom }} {{ Auth::user()->nom }}</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('auth.deconnexion') }}" class="btn btn-outline-danger">Déconnexion</a>
          </li>
          @endauth
        </ul>
      </div>
    </nav>
        
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

          <div >
            <div class="header">
                <h1>Liste des candidature</h1>
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                
            </div>
          

          <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Formation postulée</th>
                    <th>Date soumission</th>
                    <th>Statut</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="candidatesTable">
                @foreach ($candidatures as $candidature)
                <tr>
                    
                    <td>{{ $candidature->cohorte->referentiel->libelle }}</td>
                    <td>{{ $candidature->created_at }}</td>
                    <td>{{ $candidature->statut }}</td>
                  
                    
                    <td class="action">

                        <a href="{{ route('detail_candidature', $candidature->id) }}"><img src="{{ asset('img/view.svg') }}" alt="">

                        
                        

                        
                    </td> 
                </tr>
                @endforeach
               
            </tbody>
        </table>    
          
          


        </main>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
