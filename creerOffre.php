<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Créer votre offre</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/general.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
	
</head>

<body>
	<?php
	include 'ressourcePHP/header.php'
	?>
	<div class="container" id="page">
		<div class="page-header">
			<h1>Créer votre offre</h1>
		</div>
		<?php include 'ressourcePHP/modal.php' ?>
		<div class="row">	
			<form>
				<span class="label label-primary">Employeur : </span>
				<input type="text" name="employeur" class="form-control">
				
				<span class="label label-primary">Description du poste : </span>
				<textarea name="desc" class="form-control"></textarea>
				<div class="row">
				<div class="col-lg-1 col-lg-push-11">
					<button type="button" class="btn btn-success btn-block">Valider</button>
				</div>
			
			</form>
		</div>
		
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
