<?php
    require 'Database.php';
    require 'util.php';
    init_php_session();

    if(isset($_GET['action']) && !empty($__GET['action'] && $_GET['action'] == "logout")){
        clean_php_session();
        header('Location: index.php');
    }

    if(isset($_POST['valid_connection']))
        if(isset($_POST['form_username']) && !empty($_POST['form_username']) &&
            isset(['form_password']) && !empty($_POST['form_password']))
        {
            $username = $_POST['form_username'];
            $password = $_POST['form_password'];

            $sql = 'SELECT * FORM site_users WHERE user_name = :name';
            $fields = ['name' => $username];

            $req = Database::getInstance()->request($sql, $fields);

            if($req)
            {
                if(password_verify($password, $req->user_password))
                {
                    $_SESSION['username'] = $username;
                    $_SESSION['rank'] = $req->user_admin;
                }
                else
                    echo 'Indentifiant ou mot de passe inccorect';
            }
            else
                echo 'Indentifiant ou mot de passe inccorect';
        }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>page d'accueil</h1>
    <p>Bienvenue sur la page d'accueil</p>
    <hr> 
    <h2>Se connecter</h2>

    <?php if(is_logged()): ?>
        <p> Bienvneue <?php htmlspecialchars($_SESSION['username']) ?> ! </p>
    <?php else: ?>
        <form action="" method="post">
            <input type="text" name="form_username" id="" placeholder="identifiant...">
            <input type="password" name="form_password" id="" placeholder="mot de passe...">
            <input type="submit" name="valid_connection" placeholder="Connexion">
        </form>
    <?php endif; ?>

    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="content.php">Page</a></li>
        </ul>
    </nav>



</body>
</html>