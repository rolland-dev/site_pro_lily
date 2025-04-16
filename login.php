<?php
session_start();

if (isset($_SESSION['erreurCaptcha'])) {
    $erreur_captcha = $_SESSION['erreurCaptcha'];
} else {
    $erreur_captcha = '';
}

if (isset($_SESSION['erreur'])) {
    $erreur = $_SESSION['erreur'];
} else {
    $erreur = '';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>

   <h1>Site protégé, accés sécurisé</h1>
<br>
    <h2>Connectez-vous</h2>
<br><br>
    <form action="traitement.php" method="post" class="cnx">
        <label>Votre identifiant</label><br>
        <input type="text" name="login" class="champ"><br>
        <label>Votre mot de passe</label><br>
        <input type="password" name="password" class="champ"><br><br>
        
        <br><input type="submit" value="Connexion" class="valide">
    </form>
<br>
    <div class="erreur">
        <?php

        echo $erreur;
        ?>

    </div>
  
</body>

</html>