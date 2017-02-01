<?php
/**
 * Created by PhpStorm.
 * User: mehdi
 * Date: 01/02/2017
 * Time: 00:02
 */
require_once('../model/model.php');
require_once('../indexx.php');

if (isset($_POST['login'],$_POST['password'])){
    $model= New Model();
    $log=$_POST['login'];
    $pass=$_POST['password'];

    if ($model->auth($log,$pass)){
        $_SESSION['login']=$log;
        $_SESSION['admin']=1;
        include("../view/home.tpl");
    }else{

        echo "Mot de Passe/Utilisateur incorrect.";
        header("Location: ../index.html");
    }
}


if (isset($_SESSION['login']) && $_SESSION['admin']==1){
    if (isset($_GET['deco'])){
        $_SESSION = array();
        session_destroy();
        header("Location: ../index.html");

    }
    if (isset($_POST['ancien'],$_POST['nouveau'],$_POST['nouveau2'])){
        $model= New Model();
        $log=$_SESSION['login'];
        $passancien=$_POST['ancien'];
        $passnouveau=$_POST['nouveau'];
        $passnouveau2=$_POST['nouveau2'];
        if ($passnouveau!=$passnouveau2){
            echo "Les nouveaux mots de passe ne correspondent pas entre eux.";
            header("Location: ../indexx.php?page=1");
        }
        $passverif=verifpass($log, $passancien);
        if ($passverif){
            modifpass($log, $passnouveau);
            echo "mot de passe changé avec succés.";

        }else{
            echo "Mot de passe incorrect";
            header("Location: ../indexx.php?page=1");
        }


    }
    require_once("../view/home.tpl");
}else{
    header("Location: ../index.html");
    die;
}
?>