<body>
<?php include("../inc/header.inc.php"); ?>
<div id="header">
    <h1 class="typo">Exercice 4 : Dates
    </h1>
    </br>
</div>
<div id="content2">

    <h2>Age en secondes</h2>

    <?php

    $birthday=new DateTime('1984-04-03 16:45:33');
    $dateNow= new DateTime();
    $timestamp=$birthday->diff($dateNow);
    //$birthday = mktime(16, 30, 45, 4, 3, 1984);
    //$timestamp = time() - $birthday;
   // echo "Ma durée de vie est de $timestamp secondes";

    echo "j'ai survecut pendant $timestamp->y ans , $timestamp->m mois, $timestamp->d jours,$timestamp->h heures, $timestamp->m minutes et $timestamp->s secondes";

    ?>


</div>

</body>
<?php include("../inc/footer.inc.php"); ?>
