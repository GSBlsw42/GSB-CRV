<?php
include("vues/v_sommaire.php");
$dateFin = dateAnglaisVersFrancaisVisite($_REQUEST['dateFin']);
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];

switch($action){
  case 'validerAjoutVisite':{
    $idPraticien = $_REQUEST['praticien'];
    $interet = $_REQUEST['interet'];

    valideVisite($dateFin);
    if (nbErreurs() != 0 ){
      include("vues/v_erreurs.php");
    }
    else{
      $pdo->creeNouvelleVisite($idVisiteur,$idPraticien,$dateFin,$interet);
    }
    break;
  }
}
?>
