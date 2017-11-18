<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Consultation des offres</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/general.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">

</head>
<body>
	<?php 
	require_once('ressourcePHP/session.php');
	require_once('ressourcePHP/header.php');
	require_once('ressourcePHP/requeteur.class.php');
	?>
	<div class="container" id="page">
		<div class="page-header">
			<h1>Liste des offres</h1>
		</div>

		<?php
		require_once('ressourcePHP/modal.php');
		?>

		<div class="table-responsive">
			<table class="table table-bordered ">
				<tr class="bg-primary">
					<th>Référence</th>
					<th>poste</th>
					<th>Détails</th>
				</tr>
				<?php
					$requeteur= new requeteur;
					$req = $requeteur->getRequete('SELECT ref, description, label, profil from description');
					$req->execute();
					while($l = $req->fetch(PDO::FETCH_ASSOC))
					{
						echo"<tr>
							<td>".htmlspecialchars($l['ref'])."</td>
							<td>".htmlspecialchars($l['label'])."</td>
							
							<td class=\"col-lg-1 col-md-1 col-sm-3 col-xs-3 text-center colorB\">
								<form action= \"postuler.php\" method=\"post\"  target=\"_blank\">
									<input  type=\"text\" name=\"id\" value=\"".htmlspecialchars($l['ref'])."\" hidden>
									<span class=\"glyphicon glyphicon-eye-open\"><input class=\"lienForm\" type=\"submit\" value=\"Voir\"></span>
								</form>
							</td>
						<tr>";
					}
					
				?>
			</table>
		
		</div>
	</div>
	<?php
	include 'ressourcePHP/footer.php'
	?>
	<script src="jquery-3.2.1.min.js"></script>
	<script src="js/general.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>
