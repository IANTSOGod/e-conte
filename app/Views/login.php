<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-conte</title>
    <script src="./assets/js/login.js"></script>
    <link rel="stylesheet" href="./assets/css/login.css">
    <link rel="shortcut icon" href="./assets/img/react.svg" type="image/x-icon">
</head>
<body>
    <div class="login-form">
        <h1>Entrer</h1>
        <form action="/Login" method="post">
            <div class="zone-input">
                <input type="text" name="username" id="username" required>
                <input type="password" name="password" id="password" required>
            <a href="/forgot">Mot de passe oublié ?</a>
            </div>
            <div class="transition"><hr>ou<hr></div>
            <a href="/signUp">S'inscrire</a>
            <input type="submit" value="Envoyez" class="pseudo_button">
        </form>
    </div>
</body>
</html>