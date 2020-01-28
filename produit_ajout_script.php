<?php
function connexionBase()
{
    // Paramètre de connexion serveur
    $host = "localhost";
    $login = "root";     // Votre loggin d'accès au serveur de BDD 
    $password = "";    // Le Password pour vous identifier auprès du serveur
    $base = "jarditou";    // La bdd avec laquelle vous voulez travailler 

    try {
        $db = new PDO('mysql:host=' . $host . ';charset=utf8;dbname=' . $base, $login, $password);
        //echo " <br>Vous êtes entrer dans la base de donnée ultra securisé de l'afpa <br>";
        return $db;
    } catch (Exception $e) {
        echo 'Erreur : ' . $e->getMessage() . '<br>';
        echo 'N° : ' . $e->getCode() . '<br>';
        die('Connexion au serveur impossible.');
    }
}
$db = connexionBase();
?>

<?php
$pro_id = htmlspecialchars($_POST['pro_id']);
$error_pro_id = "";

$pro_cat = htmlspecialchars($_POST['pro_cat']);
$error_pro_cat = "";

$pro_ref = htmlspecialchars($_POST['pro_ref']);
$error_pro_ref = "";

$pro_libelle = htmlspecialchars($_POST['pro_libelle']);
$error_pro_libelle = "";

$pro_description = htmlspecialchars($_POST['pro_description']);
$error_pro_description = "";

$pro_prix = htmlspecialchars($_POST['pro_prix']);
$error_pro_prix = "";

$pro_stock = htmlspecialchars($_POST['pro_stock']);
$error_pro_stock = "";

$couleur = htmlspecialchars($_POST['couleur']);
$error_couleur = "";

$photo = htmlspecialchars($_POST['photo']);
$error_photo = "";

$date_ajout = htmlspecialchars($_POST['date_ajout']);
$error_date_ajout = "";

$date_modif = htmlspecialchars($_POST['date_modif']);
$error_date_modif = "";

$bloque = htmlspecialchars($_POST['bloque']);
$error_bloque = "";

$alpha = "/^[a-z\s]+$/i";
$num = "/^[0-9]+$/";
$alphaNum = "/^[a-z0-9\_\-\s]+$/i";
$message = "/^[a-z0-9ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûü;:.,\"\'\?\!\_\-\s()]+$/i";

