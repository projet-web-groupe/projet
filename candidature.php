<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Candidature</title>
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
	
	<div class="container" id="page" >
		<div class="page-header">
			<h1>Candidatures</h1>
		</div>
		
		<?php
		include 'ressourcePHP/modal.php'
		?>

		<div class="row">
			<div class="table-responsive ">
				<table class="table table-bordered ">
					<tr class="bg-primary">
						<th class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center">Réf de l'offre</th>
						<th class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center">Lien de l'offre</th>
						<th class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center">Fiche candidat</th>
						<th class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" >Accepter</th>
						<th class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center">Refuser</th>
					</tr>
					<tr >

						<td class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center">001</td>
						<td class="col-lg-1 col-md-1 col-sm-3 col-xs-3 text-center"><a href="postuler.php"><span class="glyphicon glyphicon-eye-open"> Voir</span></a></td>
						<td class="col-lg-1 col-md-1 col-sm-3 col-xs-3 text-center"><a href="inscription.php"><span class="glyphicon glyphicon-eye-open"> Voir</span></a></td>
						<td class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center"><button type="button" class="btn btn-success">Accepter</button></td>
						<td class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center"><button type="button" class="btn btn-danger">Refuser</button></td>
					</tr>
					<tr >
						<td class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center">002</td>
						<td class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><a href="postuler.php"><span class="glyphicon glyphicon-eye-open"> Voir</span></a></td>
						<td class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><a href="inscription.php"><span class="glyphicon glyphicon-eye-open"> Voir</span></a></td>
						<td class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center"><button type="button" class="btn btn-success">Accepter</button></td>
						<td class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center"><button type="button" class="btn btn-danger">Refuser</button></td>
					</tr>
					<tr >
						<td class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center">003</td>
						<td class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><a href="postuler.php"><span class="glyphicon glyphicon-eye-open"> Voir</span></a></td>
						<td class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><a href="inscription.php"><span class="glyphicon glyphicon-eye-open"> Voir</span></a></td>
						<td class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center"><button type="button" class="btn btn-success">Accepter</button></td>
						<td class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center"><button type="button" class="btn btn-danger">Refuser</button></td>
					</tr>
					<tr>
						<td class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center">004</td>
						<td class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><a href="postuler.php"><span class="glyphicon glyphicon-eye-open"> Voir</span></a></td>
						<td class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><a href="inscription.php"><span class="glyphicon glyphicon-eye-open"> Voir</span></a></td>
						<td class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center"><button type="button" class="btn btn-success">Accepter</button></td>
						<td class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center"><button type="button" class="btn btn-danger">Refuser</button></td>
					</tr>
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
	</div>
	<?php
	include 'ressourcePHP/footer.php'
	?>
	<script src="jquery-3.2.1.min.js"></script>
	<script src="js/general.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!--<script src="bootstrap/js/bootstrap.min.js"></script>-->
</body>
</html>
