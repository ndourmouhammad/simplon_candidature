<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <!-- <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="styleguide.css" /> -->
    <link rel="stylesheet" href="acceuil.css" />
  </head>
  <body>
    <div class="accueil container-fluid p-0">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="https://simplon.sn/wp-content/uploads/2023/07/logo-simplonSenegal.png" alt="Logo" class="image"/></a>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">A propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Nos formations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="row no-gutters">
        <div class="col-12">
        </div>
      </div>

      <div class="container my-5">
        <div class="row align-items-center">
          <div class="col-md-6">
            <img src="https://img.freepik.com/photos-gratuite/participation-homme-formation-apres-avoir-ete-embauche-son-nouveau-travail-bureau_23-2149034623.jpg?t=st=1718208262~exp=1718211862~hmac=486236d3a4f4ea73cc992461b5aea818dfa55c4decbfa45ff38eec7265137366&w=996" alt="Banner Image" class="img-fluid"/>
          </div>
          <div class="col-md-6">
            <h2 class="text-wrapper-5 ">Portail SIMPLON</h2>
            <p class="le-lorem-ipsum-est">
              Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.
            </p>
            <button class="btn btn-primary mb-2">Se connecter</button>
            <button class="btn btn-secondary">S’inscrire</button>
          </div>
        </div>

        <div class="my-5 forpa">
          <h3 class="text-wrapper-6 text-center">A propos de nous</h3>
          <p class="paragraphe text-center">
            Nous sommes un réseau de fabriques numériques et inclusives en France et à l’étranger. Nous avons formé plus de 30 000 Simploniens et Simploniennes depuis 2013, dont 30% de femmes et 46% de personnes peu ou pas diplômées. Nous sommes une entreprise sociale et solidaire qui entend faire du numérique un véritable levier d’inclusion pour révéler des talents différents peu représentés dans le digital et les métiers techniques du numérique. Nous accompagnons les organisations pour que leur transformation digitale reste inclusive.
            ​​​​​De manière indirecte, nous agissons également dans le domaine de la médiation numérique et de l'apprentissage du numérique créatif auprès des enfants.
          </p>
          <button class="btn btn-outline-primary">Découvrir</button>
        </div>

        <div class="my-5 text-center">
          <h3 class="text-wrapper-7">Nos chiffres</h3>
          <div class="row">
            <div class="col-md-4">
              <h4 class="text-wrapper-9">100</h4>
              <p class="text-wrapper-8">Nos engagements</p>
            </div>
            <div class="col-md-4">
              <h4 class="text-wrapper-11">200</h4>
              <p class="text-wrapper-10">Nos engagements</p>
            </div>
            <div class="col-md-4">
              <h4 class="text-wrapper-12">300</h4>
              <p class="text-wrapper-10">Nos engagements</p>
            </div>
          </div>
        </div>

        <div class="my-5 forpa">
          <h3 class="text-wrapper-16">Nos engagements</h3>
          <p class="paragraphe text-center">
            Entreprise sociale agréée solidaire (ESUS) Simplon.co respecte des engagements forts en termes de lucrativité limitée, de gouvernance participative et d’écarts de salaires. Simplon.co soutient les associations, les porteurs de projets solidaires ou les ONG à se développer et à se digitaliser. Nous sommes aussi sociétaires de Sociétés Coopératives d’Intérêt Collectif (SCIC) porteuses de projets solidaires comme le label Emmaüs, la boutique en ligne du réseau Emmaüs, ou de la MedNum, la coopérative des acteurs de la médiation numérique qui oeuvre au quotidien pour une société numérique toujours plus inclusive.​​​​​​​ Notre écosystème ESS c’est aussi : EPIC Foundation (depuis 2015), Grande Ecole du Numérique dont nous sommes le plus grand réseau labellisé, Ashoka dont Simplon est membre depuis 2015, La France s’engage (lauréat 2014), le Mouves et France Eco Sociale Tech (FEST). ​​​​​​​Découvrez notre <a href="#">plaidoyer pour un numérique d’intérêt général.</a>
          </p>
        </div>

        <div class="my-5">
          <h3 class="text-wrapper-17">Nos formations</h3>

          <div class="row">
            @foreach ($referentiels as $referentiel)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="img/fluent-window-dev-edit-16-regular.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $referentiel->libelle }}</h5>
                        <p class="card-text">{{ $referentiel->description }}</p>
                        <p class="card-text">{{ $referentiel->type }}</p>
                        <a href="{{ route('supprimer', ['id' => $referentiel->id])}}" class="btn btn-danger">supprimer</a>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="my-5">
          <h3 class="text-wrapper-17">Contactez-nous</h3>
          <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputNom">Nom</label>
                <input type="text" class="form-control" id="inputNom" placeholder="Nom">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPrenom">Prenom</label>
                <input type="text" class="form-control" id="inputPrenom" placeholder="Prenom">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail">Adresse email</label>
              <input type="email" class="form-control" id="inputEmail" placeholder="exemple@gmail.com">
            </div>
            <div class="form-group">
              <label for="inputPhone">Numero de telephone</label>
              <input type="text" class="form-control" id="inputPhone" placeholder="77 000 00 00">
            </div>
            <div class="form-group">
              <label for="inputMessage">Message</label>
              <textarea class="form-control" id="inputMessage" rows="3" placeholder="Contenu de votre message..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
          </form>
        </div>

        <div class="my-5">
          <div class="row">
            <div class="col-md-4">
              <img src="https://simplon.sn/wp-content/uploads/2023/07/logo-simplonSenegal.png" alt="Logo" class="img-fluid"/>
            </div>
        
            <div class="col-md-8">
              <div class="d-flex flex-column">
                <div class="d-flex align-items-center mb-2">
                  <img src="img/carbon-location.svg" alt="Location" class="mr-2"/>
                  <span>Cite keur gorgui</span>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <img src="img/ph-phone.svg" alt="Phone" class="mr-2"/>
                  <span>+221 33 824 29 27</span>
                </div>
                <div class="d-flex align-items-center">
                  <img src="img/material-symbols-mail-outline.svg" alt="Mail" class="mr-2"/>
                  <span>Simplon@gmail.com</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
