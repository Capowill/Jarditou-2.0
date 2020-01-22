<?php
include("assets/PHP/entete.php");
?>

<body class="container-fluid p-0">
    <?php
    include("assets/PHP/header.php");
    ?>

    <div class="m-5">
        <h1 class="mt-5 mb-3">Contact</h1>
        <hr>
        <h5>Ces champs sont obligatoires *</h5>
    </div>

    <!-- FORMULAIRE -->
    <!--J'ai laisser GET car "POST" supprime la ligne nom a l'envoi du formulaire-->
    <form class="m-5" target="_blank" action="assets/PHP/repformulaire.php" method="POST">
        <div class="row">
            <label class="col-2 m-2">Votre nom :</label><input type="text" class="col-2" id="nom" name="nom">
            <span id="errorNom" class="col-2">*</span>
        </div>
        <div class="row">
            <label class="col-2 m-2">Votre prénom :</label><input type="text" class="col-2" id="prenom" name="prenom">
            <span id="errorPrenom" class="col-2">*</span>
        </div>
        <div class="row">
            <label class="col-2 m-2"> Sexe :</label>
            <div class="col-2">
                <input type="radio" name="sex" value="Féminin"> Féminin
                <input type="radio" name="sex" value="Masculin"> Masculin
            </div>
        </div>
        <div class="row">
            <label class="col-2 m-2"> Date de naissance :</label><input type="date" class="col-2" id="naissance" name="Naissance" placeholder="01/02/1990">
            <span id="errordate" class="col-2">*</span>
        </div>
        <div class="row">
            <label class="col-2 m-2"> Code postal :</label><input type="number" class="col-2" id="code" name="Code" placeholder="80100">
            <span id="errorPostal" class="col-2">*</span>
        </div>
        <div class="row">
            <label class="col-2 m-2"> Adresse :</label></label><input type="text" class="col-2" id="adresse" name="Adresse">
        </div>
        <div class="row">
            <label class="col-2 m-2">Ville :</label></label><input type="text" class="col-2" id="ville" name="Ville">
        </div>
        <div class="row">
            <label class="col-2 m-2">E-mail :</label><input type="text" class="col-2" id="email" name="mail" placeholder="exemple@mail.fr">
            <span id="errorMail" class="col-2">*</span>
        </div>
        <div class="row">
            <label class="col-2 m-2"> Sujet :</label>
            <select class="col-2" name="Sujet" size="1">
                <option name="test" value="">Choisissez une options</option>
                <option name="test" value="Mes commandes">Mes commandes</option>
                <option name="test" value="Question sur un produit">Question sur un produit</option>
                <option name="test" value="Reclamation">Reclamation</option>
                <option name="test" value="Autres">Autres</option>
            </select>
        </div>
        <div class="row">
            <label class="col-2 m-2">Votre question :</label>
            <textarea name="commentaire" rows="7" cols="40"></textarea>
        </div>
        <div class="row m-5">
            <input type="checkbox" name="Confirmation" value="Confirmation">J'accepte le traitement
            informatique de ce formulaire.
        </div>
        <div class="row">
            <button class="btn btn-primary" type="submit" value="Envoyer" id="submit">Envoyer</button>
            <button class="btn btn-primary" type="reset" value="Annuler">Annuler</button>
        </div>
    </form>


    <?php
    include("assets/PHP/pieddepage.php");
    ?>
    <!--  <script src="assets/fichier.js"></script>  -->

</body>
</html>