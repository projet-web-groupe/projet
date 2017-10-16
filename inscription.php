<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Inscription</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/general.css">
	<link rel="stylesheet" href="css/inscription.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>

	<?php
	include 'ressourcePHP/header.php'
	?>
	<div class="container ">
		<div class="page-header">
			<h1>Inscrivez-vous!</h1>
		</div>

		<?php
		include 'ressourcePHP/modal.php'
		?>

		<div id="form">
			<form >
				<div class="row">
					<div class="form-group">
						<div class=" col-xm-12 col-sm-12 col-md-6 col-lg-6">
							<label for="nom" class="label label-primary">Nom:</label>
							<input type="text" id="nom" class="form-control" placeholder="Entrez votre Nom">
						</div>
						<div  class="form-group col-xm-12 col-sm-12 col-md-6 col-lg-6">
							<label for="prenom" class="label label-primary">Prénom:</label>
							<input type="text" id="prenom" class="form-control" placeholder="Entrez votre Prénom">
						</div>
					</div>

					<div >
						<div class="form-group">
							<div class="col-xm-12 col-sm-12 col-md-6 col-lg-6" id="sexe">
								<div class="label label-primary" id="se" >
									Sexe:
								</div>
								<div class=" btn-grp-justified">
									<a href="#" class="btn btn-primary ">Homme</a>
									<a href="#" class="btn btn-primary ">Femme</a>
								</div>
							</div>
							<div class="col-xm-12 col-sm-12 col-md-6 col-lg-6">
								<div class="label label-primary">
									Date de naissance:
								</div>
							</div>
							<div  class="form-group col-xm-12 col-sm-12 col-md-6 col-lg-6">

								<input type="date" name="naissance" class="form-control">
							</div>
						</div>
					</div>

					<div  class="form-group col-xm-12 col-sm-12 col-md-6 col-lg-6">
						<label class="label label-primary">Quel est votre dernier diplôme?</label>
							<!--<select class="form-control">
								<option value="DUT">DUT</option>
								<option value="BAC">BAC</option>
								<option value="BEP">BEP</option>
								<option value="CAP">CAP</option>
								<option value="BTS">BTS</option>
								<option value="MASTER">MASTER</option>
							</select>-->
							<input type="text" name="diplome" class="form-control diplome">
							<div class="suggestion cache">
								<ul>
									<a href="Accueil.php"><li>test1</li></a>
									<a href="#"><li>test2</li></a>
								</ul>
							</div>

						</div>
						<div  class="form-group col-xm-12 col-sm-12 col-md-6 col-lg-6">
							<label class="label label-primary">Quel est votre domaine?</label>
							<!--<select class="form-control">
								<option value="INFO">Informatique</option>
								<option value="MED">Médecine</option>
								<option value="DRO">Droit</option>
								<option value="COM">COMMERCE</option>
								<option value="Ele">Electronique</option>
								<option value="BAT">Bâtiment</option>
							</select>-->
							<input type="text" name="domaine" class="form-control domaine">
							<div class="suggestion2 cache2">
								<ul>
									<a href="Accueil.php"><li>test1</li></a>
									<a href="#"><li>test2</li></a>
								</ul>
							</div>
						</div>


						<div class="form-group col-xm-12 col-sm-12 col-md-6 col-lg-6 gene">
							<label class="label label-primary">Nombre d'années d'éxpérience:</label>
							<span class="input-group">
								<input id="exp" type="number" class="form-control" placeholder="Entrez votre nombre d'années d'éxpérience">
								<span id="croix" class="input-group-addon "></span>
							</span>
						</div>
						<div class="form-group col-xm-12 col-sm-12 col-md-6 col-lg-6 gene">
							<label class="label label-primary">Adresse mail:</label>
							<span class="input-group">
								<input id="email" type="text" class="form-control" placeholder="exemple@gmail.com">
								<span id="e-croix" class="input-group-addon "></span>
							</span>
						</div>

					</div>
					<div class="row">
						<div  class="form-group col-xm-12 col-sm-12 col-md-6 col-lg-6">
							<label class="label label-primary">Etes-vous véhiculé?</label>
							<div class="radio">
								<label><input  type="radio" name="vehicule" value="oui"><span class="veh">Oui</span></label>
							</div>
							<div class="radio">
								<label><input  type="radio" name="vehicule" value="non"><span class="veh">Non</span></label>
							</div>
						</div>

					</div>
					<div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<span>Choisissez les qualités qui vont définissent parmis celles qui figurent ci-dessous:</span>
							</div>
							<div class="panel-body form-inline">
								<div class="checkbox col-xs-12 col-sm-6 col-md-4 col-lg-3">
									<label class="checkbox-inline"><input type="checkbox" value="Enthousiaste"> Enthousiaste</label>
								</div>
								<div class="checkbox col-xs-12 col-sm-6 col-md-4 col-lg-3">
									<label class="checkbox-inline"><input type="checkbox" value="Curieux"> Curieux</label>
								</div>
								<div class="checkbox col-xs-12 col-sm-6 col-md-4 col-lg-3">
									<label class="checkbox-inline"><input type="checkbox" value="Sociable"> Sociable</label>
								</div>
								<div class="checkbox col-xs-12 col-sm-6 col-md-4 col-lg-3">
									<label class="checkbox-inline"><input type="checkbox" value="Déterminé"> Déterminé</label>
								</div>
								<div class="checkbox col-xs-12 col-sm-6 col-md-4 col-lg-3">
									<label class="checkbox-inline"><input type="checkbox" value="Rigoureux"> Rigoureux</label>
								</div>
								<div class="checkbox col-xs-12 col-sm-6 col-md-4 col-lg-3">
									<label class="checkbox-inline"><input type="checkbox" value="Organisé"> Organisé</label>
								</div>
								<div class="checkbox col-xs-12 col-sm-6 col-md-4 col-lg-3">
									<label class="checkbox-inline"><input type="checkbox" value="Intelligent"> Intelligent</label>
								</div>
							</div>
						</div>
					</div>
					<div >
						<button type="submit" class="btn btn-success">Valider</button>
					</div>

				</form>
			</div>
		</div>
		<?php
		include 'ressourcePHP/footer.php'
		?>

		<script src="jquery-3.2.1.min.js"></script>
		<script src="js/general.js"></script>
		<script src="js/inscription.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<!--<script src="bootstrap/js/bootstrap.min.js"></script>-->
	</body>
	</html>
