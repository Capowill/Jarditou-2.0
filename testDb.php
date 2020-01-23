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

        echo $produit->pro_id . " – " . $produit->pro_cat_id . " - " .$produit->pro_ref ." - ". $produit->pro_libelle .$produit->pro_description." - ".$produit->pro_prix." - ".$produit->pro_stock." - ".
        $produit->pro_couleur." - ".$produit->pro_photo." - ".$produit->pro_d_ajout." - ".$produit->pro_d_modif." - ".$produit->pro_bloque." - ".
        "<br>";
    }
    $result->closeCursor();
    ?>

</body>

</html>

