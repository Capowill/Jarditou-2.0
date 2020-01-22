<?php
include("assets/PHP/entete.php");
?>


<body class="container-fluid p-0">
    <?php
    include("assets/PHP/header.php");
    ?>
    <h1>Tableau</h1>
    <hr>


    <table class="container">
        <style>
            table,
            tr,
            td,
            th {
                border: 1px solid #000000;
                border-collapse: collapse;
                padding: 15px;
            }
        </style>
        <caption><strong>Ventes T1</strong></caption>
        <thead>
            <tr>
                <th> Photo </th>
                <th>ID</th>
                <th>Catégorie</th>
                <th>Libellé</th>
                <th>Prix</th>
                <th>Couleur</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td><img src="assets/images/7.jpg" width="200" height="150" alt="Barbecues" title="Barbecues"></td>
                <td>7</td>
                <td>Barbecues</td>
                <td>Aramis</td>
                <td>110.00€</td>
                <td>Brun</td>
            </tr>



            <tr>
                <td><img src="assets/images/8.jpg" width="150" height="150" alt="Barbecues" title="Barbecues"></td>
                <td>8</td>
                <td>Barbecues</td>
                <td>Athos</td>
                <td>249.99€</td>
                <td>Noir</td>
            </tr>

            <tr>
                <td><img src="assets/images/11.jpg" width="200" height="150" alt="Barbecues" title="Barbecues"></td>
                <td>11</td>
                <td>Barbecues</td>
                <td>Clatronic</td>
                <td>135.90€</td>
                <td>Chrome</td>
            </tr>

            <tr>
                <td><img src="assets/images/12.jpg" width="200" height="150" alt="Barbecues" title="Barbecues"></td>
                <td>12</td>
                <td>Barbecues</td>
                <td>Camping</td>
                <td>88.00€</td>
                <td>Noir</td>
            </tr>

            <tr>
                <td><img src="assets/images/13.jpg" width="200" height="150" alt="Brouettes" title="Brouettes"></td>
                <td>13</td>
                <td>Brouettes</td>
                <td>Green</td>
                <td>49.00€</td>
                <td>Verte</td>
            </tr>
        </tbody>

    </table>
    <hr>

    <?php
    include("assets/PHP/pieddepage.php");
    ?>
    
</body>
</html>