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
        .sidebar .nav-link.active {
            color: #504DC1;
            background-color: #F1F5F8;
        }
        .sidebar .nav-link {
            color: #333;
        }
        .sidebar .nav-link:hover {
            color: #F1F5F8;
            background-color: #504DC1;
        }
        .header1 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }
        .table-responsive {
            margin-top: 20px;
        }
        .filtre {
            margin-top: 20px;
        }
        .filtre .input-group {
            width: 100%;
        }
        .logo {
            width: 150px;
            margin: 20px auto;
            display: block;
        }
        .table thead th {
            background-color: #c3002f;
            color: white;
        }
        .titre h5 {
            color: red;
        }
        .btn-group span {
            display: inline-block;
            margin-right: 10px; /* Adjust margin between elements */
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .header1 h1 {
            margin: 0;
        }
        .action {
            display: flex;
            justify-content: space-around;
        }
        nav {
            height: 1024px;
        }
        .profile-card {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 20px;
            max-width: 300px;
            margin: 20px auto;
            text-align: center;
            position: relative;
        }
        .profile-card .profile-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 15px;
        }
        .profile-card .profile-info {
            margin-bottom: 15px;
        }
        .profile-card .profile-info .formation {
            color: #555;
        }
        .profile-card .contact-icons i {
            font-size: 20px;
            color: #C3002F;
            margin: 10px;
        }
        .profile-card .pdf-link {
            margin-top: 10px;
            margin-left: 22px;
        }
        .pdf-link a {
            display: flex;
            flex-direction: column;
            align-items: left;
            color: black;
            text-decoration: none;
            width: 100px;
            font-weight: 200;
            margin-left: 22px;
        }
        .pdf-link a img {
            margin-top: 5px;
            margin-left: 22px;
        }
        .pdf-link .montitre {
            margin-left: 18px;
        }
        .contact-icons a {
            display: inline-block;
            margin-right: 25px; /* Adjust margin between contact icons */
            margin-bottom: 10px; /* Add bottom margin for better spacing */
            text-decoration: none;
            color: #333;
        }
        .profile-info h4, .biographie h4, .description h4 {
            margin-bottom: 15px; /* Add bottom margin for section titles */
        }
        .profile-info, .biographie, .description, .pdf-link {
            margin-bottom: 30px; /* Add bottom margin between sections */
        }
        .btn-group {
            display: flex;
            flex-direction: column;
        }
        .form-group select {
            width: 195px;
            height: 36px;
            border-radius: 8px;
        }
        .btn-custom {
            background-color: #CE0033;
            border-color: #CE0033;
            width: 195px;
            height: 36px;
            border-radius: 8px;
            color: white;
            padding: 1.5rem;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .form-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .button-group {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            width: 100%;
        }
        .align-right {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            margin-top: auto;
        }
        .btn-success {
            background-color: #000;
            border-color: #000;
        }
        .btn-danger {
            background-color: #CE0033;
            border-color: #CE0033;
        }
        body {
            background-color: #F0F0F0;
            color: #000;
        }
        .titre h2 {
            font-size: 22px;
            color: #CE0033;
        }
        .contain {
            width: 98%;
            margin: 0 auto;
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
                            <a href="{{ route('formations-personnel') }}" class="nav-link ">
                                <img src="{{ asset('img/black.svg') }}" alt="formation">
                                <span>Formations</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('candidats') }}" class="nav-link ">
                                <img src="{{ asset('img/person.svg') }}" alt="candidats">
                                <span>Candidats</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('candidatures-personnel') }}" class="nav-link active">
                                <img src="{{ asset('img/groups.svg') }}" alt="candidatures">
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
                            {{-- <span class="font-weight-bold">{{ Auth::user()->prenom }} {{ Auth::user()->nom }}</span> --}}
                            {{-- <span>{{ Auth::user()->role }}</span> --}}
                        </div>
                    </div>
                </div>
                <!-- Conteneur principal -->
                <div class="contain mt-5">
                    <h1>Validation de la candidature</h1>
                    <div class="profile-info">
                        <h4 class="candidate-name">{{ $candidature->user->prenom }} {{ $candidature->user->nom }}</h4>
                        <p class="formation">Formation postulée : {{ $candidature->cohorte->referentiel->libelle }}</p>
                    </div>
                    <div class="contact-icons mb-4">
                        <a href="#"><img src="{{ asset('img/icon.svg') }}" alt="" class="mr-2">{{ $candidature->user->adresse }}</a>
                        <a href="#"><img src="{{ asset('img/Phone.svg') }}" alt="" class="mr-2">{{ $candidature->user->telephone }}</a>
                        <a href="#"><img src="{{ asset('img/Mail.svg') }}" alt="" class="mr-2">{{ $candidature->user->email }}</a>
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
                        <h5 class="montitre">Curriculum vitae</h5>
                        <a href="{{ Storage::url($candidature->cv_professionnel) }}" target="_blank"><img src="{{ asset('img/image5.png') }}" alt="voir cv"></a>
                    </div>
                </div>
                <!-- Formulaire de modification du statut -->
                <div class="align-right mb-3">
                    <form action="{{ route('candidature.update', ['id' => $candidature->id]) }}" method="POST">
                        @csrf
                        <input type="hidden" name="statut" id="statut" value="">
                        <!-- Vérifier si le statut est "en attente" -->
                        @if ($candidature->statut === 'en attente')
                            <button type="submit" class="btn btn-success mt-3" onclick="setStatut('accepté')">Accepté</button>
                            <button type="submit" class="btn btn-danger mt-3" onclick="setStatut('rejeté')">Rejeté</button>
                        @else
                            <p>Statut actuel : {{ $candidature->statut }}</p>
                        @endif
                    </form>
                </div>
                <script>
                    function setStatut(value) {
                        document.getElementById('statut').value = value;
                    }
                </script>
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
