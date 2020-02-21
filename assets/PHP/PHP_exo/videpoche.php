
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