<!DOCTYPE html>
<html>
<head>
    <title> Compte User</title>
</head>
<body>
    <p>Bonjour {{ $user->nom }},</p>
    <p>Votre compte a été créé avec les identifiants suivants:</p>
    <p>Email: {{ $user->email }}</p>
    <p>mot de passe : {{ $password }}</p>
    <p>
        Merci d'utiliser notre service.</p>
</body>
</html>