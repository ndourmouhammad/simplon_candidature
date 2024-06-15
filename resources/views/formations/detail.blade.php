<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $cohorte->referentiel->libelle }}</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('candidatss/formation.css') }}" />
    <style>
            body {
        background-color: #F0F0F0;
        font-family: 'Nunito Sans', sans-serif;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        margin: 0;
    }
    .navbar-light {
        background-color: #fff !important;
    }
    header {
        background-color: #fff;
        width: 100%;
        height: 70px;
        color: black;
    }
    .header .logo {
        width: 150px;
    }
    .nav .nav-link {
        margin-left: 20px;
        font-weight: bold;
        color: #000000 !important; /* Forcing the color black */
    }
    .accueil {
        margin: 0;
        padding: 0;
    }
    .section-title {
        margin-top: 40px;
        font-weight: bold;
    }
    .intro {
        position: relative; /* Position relative pour permettre le positionnement absolu du pseudo-élément */
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 30px;
        width: 60%;
        height: 50%;
    }
    .intro::before {
        content: "";
        position: absolute;
        top: -15px; /* Position juste au-dessus de .date-info */
        left: 0;
        width: calc(100% - 20px); /* Largeur égale à celle de .date-column-container moins les paddings */
        height: 20px; /* Hauteur de la zone rouge */
        background-color: #CE0033; /* Couleur rouge */
        border-radius: 10px 10px 0 0; /* Coins arrondis en haut */
    }
    .bannier, .banniere {
        background-color: #CE0033;
        color: white;
        text-align: center;
        padding: 50px 20px;
    }
    .bannier h1, .banniere h1 {
        margin-bottom: 20px;
        font-size: 2.5em;
    }
    .bannier p, .banniere p {
        margin-bottom: 20px;
        font-size: 1.2em;
    }
    .candidater-button, .btn.btn-light.text-danger {
        background-color: white;
        color: #CE0033;
        border: 2px solid #CE0033;
        padding: 10px 20px;
        font-size: 1em;
        cursor: pointer;
        border-radius: 5px;
    }
    .candidater-button:hover, .btn.btn-light.text-danger:hover {
        background-color: #CE0033;
        color: white;
    }
    .content-section {
        display: flex;
        justify-content: space-between;
        padding: 50px 20px;
        position: relative;
    }
    .content-section .red-strip {
        width: 100%;
        height: 5px; /* Ajustez la hauteur selon vos besoins */
        background-color: #CE0033;
        position: absolute;
        top: 0;
        left: 0;
    }
    .content-section .text-container {
        flex: 1;
        margin-right: 20px;
    }
    .content-section .card {
        flex: 1;
    }
    .card img {
        position: absolute;
        top: -10px;
        width: 100%;
        border-radius: 10px;
        border-top-left-radius: 30px;
        border-top-right-radius: 158px;
        border-bottom-left-radius: 150px;
    }
    .intro {
        flex: 1;
        padding: 50px 20px;
        background-color: #ffffff;
    }
    .date-red {
       color: #CE0033;
       font-size: 36px;
    }
    .intro h1 {
        color: #CE0033;
        font-size: 2.5em;
    }
    .intro p {
        margin: 20px 0;
        line-height: 1.6;
    }
    .pourcentage {
        background: #CE0033;
        color: #ffffff;
        padding: 20px;
        width: 50%;
        justify-content: center;
    }

    .btn, .btn.btn-danger.text-white {
        background-color: #CE0033;
        color: #fff;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        font-size: 1em;
        text-align: center;
        text-decoration: none;
        border-radius: 5px;
        margin-top: 20px;
    }
    .btn:hover, .btn.btn-danger.text-white:hover {
        background-color: #CE0033;
    }
    .description {
        text-align: center;
        margin: 20px auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 10px;
        width: 80%;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .content-section1 {
        display: flex;
        justify-content: space-between;
        padding: 50px 20px;
        position: relative;
    }
    .card {
        position: relative;
        width: 750px;
        height: 600px;
        background: #CE0033;
        border-top-left-radius: 50px;
        border-top-right-radius: 140px;
        border-bottom-left-radius: 180px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        margin-bottom: 50px;
        margin-top: 60px;
        padding-bottom: 30px;
    }
    .card1 {
        position: relative;
        width: 600px;
        height: 800px;
        background: #CE0033;
        color: #fff;
        border-top-left-radius: 50px;
        border-top-right-radius: 140px;
        border-bottom-left-radius: 191px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); /* Ajout de l'ombre sous le card */
        overflow: hidden; /* Pour cacher le débordement de l'image */
        margin-bottom: 50px;
        margin-top: 200px;
        padding-bottom: 90px;
    }
    .card2 {
        position: relative;
        width: 600px;
        height: 800px;
        background: #090002;
        color: #fff;
        border-top-left-radius: 50px;
        border-top-right-radius: 140px;
        border-bottom-left-radius: 191px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); /* Ajout de l'ombre sous le card */
        overflow: hidden; /* Pour cacher le débordement de l'image */
        margin-bottom: 50px;
        margin-top: 60px;
    }
    .card1 li, .card2 li {
        justify-content: center;
        text-align: left;
        width: 60%;
        font-size: 30px;
        padding-left: 40px; /* Ajout d'un espacement à gauche */
        position: relative; /* Position relative pour placer l'icône absolument */
    }
    .card1 li::before, .card2 li::before {
        content: "\2713"; /* Code Unicode pour l'icône de coche */
        font-family: 'Material Symbols Outlined', sans-serif; /* Nom de la police */
        font-size: 20px; /* Taille de la police */
        color: white; /* Couleur de l'icône */
        position: absolute; /* Position absolue */
        left: 0; /* Positionnement absolu à gauche */
    }
    .card1 p, .card2 p {
        justify-content: center;
        text-align: left;
        width: 60%;
        font-size: 28px;
        padding-left: 40px; /* Ajout d'un espacement à gauche */
    }
    .pourcentage-container {
        display: flex;
        justify-content: center;
        padding: 50px 20px;
        position: relative;
    }
    .content-section1 .red-strip {
        width: 100%;
        height: 5px; /* Ajustez la hauteur selon vos besoins */
        background-color: #CE0033;
        position: absolute;
        top: 0;
        left: 0;
    }
    .content-section1 .text-container {
        flex: 1;
        margin-right: 20px;
    }
    .content-section1 .card {
        flex: 1;
    }
    .card img {
        position: absolute;
        top: -10px;
        width: 100%;
        border-radius: 10px;
        border-top-left-radius: 30px;
        border-top-right-radius: 158px;
        border-bottom-left-radius: 150px;
    }
    footer {
        background-color: #333;
        color: #fff;
        padding: 20px;
        text-align: center;
        margin-top: auto;
        width: 100%;
    }
    .footer-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 20px;
    }
    .footer-content .logo {
        margin-bottom: 10px;
    }
    .footer-content .social-icons {
        display: flex;
        justify-content: center;
        margin-bottom: 10px;
    }
    .footer-content .social-icons a {
        color: #fff;
        margin: 0 10px;
        text-decoration: none;
    }
    .footer-content p {
        margin: 5px 0;
    }
    @media (max-width: 768px) {
        .intro {
            width: 100%;
        }
        .content-section {
            flex-direction: column;
        }
        .content-section .text-container, .content-section .card {
            width: 100%;
            margin-bottom: 20px;
        }
        .content-section1 {
            flex-direction: column;
        }
        .content-section1 .text-container, .content-section1 .card {
            width: 100%;
            margin-bottom: 20px;
        }
    }
