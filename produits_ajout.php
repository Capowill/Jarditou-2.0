<?php
include("assets/PHP/entete.php");

function connexionBase()
{
    // Paramètre de connexion serveur
    $host = "localhost";
    $login = "root";     // Votre loggin d'accès au serveur de BDD 
    $password = "";    // Le Password pour vous identifier auprès du serveur
    $base = "jarditou";    // La bdd avec laquelle vous voulez travailler 

    try {
        $db = new PDO('mysql:host=' . $host . ';charset=utf8;dbname=' . $base, $login, $password);
        //echo "Vous êtes entrer dans la base de donnée ultra securisé de l'afpa <br>";
        return $db;
    } catch (Exception $e) {
        echo 'Erreur : ' . $e->getMessage() . '<br>';
        echo 'N° : ' . $e->getCode() . '<br>';
        die('Connexion au serveur impossible.');
    }
}
connexionBase(); // appel de la fonction 
?>

<body class="container-fluid p-0">
    <?php
    include("assets/PHP/header.php");
    ?>

        <form class="m-5" target="_blank" action="produit_ajout_script.php" method="POST">
            <div class="form-group row mt-2">
                <label id="colFormLabel" class="col-lg-3 col-md-2 col-form-label ">Clé de la table produits : *</label>
                <div class="col-lg-3 col-md-4">
                    <input type="text" class="form-control" name="pro_id" id="pro_id" autofocus>
                    <span id="error_pro_id"></span>
                </div>
                <label id="colFormLabel" class="col-lg-3 col-md-2 col-form-label ">Catégorie du produit : *</label>
                <div class="col-lg-3 col-md-4">
                    <input type="text" class="form-control" name="pro_cat" id="pro_cat">
                    <span id="error_pro_cat"></span>
                </div>
            </div>
            <div class="form-group row">
                <label id="colFormLabel" class="col-lg-3 col-md-2 col-form-label ">Référence produit : *</label>
                <div class="col-lg-3 col-md-4">
                    <input type="text" class="form-control" name="pro_ref" id="pro_ref">
                    <span id="error_pro_ref"></span>
                </div>
                <label id="colFormLabel" class="col-lg-3 col-md-2 col-form-label ">Nom du produit : *</label>
                <div class="col-lg-3 col-md-4">
                    <input type="text" class="form-control" name="pro_libelle" id="pro_libelle">
                    <span id="error_pro_libelle"></span>
                </div>
            </div>
            <div class="form-group row">
                <label id="colFormLabel" class="col-lg-3 col-md-2 col-form-label ">Description du produit : *</label>
                <div class="col-lg-3 col-md-4">
                    <textarea class="form-control" name="pro_description" id="pro_description" rows="4"></textarea>
                    <span id="error_pro_description"></span>
                </div>
                <label id="colFormLabel" class="col-lg-3 col-md-2 col-form-label ">Prix : *</label>
                <div class="col-lg-3 col-md-4">
                    <input type="text" class="form-control" name="pro_prix" id="pro_prix">
                    <span id="error_pro_prix"></span>
                </div>
            </div>
            <div class="form-group row">
                <label id="colFormLabel" class="col-lg-3 col-md-2 col-form-label ">Nombre d'unité en stock : *</label>
                <div class="col-lg-3 col-md-4">
                    <input type="text" class="form-control" name="pro_stock" id="pro_stock">
                    <span id="error_pro_stock"></span>
                </div>
                <label id="colFormLabel" class="col-lg-3 col-md-2 col-form-label ">Couleur : *</label>
                <div class="col-lg-3 col-md-4">
                    <input type="text" class="form-control" name="couleur" id="couleur">
                    <span id="error_couleur"></span>
                </div>
            </div>
            <div class="form-group row">
                <label id="colFormLabel" class="col-lg-3 col-md-2 col-form-label ">Extension de la photo : *</label>
                <div class="col-lg-3 col-md-4">
                    <input type="text" class="form-control" name="photo" id="photo" placeholder="Ex: jpg, png, ...">
                    <span id="error_photo"></span>
                </div>
                <label id="colFormLabel" class="col-lg-3 col-md-2 col-form-label ">Date d'ajout : *</label>
                <!-- Si pas de date d'ajout => afficher la date du jour, sinon => afficher la date d'ajout -->
                <div class="col-lg-3 col-md-4">
                    <input type="date" class="form-control" name="date_ajout" id="date_ajout">
                    <span id="error_date_ajout"></span>
                </div>
            </div>
            <div class="form-group row">
                <label id="colFormLabel" class="col-lg-3 col-md-2 col-form-label ">Date de modification : *</label>
                <div class="col-lg-3 col-md-4">
                    <input type="date" class="form-control" name="date_modif" id="date_modif">
                    <span id="error_date_modif"></span>
                </div>
                <label id="colFormLabel" class="col-lg-3 col-md-2 col-form-label ">Bloquer le produit à la vente : *</label>
                <div class="col-lg-3 col-md-4">
                    <input type="text" class="form-control" name="bloque" id="bloque">
                    <span id="error_bloque"></span>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-2" name="submit" value="envoiContact">Envoyer</button>
        </form>






    <?php
    include("assets/PHP/pieddepage.php");
    ?>


</body>

</html>