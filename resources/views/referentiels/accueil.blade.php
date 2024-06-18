<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portail SIMPLON</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="{{ asset('formationCss/accueil.css') }}">
  <style>
    .footer-bg {
      background-color: #C3002F;
    }
  </style>
</head>
<body>
  <div class="accueil container-fluid p-0">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="https://simplon.sn/wp-content/uploads/2023/07/logo-simplonSenegal.png" alt="Logo" width="130px" class="image">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
    
    <!-- Bannière -->
    <div class="row align-items-center banniere">
      <div class="col-md-8">
        <img src="https://img.freepik.com/photos-gratuite/participation-homme-formation-apres-avoir-ete-embauche-son-nouveau-travail-bureau_23-2149034623.jpg?t=st=1718208262~exp=1718211862~hmac=486236d3a4f4ea73cc992461b5aea818dfa55c4decbfa45ff38eec7265137366&w=996" alt="Banner Image" class="img-fluid">
      </div>
      <div class="col-md-4 pr-5 banniere-text">
        <h2 class="text-center mb-4">Portail SIMPLON</h2>
        <p>
          Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.
        </p>
        @guest
        <div class="d-flex justify-content-between banniere-boutton">
          <a href="{{ route('login') }}" class="btn btn-outline-light mr-4">Connexion</a>
          <a href="{{ route('auth.inscription') }}" class="btn btn-outline-light">Inscription</a>
        </div>
        @endguest
      </div>
    </div>
    
    <!-- Section A propos -->
    <div class="justify-content-center section-bleu section text-center">
      <div class="container py-5">
        <h3 class="pb-2" id="a-propos">A propos de nous</h3>
        <p class="paragraphe">
          Nous sommes un réseau de fabriques numériques et inclusives en France et à l’étranger. Nous avons formé plus de 30 000 Simploniens et Simploniennes depuis 2013, dont 30% de femmes et 46% de personnes peu ou pas diplômées. Nous sommes une entreprise sociale et solidaire qui entend faire du numérique un véritable levier d’inclusion pour révéler des talents différents peu représentés dans le digital et les métiers techniques du numérique. Nous accompagnons les organisations pour que leur transformation digitale reste inclusive. De manière indirecte, nous agissons également dans le domaine de la médiation numérique et de l'apprentissage du numérique créatif auprès des enfants.
        </p>
        <div class="d-flex justify-content-center">
          <button class="btn btn-danger">Découvrir</button>
        </div>
      </div>
    </div>
    
    <!-- Nos chiffres -->
    <div class="text-center py-5 chiffres section">
      <div class="nos-chiffres">
        <div class="container">
          <h3>Nos chiffres</h3>
          <div class="row justify-content-around">
            <div class="col-md-3">
              <h4>100</h4>
              <p>Nos engagements</p>
            </div>
            <div class="col-md-3">
              <h4>200</h4>
              <p>Nos engagements</p>
            </div>
            <div class="col-md-3">
              <h4>300</h4>
              <p>Nos engagements</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Nos engagements -->
    <div class="forpa section-bleu section text-center">
      <div class="container py-5">
        <h3 class="pb-2">Nos engagements</h3>
        <p class="paragraphe">
          Entreprise sociale agréée solidaire (ESUS) Simplon.co respecte des engagements forts en termes de lucrativité limitée, de gouvernance participative et d’écarts de salaires. Simplon.co soutient les associations, les porteurs de projets solidaires ou les ONG à se développer et à se digitaliser. Nous sommes aussi sociétaires de Sociétés Coopératives d’Intérêt Collectif (SCIC) porteuses de projets solidaires comme le label Emmaüs, la boutique en ligne du réseau Emmaüs, ou de la MedNum, la coopérative des acteurs de la médiation numérique qui œuvre au quotidien pour une société numérique toujours plus inclusive. Notre écosystème ESS c’est aussi : EPIC Foundation (depuis 2015), Grande Ecole du Numérique dont nous sommes le plus grand réseau labellisé, Ashoka dont Simplon est membre depuis 2015, La France s’engage (lauréat 2014), le Mouves et France Eco Sociale Tech (FEST). Découvrez notre <a href="#" style="color: #CE0033">plaidoyer pour un numérique d’intérêt général.</a>
        </p>
      </div>
    </div>
    
    <!-- Nos formations -->
    <div class="container py-5">
      <div class="py-5">
        <h3 class="text-center mb-4">Nos formations</h3>
        <div class="row">
          @foreach ($referentiels as $referentiel)
          <div class="col-md-4">
            <div class="card mb-4">
              {{-- <img src="{{ asset('img/dev.svg') }}" class="card-img-top" alt="..."> --}}
              <div class="card-body">
                <h5 class="card-title">{{ $referentiel->libelle }}</h5>
                <p class="card-text">{{ Str::limit($referentiel->description, 70) }}</p>
                <p class="card-text"><strong>Type:</strong> {{ $referentiel->type }}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    
    <!-- Formulaire de contact -->
    
    
    <div class="py-5 formulaire">
      <h3 class="text-center" id="contact">Contactez-nous</h3>
      <form method="POST" action="{{ route('contact.submit') }}">
        @csrf
        <div class="contact">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputNom">Nom</label>
              <input type="text" class="form-control" id="inputNom" name="nom" placeholder="Nom" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputPrenom">Prenom</label>
              <input type="text" class="form-control" id="inputPrenom" name="prenom" placeholder="Prenom" required>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail">Adresse email</label>
            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="exemple@gmail.com" required>
          </div>
          <div class="form-group">
            <label for="inputPhone">Numero de telephone</label>
            <input type="text" class="form-control" id="inputPhone" name="phone" placeholder="77 000 00 00" required>
          </div>
          <div class="form-group">
            <label for="inputMessage">Message</label>
            <textarea class="form-control" id="inputMessage" name="message" rows="3" placeholder="Contenu de votre message..." required></textarea>
          </div>
          <button type="submit" class="btn btn-danger">Envoyer</button>
        </div>
      </form>
    </div>
  </div>
  <!-- Footer -->
  <footer class="footer-bg text-white">
    <div class="text-center py-3 bg-light">
      <img src="https://simplon.sn/wp-content/uploads/2023/07/logo-simplonSenegal.png" alt="Logo" class="img-fluid" width="150px">
    </div>
    <div class="container py-4">
      <div class="row text-center">
        <div class="col-md-4 d-flex justify-content-center">
          <i class="bi bi-geo-alt mr-2"></i>
          <p>Cité Keur Gorgui</p>
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
    </div>
  </footer>
  
  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>