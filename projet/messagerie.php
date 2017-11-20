<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Messagerie</title>
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
		require_once('ressourcePHP/modal.php');
	?>
	<div class="container" id="page" >
		<div class="page-header">
			<h1>Messagerie</h1>
		</div>
		<div class="row">
			<form action="redigerMessage.php" method="post">
				<input type="submit" class="btn-danger" value="Nouveau message">
			</form>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr class="bg-primary">
						<th>De la part de</th>
						<th>Objet</th>
						<th>Date</th>
						<th>Mail</th>
					</tr>
					<?php
						$requeteur= new requeteur;
						$req= $requeteur->getRequete('select mail from personne where id="'.$_SESSION['id'].'"');
						$req->execute();
						$m= $req->fetch();

						$req= $requeteur->getRequete('select emetteur, obj, date_envoie from messages where destinataire="'.$m['mail'].'"');
						$req->execute();
						while($l=$req->fetch(PDO::FETCH_ASSOC)){
							echo"<tr>
									<td>".$l['emetteur']."</td>
									<td>".$l['obj']."</td>
									<td>".$l['date_envoie']."</td>
									<form action=\"mail.php\" method=\"post\" target=\"_blank\">
									<input type=\"text\" name=\"emetteur\" value=\"".$l['emetteur']."\"hidden>
									<input type=\"text\" name=\"obj\" value=\"".$l['obj']."\" hidden>
									<input type=\"text\" name=\"date_envoie\" value=\"".$l['date_envoie']."\"hidden>
									<input type=\"text\" name=\"destinataire\" value=\"".$m['mail']."\"hidden>
									<td><input class=\"lienForm\" type=\"submit\" value=\"Voir\"></td>
									</form>";
						}
					?>
				</table>
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