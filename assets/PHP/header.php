<?php
        require 'PHP_exo/connexion_bdd.php';
        require 'PHP_exo/utile.php';
        init_php_session();

?>

<!-- en tête du site -->
<header>
    <div class="d-flex flex-row">
        <div class="col-xs-7 col-lg-7">
            <img class="img-fluid" src="assets/images/jarditou_logo.jpg" alt="Logo Jarditou" title="Logo Jarditou" />
        </div>
        <div class="col-xs-5 col-lg-5">
            <p class="display-3 m-5 d-lg-block d-xl-block d-sm-block d-none"> <strong>Tout le jardin</strong></p>
        </div>
    </div>
    <p class="m-3 d-lg-block d-xl-block d-sm-block d-none"><strong>La qualité depuis 70 ans</strong></p>
</header>
<!-- fin de en tête du site -->

<nav class="nav bg-dark d-flex justify-content-center">

    <a type="button" class="btn btn-dark m-2" href="Accueil.php">Accueil</a> 
    <a type="button" class="btn btn-dark m-2" href="Newtableau.php">Tableau</a>
    <a type="button" class="btn btn-dark m-2" href="contact.php">Contact</a>
    <a type="button" class="btn btn-dark m-2" href="Form_inscription.php">S'enregistrer</a>

    <?php
        if(is_logged()){
            echo '<form action="assets/PHP/co_log.php" method="GET"><button type="submit" class="btn btn-dark" name="logout" id="logout" value="logout"><b>Logout</b></button></form>';
        }
    ?>
</nav>