
<?php

echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";



?>


<?php
/* Info formulaire coté serveur V1.0 */
$prenom = $_POST['Prenom'];  
$nom = $_POST['Nom'];
$adresse =$_POST['Adresse'];
$ville  = $_POST['Ville'];
$postal  = $_POST['Code'];
$naissance = $_POST['Naissance'];
$mail = $_POST['mail'];
$sex = $_POST['sex'];
$sujet = $_POST['Sujet'];
$com = $_POST['commentaire'];
$box = $_POST['Confirmation'];

echo " Nom : ".$nom ."<br>";
echo " Prenom : ".$prenom ."<br>";
echo " adresse : ".$adresse."<br>";
echo " ville : ".$ville."<br>";
echo " Code postal : ".$postal."<br>";
echo " Date de naissance : " .$naissance."<br>";
echo " Sexe :" .$sex."<br>";
echo " Email : ".$mail."<br>";
echo " Sujet : ".$sujet."<br>";
echo " Commentaire : ".$com."<br>";
echo " Confirmations : ".$box."<br>";
?>


<?php
echo"<br>";
echo"<br>";
echo"<br>";
    /* =============================================  */
?>

<?php

/* V2.0 */

//Vérification du nom ====== $nom = $_POST['nom'];

if (empty($_POST["nom"]))
{
    $nomErr = "Le nom est requis";
} else if (!preg_match("/[a-zA-Z\â\ä\ê\é\è\-\ï\ë\î\ô\ö\û\ü]+$/", $nom))
{
    $nomErr = "Le nom doit comporter des lettres";
}else
{
    $nomErr = "Valide ! ".$nom;
}
echo $nomErr."<br>";


// Verification du prenom ====== $prenom = $_POST['prenom']; 

if (empty($_POST["prenom"]))
{
    $prenomErr = "Le prenom est requis";
} else if (!preg_match("/[a-zA-Z\â\ä\ê\é\è\-\ï\ë\î\ô\ö\û\ü]+$/", $prenom))
{
    $prenomErr = "Le prenom doit comporter des lettres";
}else
{
    $prenomErr = "Valide ! ".$prenom;
}
echo $prenomErr."<br>";


// verfi date de naissance ====== $naissance = $_POST['Naissance'];

if (empty($_POST["Naissance"]))
{
    $dateErr = " La date de naissance est requis";
} else if (!preg_match("/^[0-9]{4}\-[0-9]{2}\-[0-9]{2}$/", $naissance))
{
    $dateErr = "Date de naissance Incorrect";
}else
{
    $dateErr = "Valide ! ".$naissance;
}
echo $dateErr."<br>";


// verif adresse ====== $adresse =$_POST['Adresse'];

if (empty($_POST["Adresse"]))
{
    $adresseErr = "L'adresse est requis";
}
else
{
    $adresseErr = "Valide ! ".$adresse;
}
echo $adresseErr."<br>";

// verif code postal ====== $postal  = $_POST['Code'];

if (empty($_POST['Code']))
{
    $codeErr = "Le Code postal est requis";
}
else if (!preg_match("/^[0-9]{5}$/", $postal))
{
    $codeErr = "Code postal Incorrect";
}
else
{
    $codeErr = "Valide ! ".$postal;
}
echo $codeErr."<br>";


//verif Ville ====== $ville  = $_POST['Ville'];

if (empty($_POST["Ville"]))
{
    $villeErr = "La ville est requis";
}
else
{
    $villeErr = "Valide ! ".$ville;
}
echo $villeErr."<br>";



// verif adresse mail ====== $mail = $_POST['mail'];
if (empty($_POST["mail"]))
{
    $mailErr = "Le mail est requis";
} else if (!preg_match("/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/", $mail))
{
    $mailErr = "E_mail Incorrect";
}else
{
    $mailErr = "Valide ! ".$mail;
}
echo $mailErr."<br>";


//verif "sexe ====== $sex = $_POST['sex'];

if (empty($_POST["sex"]))
{
    $sexErr = "Le sexe est requis";
}
else
{
    $sexErr = "Valide ! ".$sex;
}
echo $sexErr."<br>";


// verif Commentaire ====== $com = $_POST['commentaire'];
if (empty($_POST["commentaire"]))
{
    $comErr = "Il faut un commentaire";
}
else
{
    $comErr = " Comentaire ! : ".$com;
}
echo $comErr."<br>";



//<input type="checkbox" name="Confirmation" value="Confirmation">J'accepte le traitemen informatique de ce formulaire.

// verif checkBox ====== $box = $_POST['Comfirmation'];

if(isset($_POST['Confirmation'])){
    $boxErr = " Confirmer ! ".$box;
}
else{
    $boxErr = "Confirmaiton requise";
}
echo $boxErr."<br>";




?>


