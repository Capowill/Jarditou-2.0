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
                <th scope="col">Référence</th>
                <th scope="col">Libellé</th>
                <th scope="col">Prix</th>
                <th scope="col">Stock</th>
                <th scope="col">Couleur</th>
                <th scope="col">Ajout</th>
                <th scope="col">Modif</th>
                <th scope="col">Bloqué</th>
            </tr>
        </thead>

        <tbody>
            <td><img src="assets/images/<?= $produit->pro_id ?>.<?= $produit->pro_photo ?>" alt="Photos" class="img-fluid" width="200" height="200"></td>
            <td><?= $produit->pro_id ?> </td>
            <td><?= $produit->pro_ref; ?></td>
            <td><?= $produit->pro_libelle; ?></td>
            <td><?= $produit->pro_prix; ?>€</td>
            <td><?= $produit->pro_stock ?></td>
            <td><?= $produit->pro_couleur ?></td>
            <td><?= $produit->pro_d_ajout ?></td>
            <td><?= $produit->pro_d_modif ?></td>
            <td><?= $produit->pro_bloque ?></td>
            <!-- <td><?php echo $produit->pro_description; ?></td> -->

        </tbody>

    </table>
</div>
<a class="btn btn-info mb-2" href="Formulaire_modif.php?pro_id=<?php echo $produit->pro_id; ?>" role="button">Modifier</a>
<a class="btn btn-danger mb-2" href="supprimer_produit.php?pro_id=<?php echo $produit->pro_id; ?>" role="button">supprimer</a>


<?php
include('assets/PHP/pieddepage.php');
?>