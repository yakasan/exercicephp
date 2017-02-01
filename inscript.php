<?php
try {
        $connexion = new PDO("mysql:host=localhost; dbname=eni_php", "mehdi", "mehdi");
    }catch(PDOException $e){
        die ('erreur: '.$e->getmessage());
    }

$passvue='mehdi';
$login='mehdi';
$pass=md5($passvue);
$connexion->query("INSERT INTO administrator (login, password) VALUES ('$login','$pass')");


var_dump($pass);
?>