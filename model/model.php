<?php

/**
 * Created by PhpStorm.
 * User: mehdi
 * Date: 01/02/2017
 * Time: 00:01
 */
class model
{

    public $dns = "mysql:host=localhost; dbname=eni_php";
    public $user = "mehdi";
    public $pass = "mehdi";
    public $connexion ;

    function __construct() {
        $this->connexion = new PDO($this->dns, $this->user, $this->pass);
    }
    function auth($login, $password){
        $bdd=$this->connexion;
        $resp=$bdd->query("SELECT login, password FROM administrator");
        $logs=$resp->fetchAll(PDO::FETCH_ASSOC);
        $password2=md5($password);
        foreach($logs as $key => $value){
            ($logs[$key]['login']==$login)?$logpres=1:$logpres=0;
            ($logs[$key]['password']==$password2)?$passpres=1:$passpres=0;
        }
        if ($logpres==1 && $passpres==1){
            return TRUE;
        }else{
            return FALSE;
        }

    }
    function verifpass($log,$pass){
        $bdd=$this->connexion;
        $resp=$bdd->query("SELECT password FROM administrator WHERE login='$log'");
        $pass2=$resp->fetchAll(PDO::FETCH_ASSOC);
        $password2=md5($pass2[0]['password']);
        $password=md5($pass);
        if ($password==$password2){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    function modifpass($log, $pass){
        $result=$this->connexion->query("UPDATE administrator SET password='$pass' WHERE login='$log'");
    }

}
?>




}