</style>

</head>
<body>
    <!-- Header -->
    <header class="header ">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center ">
                <img src="{{ asset('img/logo-s.png') }}" alt="Simplon Senegal" class="logo">
                <nav class="nav nav-color">
                    <a href="#" class="nav-link" >Accueil</a>
                    <a href="#" class="nav-link" >À propos</a>
                    <a href="{{ route('formations') }}" class="nav-link" >Nos formations</a>
                    <a href="#" class="nav-link" >Contact</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Banner -->
    <div class="mb-4 banniere">

        <button class="btn btn-light text-danger">Candidater</button>
    </div>

    <main class="main-entier">
        <div class="introduction">
            <h1>{{ $cohorte->referentiel->libelle }}</h1>
            <p>{{ $cohorte->referentiel->description }}</p>
        </div>

        <div class="info">
            <div class="info-utiles">
                <h3>Date limite de candidature : <span class="date-limite">{{ $cohorte->date_limite }}</span></h3>
                <hr>
                <p>Devenez compétents en quelques mois avec cette formation.</p>
                <div class="pratique">100% PRATIQUE</div>
                <p>Type de référentiel : {{$cohorte->referentiel->type}}</p>
                <p>{{ $cohorte->referentiel->libelle }} P{{ $cohorte->libelle }}</p>
                <p>Début : {{$cohorte->date_debut}} / Fin : {{$cohorte->date_fin}}</p>
                <p>Durée :  {{ $cohorte->duree}} mois</p>
                        <p>Lieu : {{$cohorte->lieu_formation}}</p>
                        <p>Date de limite de la candidature : {{ $cohorte->date_limite }}</p>
                        <p>Bénificiaires : {{$cohorte->nombre_participants }} participants</p>
                    <a href="{{ route('ajouter_candidature', ['cohorte_id' => $cohorte->id]) }}"><button class="btn btn-danger text-white">Postuler</button></a>
            </div>
            <img src="{{ asset('img/Rectangle.png') }}" alt="">
        </div>
        <div class="competences">
            <div class="techniques">
            <h1>Compétences techniques</h1>

                  @foreach($cohorte->referentiel->competences as $competence)

              @if ($competence->type == "techniques")

              <li>{{ $competence->libelle }}</li>
              @endif
          @endforeach
              </div>
              <div class="transversales">
                <h1>Compétences transversales</h1>
                  @foreach($cohorte->referentiel->competences as $competence)

                  @if ($competence->type == "transversales")

                  <li>{{ $competence->libelle }}</li>
                  @endif
              @endforeach
              </div>
          </div>
    </main>

        <!-- Footer -->
        <footer class="footer bg-danger text-white py-4 mt-5">
            <div class="container text-center">
                <p>Cite keur gorgui | +221 33 824 29 27 | Simplon@gmail.com</p>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
    </html>
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{ $cohorte->referentiel->libelle }} {{ $cohorte->libelle }}
    <p>{{ $cohorte->description }}</p>
    <p>date debut et date fin : du {{$cohorte->date_debut}} au {{$cohorte->date_fin}}</p>
    <p>Nombre participants : {{$cohorte->nombre_participants}}</p>
    <p>Lieu : {{$cohorte->lieu_formation}}</p>
    <p>Type de référentiel : {{$cohorte->referentiel->type}}</p>
    <p>Competences:</p>
    <ul>
        @foreach($cohorte->referentiel->competences as $competence)
            <h1>Composants {{ $competence->type }}</h1>
            <li>{{ $competence->libelle }}</li>
        @endforeach
    </ul>
</body>
</html> --}}
