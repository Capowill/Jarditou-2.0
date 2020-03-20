<?php

function init_php_session() : bool
{
    if(!session_id())
    {
        session_start();
        //session_regenerate_id();
        return true;
    }

    return false;
}


//déconnexion
function clean_php_session() : void
{
    session_unset();
    session_destroy();
}

//connexion
function is_logged() : bool
{
    if(isset($_SESSION['Pseudo']))
    {
        return true;
    }
    return false;
}

// function is_admin() : bool
// {
//     if(isset($_SESSION['rank']) && $_SESSION['rank'] ==1)
//     return true;
// }


// Merci roy <3
function ckeck_values($donnees){ // this function will check each values send by the form
    $donnees = trim($donnees); // Delete useless spaces
    $donnees = stripslashes($donnees); // Delete antslashes (\)
    $donnees = htmlspecialchars($donnees); // Convert special characters into HTML entities
    return $donnees;
}