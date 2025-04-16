<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    
    <h1>Inscrivez vous !!</h1><br><br>

    <form action="inscrit.php" method="post">
        <label>Votre @Mail</label><br>
        <input type="text" placeholder="Votre email" name="pseudo"><br><br>
        <label>Votre mot de passe</label><br>
        <input type="password" name="password" placeholder="Mot de passe"><br><br>
        
        <input type="submit" value="Inscription">
    </form>



</body>
</html>