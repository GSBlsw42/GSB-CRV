<?php

Class GereVisiteur {

	private $db;

	public function __construct($db){
    	$this->setDb($db);
  	}

  	public function getLesVisiteurs(){

  		$q = $this->db->query('SELECT nom FROM Visiteur');

  		while ($donnees = $q->fetch()) {
  			$visiteurs = new Visiteur($donnees);
  			$visiteur[] = $visiteurs->nom();
  		}

  		return $visiteur;

  	}

  	public function setDB(PDO $db){
  		$this->db= $db;
  	}

}


?>