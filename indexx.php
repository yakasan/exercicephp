<?php

session_start();
if (isset($_GET['page'])){
	if ($_GET['page']==1){
		$_SESSION['namePage']='Accueil';
		include('controller/homeController.php');
		die;
	}
	if ($_GET['page']==2){
		$_SESSION['namePage']='Tp1';
		include('controller/Tp1Controller.php');
		die;
	}
	if ($_GET['page']==3){
		$_SESSION['namePage']='Tp2';
		include('controller/Tp2Controller.php');
		die;
	}
	if ($_GET['page']==4){
		$_SESSION['namePage']='Tp3';
		include('controller/Tp3Controller.php');
		die;
	}
	if ($_GET['page']==5){
		$_SESSION['namePage']='Tp4';
		include('controller/Tp4Controller.php');
		die;
	}
	
}
?>
