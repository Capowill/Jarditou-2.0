<?php
session_start();

function log(){
include('PHP_exo/connexion_bdd.php');

$db = connexionBase();
// requete qui affiche les item du tableau dans l'ordre d'ajout (via les dates)
$requete = "SELECT * FROM users ORDER BY us_password , us_pseudo DESC";//Saisie de la requete
$result = $db->query($requete);

$pseudo = ckeck_values($_POST['Pseudo']);
$password = ckeck_values($_POST['Pass']);

    if (empty($_POST['Pseudo'])){
            echo "veuillez saisir votre Pseudo ! <br>";
        } else if(!preg_match($pseudo, $us_pseudo)){
            echo "Pseudo inccorect <br>";
        }else {
            echo "Bienvenue $pseudo <br>";
        }


    if (empty($_POST['Pass'])){
            echo "Veuillez saisir un mot de pass ! <br>";
        } else if() {
            echo "Mot de pass inccorect <br>";
        }else{
            echo " Mot de pass correct <br>";
        }


}


// ============ ============ ============ ============ ============ ============ 
if (empty($ville)){
    echo "Ville = Champ vide <br>";
}else if (!preg_match($filtreAdresse, $ville)){
    echo "Ville =incorrect !<br>";
}else{
    echo "Ville = $ville <br>";
}