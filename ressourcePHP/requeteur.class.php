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
			$this->bdd->query('SET NAMES utf8');
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

	public function isUserNotExist($nom, $prenom, $date, $login , $mail){
		$verif= $this->getRequete('SELECT nom, prenom, dateNaissance, login, mail from personne where nom= :nom AND prenom= :prenom AND dateNaissance= :dateNaissance AND login= :login AND mail= :mail');

		$verif->bindValue(':nom', $nom);
		$verif->bindValue(':prenom', $prenom);
		$verif->bindValue(':dateNaissance',$date);
		$verif->bindValue(':login', $login);
		$verif->bindValue(':mail', $mail);
		$verif->execute();
		$val = $verif->fetch();

		return empty($val);
	}

	public function isUserHasQual($nom, $prenom,$qual){
		$req = $this->bdd->query('SELECT  COUNT(*) as nb FROM personne join candidat on personne.id=candidat.id_pers join qualite on candidat.numCandidat=qualite.num_cand WHERE nom = "'.$nom.'" AND prenom = "'.$prenom.'"'.' AND qualite.qual = "'.$qual.'"');
		$val = $req->fetch();
		$req->closeCursor();

		return intval($val['nb']) > 0;
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