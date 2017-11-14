<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Mes conversations</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/conversation.css">
	<link rel="stylesheet" href="css/general.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<body>
	<?php 
	require_once('ressourcePHP/session.php');
	require_once('ressourcePHP/requeteur.class.php');

	try{
		if (!isConnecter()){
			?>
			<div class="panel panel-danger" id="page">
				<div class="panel-heading">
					Vous devez vous connecter pour pouvoir accéder à cette page !
				</div>
			</div>'
			<?php
		}
		else
		{
			require_once('ressourcePHP/header.php');
			?>
			<div class="container" id="page">
				<div class="page-header">
					<?php 
					if($requeteur->isCandidat($_SESSION['nom'], $_SESSION['prenom']))
					{
						?>
						<h1>RH : nomRH prenomRH (statique)</h1>
						<?php
					}
					else
					{
						?>
						<h1>Candidat : nomCand prenomCand (statique)</h1>
						<?php
					}
					?>
				</div>
				<div id="content">
					<div class="col-xs-offset-2 col-xs-10">
						<?php 
						if(isset($_SESSION['contact']))
						 ?>
						<div class="message autre">
							<strong>Mon header</strong>
							<p>
								Hi. Am searching for something about Css.
								would you mind helping me to find out?
							</p>
						</div>
					</div>
					<div class="col-xs-10">
						<div class="message moi">
							<strong>Mon header</strong>
							<p>Hi dear</br>
							of course if i can ...</p>
						</div>
					</div>
					<form>
						
					</form>			
				</div>
			</div>
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
	<!--<script src="bootstrap/js/bootstrap.min.js"></script>-->

</body>
</html>
