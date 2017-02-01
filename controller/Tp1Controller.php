<?php
/**
 * Created by PhpStorm.
 * User: mehdi
 * Date: 31/01/2017
 * Time: 23:35
 */

require_once('../indexx.php');
require_once("../view/tp1.tpl");


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