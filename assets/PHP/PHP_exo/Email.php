<!-- Teste  d'envoi de mail via php -->


<?php 
//on utilise la fonction mail qui est un booléen
//mail("destinataire", "objet", "message", "entêtes", "paramètres");
function confmail ()
{
$to = "leszombiesdodu@gmail.com";
$objet = "Confirmation d'inscription";
$message = "Bienvenue sur Jarditou ! Tu peux y acheter des tomates cerises pour l'apéro et une brouette pour les transporter. Sors vite ton American Express !";
$entete = array('MIME-Version' => '1.0',
                'Content-Type' => 'text/html; charset=utf-8',// Il est possible du coup d'envoyer un mail avec du html et css pour soignée l'apparence .
                'From' => 'Dave Loper <dave.loper@afpa.fr>',
                //'Reply-To' => 'Service commercial <commerciaux@jarditou.com>',
                'X-Mailer' => 'PHP/' . phpversion()
                );

mail($to , $objet , $message , $entete);
}
