<body>
<?php include("../inc/header.inc.php"); ?>
<div id="header">
        <h1 class="typo">Exercice 3 </h1>
        </br>

</div>
<?php echo "<H2> Statistique des Providers</H2>";?>

<div id="content">
        <?php

        $mailList = array("mumu@free.com", "mimi@sfr.fr", "tototo@orange.fr",
            "maxime@free.com", "mehdi@sfr.fr", "gaelle@orange.fr", "tutu@free.com", "tututu@free.com", "toto@orange.fr");


        foreach ($mailList as $ind => $mail) {
            $mailExtension = explode("@", $mail);
            $domainName[] = $mailExtension[1];
        }
        $mailCount = array_count_values($domainName);

        $total = array_sum($mailCount);
        foreach ($mailCount as $provider => $nb) {
            $pourcent[$provider] = $nb / $total * 100;
            $providerName=explode(".",$provider);
            $providerName = ucfirst($providerName[0]);
            echo "$providerName : ", round($pourcent[$provider], 2), " % <br />";
        }
        ?>
</div>

</body>
<?php include("../inc/footer.inc.php"); ?>
