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
        <h1>Creez votre compte ici</h1>
        <form action="/createAccount" method="post">
            <div class="zone-input">
                <input type="text" name="username" id="username" required>
                <input type="password" name="password" id="password" required>
                <select name="autority" id="autority">
                    <option value="admin">Admin</option>
                    <option value="simple">Simple</option>
                </select>
                <input type="email" name="email" id="email" required>
                <input type="text" name="CIN" id="CIN" required>
            </div>
            <input type="submit" value="Envoyez" class="pseudo_button">
        </form>
    </div>
</body>
</html>