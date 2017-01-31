<body>
<?php include("../inc/header.inc.php"); ?>
<div id="header">
    <h1 class="typo">Exercice 2 : Tableau variant
    </h1>
    </br>
</div>
<div id="content">

    <table>
        <h2>Fonction sinus</h2>
        <tr>
            <th> X</th>
            <th> sin( X )</th>
        </tr>
        <?php


        $tableau = range(0, 63);
        foreach ($tableau as $indice => $value) {
            $tableau[$indice] = $tableau[$indice] / 10;
        }
        foreach ($tableau as $indice => $value) {
            $value = (string)$value;
            $tabX[$value] = sin($value);
        }

        foreach ($tabX as $key => $value ) {
            echo "<tr><td>$key</td> <td>$value</td></tr>";
        }
        ?>

    </table>


</div>

</body>
<?php include("../inc/footer.inc.php"); ?>
