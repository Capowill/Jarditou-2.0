<?php
include("assets/PHP/entete.php");
?>


<body class="container-fluid p-0">
    <?php
    include("assets/PHP/header.php");
    ?>
    <h1 class="d-flex justify-content-center display-3"><strong>Tableau</strong></h1>
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

            <tr>
                <td><img src="assets/images/14.jpg" width="200" height="150" alt="Brouettes" title="Brouettes"></td>
                <td>14</td>
                <td>Brouettes</td>
                <td>Green</td>
                <td>49.00€</td>
                <td>Verte</td>
            </tr>

            <tr>
                <td><img src="assets/images/15.jpg" width="200" height="150" alt="Brouettes" title="Brouettes"></td>
                <td>15</td>
                <td>Brouettes</td>
                <td>Green</td>
                <td>49.00€</td>
                <td>Verte</td>
            </tr>

            <tr>
                <td><img src="assets/images/16.png" width="200" height="150" alt="Pelle" title="Pelle"></td>
                <td>16</td>
                <td>Pelle</td>
                <td>Green</td>
                <td>49.00€</td>
                <td></td>
            </tr>

            <tr>
                <td><img src="assets/images/17.png" width="200" height="150" alt="Pelle" title="Pelle"></td>
                <td>17</td>
                <td>Pelle</td>
                <td>Green</td>
                <td>49.00€</td>
                <td></td>
            </tr>

            <tr>
                <td><img src="assets/images/18.png" width="200" height="150" alt="Scie" title="Scie"></td>
                <td>18</td>
                <td>Brouettes</td>
                <td>Green</td>
                <td>49.00€</td>
                <td></td>
            </tr>

            <tr>
                <td><img src="assets/images/19.png" width="200" height="150" alt="Scie" title="Scie"></td>
                <td>19</td>
                <td>Brouettes</td>
                <td>Green</td>
                <td>49.00€</td>
                <td></td>
            </tr>

            <tr>
                <td><img src="assets/images/20.png" width="200" height="150" alt="Hache" title="Hache"></td>
                <td>20</td>
                <td>Brouettes</td>
                <td>Green</td>
                <td>49.00€</td>
                <td></td>
            </tr>

            <tr>
                <td><img src="assets/images/21.png" width="200" height="150" alt="elaguage" title="elaguage"></td>
                <td>21</td>
                <td>Brouettes</td>
                <td>Green</td>
                <td>49.00€</td>
                <td></td>
            </tr>

            <tr>
                <td><img src="assets/images/22.png" width="200" height="150" alt="elaguage" title="elaguage"></td>
                <td>22</td>
                <td>Brouettes</td>
                <td>Green</td>
                <td>49.00€</td>
                <td></td>
            </tr>

            <tr>
                <td><img src="assets/images/24.jpg" width="200" height="150" alt="Plaque" title="Plaque"></td>
                <td>23</td>
                <td>Brouettes</td>
                <td>Green</td>
                <td>49.00€</td>
                <td>Black</td>
            </tr>

            <tr>
                <td><img src="assets/images/25.jpg" width="200" height="150" alt="Parassolle" title="Parassolle"></td>
                <td>24</td>
                <td>Brouettes</td>
                <td>Green</td>
                <td>49.00€</td>
                <td>Grey</td>
            </tr>

            <tr>
                <td><img src="assets/images/26.jpg" width="200" height="150" alt="Parassolle" title="Parassolle"></td>
                <td>25</td>
                <td>Brouettes</td>
                <td>Green</td>
                <td>49.00€</td>
                <td>Red</td>
            </tr>

            <tr>
                <td><img src="assets/images/27.jpg" width="200" height="150" alt="Parassolle" title="Parassolle"></td>
                <td>26</td>
                <td>Brouettes</td>
                <td>Green</td>
                <td>49.00€</td>
                <td>Red</td>
            </tr>

            <tr>
                <td><img src="assets/images/28.jpg" width="200" height="150" alt="pots" title="pots"></td>
                <td>28</td>
                <td>Brouettes</td>
                <td>Green</td>
                <td>49.00€</td>
                <td>Orange</td>
            </tr>

            <tr>
                <td><img src="assets/images/29.jpg" width="200" height="150" alt="pots" title="pots"></td>
                <td>29</td>
                <td>Brouettes</td>
                <td>Green</td>
                <td>49.00€</td>
                <td>Black</td>
            </tr>

            <tr>
                <td><img src="assets/images/30.jpg" width="200" height="150" alt="pots" title="pots"></td>
                <td>30</td>
                <td>Brouettes</td>
                <td>Green</td>
                <td>49.00€</td>
                <td>Pink</td>
            </tr>

            <tr>
                <td><img src="assets/images/31.jpg" width="200" height="150" alt="bac" title="bac"></td>
                <td>31</td>
                <td>Brouettes</td>
                <td>Green</td>
                <td>49.00€</td>
                <td>Bois</td>
            </tr>

            <tr>
                <td><img src="assets/images/32.jpg" width="200" height="150" alt="scisaille" title="scisaille"></td>
                <td>32</td>
                <td>Brouettes</td>
                <td>Green</td>
                <td>49.00€</td>
                <td>Orange</td>
            </tr>

            <tr>
                <td><img src="assets/images/33.jpg" width="200" height="150" alt="scisaille" title="scisaille"></td>
                <td>33</td>
                <td>Brouettes</td>
                <td>Green</td>
                <td>49.00€</td>
                <td>Red</td>
            </tr>

            <tr>
                <td><img src="assets/images/34.jpg" width="200" height="150" alt="Tondeuse" title="Tondeuse"></td>
                <td>33</td>
                <td>Tondeuse</td>
                <td>Green</td>
                <td>49.00€</td>
                <td>Red</td>
            </tr>

            <tr>
                <td><img src="assets/images/35.jpg" width="200" height="150" alt="Tondeuse" title="Tondeuse"></td>
                <td>33</td>
                <td>Tondeuse</td>
                <td>Green</td>
                <td>49.00€</td>
                <td>Grey</td>
            </tr>

            <tr>
                <td><img src="assets/images/36.jpg" width="200" height="150" alt="Tondeuse" title="Tondeuse"></td>
                <td>33</td>
                <td>Tondeuse</td>
                <td>Green</td>
                <td>49.00€</td>
                <td>Verte</td>
            </tr>

            <tr>
                <td><img src="assets/images/37.jpg" width="200" height="150" alt="Tondeuse" title="Tondeuse"></td>
                <td>33</td>
                <td>Tondeuse</td>
                <td>Green</td>
                <td>49.00€</td>
                <td>Verte</td>
            </tr>

            <tr>
                <td><img src="assets/images/38.jpg" width="200" height="150" alt="Tondeuse" title="Tondeuse"></td>
                <td>33</td>
                <td>Tondeuse</td>
                <td>Green</td>
                <td>49.00€</td>
                <td>Red</td>
            </tr>

            <tr>
                <td><img src="assets/images/39.jpg" width="200" height="150" alt="Tondeuse" title="Tondeuse"></td>
                <td>33</td>
                <td>Tondeuse</td>
                <td>Green</td>
                <td>49.00€</td>
                <td>Red</td>
            </tr>

            <tr>
                <td><img src="assets/images/40.jpg" width="200" height="150" alt="Tondeuse" title="Tondeuse"></td>
                <td>33</td>
                <td>Tondeuse</td>
                <td>Green</td>
                <td>49.00€</td>
                <td>Verte</td>
            </tr>

            <tr>
                <td><img src="assets/images/41.jpg" width="200" height="150" alt="Tondeuse" title="Tondeuse"></td>
                <td>33</td>
                <td>Tondeuse</td>
                <td>Green</td>
                <td>49.00€</td>
                <td>Grey</td>
            </tr>

        </tbody>
    </table>
    <hr>

    <?php
    include('assets/PHP/footer.php');
    include("assets/PHP/pieddepage.php");
    ?>


</body>

</html>