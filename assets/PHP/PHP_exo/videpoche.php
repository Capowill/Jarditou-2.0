
<?php


if (isset($_GET["erreur1"]))
{
    ?>
    <div class = "alert alert-danger" >Le champ nom n'est pas renseigné</div>
    <?php
}
else if (isset($_GET["erreur1b"]))
{
    ?>
    <div class = "alert alert-warning" >Le format de votre nom n'est pas correct</div>
    <?php
}

?>


<?php
if(empty ($_POST["nom"]))
{
$aErreur[] = "erreur1=true";
}
else if(!preg_match("/^[A-zA-ZñéèîïÉÈÎÏ][A-zA-Zñéèêàçîï]+([-'\s][A-zA-ZñéèîïÉÈÎÏ][A-zA-Zñéèêàçîï]+)?$/",($_POST["nom"])))
{
$aErreur[] = "erreur1b=true";
}
else
{
echo "Nom : ". $_POST["nom"] . "<br>";
}
?>


<!-- ===================================================================== -->
<!-- ===================================================================== -->
<!-- ===================================================================== -->
<form method="POST" enctype="multipart/form-data">
    <input type="file" name="upload_file" />
    <input type="submit" name="submit">
</form>
<?php
if(isset($_POST['submit']))
{
    $maxSize = 50000; 
    $validExt = array ('.jpg','jpeg','.gif','.png');

    if($_FILES['uploaded_file']['error'] > 0)
    {
        Echo "Erreur";
        die;
    }

    $fileSize = $_FILES['uploead_file']['size'];

    if($fileSize > $maxSize)
    {
        Echo "Fichier trop gros ";
        die;
    }

    $fileName = $_FILES['uploaded_file']['name'];
    $fileExt = ".". strtolower(substr(strrchr($fileName, '.'), 1));

    if(!in_array($fileExt, $validExt))
    {
        Echo "Le fichier n'est pas une image";
        die;
    }

    $tmpName = $_FILES['uploead_file']['tmp_name'];
//    $uniqueName = md5(uniqid(rand(), true));
    $fileName = "upload/" . $uniqueName . $fileExt;
    $resultat = move_uploaded_file($tmpName, $fileName);

    if($resultat)
    {
        echo " Transfert ok !";
    }
}
?>

