<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Utilisateur</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .dashboard {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            text-align: center;
        }
        .dashboard h1 {
            margin-bottom: 20px;
            color: #333;
        }
        .dashboard p {
            font-size: 18px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <h1>Bienvenue sur votre Dashboard</h1>
        <p>Vous êtes connecté en tant qu'utilisateur.</p>
        <a href="{{ route('auth.deconnexion') }}">Déconnexion</a>
    </div>
</body>
</html>
