<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Connexion</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* styles.css */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            width: 800px;
            height: 500px;
        }

        .login-image {
            flex: 1;
        }

        .login-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-top-left-radius: 8px;
            border-bottom-left-radius: 8px;
        }

        .login-form {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .login-form .logo {
            max-width: 100px; /* Ajustez la largeur selon vos besoins */
            margin-bottom: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            width: 100%;
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        input {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #CE0033;
            border-radius: 4px;
        }

        button {
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #CE0033;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #CE0033;
        }

        .error {
            color: #CE0033;
            font-size: 12px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-image">
            <img src="https://media.istockphoto.com/id/1321462048/photo/digital-transformation-concept-system-engineering-binary-code-programming.jpg?s=1024x1024&w=is&k=20&c=SpP0lU7M-NkRIWUxZdL2rB_MtfegprwutPvbdy0TmMU=" alt="Description de l'image">
        </div>
        <div class="login-form">
            <img src="https://tse4.mm.bing.net/th?id=OIP.4v3p4mP-yyOEapEKb-t7AAHaHT&pid=Api&P=0&h=180" alt="Logo" class="logo">

            <h2>Connectez-vous pour accéder à votre espace</h2>
            <form action="{{ route('auth.traitement_inscription') }}" method="post">
                @csrf

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Email" required>
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror

                <label for="password">Mot de Passe</label>
                <input type="password" id="password" name="password" placeholder="Mot de Passe" required>
                @error('password')
                    <span class="error">{{ $message }}</span>
                @enderror

                <button type="submit">Connecter</button>
            </form>

        </div>
    </div>
</body>
</html>
