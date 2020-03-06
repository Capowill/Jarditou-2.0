<?php
include('assets/PHP/PHP_exo/connexion_bdd.php');

function ckeck_values($donnees){ // this function will check each values send by the form
    $donnees = trim($donnees); // Delete useless spaces
    $donnees = stripslashes($donnees); // Delete antslashes (\)
    $donnees = htmlspecialchars($donnees); // Convert special characters into HTML entities
    return $donnees;
}

// id_users	pseudo	password	email	nom	prenom	adresse	ville	codepostal	dateinscription	datevisite	
function verif_inscription(){
    $pseudo = ckeck_values($_POST['Pseudo']);
    $password = ckeck_values($_POST['Password']);
    $password2 = ckeck_values($_POST['Password2']);
    $email =  ckeck_values($_POST['Mail']);
    $nom = ckeck_values($_POST['Nom']);
    $prenom = ckeck_values($_POST['Prenom']);
    $adresse = ckeck_values($_POST['Adresse']);
    $ville = ckeck_values($_POST['Ville']);
    $postal = ckeck_values($_POST['Postal']);



    $filtreMail = "/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/";
    $filtrePostal = "/^[0-9]{5}$/";
    $filtreNom = "/[a-zA-Z\â\ä\ê\é\è\-\ï\ë\î\ô\ö\û\ü]+$/";
    $filtrePrenom = "/[a-zA-Z\â\ä\ê\é\è\-\ï\ë\î\ô\ö\û\ü]+$/";
    $filtreDate = "/^[0-9]{4}\-[0-9]{2}\-[0-9]{2}$/"; // resultat 00/00/0000
    $filtreAdresse = "/^[\w\s]{1,50}+$/";
    $filtrePseudo = "/^[\w\-\_]+$/";

// empty()= champ vide
if(empty($nom)){
        echo "Champ vide";
    }else if (!preg_match($filtreNom, $nom)){
        echo "inccorect";
    }else{
        echo "Champ validé = $nom <br>";
    }
//
if (empty($prenom)){
        echo "Champ vide";
    }else if (!preg_match($filtrePrenom, $prenom)){
        echo "incorrect";
    }else {
        echo "Champ validé = $prenom <br>";
    }

if (empty($email)){
        echo "Champ vide";
    }else if (!preg_match($filtreMail, $email)){
        echo "incorrect";
    }else {
        echo "Champ validé $email <br>";
    }

if (empty($postal)){
        echo "Champ vide";
    }else if (!preg_match($filtrePostal, $postal)){
        echo "incorrect";
    }else{
        echo "Champ valide $postal <br>";
    }

if (empty($adresse)){
        echo "Champ vide";
    }else if (!preg_match($filtreAdresse, $adresse)){
        echo "incorrect";
    }else{
        echo "Champ valide $adresse <br>";
    }

if (empty($ville)){
        echo "Champ vide";
    }else if (!preg_match($filtreAdresse, $ville)){
        echo "incorrect";
    }else{
        echo "Champ valide $ville <br>";
    }

if(empty($password)){
    
}



}



?>
