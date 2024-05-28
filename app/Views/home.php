<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-conte</title>
    <script src="./assets/js/home.js"></script>
    <link rel="shortcut icon" href="./assets/img/react.svg" type="image/x-icon">
    <style>
        *{
            margin-inline: 0px;
        }
        .navBar{
            display: flex;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2); 
        }   
        .name{
            font-size: 20px;
        }
        .info-user{
            margin-left: auto;
        }
    </style>
</head>
<body>
    <div class="navBar">
        <img src="./assets/img/react.svg" alt="logo">
        <p class="name">e-conte</p>
        <div class="info-user">
            <?php 
                echo "<p>".$user['username']." ".$user['autority']."</p>";
            ?>   
        </div>   
    </div>
 
</body>
</html>