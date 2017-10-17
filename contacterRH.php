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
						<input type="text" name="nom" class="form-control">
						<div class="form-group rechercher">
							
							<div class="col-lg-offset-10 col-lg-2 col-md-offset-10 col-md-2 col-sm-6 col-sm-offset-3 col-xs-offset-1 col-xs-10 btn btn-success">
								<span class="glyphicon glyphicon-search"></span>
								Rechercher
							</div>
						</div>
					</div>
				</div>
				<div id="res">
					<h2>Résultats :</h2>
					<div class="row">
						<!-- ici l'adresse mail afficher et cibler change en fonction des résultat de la recherche  possible ???-->
						
						<div class="col-xm-12 col-sm-12 col-md-6 col-lg-6">
							<label class="label label-primary">Courriel :</label>
							<p><a class="form-control" href="mailto:exemple@hotmail.fr">exemple@hotmail.fr</a></p>
						</div>

						<div class="col-xm-12 col-sm-12 col-md-6 col-lg-6">
							<label class="label label-primary">Télephone</label>
							<p class="form-control">0xxxxxxxxx</p>
						</div>
					</div>

					<div class="row">
						<!-- ici l'adresse mail afficher et cibler change en fonction des résultat de la recherche  possible ???-->
						
						<div class="col-xm-12 col-sm-12 col-md-6 col-lg-6">
							<label class="label label-primary">Fax :</label>
							<p class="form-control">un numero de fax...</p>
						</div>

						<div class="col-xm-12 col-sm-12 col-md-6 col-lg-6">
							<label class="label label-primary">Adresse</label>
							<p class="form-control">n°1 rue TrouverDuTravail</p>
						</div>
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
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!--<script src="bootstrap/js/bootstrap.min.js"></script>-->
	</body>
	</html>