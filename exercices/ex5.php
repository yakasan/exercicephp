<body>
<?php include("../inc/header.inc.php"); ?>
<div id="header">
    <h1 class="typo">Exercice 5 : Dates
    </h1>
    </br>
</div>
<div id="content">

    <h2>Jour de la semaine</h2>
    <br>
    <br>
    <?php
    $day = mktime(0, 0, 0, 10, 26, 2000);
    $week = array(" dimanche ", " lundi ", " mardi ", " mercredi ", " jeudi ", " vendredi ", " samedi ");
    $number = date('w', $day);
    echo "<h3>Le ", date("d M Y ", $day), " était un ", $week[$number], "</h3>";
    ?>


</div>

</body>
<?php include("../inc/footer.inc.php"); ?>

