<?php



Class Visiteur {



	private $_id;
	private $_nom;
	private $_prenom;
	private $_login;
	private $_mdp;
	private $_adresse;
	private $_cp;
	private $_ville;
	private $_dateEmbauche;
	// private $lesVisites;



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

	public function id(){ return $this->_id; }
	public function nom(){ return $this->_nom; }
	public function prenom(){ return $this->_prenom; }
	public function login(){ return $this->_login; }
	public function mdp(){ return $this->_mdp; }
	public function adresse(){ return $this->_adresse; }
	public function cp(){ return $this->_cp; }
	public function ville(){ return $this->_ville; }
	public function dateEmbauche(){ return $this->_dateEmbauche; }
	// public function lesVisites(){ return $this->lesVisites; }

	// liste des setters

	public function setId($id){
		$this->_id = $id;
	}

	public function setNom($nom){
		$this->_nom = $nom;
	}

	public function setPrenom($prenom){
		$this->_prenom = $prenom;
	}

	public function setLogin($login){
		$this->_login = $login;
	}

	public function setMdp($mdp){
		$this->_mdp = $mdp;
	}

	public function setAdresse($adresse){
		$this->_adresse = $adresse;
	}

	public function setCp($cp){
		$this->_cp = $cp;
	}

	public function setVille($ville){
		$this->_ville = $ville;
	}

	public function setDateEmbauche($dateEmbauche){
		$this->_dateEmbauche = $dateEmbauche;
	}

	// public function setLesVisites($lesVisites){
	// 	$this->lesVisites = $lesVisites;
	// }

}