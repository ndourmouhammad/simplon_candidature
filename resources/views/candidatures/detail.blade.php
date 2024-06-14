<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KY4o8EID6gzl32nTbDZnO4QEOQn19TkvT0eO6h5bZMtLqFJumHsygHg2A+3LBmR1EnbEJ6fnXw9HBEOU8t19RQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">

    <style>
        body {
            background-color: #F0F0F0;
            font-family: 'nunito-sans', sans-serif;
            background: #ffffff;
        }
        .navbar-light {
            background-color: #fff !important;
        }
        .accueil {
            margin: 0;
            padding: 0;
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
        .bannier {
            background-color: #CE0033;
            color: white;
            text-align: center;
            padding: 50px 20px;
        }
        .bannier h1 {
            margin-bottom: 20px;
            font-size: 2.5em;
        }
        .bannier p {
            margin-bottom: 20px;
            font-size: 1.2em;
        }
        .candidater-button {
            background-color: white;
            color: #CE0033;
            border: 2px solid #CE0033;
            padding: 10px 20px;
            font-size: 1em;
            cursor: pointer;
            border-radius: 5px;
        }
        .candidater-button:hover {
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

        .btn {
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
        .btn:hover {
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
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); /* Ajout de l'ombre sous le card */
    overflow: hidden; /* Pour cacher le débordement de l'image */
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
.card1 li::before {
    content: "\2713"; /* Code Unicode pour l'icône de coche */
    font-family: 'Material Symbols Outlined', sans-serif; /* Nom de la police */
    font-size: 20px; /* Taille de la police */
    color: white; /* Couleur de l'icône */
    margin-right: 10px; /* Marge à droite pour l'espacement */

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
.card1 li {
    justify-content: center;
    text-align: left;
    width: 60%;
    font-size: 30px;
    padding-left: 40px; /* Ajout d'un espacement à gauche */
    position: relative; /* Position relative pour placer l'icône absolument */
}

.card2 li {
    justify-content: center;
    text-align: left;
    width: 60%;
    font-size: 30px;
    padding-left: 40px; /* Ajout d'un espacement à gauche */
    position: relative; /* Position relative pour placer l'icône absolument */
}

.card1 li::before,
.card2 li::before {
    content: "\2713"; /* Code Unicode pour l'icône de coche */
    font-family: 'Material Symbols Outlined', sans-serif; /* Nom de la police */
    font-size: 20px; /* Taille de la police */
    color: white; /* Couleur de l'icône */
    position: absolute; /* Position absolue */
    left: 0; /* Positionnement absolu à gauche */
    top: 50%; /* Centrage vertical */
    transform: translateY(-50%); /* Décalage vertical de moitié de la hauteur */
    margin-right: 10px; /* Marge à droite pour l'espacement */
}
.card1,.card2  h3 {
  padding-left: 30px;
  padding-top: 10px;
  font-size: 35px;
}
.card2 , .card1 h3 {
    padding-left: 30px;
    padding-top: 10px;
    font-size: 35px;
}

.footer-logo {
    background-color: #F0F0F0;
    padding: 20px;
    text-align: center;
}

.footer-icon {
    background-color: #CE0033;
    padding: 20px;
    text-align: center;
}

.footer-icon i {
    font-size: 2rem;
    color: #fff;
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
                        <a class="nav-link" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nos formations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-person-circle"></i> Mon compte</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="bannier">
            <h1>Bienvenue sur notre site</h1>
            <p>Rejoignez-nous dès aujourd'hui et faites la différence !</p>
            <button class="candidater-button">Candidater</button>
        </div>

        <div class="description">
            <h1>Développement Web et Web Mobile</h1>
            <p>Cette formation est destinée aux débutants souhaitant acquérir des compétences solides
                en développement web, ainsi qu'aux professionnels cherchant à se reconvertir ou à approfondir
                leurs connaissances dans ce domaine.</p>
        </div>

        <section class="content-section">
            <div class="intro">
                <div class="date-info">
                    <div class="date-column-container">
                        <div class="date-column">
                            <div class="date-deadline">
                                <h2>DATE LIMITE DE CANDIDATURE</h2>
                                <p class="date-red">19 / 09/ 2024</p>
                                <hr>
                            </div>
                            <div class="developer-info">
                                <h2>DEVENEZ DEVELOPPEUR WEB EN QUELQUES MOIS</h2>
                            </div>
                            <p class="pourcentage">100% de pratique</p>
                            <p>TYPE : Formation Métier</p>
                            <div class="location-info">

                                <p><span class="icon">📅</span> P8 DWWM</p>

                                <p><span class="icon">📍</span> Dakar, Cité Keur Gorgui</p>
                                <p><span class="icon">📅</span> Début : Août 2024 / Fin : Juillet 2025</p>
                                <p><span class="icon">📅</span> 1 an</p>
                                <button class="btn postuler">Postuler</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="https://media.istockphoto.com/id/1321462048/photo/digital-transformation-concept-system-engineering-binary-code-programming.jpg?s=1024x1024&w=is&k=20&c=SpP0lU7M-NkRIWUxZdL2rB_MtfegprwutPvbdy0TmMU=" alt="Image promotionnelle">
            </div>
        </section>

        <section class="content-section1">
            <div class="card1">
                <h3>compétences Techniques</h3><br>
                <ul>
                    <li>Développement Web Front-End.</li><br>
                    <li>Développement Web Back-End.</li><br>
                    <li>Base de Données</li><br>
                    <li>Développement Mobile.</li><br>
                    <li>DevOps et Hébergement</li><br>
                    <!-- <li>Sécurité Informatique.</li> -->
                    <!-- <li>Méthodologies Agiles.</li> -->

                </ul>
            </div>
            <div class="card2">
                <h3>Compétences Transversales</h3><br>
                <ul>
                    <li>Gestion du Temps et des Projets</li><br>
                    <li>Résolution de Problèmes</li><br>
                    <li>Adaptabilité</li><br>
                    <li>Communication</li><br>
                    <li>Autonomie</li><br>
                    <!-- <li>Esprit d'Entrepreneuriat</li><br> -->
                    <li>Culture Numérique</li>

                </ul>
            </div>
        </section>
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

    </div>
</body>
</html>
