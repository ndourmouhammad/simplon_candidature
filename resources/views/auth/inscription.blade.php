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
            margin: 10px;
        }

        .form-column:nth-child(odd) {
            margin-right: 2.5%; /* Ajustement de la marge droite */
            margin-left: 2.5%; /* Ajustement de la marge gauche */
        }

        .form-column:nth-child(even) {
            margin-left: 2.5%; /* Ajustement de la marge gauche */
            margin-right: 2.5%; /* Ajustement de la marge droite */
        }

        .form-group {
            display: flex;
            flex-direction: column;
            align-items: center;
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

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: #d32f2f;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
            align-self: center; /* Centrer le bouton */
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
            <h2>Inscrivez-vous pour rejoindre notre communauté</h2>
            <form action="{{ route('auth.traitement_inscription') }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" placeholder="Prénom" required>
                    @error('prenom')
                    <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" placeholder="Nom" required>
                    @error('nom')
                    <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                    @error('email')
                    <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Mot de Passe</label>
                    <input type="password" id="password" name="password" placeholder="Mot de Passe" required>
                    @error('password')
                    <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="telephone">Téléphone</label>
                    <input type="text" id="telephone" name="telephone" placeholder="Téléphone" required>
                    @error('telephone')
                    <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="dob">Date de naissance</label>
                    <input type="date" id="dob" name="dob" placeholder="Date de naissance" required>
                    @error('dob')
                    <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="adresse">Adresse</label>
                    <input type="text" id="adresse" name="adresse" placeholder="Adresse" required>
                    @error('adresse')
                    <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit">Inscription</button>
            </form>
        </div>
    </div>
</body>

</html>
