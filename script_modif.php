<?php
function ckeck_values($donnees)
{ // this function will check each values send by the form
    $donnees = trim($donnees); // Delete useless spaces
    $donnees = stripslashes($donnees); // Delete antslashes (\)
    $donnees = htmlspecialchars($donnees); // Convert special characters into HTML entities
    return $donnees;
}


function verif_values()
{ //this function will verify required values and syntax.
    $pro_stock = $_POST['pro_stock'];
    $pro_id = ckeck_values($_POST['pro_id']);
    $pro_cat_id = ckeck_values($_POST['pro_cat_id']);
    $pro_ref = ckeck_values($_POST['pro_ref']);
    $pro_libelle = ckeck_values($_POST['pro_libelle']);
    $pro_description = ckeck_values($_POST['pro_description']);
    $pro_prix = ckeck_values($_POST['pro_prix']);
    $pro_stock = ckeck_values($_POST['pro_stock']);
    $couleur = ckeck_values($_POST['couleur']);
    // $photo = ckeck_values($_POST['photo']);
    $date_modif = ckeck_values($_POST['date_modif']);
    $bloque = ckeck_values($_POST['bloque']);
    var_dump($_POST);

    //REGEX LIST
    $num1 = "/^[0-9]{1,10}$/"; //For pro_id & pro_cat_id_id int(10)
    $num2 = "/^[0-9]{1,6}(.[0-9]{0,2})$/"; //For pro_prix decimal(6,2)
    $num3 = "/^[0-9]{1,11}$/"; //FOr pro_stock int(11)
    $num4 = "/^[0-9]{1}$/"; //For pro_bloque tinyint(1)
    $alpha1 = "/^[a-z0-9_\-]{1,10}$/i"; //For pro ref varchar(10)
    $alpha2 = "/^[a-z0-9_\-\s]{1,200}$/i"; //For pro_libelle varchar(200)
    $alpha3 = "/^[a-z0-9_\-\s,.()']{1,1000}$/i"; //For pro_description varchar(1000)
    $alpha4 = "/^[a-z]{1,30}$/i"; //For pro_couleur varchar(30)
    $alpha5 = "/^[a-z]{1,4}$/"; //For pro_photo varchar(4)
    $alpha6 = "/^(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))$/"; //For pro-d-ajout &pro_d_modif date

    if (isset($_POST['submit'])) {
        $tab_verif = [];
        // Vérification de la clé de la table produits
        if (empty($pro_id)) {
            array_push($tab_verif, $pro_id);
        } else if (!preg_match($num1, $pro_id)) {
            array_push($tab_verif, $pro_id);
        } else {
            echo "Clé de la table produits = $pro_id <br>";
        }

        // Vérification de la catégorie du produit
        if (empty($pro_cat_id)) {
        } else if (!preg_match($num1, $pro_cat_id)) {
        } else {
            echo "Catégorie du produit = $pro_cat_id <br>";
        }

        // Vérification de la référence produit
        if (empty($pro_ref)) {
        } else if (!preg_match($alpha1, $pro_ref)) {
        } else {
            echo "Référence du produit = $pro_ref <br>";
        }

        // Vérification du nom du produit
        if (empty($pro_libelle)) {
        } else if (!preg_match($alpha2, $pro_libelle)) {
        } else {
            echo "Nom du produit = $pro_libelle <br>";
        }

        // Vérification de la description du produit 
        if (empty($pro_description)) {
        } else if (!preg_match($alpha3, $pro_description)) {
        } else {
            echo "Description du produit = $pro_description <br>";
        }

        // Vérification du prix 
        if (empty($pro_prix)) {
        } else if (!preg_match($num2, $pro_prix)) {
        } else {
            echo "Prix = $pro_prix <br>";
        }

        // Vérification du nombre d'unité en stock 
        if (empty($pro_stock)) {
        } else if (!preg_match($num3, $pro_stock)) {
        } else {
            echo "Nombre d'unités en stock = $pro_stock <br>";
        }

        // Vérification de la couleur 
        if (empty($couleur)) {
        } else if (!preg_match($alpha4, $couleur)) {
        } else {
            echo "Couleur = $couleur <br>";
        }

        // Vérification de la photo
        // if (empty($photo)) {
        // } else if (!preg_match($alpha5, $photo)) {
        // } else {
        //     echo "Extension de la photo = $photo <br>";
        // }


        // Vérification de la date de modification 
        if (empty($date_modif)) {
        } else if (!preg_match($alpha6, $date_modif)) {
        } else {
            echo "Extension de la photo = $date_modif <br>";
        }

        // Vérification du bloquage ou non du produit
        if (empty($bloque)) {
        } else if (!preg_match($num4, $bloque)) {
        } else {
            echo "Extension de la photo = $bloque <br>";
        }
    }

    // require 'assets/PHP/PHP_exo/connexion_bdd.php';
    // $db = connexionBase(); // appel de la fonction 

    // $requete=$db->prepare("UPDATE produits SET `pro_id`=$pro_id, `pro_cat_id`=$pro_cat_id, pro_ref=$pro_ref, pro_libelle=$pro_libelle, pro_description=$pro_description, 
    //     pro_prix=$pro_prix, pro_stock=$pro_stock, pro_couleur=$couleur, pro_d_modif=$date_modif, pro_bloque=$bloque
    //     WHERE pro_id=$pro_id
    //     ");
    // $requete = $db->prepare("UPDATE INTO produits (`pro_id`=:pro_id, `pro_cat_id`=:pro_cat_id, `pro_ref`=:pro_ref, `pro_libelle`=:pro_libelle,
    // `pro_description`= :pro_description, `pro_prix`=:pro_prix, `pro_stock`=:pro_stock, `pro_couleur`=:pro_couleur, `pro_d_modif`=:pro_d_modif, `pro_bloque`=:pro_bloque) ");
    // $requete->bindParam(':pro_id', $pro_id);
    // $requete->bindParam(':pro_cat_id', $pro_cat);
    // $requete->bindParam(':pro_ref', $pro_ref);
    // $requete->bindParam(':pro_libelle', $pro_libelle);
    // $requete->bindParam(':pro_description', $pro_description);
    // $requete->bindParam(':pro_prix', $pro_prix);
    // $requete->bindParam(':pro_stock', $pro_stock);
    // $requete->bindParam(':pro_couleur', $couleur);
    // $requete->bindParam(':pro_d_modif', $date_modif);
    // $requete->bindParam(':pro_bloque', $bloque);
    // // $requete->bindParam(':pro_photo', $photo['pro_photo']);
    // $requete->execute();

    try
    {
        require 'assets/PHP/PHP_exo/connexion_bdd.php';
        $db = connexionBase();
        $requete = $db->prepare("UPDATE produits SET pro_id='$pro_id', pro_cat_id='$pro_cat_id', pro_ref='$pro_ref', pro_libelle='$pro_libelle', 
            pro_description='$pro_description', pro_prix='$pro_prix', pro_stock='$pro_stock', pro_couleur='$couleur', 
            pro_d_modif='$date_modif', pro_bloque='$bloque'
            WHERE pro_id='$pro_id'");
        $requete->execute();
        header('Location:Newtableau.php');
    }
    catch(PDOException $e){
        echo 'Erreur : '.$e->getMessage();
    }
}

verif_values();

// header('Location:Newtableau.php');
