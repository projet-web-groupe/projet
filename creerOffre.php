<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Créer votre offre</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/general.css">
	<link rel="stylesheet" href="css/creerOffre.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
	
</head>

<body>
	<?php include 'ressourcePHP/session.php' ?>
	<?php
	include 'ressourcePHP/header.php'
	?>
	<div class="container" id="page">
		<div class="page-header">
			<h1>Créer votre offre</h1>
		</div>
		<?php include 'ressourcePHP/modal.php' ?>
		<form id="creer_offre" method="get" action="creerOffre.php">
			<div class="row">	
				<div  class="col-xm-12 col-sm-12 col-md-12 col-lg-12">
					<label for="Intitulé du poste" class="label label-primary">Intitulé du poste</label>
					<input type="text" id="prenom" name="label" class="form-control" placeholder="Décrivé le poste en quelque termes">
				</div>

				<div class="col-xm-12 col-sm-12 col-md-12 col-lg-12">
					<label for="Description détaillé du poste" class="label label-primary">Description détaillé du poste</label>
					<textarea id="longDesc" name="longDesc" class="form-control"></textarea>
				</div>
				<div class="col-xm-12 col-sm-12 col-md-12 col-lg-12">
					<label for="Profil recherché pour le poste" class="label label-primary">Profil recherché pour le poste</label>
					<textarea id="profil" name="profil" class="form-control"></textarea>
				</div>
				<div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-10 col-md-2 col-lg-offset-11 col-lg-1">
					<button type="submit" class="btn btn-success">Valider</button>
				</div>

			</div>
		</form>

	</div>
	<?php
	include 'ressourcePHP/footer.php'
	?>
	<script src="jquery-3.2.1.min.js"></script>
	<script src="js/general.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!--<script src="bootstrap/js/bootstrap.min.js"></script>-->
</body>
</html>
