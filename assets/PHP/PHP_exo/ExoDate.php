<!-- Exercice -->
<!-- Utilisez l'objet DateTime, sauf mention contraire. -->
<?php
    echo '<h1>Exercice</h1> <br>';
    echo "Utilisez l'objet DateTime, sauf mention contraire.";
    echo '<br>';
?>

<!-- Exercice 1 -->
<!-- Affichez la date du jour au format mardi 2 juillet 2019. -->
<?php
echo '<h1>Exercice 1</h1> <br>';
echo 'Affichez la date du jour au format mardi 2 juillet 2019.';
echo '<br>';
echo '<br>';
$date = date("d/m/Y");
echo "Nous somme le ".$date;
// date() est la fonction de base utilisé en php pouyr manipuler les "dates"
// respecté la syntaxe ou voir doc :
// https://www.php.net/manual/fr/function.date.php
echo '<br>';
?>



<!-- Exercice 2 -->
<!-- Trouvez le numéro de semaine de la date suivante : 14/07/2019. -->
<?php
echo '<h1>Exercice 2</h1><br>';
echo 'Trouvez le numéro de semaine de la date suivante : 14/07/2019.<br>';
$date = new DateTime('14-07-2019');
echo "Voila voila ! ".$date->format('W');
echo '<br>';
?>


<!-- Exercice 3 -->
<!-- Combien reste-t-il de jours avant la fin de votre formation. -->
<?php
echo '<h1>Exercice 3</h1><br>';
echo 'Combien reste-t-il de jours avant la fin de votre formation.<br>';


?>




<!-- Exercice 4 -->
<!-- Reprenez l'exercice 3, mais traitez le problème avec les fonctions de gestion du timestamp, time() et mktime(). -->





<!-- Exercice 5 -->
<!-- Quelle sera la prochaine année bissextile ? -->





<!-- Exercice 6 -->
<!-- Montrez que la date du 17/17/2019 est erronée. -->





<!-- Exercice 7 -->
<!-- Affichez l'heure courante sous cette forme : 11h25. -->





<!-- Exercice 8 -->
<!-- Ajoutez 1 mois à la date courante. -->