if (isset($_POST['submit'])) {
    // TODO: VERIFIER TOUS LES MESSAGES D'ERREUR
    // Vérification de la clé de la table produits
    if (empty($pro_id)) {
        $error_pro_id = "Veuillez renseigner ce champs";
    } else if (!preg_match($num, $pro_id)) {
        $error_pro_id = "La clé doit se composer que de chiffres ";
    } else {
        $error_pro_id = "YES U DIT IT !";
        echo "Clé de la table produits = $pro_id <br>";
    }

    // Vérification de la catégorie du produit
    if (empty($pro_cat)) {
        $error_pro_cat = "Veuillez renseigner ce champs";
    } else if (!preg_match($num, $pro_cat)) {
        $error_pro_cat = "La catégorie doit se composer que de chiffres ";
    } else {
        $error_pro_cat = "YES U DIT IT !";
        echo "Catégorie du produit = $pro_cat <br>";
    }

    // Vérification de la référence produit
    if (empty($pro_ref)) {
        $error_pro_ref = "Veuillez renseigner ce champs";
    } else if (!preg_match($alphaNum, $pro_ref)) {
        $error_pro_ref = "La référence doit se composer uniquement de lettres, chiffres, tirets et underscores (_)";
    } else {
        $error_pro_ref = "YES U DIT IT !";
        echo "Référence du produit = $pro_ref <br>";
    }

    // Vérification du nom du produit
    if (empty($pro_libelle)) {
        $error_pro_libelle = "Veuillez renseigner ce champs";
    } else if (!preg_match($alphaNum, $pro_libelle)) {
        $error_pro_libelle = "Le libellé doit se composer uniquement de lettres ";
    } else {
        $error_pro_libelle = "YES U DIT IT !";
        echo "Nom du produit = $pro_libelle <br>";
    }

    // Vérification de la description du produit 
    if (empty($pro_description)) {
        $error_pro_description = "Veuillez renseigner ce champs";
    } else if (!preg_match($message, $pro_description)) {
        $error_pro_description = "Le message comporte des caratères non valides ";
    } else {
        $error_pro_description = "YES U DIT IT !";
        echo "Description du produit = $pro_description <br>";
    }

    // Vérification du prix TODO: Mettre le regex avec les décimales
    if (empty($pro_prix)) {
        $error_pro_prix = "Veuillez renseigner ce champs";
    } else if (!preg_match($num, $pro_prix)) {
        $error_pro_prix = "Le prix doit être composé uniquement de chiffre ";
    } else {
        $error_pro_prix = "YES U DIT IT !";
        echo "Prix = $pro_prix <br>";
    }

    // Vérification du nombre d'unité en stock 
    if (empty($pro_stock)) {
        $error_pro_stock = "Veuillez renseigner ce champs";
    } else if (!preg_match($num, $pro_stock)) {
        $error_pro_stock = "La catégorie doit se composer que de chiffres";
    } else {
        $error_pro_stock = "YES U DIT IT !";
        echo "Nombre d'unités en stock = $pro_stock <br>";
    }

    // Vérification de la couleur 
    if (empty($couleur)) {
        $error_couleur = "Veuillez renseigner ce champs";
    } else if (!preg_match($alpha, $couleur)) {
        $error_couleur = "La couleur doit se composer que de lettres";
    } else {
        $error_couleur = "YES U DIT IT !";
        echo "Couleur = $couleur <br>";
    }

    // Vérification de la photo TODO: vérifier le regex avec des strings
    if (empty($photo)) {
        $error_photo = "Veuillez renseigner ce champs";
    } else if (!preg_match($alpha, $photo)) {
        $error_photo = "Ne correspond pas à une extension valide ";
    } else {
        $error_photo = "YES U DIT IT !";
        echo "Extension de la photo = $photo <br>";
    }

    // Vérification de la date du jour TODO: Vérifier le regex ==> si != de la date du jour, alors "veuillez renseigner la date du jour"
    if (empty($date_ajout)) {
        $error_date_ajout = "Veuillez renseigner ce champs";
    } else if (!preg_match($alpha, $date_ajout)) {
        $error_date_ajout = "La date d'ajout ne correspond pas à la date d'aujourd'hui ";
    } else {
        $error_date_ajout = "YES U DIT IT !";
        echo "Extension de la photo = $date_ajout <br>";
    }

    // Vérification de la date de modification TODO: Vérifier le regex => si != de la date du jour, veuillez renseigner la date du jour 
    if (empty($date_modif)) {
        $error_date_modif = "Veuillez renseigner ce champs";
    } else if (!preg_match($alpha, $date_modif)) {
        $error_date_modif = "La date de modification ne correspond pas à la date d'aujourd'hui ";
    } else {
        $error_date_modif = "YES U DIT IT !";
        echo "Extension de la photo = $date_modif <br>";
    }

    // Vérification du bloquage ou non du produit TODO: vérif regex
    if (empty($bloque)) {
        $error_bloque = "Veuillez renseigner ce champs";
    } else if (!preg_match($alpha, $bloque)) {
        $error_bloque = "La catégorie doit se composer que de chiffres ";
    } else {
        $error_bloque = "YES U DIT IT !";
        echo "Extension de la photo = $bloque <br>";
    }
}




var_dump($_POST);
echo "<br>";
$requete = 'INSERT INTO produits VALUES (:$pro_id,:$pro_cat,:$pro_ref,:$pro_libelle,:$pro_description,:$pro_prix,:$pro_stock,:$couleur,:$photo,:$date_ajout,:$date_modif,:$bloque)';
// le ":" correspond a la valeur 
//$requete = 'INSERT INTO produits VALUES ("'.$pro_id.'","'.$pro_cat.'","'.$pro_ref.'","'.$pro_libelle.'","'.$pro_description.'","'.$pro_prix.'","'.$pro_stock.'","'.$couleur.'","'.$photo.'","'.$date_ajout.'","'.$date_modif.'","'.$bloque.'")';
$result = $db->prepare($requete);
//PDOStatement::bindParam() lie un paramètre a un nom de variable spécifique 
$result->bindValue("iisi",$pro_id,$pro_cat,$pro_ref,$pro_libelle);
$result->bindValue("sdis",$pro_description,$pro_prix,$pro_stock,$couleur);
$result->bindValue("sssi",$photo,$date_ajout,$date_modif,$bloque);
$result->execute();
echo "Enregistrement réussi !";


//ne pas toucher , ca reste en bas sinon = error 404 nofound
header("Location:assets\PHP\PHP_exo\liste.php");


//-----------------------------------------------------------------




