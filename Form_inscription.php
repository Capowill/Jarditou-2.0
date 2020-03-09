<!-- include l'entete pour le doctype & les DNS bootstrap -->
<?php
include('assets/PHP/entete.php');
include('assets/PHP/header.php');

?>


<!-- Formulaire inscription -->
<section class="container d-flex justify-content-center">
    <div class="row">
        <div class="col-12">
            <h2 class="d-flex justify-content-center pt-5">Nouvelle arrivant ?</h2>
            <p class="d-flex justify-content-center">Enregistre toi</p>
            <div class="row m-0">
                <form class="m-5" action="Form_inscription_script.php" method="POST" enctype="multipart/form-data">
                    <div class="row pb-3">
                        <label class="col-5">Pseudo :</label><input type="text" class="col-7 border rounded mb-2" id="Pseudo" name="Pseudo">
                    </div>
                    <div class="row pb-3">
                        <label class="col-5">Mots de passe :</label><input type="password" class="col-7 border rounded mb-2" id="Pass" name="Pass">
                    </div>
                    <div class="row pb-3">
                        <label class="col-5">Confirmez :</label><input type="password" class="col-7 border rounded mb-2" id="Pass2" name="Pass2">
                    </div>
                    <div class="row pb-3">
                        <label class="col-5">Nom :</label><input type="text" class="col-7 border rounded mb-2" id="Nom" name="Nom">
                    </div>
                    <div class="row pb-3">
                        <label class="col-5">Prénom :</label><input type="text" class="col-7 border rounded mb-2" id="Prenom" name="Prenom">
                    </div>
                    <div class="row pb-3">
                        <label class="col-5">Email :</label><input type="text" class="col-7 border rounded mb-2" id="Mail" name="Mail">
                    </div>
                    <div class="row pb-3">
                        <label class="col-5">Adresse :</label><input type="text" class="col-7 border rounded mb-2" id="Adresse" name="Adresse">
                    </div>
                    <div class="row pb-3">
                        <label class="col-5 ">Code postal :</label><input type="text" class="col-7 border rounded mb-2" id="Postal" name="Postal">
                    </div>
                    <div class="row pb-3">
                        <label class="col-5 ">Ville :</label><input type="text" class="col-7 border rounded mb-2" id="Ville" name="Ville">
                    </div>

                    <button type="submit" class="btn btn-primary" value="EnvoiInscription"><b>Valider</b></button>
                    <a href="Accueil.php" type="button" class="btn btn-secondary"><b>Annuler</b></a>
                </form>
            </div>
        </div>
    </div>
</section>


<?php
include('assets/PHP/footer.php');
include('assets/PHP/pieddepage.php');
?>