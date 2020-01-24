<html>

<head>
    <meta charset="UTF-8">
    <title>testDb.php</title>
    <?php
    // Pour récupérer la variable passée dans l'URL, il faut utiliser le tableau associatif $_GET.
    //$pro_id = $_GET["pro_id"];



    // Appel de la database
    try {
        $db = new PDO('mysql:host=localhost;charset=utf8;dbname=jarditou', 'root', '');
        echo "Connexion réussi à la base de donnée <br>";
        // Ajout d'une option PDO pour gérer les exceptions
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        echo 'Erreur : ' . $e->getMessage() . '<br />';
        echo 'N° : ' . $e->getCode();
        die('Fin du script');
    }
    ?>

</head>

<body>
    <?php
    // Liste des produits (pro_id) du tableau produits
    $requete = "SELECT * FROM produits";
    $result = $db->query($requete);
    while ($produit = $result->fetch(PDO::FETCH_OBJ)) {

        echo $produit->pro_id . " – " . $produit->pro_cat_id . " - " . $produit->pro_ref . " - " . $produit->pro_libelle . 
            $produit->pro_description . " - " . $produit->pro_prix . " - " . $produit->pro_stock . " - " .
            $produit->pro_couleur . " - " . $produit->pro_photo . " - " . $produit->pro_d_ajout . " - " . 
            $produit->pro_d_modif . " - " . $produit->pro_bloque . " - " .
            "<br>";
    }
    $result->closeCursor();
    ?>

</body>

</html>

<!DOCTYPE html>
<html lang="fr">
<!-- On appel notre BDD pour chercher des colones de notre table -->
<head>
    <meta charset="UTF-8">
    <title>Atelier PHP N°4 - page de détail</title>
    <?php
    require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions

    $db = connexionBase(); // Appel de la fonction de connexion
    $pro_id = $_GET["pro_id"];
    $requete = "SELECT * FROM produits WHERE pro_id=" . $pro_id;

    $result = $db->query($requete);

    // Renvoi de l'enregistrement sous forme d'un objet
    $produit = $result->fetch(PDO::FETCH_OBJ);
    ?>

</head>

<body>
    <?php echo $produit->pro_libelle; ?> référence <?php echo $produit->pro_ref; ?>
    <br>
    <?php echo $produit->pro_description; ?>
    <br>
    <?php echo $produit->pro_prix; ?>
</body>

</html>

<?php // Connexion a la base de donner 

function connexionBase(){
       // Paramètre de connexion serveur
        $host = "localhost";
        $login= "root";     // Votre loggin d'accès au serveur de BDD 
        $password="";    // Le Password pour vous identifier auprès du serveur
        $base = "jarditou";    // La bdd avec laquelle vous voulez travailler 
    
    try 
    {
        $db = new PDO('mysql:host=' .$host. ';charset=utf8;dbname=' .$base, $login, $password);
        echo "Vous êtes entrer dans la base de donnée ultra securisé de l'afpa <br>";
        return $db;
        } 
        catch (Exception $e) 
        {
            echo 'Erreur : ' . $e->getMessage() . '<br>';
            echo 'N° : ' . $e->getCode() . '<br>';
            die('Connexion au serveur impossible.');
    }
}
?>


<?php
// fonction de vérification des id inexistant
function verif($produit)
{
    if(!$produit)
    {
        die("ID : ". $_GET["pro_id"]." inexistant");
    }
}
?>