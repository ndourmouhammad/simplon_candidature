<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Inscription</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; /* Minimum height pour couvrir l'écran */
            margin: 0;
            overflow-y: hidden;
            overflow-x: hidden;
        }

        .register-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            width: 1200px; /* Largeur du container */
            height: auto; /* Hauteur ajustée automatiquement */
            overflow: hidden;
        }

        .register-image {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .register-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-top-left-radius: 8px;
            border-bottom-left-radius: 8px;
        }

        .register-form {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #fff;
            color: #000;
        }

        .register-form .logo {
            max-width: 100px;
            margin-bottom: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #000;
        }

        form {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .form-column {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 20px;
            justify-content: space-between
        }

        .form-group {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            width: 100%;
            margin-bottom: 20px; /* Espace entre les groupes de champs */
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
            color: #000;
        }
        .button-container {
            width: 600px;
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        button {
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #CE0033;
            color: #fff;
            font-size: 16px;
            cursor: pointer; /* Centrer le bouton */
            width: 100%; /* Bouton en pleine largeur */
            max-width: 600px;
        }
        .btn-envoyer{
            width: 550px;
            margin-left: 20px;
            justify-content: center;
        }

        button:hover {
            background-color: #b22c2c;
        }

        @media (max-width: 768px) {
            .form-column {
                margin-right: 0; /* Réinitialiser la marge pour les petits écrans */
                margin-left: 0; /* Réinitialiser la marge pour les petits écrans */
            }
        }
    </style>
</head>

<body>
    <div class="register-container">
        <div class="register-image">
            <img src="https://media.istockphoto.com/id/1321462048/photo/digital-transformation-concept-system-engineering-binary-code-programming.jpg?s=1024x1024&w=is&k=20&c=SpP0lU7M-NkRIWUxZdL2rB_MtfegprwutPvbdy0TmMU=" alt="Description de l'image">
        </div>
        <div class="register-form">
            <img src="https://tse4.mm.bing.net/th?id=OIP.4v3p4mP-yyOEapEKb-t7AAHaHT&pid=Api&P=0&h=180" alt="Logo" class="logo">
            <h2>Inscrivez-vous pour rejoindre la communauté simplon   </h2>
            <form action="{{ route('auth.traitement_inscription') }}" method="POST">
                @csrf
                <div class="form-column">
                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="text" id="prenom" name="prenom" placeholder="Prénom" value="{{ old('prenom') }}">
                        @error('prenom')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" id="nom" name="nom" placeholder="Nom" value="{{ old('nom') }}">
                        @error('nom')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                        @error('email')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">Mot de Passe</label>
                        <input type="password" id="password" name="password" placeholder="Mot de Passe">
                        @error('password')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-column">
                    <div class="form-group">
                        <label for="telephone">Téléphone</label>
                        <input type="text" id="telephone" name="telephone" placeholder="Téléphone" value="{{ old('telephone') }}">
                        @error('telephone')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="date_naissance">Date de naissance</label>
                        <input type="date" id="date_naissance" name="date_naissance" placeholder="Date de naissance" value="{{ old('date_naissance') }}">
                        @error('date_naissance')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="adresse">Adresse</label>
                        <input type="text" id="adresse" name="adresse" placeholder="Adresse" value="{{ old('adresse') }}">
                        @error('adresse')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="cv_professionnel">CV Professionnel</label>
                        <input type="text" id="cv_professionnel" name="cv_professionnel" placeholder="CV Professionnel" value="{{ old('cv_professionnel') }}">
                        @error('cv_professionnel')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

            </form>
            <div class="container">
                <button class="btn-envoyer" type="submit">Inscription</button>
            </div>
        </div>
    </div>
</body>

</html>
