<?php
session_start();
require 'PHP_exo/connexion_bdd.php';
require 'PHP_exo/utile.php';

//déconnexion
if (isset($_GET['logout']) && !empty($_GET['logout'] && $_GET['logout'] == "logout")) {
    clean_php_session();
    header('Location: ../../Accueil.php');
}

if (isset($_POST['login'])) {
    $username = $_POST['Pseudo'];
    $password = $_POST['Pass'];
    if (
        isset($_POST['Pseudo']) && !empty($_POST['Pseudo']) &&
        isset($_POST['Pass']) && !empty($_POST['Pass'])
    ) {
        // $username = $_POST['Pseudo'];
        // $password = $_POST['Pass'];

        $db = connexionBase();
        $requete = $db->prepare('SELECT * FROM users WHERE us_pseudo = :us_pseudo');
        $requete->bindValue(':us_pseudo', $username);
        $requete->execute();
        $user = $requete->fetch(PDO::FETCH_OBJ); // va chercher le users dans la base de données
// commentaire
        if ($user) {
            if (password_verify($password, $user->us_password)) {
                $_SESSION['Pseudo'] = $user->us_pseudo;
                //$_SESSION['rank'] = $req->user_admin;
                header('Location: ../../Accueil.php');
            } else
                echo 'Identifiant ou mot de passe incorrect';
        } else
            echo 'Indentifiant ou  mot de passe incorrect';
    }
}
// ============ ============ ============ ============ ============ ============ 


// function log(){
// include('PHP_exo/connexion_bdd.php');

// $db = connexionBase();
// // requete qui affiche les item du tableau dans l'ordre d'ajout (via les dates)
// $requete = "SELECT * FROM users";//Saisie de la requete
// $result = $db->query($requete);

// $pseudo = ckeck_values($_POST['Pseudo']);
// $password = ckeck_values($_POST['Pass']);

//     if (empty($_POST['Pseudo'])){
//             echo "veuillez saisir votre Pseudo ! <br>";
//         } else if($pseudo == $us_pseudo){
//             echo "Pseudo inccorect <br>";
//         }else {
//             echo "Bienvenue $pseudo <br>";
//         }

//     if (empty($_POST['Pass'])){
//             echo "Veuillez saisir un mot de pass ! <br>";
//         } else if(password_verify($password,$us_password)) {
//             echo "Mot de pass inccorect <br>";
//         }else{
//             echo " Mot de pass correct <br>";
//         }

// }

// ============ ============ ============ ============ ============ ============ 
