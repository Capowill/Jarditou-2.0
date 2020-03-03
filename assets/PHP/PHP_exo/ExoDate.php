<!-- Exercice -->
<!-- Utilisez l'objet DateTime, sauf mention contraire. -->
<?php
    echo "<h1>Exercice</h1>\n";
    echo "Utilisez l'objet DateTime, sauf mention contraire.\n";
?>

<!-- ================================================================================================================== -->
<!-- ================================================================================================================== -->

<!-- Exercice 1 -->
<!-- Affichez la date du jour au format mardi 2 juillet 2019. -->
<?php
echo "<h1>Exercice 1</h1>";
echo "<br>";
echo "Affichez la date du jour au format mardi 2 juillet 2019.";
echo "<br>";
//===============================

$date = date("d/m/Y");
echo "Nous somme le ".$date;
// date() est la fonction de base utilisé en php pouyr manipuler les "dates"
// respecté la syntaxe ou voir doc :
// https://www.php.net/manual/fr/function.date.php
echo '<br>';
?>

<!-- ================================================================================================================== -->
<!-- ================================================================================================================== -->

<!-- Exercice 2 -->
<!-- Trouvez le numéro de semaine de la date suivante : 14/07/2019. -->
<?php
echo "<h1>Exercice 2</h1>";
echo "<br>";
echo "Trouvez le numéro de semaine de la date suivante : 14/07/2019.";
echo "<br>";
//===============================

$date = new DateTime('14-07-2019');
echo "C'est la semaine : ".$date->format('W');
// on utilise "W" pour afficher le nombre de semaine dans l'année ( les semaines commence un lundi)
// dans le cas présent nous voulions afficher le numéro de la semaine correspondant a la date indiqué.
?>

<!-- ================================================================================================================== -->
<!-- ================================================================================================================== -->

<!-- Exercice 3 -->
<!-- Combien reste-t-il de jours avant la fin de votre formation. -->
<?php
echo "<h1>Exercice 3</h1>\n";
echo "Combien reste-t-il de jours avant la fin de votre formation.\n";
echo "<br>";
//===============================

// on defini nos dates a comparé 
$fin = new DateTime("31-07-2020");
$date = date_create(date("d-m-Y"));
// date_create crée un objet ( a utilisé avec un var_dump)
// diff() pour comparé la diff entre nos date défini plus haut
$jours = $fin->diff($date);
echo 'il reste : '.$jours->format(' %a  Jours');
echo "<br>";
// 'a' Nombre total de jours, provenant de la méthode DateTime::diff() 
?>

<!-- ================================================================================================================== -->
<!-- ================================================================================================================== -->

<!-- Exercice 4 -->
<!-- Reprenez l'exercice 3, mais traitez le problème avec les fonctions de gestion du timestamp, time() et mktime(). -->
<?php
// time() retourne l'heure courante, mesurée en secondes depuis le début de l'époque UNIX, (1er janvier 1970 00:00:00 GMT).
echo '<h1>Exercice 4</h1>';
echo 'Reprenez l\'exercice 3, mais traitez le problème avec les fonctions de gestion du timestamp, time() et mktime().';
echo "<br>";
//===============================
    //defini le fuseau horaire que l'on veut
    date_default_timezone_set("Europe/Paris");
echo 'Version avec time()';
echo "<br>";
$date = new DateTime("31-07-2020");
$today = date_create(date("d-m-Y", time()));
$fina = $date->diff($today);
echo 'La formation fini dans '.$fina->format('%a jours');
?>


<?php
echo '<br>';
//version avec mktime() est equivalant a time()
echo 'Version avec mktime()';
echo "<br>";
$date =  date_create(date('d-m-Y', mktime(0,0,0,07,31,2020)));
$today2 = date_create(date("d-m-Y", mktime(date("H"), date("i"), date("s"), date("n"), date("j"), date("Y"))));
$fina2 = $date->diff($today2);
echo 'La formation fini dans '.$fina2->format('%a jours');
?>

<!-- ================================================================================================================== -->
<!-- ================================================================================================================== -->

<!-- Exercice 5 -->
<!-- Quelle sera la prochaine année bissextile ? -->
<?php
echo '<h1>Exercice 5</h1>';
echo '<br>';
echo 'Quelle sera la prochaine année bissextile ?';
//===============================

function est_bissextile($annee)
{
    if(date("m-d", strtotime("$annee-02-29")) == "02-29"){
        echo $annee." Est une année bissextile";
    }
    else{
        return $annee." : N'est pas bissextile";
    }
}
//   strtotime	Transforme un texte anglais en timestamp // 02-29 (29 fevrier (au cas ou j'oubli))
echo '<br>';
echo est_bissextile('2020');
echo '<br>';
echo est_bissextile('2021');
echo '<br>';
echo est_bissextile('2022');
echo '<br>';
echo est_bissextile('2023');
echo '<br>';
echo est_bissextile('2024'); 


?>

<!-- ================================================================================================================== -->
<!-- ================================================================================================================== -->

<!-- Exercice 6 -->
<!-- Montrez que la date du 17/17/2019 est erronée. -->
<?php
echo "<h1>Exercice 6</h1>";
echo "<br>";
echo "Montrez que la date du 17/17/2019 est erronée.";
echo "<br>";
//===============================
	
$datePattern = "/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/";
$date = "17/17/2019";

    if (preg_match($datePattern, $date)) {
        echo "Date ".$date." valide.<br>";
    }
    else {
        echo"Date ".$date." erronée.<br>";
    }

?>




<!-- Exercice 7 -->
<!-- Affichez l'heure courante sous cette forme : 11h25. -->
<?php
echo '<h1>Exercice 7</h1>';
echo "<br>";
echo 'Affichez l\'heure courante sous cette forme : 11h25.';
echo "<br>";
//===============================
echo "Il est : ".date("H\hi");
?>




<!-- Exercice 8 -->
<!-- Ajoutez 1 mois à la date courante. -->
<?php
echo "<h1>Exercice 8</h1>";
echo "<br>";
echo "Ajoutez 1 mois à la date courante.";
echo "<br>";
//===============================

$trente = date_create(date("d-m-Y",mktime(date("H"), date("i"), date("s"), date("n"), date("j")+30, date("Y"))));
echo "date dans un mois : ".$trente->format('d-m-Y');
?>

