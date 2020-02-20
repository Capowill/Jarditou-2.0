

<?php
function afficher(){
$date = "" . date("Y-m-d ");
echo 'affiche ok';
echo'<table id="affiche" style="display=" none"" class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col"><?= $produit->meta_id ?></th>
            <th scope="col">post_id</th>
            <th scope="col">meta_key</th>
            <th scope="col">meta_value</th>
        </tr>
    </thead>
    <tbody>';
        $resultats = $wpdb->get_results("select * from {$wpdb->prefix}postmeta where post_id
        in (select id from {$wpdb->prefix}posts where post_type = 'ucvl_shop')
        and (meta_key = 'societe_nom' or meta_key like 'personnelcontacts%_civilité'
        or meta_key like 'personnelcontacts%_nom'
        or meta_key like 'personnelcontacts%_prenom'
        or meta_key like 'personnelcontacts%_email') order by post_id desc, meta_id asc;") ;
        echo '<br>------------------------------------------------------------------------';
        foreach ($resultats as $user) {
        echo '<tr>
            <th>';
                echo $user->meta_id;
                echo '</th>
            <th>';
                echo $user->post_id;
                echo '</th>
            <th>';
                echo $user->meta_key;
                echo '</th>
            <th>';
                echo $user->meta_value;
                echo '</th>';
            echo '
        </tr>';
        }
        echo "</tbody>";
    echo '<br>------------------------------------------------------------------------';
    }

    ?>

</div>
<div class='row' style='margin-top: 50px;'>
    <div class='col-md-12 text-center'>
        <div>Dernière synchronisation :{$date} </div>
        <button type='button' class='btn btn-lg' style='color: #fff;
    background-color: #f9613a;
    border-color: #f9613a; cursor: pointer;' onclick='afficher();'>
            Demarrer synchronisation
        </button>
    </div>
</div>