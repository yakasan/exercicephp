<body>
<?php include("../inc/header.inc.php"); ?>
<div id="header">
    <h1 class="typo">Exercice 7 : Dates
    </h1>
    </br>
</div>
<div id="content">

    <h2>Pâques & ascension</h2>
    <br>
    <br>

    <?php
    for($i=2010;$i<2019;$i++)
    {
        echo "Jour de Paques : ",date("d M Y ",easter_date($i)),"<br />";
        echo "Jour de l'Ascension ",date("d M Y
",easter_date($i)+39*86400),"<br />";
    }

    ?>


</div>

</body>
<?php include("../inc/footer.inc.php"); ?>
