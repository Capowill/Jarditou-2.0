<?php
include("assets/PHP/entete.php");
include("assets/PHP/header.php");
// Inclusion de notre bibliothèque de fonctions
// Appel de la fonction de connexion

$db = connexionBase();
// requet qui affiche les item du tableau dans l'ordre d'ajout (via les dates)
$requete = "SELECT * FROM produits ORDER BY pro_d_ajout DESC";//Saisie de la requete
$result = $db->query($requete);
?>
<h1 class="d-flex justify-content-center display-3"><strong>Tableau</strong></h1>
    <hr>
<h1 class="text-center mb-2 mt-2"> Liste des Articles</h1>
<a href="produits_ajout.php"><button class="btn btn-secondary" type="submit" value="Envoyer">Ajouter un produit</button></a>
<div class="table table-sm mb-1 mt-1"><!--rendre le table responsive pour une taille >=576px-->
    <!--class permet de changer de style du tableau (striped en zebra)-->
    <table class="table table-striped table-bordered">
        <thead>
        <tr id="titre">
            <th width="auto">Photos</th>
            <th>ID</th>
            <th>Référence</th>
            <th>Nom produits</th>
            <th>Descriptions</th>
            <th>Prix</th>
            <th>Stock</th>
            <th>Couleur</th>
            <th>Ajout</th>
            <th>Modif</th>
            <th>Bloqué</th>
        </tr>
        </thead>

<?php while ($row = $result->fetch(PDO::FETCH_OBJ))// Renvoi de l'enregistrement sous forme d'un objet
    { ?>
        <tbody>
        <tr>
            <th width="200" height="200"><img src="assets/images/<?= $row->pro_id?>.<?=$row->pro_photo ?>" alt ="Photos" class="img-fluid" width="200" height="200"></th>
            <td><?= $row->pro_id ?> </td>
            <td><?= $row->pro_ref ?></td>
            <td width="150" id="libelle"><a href="detail.php?pro_id=<?= $row->pro_id?>"><?= $row->pro_libelle?></a></td> 
            <td><?= $row->pro_description ?></td>  
            <td width="100"><?= $row->pro_prix ?> €</td>
            <td><?= $row->pro_stock ?></td>
            <td><?= $row->pro_couleur ?></td>
            <td width="150"><?= $row->pro_d_ajout ?></td>
            <td width="150"><?= $row->pro_d_modif ?></td>
            <td><?= $row->pro_bloque ?></td>
        </tr>
        </tbody>
<?php } ?>

    </table>
</div>

<?php
    include('assets/PHP/footer.php');
    include("assets/PHP/pieddepage.php");
?>