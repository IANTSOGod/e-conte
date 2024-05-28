<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./assets/js/forgot.js"></script>
    <link rel="stylesheet" href="./assets/css/forgot.css">
    <link rel="shortcut icon" href="./assets/img/react.svg" type="image/x-icon">
</head>
<body>
    <form action="/checkEmail" method="post" class="box-forgot">
        Ecrivez l'email que vous avez utilisé pour vous inscrire
        <input type="email" name="email" id="email" required>
        <input type="submit" value="Ennvoyez">
    </form>
</body>
</html>