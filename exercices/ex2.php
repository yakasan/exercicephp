<body>
<?php include("../inc/header.inc.php"); ?>
<div id="header">
        <h1 class="typo">Exercice 2 : Tableau variant
        </h1>
        </br>
</div>
<div id="content">
        <?php


        $tab = range(0, 63);
        foreach ($tab as $ind => $val) {
            $tab[$ind] = $tab[$ind] / 10;
        }
        foreach ($tab as $ind => $val) {
            $val = (string)$val;
            $tabsin[$val] = sin($val);
        }
        echo "<table>";
        echo "<caption><b><h2>Tableau de valeurs de la fonction 
sinus</h2></b></caption>";
        echo "<tr> <th> X </th> <th> sin( X )</th> </tr>";
        foreach ($tabsin as $cle => $val) {
            echo "<tr><td>$cle</td> <td>$val</td></tr>";
        }
        echo "</table>";
        echo "<hr />";


        ?>

</div>

</body>
<?php include("../inc/footer.inc.php"); ?>
