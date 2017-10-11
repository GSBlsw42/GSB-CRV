<?php
include("vues/v_sommaire.php");
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'ajout';
}
$action = $_REQUEST['action'];
switch($action){
	case 'ajout':{
		$bdd = new PDO('mysql:host=localhost;dbname=my_btsw2015;charset=utf8', 'root', 'barlito');
		include("vues/v_ajoutAbs.php");
		break;
	}
	default :{
		include("vues/v_erreur.php");
		break;
	}
}
?>