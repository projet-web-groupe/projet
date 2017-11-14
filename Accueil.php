<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title> Accueil</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/general.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<body>
	
	<?php
	if(isset($_POST['annee']) and trim($_POST['annee']) and isset($_POST['mois']) and trim($_POST['mois']) and isset($_POST['jour']) and trim($_POST['jour'])){
		$_POST['date'] = $_POST['annee'].'-'.$_POST['mois'].'-'.$_POST['jour'];
	}
	require_once('ressourcePHP/session.php'); 
	require_once('ressourcePHP/requeteur.class.php');
	$requeteur = new requeteur;

	if(isset($_POST['deco']))
	{
		session_destroy();
		session_start();
	}
	//Cas d'une inscription
	if(isInscritCandidat() and isset($_SESSION['typeInscription']) and ($_SESSION['typeInscription'] === 'candidat' or $_SESSION['typeInscription'] === 'candidatByRh'))
	{
		$req = $requeteur->getRequete('SELECT MAX(id) as idMax from personne');
		$req->execute();
		$val=$req->fetch();

		if($requeteur->isUserNotExist($_POST['nom'], $_POST['prenom'], $_POST['date'], $_POST['login'], $_POST['mail']))
		{
			$verif=$requeteur->getRequete('INSERT INTO personne(id, nom, prenom, dateNaissance, sexe, login, mdp, mail) VALUES(:id,:nom,:prenom,:dateNaissance,:sexe,:login,:mdp,:mail)');
			$verif->bindValue(':id', $val['idMax']+1);
			$verif->bindValue(':nom', $_POST['nom']);
			$verif->bindValue(':prenom', $_POST['prenom']);
			$verif->bindValue(':dateNaissance',$_POST['date']);
			$verif->bindValue(':sexe',$_POST['genre']);
			$verif->bindValue(':login', $_POST['login']);
			$verif->bindValue(':mdp', $_POST['mdp']);
			$verif->bindValue(':mail', $_POST['mail']);
			$verif->execute();
			
			$r=$requeteur->getRequete('SELECT MAX(numCandidat) as idMaxCand from candidat');
			$r->execute();
			$val2=$r->fetch();

			$req=$requeteur->getRequete('INSERT INTO candidat(numCandidat, domain, lastDiploma, vehicule, id_pers) VALUES(:numCandidat, :domain, :lastDiploma, :vehicule, :id_pers)');
			$req->bindValue(':numCandidat', $val2['idMaxCand']+1);
			$req->bindValue(':domain', $_POST['domaine']);
			$req->bindValue(':lastDiploma', $_POST['diplome']);
			if($_POST['vehicule'] == 'oui')
				$req->bindValue(':vehicule',1);
			else
				$req->bindValue(':vehicule',0);
			$req->bindValue(':id_pers',$val['idMax']+1);
			$req->execute();
			foreach ($_POST['qualite'] as  $value) {
				$req=$requeteur->getRequete('INSERT INTO qualite(qual, num_cand) VALUES(:qual, :numCandidat)');
				$req->bindValue(':qual', $value);
				$req->bindValue(':numCandidat', $val2['idMaxCand']+1);
				$req->execute();
			}
		}
	}

	else if(isInscritRh() and isset($_SESSION['typeInscription']) and $_SESSION['typeInscription'] === 'rh')
	{
		$req = $requeteur->getRequete('SELECT MAX(id) as idMax from personne');
		$req->execute();
		$val=$req->fetch();
		if($requeteur->isUserNotExist($_POST['nom'], $_POST['prenom'], $_POST['date'], $_POST['login'], $_POST['mail']))
		{
			$verif=$requeteur->getRequete('INSERT INTO personne(id, nom, prenom, dateNaissance, sexe, login, mdp, mail) VALUES(:id,:nom,:prenom,:dateNaissance,:sexe,:login,:mdp,:mail)');
			$verif->bindValue(':id', $val['idMax']+1);
			$verif->bindValue(':nom', $_POST['nom']);
			$verif->bindValue(':prenom', $_POST['prenom']);
			$verif->bindValue(':dateNaissance',$_POST['date']);
			$verif->bindValue(':sexe',$_POST['genre']);
			$verif->bindValue(':login', $_POST['login']);
			$verif->bindValue(':mdp', $_POST['mdp']);
			$verif->bindValue(':mail', $_POST['mail']);
			$verif->execute();
			$r=$requeteur->getRequete('SELECT MAX(numRh) as idMaxRh from rh');
			$r->execute();
			$maxid=$r->fetch();//val2->maxid

			var_dump($maxid['idMaxRh']+1);
			var_dump($val['idMax']+1);
			$req=$requeteur->getRequete('INSERT INTO rh(numRh, id_pers) VALUES(:numRh, :id_pers)');
			$req->bindValue(':numRh', $maxid['idMaxRh']+1);
			$req->bindValue(':id_pers',$val['idMax']+1);
			$req->execute();
		}
	}
	
	if(isset($_POST['login']) and isset($_POST['mdp']))
	{
		$requeteur = new requeteur;
		$requete = $requeteur->getRequete('SELECT nom, prenom, id FROM personne where login =:log and mdp =:mdp'); //equiv a prepare()
		$requete->bindValue(':log', $_POST['login']);
		$requete->bindValue(':mdp', $_POST['mdp']);
		$requete->execute();
		$tab= $requete->fetch(PDO::FETCH_ASSOC);
		if(empty($tab))
		{
			?>
			<div class="panel panel-danger">
				<div class="panel-heading">
					Un problème est survenu, veuillez nous excusé de la gène occasionnée.
				</div>
			</div>'
			<?php 
			die();
		}
		if((isset($_SESSION['typeInscription']) and $_SESSION['typeInscription'] === 'candidat')){
			$_SESSION['nom'] = htmlspecialchars($tab['nom']);
			$_SESSION['prenom'] = htmlspecialchars($tab['prenom']);
			$_SESSION['id'] = $tab['id'];
			$_SESSION['connecte'] = true;
			if($requeteur->isCandidat($_SESSION['nom'], $_SESSION['prenom']))
			{
				$req = $requeteur->getRequete('SELECT numCandidat from personne join candidat on personne.id=candidat.id_pers WHERE id = :id');
				$req->bindValue(':id',$_SESSION['id']);
				$req->execute();
				$val = $req->fetch();
				if(isset($val))
				{
					$_SESSION['idProfil'] = $val['numCandidat'];
				}
			}
			else if($requeteur->isRh($_SESSION['nom'], $_SESSION['prenom']))
			{
				$req = $requeteur->getRequete('SELECT numRh from personne join rh on personne.id=rh.id_pers WHERE id = :id');
				$req->bindValue(':id',$_SESSION['id']);
				$req->execute();
				$val = $req->fetch();
				if(isset($val))
				{
					$_SESSION['idProfil'] = $val['numRh'];
				}
			}
		}
		else if (!isset($_SESSION['typeInscription']))
		{
			$_SESSION['nom'] = htmlspecialchars($tab['nom']);
			$_SESSION['prenom'] = htmlspecialchars($tab['prenom']);
			$_SESSION['id'] = $tab['id'];
			$_SESSION['connecte'] = true;
			if($requeteur->isCandidat($_SESSION['nom'], $_SESSION['prenom']))
			{
				$req = $requeteur->getRequete('SELECT numCandidat from personne join candidat on personne.id=candidat.id_pers WHERE nom = :nom and prenom = :prenom');
				$req->bindValue(':nom',$_SESSION['nom']);
				$req->bindValue(':prenom',$_SESSION['prenom']);
				$req->execute();
				$val = $req->fetch();
				if(isset($val))
				{
					$_SESSION['idProfil'] = $val['numCandidat'];
				}
			}
			else if($requeteur->isRh($_SESSION['nom'], $_SESSION['prenom']))
			{
				$req = $requeteur->getRequete('SELECT numRh, id from personne join rh on personne.id=rh.id_pers WHERE nom = :nom and prenom = :prenom');
				$req->bindValue(':nom',$_SESSION['nom']);
				$req->bindValue(':prenom',$_SESSION['prenom']);
				$req->execute();
				$val = $req->fetch();
				if(isset($val))
				{
					$_SESSION['idProfil'] = $val['numRh'];
				}
			}
		}
		
	}

	if(isset($_SESSION['typeInscription']))
		unset($_SESSION['typeInscription']);

	require_once('ressourcePHP/header.php');
	?>
	
	<div class="container" id="page">
		<div class="page-header">
			<h1>Bienvenue</h1>
		</div>
		<div class="panel panel-primary">
			<div class="panel-heading">
				Activités
			</div>

			<?php require_once('ressourcePHP/modal.php'); ?>

			<div class="panel-body">
				
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer scelerisque accumsan turpis a egestas. Suspendisse scelerisque fermentum est, et tincidunt risus. Aliquam at metus malesuada, mattis magna eu, hendrerit diam. Proin eu tellus semper, viverra tellus at, bibendum ipsum. Pellentesque sed volutpat metus. Aenean hendrerit risus a augue varius mattis. Donec vel felis pellentesque, pellentesque nibh et, dapibus libero. Etiam faucibus massa et ligula mattis, a rutrum leo mattis.

				Nunc elementum ante risus, eget hendrerit mi scelerisque in. Proin tempus mi nec vestibulum tristique. Donec a nunc sed velit facilisis pharetra. Aenean eu congue dolor. Curabitur ornare mauris sit amet nulla lacinia pulvinar. Nulla sapien velit, luctus non feugiat nec, hendrerit imperdiet nunc. Nullam in finibus dolor. Integer dictum feugiat porta.

				Vivamus quis luctus tortor. Proin quis purus et enim vulputate accumsan sed id libero. Phasellus nec hendrerit velit. Nulla condimentum sollicitudin mi at blandit. Nunc a porta ipsum. Praesent non massa urna. Nam molestie erat at diam efficitur, quis ultrices erat sollicitudin. Cras quis luctus nisl, id rutrum justo.

				Curabitur commodo convallis enim nec fermentum. Curabitur imperdiet urna auctor orci congue, nec venenatis odio posuere. Donec velit est, efficitur convallis egestas sit amet, tristique sed ligula. Ut facilisis vitae erat tristique sollicitudin. Suspendisse pellentesque diam ac massa congue mattis. Sed quis nibh est. Nullam cursus pellentesque urna eget congue. Fusce aliquet lorem nisl, suscipit dictum mauris ultrices et. In nisl nunc, mollis non scelerisque lobortis, tincidunt ut lectus. Nunc tempor vel neque eget eleifend. Morbi id sem tortor. Phasellus at enim sodales risus ultrices fringilla. Morbi maximus vehicula ullamcorper. Curabitur nunc arcu, posuere vitae est ac, eleifend tincidunt ex. Integer orci lacus, mattis vitae rhoncus ultrices, suscipit et metus.

				Pellentesque nec varius dui. Donec laoreet felis vitae dictum sagittis. Cras eros purus, suscipit non erat ac, finibus sagittis justo. Donec non risus a est iaculis commodo. Donec libero tellus, aliquet id elit ac, aliquam tincidunt tellus. Fusce laoreet non ante non efficitur. Mauris iaculis, mi ac luctus maximus, ante elit tristique nisi, et elementum nibh mi a velit. Integer cursus diam ut ligula condimentum porttitor.
			</div>

		</div>

	</div>

	<?php require_once('ressourcePHP/footer.php'); ?>

	<script src="jquery-3.2.1.min.js"></script>
	<script src="js/general.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!--<script src="bootstrap/js/bootstrap.min.js"></script>-->
</body>


</html>
