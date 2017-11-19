<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Candidature</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/general.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php include 'ressourcePHP/session.php' ?>
	<?php include 'ressourcePHP/requeteur.class.php' ?>
	<?php
		require_once('ressourcePHP/header.php');
		require_once('ressourcePHP/affichageCandidature.php');
	?>
	
	<div class="container" id="page" >
		<div class="page-header">
			<h1>Candidatures</h1>
		</div>
		
		<?php
		include 'ressourcePHP/modal.php'
		?>
		<?php
			if(!(isset($_SESSION['connecte'])) || $_SESSION['connecte']!= true){
				echo"<h2><span class=\"label label-warning\">Vous n'êtes pas connecté. Veullez vous connecter pour accéder au contenu.</span></h2>";
			}
			else{
				echo"
				<div class=\"row\">
					<div class=\"table-responsive \">";
						echo" <p id=\"sessionNom\" hidden>".$_SESSION['nom']."</p>";
						echo" <p id=\"sessionPrenom\" hidden>".$_SESSION['prenom']."</p>";
						echo" <p id=\"sessionId\" hidden>".$_SESSION['id']."</p>";
						
						if( $requeteur->isCandidat($_SESSION['id']))
						{
							echo affichageCandidat();
						}
						else if($requeteur->isRh($_SESSION['id'])){
							echo affichageRh();
						}
						echo"	
						</div>
					</div>
				</div>";
			}

		?>
		
	<?php
	include 'ressourcePHP/footer.php'
	?>
	<script src="jquery-3.2.1.min.js"></script>
	<script src="js/general.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/candidature.js"></script>
</body>
</html>
