<?php


require 'assets/PHP/PHP_exo/connexion_bdd.php';

$pro_id = $_GET["pro_id"];
$db = connexionBase();
$requete=$db->prepare("DELETE FROM `produits` WHERE pro_id=$pro_id");
$requete->execute();

header('Location:Newtableau.php');
?>