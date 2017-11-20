<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Message</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/general.css">
	<link rel="stylesheet" href="css/postuler.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<body>
	
	<?php 
		require_once('ressourcePHP/session.php');
		require_once('ressourcePHP/requeteur.class.php');
		require_once('ressourcePHP/session.php');
		require_once('ressourcePHP/requeteur.class.php');
		require_once('ressourcePHP/header.php');
	?>
	<?php
	var_dump($_POST);
		if(isset($_POST['emetteur']) and isset($_POST['obj']) and isset($_POST['date_envoie']))
		{
			$requeteur= new requeteur;
			$req=$requeteur->getRequete('select msg from messages where emetteur= :em and destinataire= :de and obj= :o and date_envoie= :da');
			$req->bindValue(':em',$_POST['emetteur']);
			$req->bindValue(':de',$_POST['destinataire']);
			$req->bindValue(':o',$_POST['obj']);
			$req->bindValue(':da',$_POST['date_envoie']);
			$req->execute();
			$l=$req->fetch(PDO::FETCH_ASSOC);
			echo"

			<div class=\"container\" id=\"page\" >
				<div class=\"page-header\">
					<h1>Message de ".htmlspecialchars($_POST['emetteur'])."</h1>
				</div>
				<div class=\"row\">
					<div class=\"panel panel-primary\">
						<div class=\"panel-heading\">
							Objet: ".htmlspecialchars($_POST['obj'])."
						</div>
					<div class=\"panel-body\">
						".$l['msg']."
					</div>

				</div>

			</div>";
		}
	?>
		
	<?php
	require_once('ressourcePHP/footer.php');
	?>
	<script src="jquery-3.2.1.min.js"></script>
	<script src="js/general.js"></script>
	<script src="js/postuler.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!--<script src="bootstrap/js/bootstrap.min.js"></script>-->
</body>


</html>













<!--

			
	<?php
		var_dump($_POST);
		if(isset($_POST['emetteur']) and isset($_POST['obj']) and isset($_POST['date_envoie']))
		{
			echo"
			";
		}
	?>
			</div>

		</div>

	</div>
	<?php
	require_once('ressourcePHP/footer.php');
	?>
	<script src="jquery-3.2.1.min.js"></script>
	<script src="js/general.js"></script>
	<script src="js/postuler.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!--<script src="bootstrap/js/bootstrap.min.js"></script>-->
</body>


</html>