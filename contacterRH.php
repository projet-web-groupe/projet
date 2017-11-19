<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Contacter RH</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/general.css">
	<link rel="stylesheet" href="css/contacterRH.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
	
</head>

<body>
	<?php include 'ressourcePHP/session.php' ?>
	<?php
	include 'ressourcePHP/header.php'
	?>
	<div class="container" id="page">
		<div class="page-header">
			<h1>Contacter une DRH</h1>
		</div>
		
		<?php
		include 'ressourcePHP/modal.php'
		?>

		<form>
			<div class="form-group row shearch-bar">
				<div>
					<label class="label label-primary">Entreprise ou RH :</label>
					<div class="form-group">
						<input id="indice" type="text" name="nom" class="form-control">
						<div class="form-group rechercher">
							
							<div class="col-lg-offset-10 col-lg-2 col-md-offset-10 col-md-2 col-sm-6 col-sm-offset-3 col-xs-offset-1 col-xs-10 btn btn-success">
								<span class="glyphicon glyphicon-search"></span>
								Rechercher
							</div>
						</div>
					</div>
				</div>
				<div id="res">
					<h2 id="h2ombre">Résultats :</h2>
					<div id="resPhp">

					</div>
				</div>
			</form>
			
		</div>
		<?php
		include 'ressourcePHP/footer.php'
		?>
		<script src="jquery-3.2.1.min.js"></script>
		<script src="js/general.js"></script>
		<script src="js/contacterRH.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
	</body>
	</html>