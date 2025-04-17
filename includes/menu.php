<?php


if (isset($_SESSION['login'])) {
    $connect = $_SESSION['login'];
} else {
    $connect = '';
}
if (isset($_SESSION['erreur'])) {
    $erreur = $_SESSION['erreur'];
} else {
    $erreur = '';
}
if (isset($_SESSION['nom'])) {
    $nom = $_SESSION['nom'];
} else {
    $nom = '';
}

if (isset($_SESSION['role'])) {
    $ROLE = $_SESSION['role'];
    
} else {
    $ROLE = '';
    
}

?>
 

    <!-- MENU GENERAL -->
    <nav class="navbar navbar-expand-lg bg-info" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php"> <img src="./img/L.png" alt="logo dsformation" class="img_menu"> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link " href="./index.php">Accueil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./calendrier.php">Cours</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="./contact.php">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav login">
                    <?php if ($connect != "yes") : ?>
                        <li class="nav-item ">
                            <a class="nav-link" href="./login.php">Login</a>
                        </li>
                    <?php endif; ?>
                    <?php if ($ROLE == "ADMIN" || $ROLE == "USER") : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="./deconnexion.php">Déconnexion</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

