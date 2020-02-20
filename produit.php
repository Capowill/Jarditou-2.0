<?php

//Pour faire une requet on fait ca : http://localhost/jarditou/produit.php?pro_id=8
// le ?pro_id=8 peux changer selon ce qu'on cherche

// Pour récupérer la variable passée dans l'URL, il faut utiliser le tableau associatif $_GET.
$pro_id = $_GET["pro_id"];

try 
{
    $db = new PDO('mysql:host=localhost;charset=utf8;dbname=jarditou', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (Exception $e) 
{
    echo 'Erreur : ' . $e->getMessage() . '<br />';
    echo 'N° : ' . $e->getCode();
    die('Fin du script');
} 

$requete = "SELECT * FROM produits WHERE pro_id=".$pro_id;
$result = $db->query($requete); 
$produit = $result->fetch(PDO::FETCH_OBJ);
$result->closeCursor();
?>
</head>
<body> 
    <div> <?php echo $produit->pro_id; ?> </div>
    <div> <?php echo $produit->pro_cat_id; ?> </div>
    <div> <?php echo $produit->pro_ref; ?> </div>
    <div> <?php echo $produit->pro_libelle; ?> </div>
    <div> <?php echo $produit->pro_description; ?> </div>
    <div> <?php echo $produit->pro_prix; ?> </div>
    <div> <?php echo $produit->pro_stock; ?> </div>
    <div> <?php echo $produit->pro_couleur; ?> </div>
    <div> <?php echo $produit->pro_photo; ?> </div>
    <div> <?php echo $produit->pro_d_ajout; ?> </div>
    <div> <?php echo $produit->pro_d_modif; ?> </div>
    <div> <?php echo $produit->pro_bloque; ?> </div>
</body>
</html>