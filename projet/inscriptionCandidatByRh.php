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
		$requeteur = new requeteur;
		if(isConnecter() and $requeteur->isRh($_SESSION['id']))
		{ 
			$_SESSION['typeInscription'] = 'candidatByRh';
			include 'ressourcePHP/inscriptionForm.php'; 
		}
		else{
			?>
			<div class="panel panel-danger" id="page">
				<div class="panel-heading">
					Vous n'êtes pas autorisé à accéder au contenu de cette page.
				</div>
			</div>'
			<?php
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

</body>
</html>
