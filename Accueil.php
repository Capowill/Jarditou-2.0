<?php
include("assets/PHP/entete.php");
?>

<body class="container-fluid p-0">
    <?php
    include("assets/PHP/header.php");
    ?>
    <section>
        <img id="promo" src="assets/images/promotion.jpg" width="100%" alt="promotion" title="promotion sur les lames de terrasse">
        <!-- corp du site ( contenue general ) blblbl -->
        <div class="d-flex flex-row">
            <div class="justify-content-between col-lg-7 col-xs-7 col-sm-7 m-5">
                <h1>Acceuil</h1>
                <hr> <!-- la ligne continue -->
                <h2>L'entreprise</h2>

                <acticle>
                    <p>Notre entreprise familiale met tout son savoir-faire à votre disposition dans le domaine du
                        jardin et
                        du paysagisme.</p>
                    <p>Créée il y a 70 ans, notre entreprise vend fleurs, arbustes, matériel à main et motorisés.</p>
                    <p>Implantés à Amiens, nous intervenons dans tout le département de la Somme : Albert, Doullens,
                        Péronne, Abbeville, Corbie.</p>

                    <h2>Qualité</h2>

                    <p>Nous mettons à votre disposition un service personnalisé, avec 1 seul interlocuteur durant tout
                        votre projet.</p>
                    <p>Vous serez séduit par notre expertise, nos compétences et notre sérieux.</p>

                    <h2>Devis gratuit</h2>

                    <p>Vous pouvez bien sûr contacter pour de plus amples informations ou pour une demande
                        d’intervention.
                        Vous souhaitez un devis ? Nous vous le réalisons gratuitement.</p>
                    </article>
                    <hr> <!-- la ligne continue -->
            </div>
            <!-- La colonne qui me fait galeré -->
            <!-- dans la colonne j'ai implanté une card avec la conexion au site -->
            <div style="width: 500px; height:auto;" class=" mt-5 d-none d-md-block d-lg-block d-xl-block">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Déjà Enregistrer ?</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Connectez-vous d'ici </h6>
                        <form action="assets/PHP/co_log.php" method="POST">
                            <!--  -->
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Pseudo :</div>
                                </div>
                                <input type="text" class="form-control" id="Pseudo" placeholder="Pseudo">
                            </div>
                            <!--  -->
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Password :</div>
                                </div>
                                <input type="text" class="form-control" id="Pass" placeholder="Password">
                            </div>
                            <!--  -->
                            <div class="d-flex justify-content-end">
                                <a href="#" class="btn btn-primary btn-lg mr-2" role="button"><b>Connexion</b></a>
                                <a href="Form_inscription.php" type="button" class="btn btn-lg btn-secondary"><b>Non</b></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- Fin corps du site ( contenue generale )-->

    <?php
    include('assets/PHP/footer.php');
    include("assets/PHP/pieddepage.php");
    ?>