<body>
<?php include("../inc/header.inc.php"); ?>
<div id="header">
    <h1 class="typo">Exercice 4 : Dates
    </h1>
    </br>
</div>
<div id="content">

    <h2>Age en secondes</h2>

    <?php

    $birthday = mktime(16, 30, 45, 4, 3, 1984);
    $timestamp = time() - $birthday;
    echo "Ma durée de vie est de $timestamp secondes";

    ?>


</div>

</body>
<?php include("../inc/footer.inc.php"); ?>
