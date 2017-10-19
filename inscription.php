<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Inscription</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/inscription.css">
	<link rel="stylesheet" href="css/general.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<body>
	<?php require_once('ressourcePHP/session.php'); ?>
	<?php
	require_once('ressourcePHP/header.php');
	require_once('ressourcePHP/requeteur.class.php');
	?>
	<?php
	try{


		echo'<p></br></br></br></br></br></br></br></p>';
		var_dump($_POST);
		if(isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['login']) and isset($_POST['mdp']) and isset($_POST['genre']) and isset($_POST['date']) and isset($_POST['diplome']) and isset($_POST['exp']) and isset($_POST['mail']) and isset($_POST['vehicule']) and isset($_POST['qualite']) and (trim($_POST['nom']!='')) and (trim($_POST['prenom']!='')) and (trim($_POST['login']!='')) and (trim($_POST['mdp']!='')) and (trim($_POST['genre']!='')) and (trim($_POST['date']!='')) and (trim($_POST['diplome']!='') )and (trim($_POST['exp']!='')) and (trim($_POST['mail']!='')) and (trim($_POST['vehicule']!='')) and (trim($_POST['qualite']!='')))
		{
			$requeteur = new requeteur;
			
			$req = $requeteur->getRequete('SELECT MAX(id) as idMax from personne');
			$req->execute();
			$val=$req->fetch();
			var_dump($val);
			echo "test!!!!";
			$verif= $requeteur->getRequete('SELECT nom, prenom, dateNaissance, login, mail from personne where nom= :nom, prenom= :prenom, dateNaissance= :dateNaissance, login= :login, mail= :mail ');

			$verif->bindValue(':nom', $_POST['nom']);
			$verif->bindValue(':prenom', $_POST['prenom']);
			$verif->bindValue(':dateNaissance',$_POST['date']);
			$verif->bindValue(':login', $_POST['login']);
			$verif->bindValue(':mail', $_POST['mail']);

			$verif->execute();
			$vtab= $verif->fetch();
			var_dump($vtabs);
			if(empty($vtab))
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
			}
			else
			{
				echo'<div class="panel panel-danger">
				<div class="panel-header">
				Vous êtes déjà inscrit sur ce site !
				</div>
				</div>';



			}
		}
		else{
			include 'ressourcePHP/inscriptionForm.php';
		}
	}
	catch(PDOException $e){die('<p> La connexion a échoué. Erreur[' .$e->getCode().'] : '.$e->getMessage().'</p>');}
	?>

	<?php

	include 'ressourcePHP/footer.php'
	?>

	<script src="jquery-3.2.1.min.js"></script>
	<script src="js/general.js"></script>
	<script src="js/inscription.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!--<script src="bootstrap/js/bootstrap.min.js"></script>-->

</body>
</html>
