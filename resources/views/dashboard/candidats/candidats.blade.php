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
                <a href="{{ route('formations-personnel') }}" class="nav-link ">
                  <img src="{{ asset('img/black.svg') }}" alt="formation"> 
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
                  <a href="#" class="nav-link">
                    <img src="{{ asset('img/candidats.svg') }}" alt="candidature"> 
                    <span>Candidatures</span>
                </a>
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
            <div class="header">
                <h1>Liste des candidats</h1>
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
          

          <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Adresse email</th>
                    <th>Formation postulée</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="candidatesTable">
                @foreach ($candidats as $candidat)
                <tr>
                    <td>{{ $candidat->nom }}</td>
                    <td>{{ $candidat->prenom }}</td>
                    <td>{{ $candidat->email }}</td>
                    <td>Adefnipa</td>
                    
                    <td class="action">

                        <a href="{{ route('detail-candidat', $candidat->id) }}"><img src="{{ asset('img/view.svg') }}" alt=""></a>

                        <a href="{{ route('supprimer-candidat', $candidat->id) }}"><img src="{{ asset('img/trashh.svg') }}" alt=""></a>
                    </td>
                </tr>
                @endforeach
               
            </tbody>
        </table>    
          
          <div class="d-flex justify-content-center mt-4">
            {{ $candidats->links() }}
          </div>


        </main>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
