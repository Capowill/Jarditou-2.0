<?php

function ckeck_values($donnees){ // this function will check each values send by the form
    $donnees = trim($donnees); // Delete useless spaces
    $donnees = stripslashes($donnees); // Delete antslashes (\)
    $donnees = htmlspecialchars($donnees); // Convert special characters into HTML entities
    return $donnees;
}

//Table `users` = id_users	pseudo	password	email	nom	prenom	adresse	ville	codepostal	dateinscription	datevisite	
function verif_inscription(){
    $pseudo = ckeck_values($_POST['Pseudo']);
    $password = ckeck_values($_POST['Pass']);
    $password2 = ckeck_values($_POST['Pass2']);
    $email =  ckeck_values($_POST['Mail']);
    $nom = ckeck_values($_POST['Nom']);
    $prenom = ckeck_values($_POST['Prenom']);
    $adresse = ckeck_values($_POST['Adresse']);
    $ville = ckeck_values($_POST['Ville']);
    $postal = ckeck_values($_POST['Postal']);

//var_dump($_POST);
echo "<br>";
    $filtreMail = "/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/";
    $filtrePostal = "/^[0-9]{5}$/";
    $filtreNom = "/[a-zA-Z\â\ä\ê\é\è\-\ï\ë\î\ô\ö\û\ü]+$/";
    $filtrePrenom = "/[a-zA-Z\â\ä\ê\é\è\-\ï\ë\î\ô\ö\û\ü]+$/";
    //$filtreDate = "/^[0-9]{4}\-[0-9]{2}\-[0-9]{2}$/"; // resultat 00/00/0000
    $filtreAdresse = "/^[\w\s]{1,50}+$/";
    $filtrePseudo = "/^[\w\-\_]+$/";

// empty()= champ vide
if(empty($nom)){
        echo "Nom = Champ vide <br>";
    }else if (!preg_match($filtreNom, $nom)){
        echo "Nom = inccorect !<br>";
    }else{
        echo "Nom = $nom <br>";
    }
//
if (empty($prenom)){
        echo "Prenom = Champ vide <br>";
    }else if (!preg_match($filtrePrenom, $prenom)){
        echo "Prenom = incorrect !<br>";
    }else {
        echo "Prenom = $prenom <br>";
    }

if (empty($email)){
        echo "Email = Champ vide <br>";
    }else if (!preg_match($filtreMail, $email)){
        echo "Email = incorrect !<br>";
    }else {
        echo "Email = $email <br>";
    }

if (empty($postal)){
        echo "Code postal = Champ vide <br>";
    }else if (!preg_match($filtrePostal, $postal)){
        echo " Code postal = incorrect !<br>";
    }else{
        echo "Code postal = $postal <br>";
    }

if (empty($adresse)){
        echo "Adresse = Champ vide <br>";
    }else if (!preg_match($filtreAdresse, $adresse)){
        echo "Adresse = incorrect !<br>";
    }else{
        echo "Adresse = $adresse <br>";
    }

if (empty($ville)){
        echo "Ville = Champ vide <br>";
    }else if (!preg_match($filtreAdresse, $ville)){
        echo "Ville =incorrect !<br>";
    }else{
        echo "Ville = $ville <br>";
    }

if (empty($password) || empty($password2)){
        echo "Password = Champ vide <br>";
    } else if ($password != $password2) {
        echo "Password = incorrect !<br>";
    }else {
        $hash= password_hash($password,PASSWORD_DEFAULT);
        echo "Password = $hash <br>";
    }

if (empty($pseudo)){
        echo "Pseudo = Champ vide <br>";
    }else if (!preg_match($filtrePseudo, $pseudo)){
        echo "Pseudo = incorrect !<br>";
    }else {
        echo "Pseudo = $pseudo <br>";
    }

//Table `user` = id_users	us_pseudo	us_password	us_email	us_nom	us_prenom	us_adresse	us_ville	us_codepostal	dateinscription	datevisite		
//  us_pseudo	us_email	us_password	us_nom	us_adresse	us_ville	us_codepostal
    try {
        require "assets/PHP/PHP_exo/connexion_bdd.php";
        $db = connexionBase();
        $requete =$db->prepare("INSERT INTO users (`us_pseudo`,`us_password`,`us_email`,`us_nom`,`us_prenom`,`us_adresse`,`us_ville`,`us_codepostal`)
        VALUES (:Pseudo, :Pass, :Mail, :Nom, :Prenom, :Adresse, :Ville, :Postal)");
        $requete->bindValue(':Pseudo',$pseudo);
        $requete->bindValue(':Pass',$hash);
        $requete->bindValue(':Mail',$email);
        $requete->bindValue(':Nom',$nom);
        $requete->bindValue(':Prenom',$prenom);
        $requete->bindValue(':Adresse',$adresse);
        $requete->bindValue(':Ville',$ville);
        $requete->bindValue(':Postal',$postal);
        $requete->execute();
        require "assets/PHP/PHP_exo/Email.php";
        confmail();
        header('Location:Accueil.php');
    }
    catch(PDOException $e){
        echo "Error : ".$e->getMessage();
    }
}
verif_inscription();

?>
