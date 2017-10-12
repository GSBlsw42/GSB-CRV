<?php
include("vues/v_sommaire.php");

if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'ajout';
}
$action = $_REQUEST['action'];
switch($action){
	case 'ajout':{
		$lesPraticiens = $pdo->getLesPraticiens();
		include("vues/v_ajoutVisite.php");
		break;
	}
	default :{
	include("vues/v_erreur.php");
	break;
	}
}
?>
