<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Recherche candidat</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/rechercherCandidat.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<body>
	<?php
	include 'ressourcePHP/header.php'
	?>
	<div class="container" id="page">
		<div class="page-header">
			<h1>Rechercher un candidat</h1>
		</div>


		<div id="myModal" class="modal fade" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content modal-md">
					<div>
						<div id="panel" class="container ">
							<div id="mod" class="panel panel-info">
								<div class="panel-heading">
									<div class="panel-title">Sign In</div>
								</div>

								<div class="panel-body" >
									<form id="loginform" class="form-horizontal">

										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
											<input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">
										</div>

										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
											<input id="login-password" type="password" class="form-control" name="password" placeholder="password">
										</div>



										<div class="input-group">
											<div class="checkbox">
												<label>
													<input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
												</label>
											</div>
										</div>


										<div  class="form-group ">
											<!-- Button -->

											<div class=" controls ">
												<a id="btn-login" href="#" class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-8 col-md-3 col-lg-offset-9 col-lg-2 btn btn-success">Login  </a>

											</div>
										</div>

										<div class="row">
											<div class="form-group ">
												<div class="col-md-12 control">
													<div class="form-group-end">
														Don't have an account?
														<a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
															Sign Up Here
														</a>
													</div>
												</div>
												<div>
													<div class="col-md-12 control text-right">
														<div>
															<a href="#">Forgot password ?</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

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
									<input type="checkbox" name="metier"value="Informatique"> Informatique
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
								<input type="number" class="form-control" placeholder="année(s)">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row chercher">
				<div class="col-lg-offset-10 col-lg-2 col-md-offset-10 col-md-2 col-sm-6 col-sm-offset-3 col-xs-offset-1 col-xs-10 btn btn-success">
					<span class="glyphicon glyphicon-search"></span>
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

						<table class="table table-bordered ">
							<tr class="bg-primary">
								<th>Id candidat</th>
								<th>Année expérience</th>
								<th>Fiche candidat</th>
								<th>Contacter</th>
							</tr>
							<tr class="info">
								<td class="col-lg-1 col-md-1 col-sm-1 col-xs-1">001</td>
								<td>xx ans</td>
								<td><a href="inscription.html"><span class="glyphicon glyphicon-eye-open"> Voir</span></a></td>
								<td><a href="mailto:adresseCandidat@mail.com">mail</a></td>
							</tr>
							<tr class="info">
								<td class="col-lg-1 col-md-1 col-sm-1 col-xs-1">002</td>
								<td>xx ans</td>
								<td><a href="inscription.html"><span class="glyphicon glyphicon-eye-open"> Voir</span></a></td>
								<td><a href="mailto:adresseCandidat@mail.com">mail</a></td>
							</tr>
							<tr class="info">
								<td class="col-lg-1 col-md-1 col-sm-1 col-xs-1">003</td>
								<td>xx ans</td>
								<td><a href="inscription.html"><span class="glyphicon glyphicon-eye-open"> Voir</span></a></td>
								<td><a href="mailto:adresseCandidat@mail.com">mail</a></td>
							</tr>
							<tr class="info" >
								<td class="col-lg-1 col-md-1 col-sm-1 col-xs-1">004</td>
								<td>xx ans</td>
								<td><a href="inscription.html"><span class="glyphicon glyphicon-eye-open"> Voir</span></a></td>
								<td><a href="mailto:adresseCandidat@mail.com">mail</a></td>
							</tr>
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
	<!--<script src="bootstrap/js/bootstrap.min.js"></script>-->
</body>
</html>
