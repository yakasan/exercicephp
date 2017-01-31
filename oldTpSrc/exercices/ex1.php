<body>
<?php include("../inc/header.inc.php"); ?>
<div id="header">

    <h1 class="typo">Exercice 1 </h1>
    </br>
</div>
<div id="content">
    <p>
        <?php

        $personnes = array(
            'Dupond' =>
                array('prenom' => 'Paul', 'ville' => 'Paris', 'age' => '27'),
            'Badin' =>
                array('prenom' => 'Marc', 'ville' => 'Brest', 'age' => '35'),
            'Soter' =>
                array('prenom' => 'Steeve', 'ville' => 'Londres', 'age' => '45'));
        echo "<H2>Tableau 1</H2>";
        foreach ($personnes as $i => $values) {
            echo "Element  " . $i . '<br/><br/>';
            foreach ($values as $key => $value) {

                switch ($key) {
                    case prenom :
                        echo "Prenom :  ";
                        break;
                    case ville :
                        echo "Ville :  ";
                        break;
                    case age :
                        echo "Age :  ";
                        break;
                }

                echo $value . '<br/><br/>';
            }

        }
        ?>
    </p>
</div>

</body>
<?php include("../inc/footer.inc.php"); ?>
