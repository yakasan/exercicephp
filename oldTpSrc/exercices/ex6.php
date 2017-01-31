<body>
<?php include("../inc/header.inc.php"); ?>
<div id="header">
    <h1 class="typo">Exercice 6 : Dates
    </h1>
    </br>
</div>
<div id="content">

    <h2>Week-end prolongés</h2>
    <br>
    <br>

    <?php
    for ($i = 2010; $i <= 2019; $i++) {
        $tiemstamp = mktime(0, 0, 0, 5, 1, $i);
        if (date("w", $tiemstamp) == 6 OR date("w", $tiemstamp) == 0) {
            echo "$i : Désolé<br />";
        } elseif (date("w", $tiemstamp) == 5 OR date("w", $tiemstamp) == 1) {
            echo "$i : Week end prolongé<br />";
        }
    }
    ?>


</div>

</body>
<?php include("../inc/footer.inc.php"); ?>
