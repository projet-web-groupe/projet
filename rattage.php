<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Contacter RH</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/contacterRH.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<body>
	<?php
	include 'ressourcePHP/header.php'
	?>
</header>
<div class="container" id="pa">
	<div class="page-header">
		<h1>Contacter une DRH</h1>
	</div>
	<form>
		<div class="form-group">
			<div>
				<label class="label label-primary">Entreprise ou RH :</label>
				<div class="form-group rechercher">
					<input type="text" class="form-control">
					<div class="col-lg-offset-10 col-lg-2 col-md-offset-10 col-md-2 col-sm-6 col-sm-offset-3 col-xs-offset-1 col-xs-10 btn btn-success">
						<span class="glyphicon glyphicon-search"></span>
						Rechercher
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="res" class="container">
		<h2>Résultats :</h2>
		<div class="row">
			<!-- ici l'adresse mail afficher et cibler change en fonction des résultat de la recherche  possible ???-->
			
			<div class="col-xm-12 col-sm-12 col-md-6 col-lg-6 ">
				<label class="label label-primary">Courriel :</label>
				<span class="input-group">
					<input id="mail" type="text" class="form-control" placeholder="exemple@hotmail.fr">
					<span id="croix" class="input-group-addon"><i class=""></i></span>
				</span>
			</div>

			<div class="col-xm-12 col-sm-12 col-md-6 col-lg-6">
				<label class="label label-primary">Télephone</label>
				
				<span class="input-group">
					<input id="tel" type="text" class="form-control" placeholder="0xxxxxxxxx">
					<span id="tel-croix" class="input-group-addon"><i class=""></i></span>
				</span>
			</div>
		</div>
		
		<div class="row">
			<!-- ici l'adresse mail afficher et cibler change en fonction des résultat de la recherche  possible ???-->
			
			<div class="col-xm-12 col-sm-12 col-md-6 col-lg-6">
				<label class="label label-primary">Fax :</label>
				<span class="input-group">
					<input id="fax" type="text" class="form-control" placeholder="un numero de fax...">
					<span id="fax-croix" class="input-group-addon"><i class=""></i></span>
				</span>
			</div>

			<div class="col-xm-12 col-sm-12 col-md-6 col-lg-6">
				<label class="label label-primary">Adresse</label>
				<input type="text" class="form-control" placeholder="n°1 rue TrouverDuTravail">
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
</body>
</html>
