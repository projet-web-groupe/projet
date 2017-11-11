<div class="container " id="page">
	<?php 
	if(isset($_SESSION['typeInscription']))
	{
		?>
		<div class="page-header">
			<?php 
			if($_SESSION['typeInscription'] === 'candidat')
			{
				?>
				<h1>Inscrivez-vous!</h1>
				<?php 
			}
			else 
			{
				?>
				<h1>Inscrivez un collègue RH !</h1>
				<?php 
			}
			?>
		</div>

		<?php
		include 'ressourcePHP/modal.php';
		?>

		<div id="form" class="background">
			<form id="insc" method="post" action="Accueil.php">
				<div class="row">
					<div class="form-group">
						<div class=" col-xm-12 col-sm-12 col-md-6 col-lg-6">
							<label for="nom" class="label label-primary">Nom:</label>
							<input type="text" id="nom" name="nom" class="form-control" placeholder="Entrez votre Nom">
						</div>
						<div  class="form-group col-xm-12 col-sm-12 col-md-6 col-lg-6">
							<label for="prenom" class="label label-primary">Prénom:</label>
							<input type="text" id="prenom" name="prenom" class="form-control" placeholder="Entrez votre Prénom">
						</div>

					</div>
					<div class="form-group">
						<div class=" col-xm-12 col-sm-12 col-md-6 col-lg-6">
							<label for="nom" class="label label-primary">Login:</label>
							<input type="text" id="login" name="login" class="form-control" placeholder="Choisissez un Login">
						</div>
						<div  class="form-group col-xm-12 col-sm-12 col-md-6 col-lg-6">
							<label for="prenom" class="label label-primary">Mot de passe:</label>
							<input type="password" id="mdp" name="mdp" class="form-control" placeholder="choisissez un mot de passe">
						</div>

					</div>


					<div>
						<div class="form-group">
							<div class="col-xm-12 col-sm-12 col-md-6 col-lg-6" id="sexe">
								<div class="label label-primary" id="se" >
									Sexe:
								</div>
								<select name="genre" class="form-control" id="sel1">
									<option value="H">Homme</option>
									<option value="F">Femme</option>

								</select>
							</div>
							<div class="col-xm-12 col-sm-12 col-md-6 col-lg-6">
								<div class="label label-primary">
									Date de naissance:
								</div>
							</div>
							<div  class="form-group col-xm-12 col-sm-12 col-md-6 col-lg-6">
								<input type="datetime" name="date" name="naissance" class="form-control">
							</div>
						</div>
					</div>

					<div class="form-group col-xm-12 col-sm-12 col-md-6 col-lg-6 gene">
						<label class="label label-primary">Adresse mail:</label>
						<span class="input-group">
							<input id="email" name="mail" type="text" class="form-control" placeholder="exemple@gmail.com">
							<span id="e-croix" class="input-group-addon "></span>
						</span>
					</div>

					<?php 
					if($_SESSION['typeInscription'] === 'candidat')
					{
						?>
						<div  class="form-group col-xm-12 col-sm-12 col-md-6 col-lg-6">
							<label class="label label-primary">Quel est votre dernier diplôme?</label>
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
								<input id="exp" type="number" name="exp" class="form-control" placeholder="Entrez votre nombre d'années d'éxpérience">
								<span id="croix" class="input-group-addon "></span>
							</span>
						</div>

						<?php 
					}
					?>
				</div>
				<?php 
				if($_SESSION['typeInscription'] === 'candidat')
				{
					?>
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
					<div class="row">
						<div class="panel panel-default">
							<div class="panel-heading">
								<span>Choisissez les qualités qui vont définissent parmis celles qui figurent ci-dessous:</span>
							</div>
							<div class="panel-body form-inline">
								<div class="checkbox col-xs-12 col-sm-6 col-md-4 col-lg-3">
									<label class="checkbox-inline"><input name="qualite[]" type="checkbox" value="Enthousiaste"> Enthousiaste</label>
								</div>
								<div class="checkbox col-xs-12 col-sm-6 col-md-4 col-lg-3">
									<label class="checkbox-inline"><input name="qualite[]" type="checkbox" value="Curieux"> Curieux</label>
								</div>
								<div class="checkbox col-xs-12 col-sm-6 col-md-4 col-lg-3">
									<label class="checkbox-inline"><input name="qualite[]" type="checkbox" value="Sociable"> Sociable</label>
								</div>
								<div class="checkbox col-xs-12 col-sm-6 col-md-4 col-lg-3">
									<label class="checkbox-inline"><input name="qualite[]" type="checkbox" value="Déterminé"> Déterminé</label>
								</div>
								<div class="checkbox col-xs-12 col-sm-6 col-md-4 col-lg-3">
									<label class="checkbox-inline"><input name="qualite[]" type="checkbox" value="Rigoureux"> Rigoureux</label>
								</div>
								<div class="checkbox col-xs-12 col-sm-6 col-md-4 col-lg-3">
									<label class="checkbox-inline"><input name="qualite[]" type="checkbox" value="Organisé"> Organisé</label>
								</div>
								<div class="checkbox col-xs-12 col-sm-6 col-md-4 col-lg-3">
									<label class="checkbox-inline"><input name="qualite[]" type="checkbox" value="Intelligent"> Intelligent</label>
								</div>
							</div>
						</div>
					</div>
					<?php 
				}
				?>
				<div class="row">
					<button type="submit" class="btn btn-success col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-10 col-md-2 col-lg-offset-11 col-lg-1">Valider</button>
				</div>

			</form>
		</div>
		<?php

	}	?>
</div>