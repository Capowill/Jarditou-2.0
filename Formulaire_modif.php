<?php
include('assets/PHP/entete.php');
include('assets/PHP/header.php');
?>


<?php // Connexion a la BDD (Ne pas supprimer)
require "assets/PHP/PHP_exo/connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
$db = connexionBase(); // Appel de la fonction de connexion
$pro_id = $_GET["pro_id"];
$requete = "SELECT * FROM produits WHERE pro_id=" . $pro_id;
$result = $db->query($requete);
// Renvoi de l'enregistrement sous forme d'un objet
$produit = $result->fetch(PDO::FETCH_OBJ);
?>

<div class="table table-sm mb-1 mt-1">
    <!--rendre le table responsive pour une taille >=576px-->
    <!--class permet de changer de style du tableau (striped en zebra)-->
    <table class="table table-striped table-bordered">
        <thead>
            <tr id="titre">
                <th scope="col" width="20%">Photos</th>
                <th scope="col">ID</th>
                <th scope="col">Catégorie</th>
                <th scope="col">Référence</th>
                <th scope="col">Libellé</th>
                <th scope="col">Descriptions</th>
                <th scope="col">Prix</th>
                <th scope="col">Stock</th>
                <th scope="col">Couleur</th>
                <th scope="col">Ajout</th>
                <th scope="col">Modif</th>
                <th scope="col">Bloqué</th>
            </tr>
        </thead>

        <tbody>
            <td width="200px" height="200px"><img src="assets/images/<?= $produit->pro_id ?>.<?= $produit->pro_photo ?>" alt="Photos" class="img-fluid" width="200px" height="200px"></td>
            <td><?= $produit->pro_id ?> </td>
            <td><?= $produit->pro_cat_id ?> </td>
            <td><?= $produit->pro_ref ?></td>
            <td><?= $produit->pro_libelle ?></td>
            <td><?= $produit->pro_description ?></td>
            <td><?= $produit->pro_prix; ?>€</td>
            <td><?= $produit->pro_stock ?></td>
            <td><?= $produit->pro_couleur ?></td>
            <td><?= $produit->pro_d_ajout ?></td>
            <td><?= $produit->pro_d_modif ?></td>
            <td><?= $produit->pro_bloque ?></td>

        </tbody>
    </table>
</div>

<form class="m-5" action="script_modif.php" method="POST"  enctype="multipart/form-data">
    <div class="form-group row mt-2">
        <label id="colFormLabel" class="col-lg-3 col-md-2 col-form-label ">ID produits : *</label>
        <div class="col-lg-3 col-md-4">
            <input type="text" class="form-control" name='pro_id' id="pro_id" value='<?= $produit->pro_id ?>'>
            <span id="error_pro_id"></span>
        </div>
        <label id="colFormLabel" class="col-lg-3 col-md-2 col-form-label ">Catégorie du produit : *</label>
        <div class="col-lg-3 col-md-4">
            <input type="text" class="form-control" name="pro_cat_id" id="pro_cat_id" value='<?= $produit->pro_cat_id ?>'>
            <span id="error_pro_cat"></span>
        </div>
    </div>
    <div class="form-group row">
        <label id="colFormLabel" class="col-lg-3 col-md-2 col-form-label ">Référence produit : *</label>
        <div class="col-lg-3 col-md-4">
            <input type="text" class="form-control" name="pro_ref" id="pro_ref" value='<?= $produit->pro_ref ?>'>
            <span id="error_pro_ref"></span>
        </div>
        <label id="colFormLabel" class="col-lg-3 col-md-2 col-form-label ">Nom du produit (libellé) : *</label>
        <div class="col-lg-3 col-md-4">
            <input type="text" class="form-control" name="pro_libelle" id="pro_libelle" value="<?= $produit->pro_libelle ?>">
            <span id="error_pro_libelle"></span>
        </div>
    </div>
    <div class="form-group row">
        <label id="colFormLabel" class="col-lg-3 col-md-2 col-form-label ">Description du produit : *</label>
        <div class="col-lg-3 col-md-4">
            <textarea class="form-control" name="pro_description" id="pro_description" rows="4"><?= $produit->pro_description ?></textarea>
            <span id="error_pro_description"></span>
        </div>
        <label id="colFormLabel" class="col-lg-3 col-md-2 col-form-label ">Prix : *</label>
        <div class="col-lg-3 col-md-4">
            <input type="text" class="form-control" name="pro_prix" id="pro_prix" value="<?= $produit->pro_prix; ?>">
            <span id="error_pro_prix"></span>
        </div>
    </div>
    <div class="form-group row">
        <label id="colFormLabel" class="col-lg-3 col-md-2 col-form-label ">Nombre d'unité en stock : *</label>
        <div class="col-lg-3 col-md-4">
            <input type="text" class="form-control" name="pro_stock" id="pro_stock" value="<?= $produit->pro_stock ?>">
            <span id="error_pro_stock"></span>
        </div>
        <label id="colFormLabel" class="col-lg-3 col-md-2 col-form-label ">Couleur : *</label>
        <div class="col-lg-3 col-md-4">
            <input type="text" class="form-control" name="couleur" id="couleur" value="<?= $produit->pro_couleur ?>">
            <span id="error_couleur"></span>
        </div>
    </div>
    <div class="form-group row">
        <label id="colFormLabel" class="col-lg-3 col-md-2 col-form-label ">Date de modification : *</label>
        <div class="col-lg-3 col-md-4">
            <input type="date" class="form-control" name="date_modif" id="date_modif" value="<?= $produit->pro_d_modif ?>">
            <span id="error_date_modif"></span>
        </div>
        <label id="colFormLabel" class="col-lg-3 col-md-2 col-form-label ">Bloquer le produit à la vente : *</label>
        <div class="col-lg-3 col-md-4">
            <input type="text" class="form-control" name="bloque" id="bloque" value="<?= $produit->pro_bloque ?>">
            <span id="error_bloque"></span>
        </div>
    </div>
    <div class="form-group row">
        <label id="colFormLabel" class="col-lg-3 col-md-2 col-form-label ">Photo : *</label>
        <div class="col-lg-3 col-md-4">
            <input type="file" class="form-control-file" name="fichier" id="fichier">
        </div>
        <label id="colFormLabel" class="col-lg-3 col-md-2 col-form-label ">Extension de la photo : *</label>
        <div class="col-lg-3 col-md-4">
            <input type="text" class="form-control" name="photo" id="photo" placeholder="Ex: jpg, png, ...">
            <span id="error_photo"></span>
        </div>
    </div>


    <button class="btn btn-info mb-2" type="submit" name="submit">Modifier</button>
    <a class="btn btn-secondary mb-2" href="Newtableau.php" type="reset" role="button">Annuler</a>
</form>


<?php
include('assets/PHP/pieddepage.php');
?>