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
						echo"<tr><td>".htmlspecialchars($l['ref'])."</td><td>".htmlspecialchars($l['label'])."</td><td><a href=\"postuler.php?id=".htmlspecialchars($l['ref'])."\" target=\"blank\"><span class=\"glyphicon glyphicon-eye-open\"> Voir</span></a></td><tr>";
					}
					
				?>
			</table>
			<ul class="pagination pull-right">
				<li class="active"><a href="#">1</a></li>
				<li ><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
			</ul>
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
