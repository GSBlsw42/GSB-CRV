<?php



Class Visite {

	private $_numVisite;
	private $_idVisiteur;
	private $_idPraticien;
	private $_finDeVisite;
	private $_niveau;


	// Hydratation

	public function __construct(array $donnees) {
    	$this->hydrate($donnees);
    }

	public function hydrate(array $donnees){

		foreach ($donnees as $key => $value){
		    $method = 'set'.ucfirst($key);
		        
		    if (method_exists($this, $method)){
		       	$this->$method($value);
		    }
		}
	}

	// liste des getters

	public function numVisite(){ return $this->_numVisite; }
	public function idVisiteur(){ return $this->_idVisiteur; }
	public function idPraticien(){ return $this->_idPraticien; }
	public function finDeVisite(){ return $this->_finDeVisite; }
	public function niveau(){ return $this->_niveau; }
	

	// liste des setters

	public function setNumVisite($numVisite){
		$this->_numVisite = $numVisite;
	}

	public function setIdVisiteur($idVisiteur){
		$this->_idVisiteur = $idVisiteur;
	}

	public function setIdPraticien($idPraticien){
		$this->_idPraticien = $idPraticien;
	}

	public function setFinDeVisite($finDeVisite){
		$this->_finDeVisite = $finDeVisite;
	}

	public function setNiveau($niveau){
		$this->_niveau = $niveau;
	}

}