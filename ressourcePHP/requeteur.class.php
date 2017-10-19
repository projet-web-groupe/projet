<?php 
require_once('Connexion.class.php');

class requeteur
{
	private $dns;
	private $user;
	private $pwd;
	private $charset;

	private $bdd;

	public function __construct()
	{
		$info = new Connexion();
		$this->dns = $info::DNS;
		$this->user = $info::USER;
		$this->pwd = $info::PWD;
		$this->charset = $info::CHARSET;
		try{
			$this->bdd = new PDO($this->dns.';charset='.$this->charset, $this->user, $this->pwd);
			$this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//echo 'Connexion établie !!!';
		}catch (PDOException $e){
			die('<p> La connexion a échoué. Erreur[' .$e->getCode().'] : '.$e->getMessage().'</p>');
		} 
	}

	public function getRequete($reqStr)
	{ 
		return $this->bdd->prepare($reqStr);
	}

	public function affiche()
	{
		echo $this->dns.';charset='.$this->charset.', '.$this->user.', '.$this->pwd;
	}

	public function isUserExist($nom, $prenom){
		$req = $this->bdd->query('SELECT id FROM personne WHERE nom = "'.$nom.'" AND prenom = "'.$prenom.'"');
		$tab = $req->fetchAll();
		$req->closeCursor();

		return 1 === count($tab);
	}

	public function isCandidat($nom,$prenom){
		$req = $this->bdd->query('SELECT id FROM personne JOIN candidat ON personne.id = candidat.id_pers WHERE personne.nom = "'.$nom.'" AND personne.prenom = "'.$prenom.'"');
		$tab = $req->fetchAll();
		$req->closeCursor();

		return 1 === count($tab);
	}

	public function isRh($nom,$prenom){
		$req = $this->bdd->query('SELECT id FROM personne JOIN rh ON personne.id = rh.id_pers WHERE personne.nom = "'.$nom.'" AND personne.prenom = "'.$prenom.'"');
		$tab = $req->fetchAll();
		$req->closeCursor();

		return 1 === count($tab);
	}
	
}
?>