<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Recherche candidat</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/general.css">
	<link rel="stylesheet" href="css/rechercherCandidat.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<body>
	<?php include 'ressourcePHP/session.php' ?>
	<?php
	include 'ressourcePHP/header.php'
	?>
	<div class="container" id="page">
		<div class="page-header">
			<h1>Rechercher un candidat</h1>
		</div>

		<?php
		include 'ressourcePHP/modal.php'
		?>

		<form>
			<div class="row">
				<div class=" panel panel-default">
					<div class="panel-heading">
						<span>Choisissez les domaines de compétences que vous souhaitez rechercher :</span>
					</div>
					<div class="panel-body">
						<div class="form-inline row">
							<div class="checkbox col-xs-12 col-sm-6 col-md-4 col-lg-3">
								<label class="checkbox-inline">
									<input type="checkbox" name="metier" value="Informatique"> Informatique
								</label>
							</div>

							<div class="checkbox col-xs-12 col-sm-6 col-md-4 col-lg-3">
								<label class="checkbox-inline">
									<input type="checkbox" name="metier" value="Médecine"> Médecine
								</label>
							</div>

							<div class="checkbox col-xs-12 col-sm-6 col-md-4 col-lg-3">
								<label class="checkbox-inline">
									<input type="checkbox" name="metier" value="Droit"> Droit
								</label>
							</div>

							<div class="checkbox col-xs-12 col-sm-6 col-md-4 col-lg-3">
								<label class="checkbox-inline">
									<input type="checkbox" name="metier" value="Commerce"> Commerce
								</label>
							</div>

							<div class="checkbox col-xs-12 col-sm-6 col-md-4 col-lg-3">
								<label class="checkbox-inline">
									<input type="checkbox" name="metier" value="Electronique"> Electronique
								</label>
							</div>

							<div class="checkbox col-xs-12 col-sm-6 col-md-4 col-lg-3">
								<label class="checkbox-inline">
									<input type="checkbox" name="metier" value="Bâtiment"> Bâtiment
								</label>
							</div>
						</div>
						<div class="row">
							<div class="col-xm-8 col-xs-offset-4 col-sm-4 col-sm-offset-8 col-md-3 col-md-offset-9 col-lg-2 col-lg-offset-10">
								<label class="label label-primary">
									Expérience minimum
								</label>
								<input type="number" id="minExp" class="form-control" placeholder="année(s)">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row chercher">
				<div class="col-lg-offset-10 col-lg-2 col-md-offset-10 col-md-2 col-sm-6 col-sm-offset-3 col-xs-offset-1 col-xs-10 btn btn-success">
					<span class="glyphicon glyphicon-search chercher"></span>
					Rechercher
				</div>
			</div>
			<div class="part2">
				<h2>Résultats :</h2>
				<div class="row ">
					<div class="panel panel-default">

					</div>
				</div>

				<div class="row">
					<div class="table-responsive ">
						
						<table id="listeCandidat" class="table table-bordered ">

							
						</table>

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
	<script src="js/rechercherCandidat.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>
