<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Consultation des offres</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/offres.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/offres.css">

</head>

<body>
	<?php
	include 'ressourcePHP/header.php'
	?>
	<div class="container" id="pa">
		<div class="page-header">
			<h1>Liste des offres</h1>
		</div>

		<?php
		include 'ressourcePHP/modal.php'
		?>

		<div class="table-responsive">
			<table class="table table-bordered ">
				<tr class="bg-primary">
					<th>Référence</th>
					<th>Domaine </th>
					<th>Description</th>
					<th>Type de contrat</th>
					<th>Détails</th>
				</tr>
				<tr>
					<td>0001</td>
					<td>Info</td>
					<td>No data</td>
					<td>CDI</td>
					<td ><a href="postuler.html" target="blank"><span class="glyphicon glyphicon-eye-open"> Voir</span></a></td>
				</tr>
				<tr>
					<td>0002</td>
					<td>Info</td>
					<td>No data</td>
					<td>CDI</td>
					<td ><a href="postuler.html" target="blank"><span class="glyphicon glyphicon-eye-open"> Voir</span></a></td>
				</tr>
				<tr>
					<td>0003</td>
					<td>Info</td>
					<td>No data</td>
					<td>CDI</td>
					<td ><a href="postuler.html" target="blank"><span class="glyphicon glyphicon-eye-open"> Voir</span></a></td>
				</tr>
				<tr>
					<td>0004</td>
					<td>Info</td>
					<td>No data</td>
					<td>CDI</td>
					<td ><a href="postuler.html" target="blank"><span class="glyphicon glyphicon-eye-open"> Voir</span></a></td>
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
	<?php
	include 'ressourcePHP/footer.php'
	?>
	<script src="jquery-3.2.1.min.js"></script>
	<script src="js/general.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!--<script src="bootstrap/js/bootstrap.min.js"></script>-->
</body>

</html>
