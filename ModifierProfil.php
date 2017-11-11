<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Inscription</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/ModifierProfil.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/inscription.css">
	<link rel="stylesheet" href="css/general.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<body>
	<div class="container" id="page">
		<div class="page-header">
			<h1>Bienvenue</h1>
		</div>
		<?php 
		require_once('ressourcePHP/session.php');
		require_once('ressourcePHP/header.php');
		require_once('ressourcePHP/requeteur.class.php');
		try{
			$requeteur = new requeteur;
			if(isConnecter()){
				if($requeteur->isCandidat($_SESSION['nom'], $_SESSION['prenom'])){
					$req = $requeteur->getRequete('SELECT nom, prenom, dateNaissance, sexe, login, mail, domain, lastDiploma, experience, vehicule from personne join candidat on personne.id=candidat.id_pers where personne.nom= :nom AND personne.prenom= :prenom');
				}
				else{
					$req = $requeteur->getRequete('SELECT nom, prenom, dateNaissance, sexe, login, mail from personne where nom= :nom AND prenom= :prenom');
				}
				$req->bindValue(':nom', $_SESSION['nom']);
				$req->bindValue(':prenom', $_SESSION['prenom']);
				$req->execute();
				$val=$req->fetch();
			}
		}
		catch(PDOException $e){die('<p> La connexion a échoué. Erreur[' .$e->getCode().'] : '.$e->getMessage().'</p>');}
		?>
		<div id="overview" class="background">
			<div class="">
				<table>
					<tr>
						<td class="col-xm-6 champ">Type de compte </td>
						<td class="col-xm-6"><?php if($requeteur->isRh($_SESSION['nom'], $_SESSION['prenom'])){echo 'RH';}else{echo 'Candidat';} ?></td>
					</tr>
					<tr>
						<td class="col-xm-6 champ">Nom </td>
						<td class="col-xm-6"><?php echo $val['nom']; ?></td>
					</tr>
					<tr>
						<td class="col-xm-6 champ">Prenom </td>
						<td class="col-xm-6"><?php echo $val['prenom']; ?></td>
					</tr>
					<tr>
						<td class="col-xm-6 champ">Login </td>
						<td class="col-xm-6"><?php echo $val['login']; ?></td>
					</tr>
					<tr>
						<td class="col-xm-6 champ">Courriel </td>
						<td class="col-xm-6"><?php echo $val['mail']; ?></td>
					</tr>
					<tr>
						<td class="col-xm-6 champ">Date de naissance </td>
						<td class="col-xm-6"><?php echo $val['dateNaissance']; ?></td>
					</tr>
					<tr>
						<td class="col-xm-6 champ">Sexe </td>
						<td class="col-xm-6"><?php if($val['sexe'] == "H") echo "Homme";else{echo "Femme";}  ?></td>
					</tr>
					<?php if($requeteur->isCandidat($_SESSION['nom'], $_SESSION['prenom'])){?>
					<tr>
						<td class="col-xm-6 champ">Domaine </td>
						<td class="col-xm-6"><?php echo $val['domain']; ?></td>
					</tr>
					<tr>
						<td class="col-xm-6 champ">Dernier Diplôme </td>
						<td class="col-xm-6"><?php echo $val['lastDiploma']; ?></td>
					</tr>
					<tr>
						<td class="col-xm-6 champ">Année d'expérience(s) </td>
						<td class="col-xm-6"><?php echo $val['experience']; ?></td>
					</tr>
					<tr>
						<td class="col-xm-6 champ">Êtes-vous vehiculé ?</td>
						<td class="col-xm-6"><?php if($val['vehicule']) echo "Oui";else{echo "Non";} ?></td>
					</tr>
					<tr>
						<td class="col-xm-6 champ">Qualité </td>
						<td class="col-xm-6 ">
							<?php 
							$list = array("Curieux","Sociable","Déterminé","Rigoureux","Organisé","Intelligent");
							$qual = array();
							foreach ($list as $key => $value) {
								if($requeteur->isUserHasQual($_SESSION['nom'],$_SESSION['prenom'],$value)){
									$qual[] = $value;
								}
							}
							for($i = 0 ; $i < count($qual) ; $i++){
								echo $qual[$i];
								if($i < count($qual) - 1)
									echo ',';
							}
							?>
						</td>
					</tr>

					<?php } ?>
				</table>
			</div>
			<div class="">
				<button id="modifier" type="button" class="btn btn-success col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-10 col-md-2 col-lg-offset-11 col-lg-1">Modifier</button>
			</div>
		</div>
		<div id="modification" class="background hide">
			<div id="form">
				<form id="insc" method="post" action="Accueil.php">
					<div class="row">
						<div class="form-group">
							<div class=" col-xm-12 col-sm-12 col-md-6 col-lg-6">
								<label for="nom" class="label label-primary">Nom:</label>
								<input type="text" id="nom" name="nom" class="form-control" value="<?php echo $val['nom']; ?>" >
							</div>
							<div  class="form-group col-xm-12 col-sm-12 col-md-6 col-lg-6">
								<label for="prenom" class="label label-primary">Prénom:</label>
								<input type="text" id="prenom" name="prenom" class="form-control" value="<?php echo $val['prenom']; ?>">
							</div>

						</div>
						<div class="form-group">
							<div class=" col-xm-12 col-sm-12 col-md-6 col-lg-6">
								<label for="nom" class="label label-primary">Login:</label>
								<input type="text" id="login" name="login" class="form-control" value="<?php echo $val['login']; ?>">
							</div>
							<!--<div  class="form-group col-xm-12 col-sm-12 col-md-6 col-lg-6">
								<label for="prenom" class="label label-primary">Mot de passe:</label>
								<input type="password" id="mdp" name="mdp" class="form-control" placeholder="choisissez un mot de passe">
							</div>-->

						</div>


						<div>
							<div class="form-group">
								<div class="col-xm-12 col-sm-12 col-md-6 col-lg-6" id="sexe">
									<div class="label label-primary" id="se" >
										Sexe:
									</div>
									<select name="genre" class="form-control" id="sel1">
										<?php if ($val['sexe'] === "H") {?>
										<option value="H" selected="selected">Homme</option>
										<option value="F">Femme</option>
										<?php }else {?>
										<option value="H">Homme</option>
										<option value="F" selected="selected">Femme</option>
										<?php
									}?>

								</select>
							</div>
							<div class="col-xm-12 col-sm-12 col-md-6 col-lg-6">
								<div class="label label-primary">
									Date de naissance:
								</div>
							</div>
							<div  class="form-group col-xm-12 col-sm-12 col-md-6 col-lg-6">
								<input type="datetime" name="date" name="naissance" class="form-control" value="<?php echo $val['dateNaissance']; ?>">
							</div>
						</div>
					</div>

					<div class="form-group col-xm-12 col-sm-12 col-md-6 col-lg-6 gene">
						<label class="label label-primary">Adresse mail:</label>
						<span class="input-group">
							<input id="email" name="mail" type="text" class="form-control" value="<?php echo $val['mail']; ?>">
							<span id="e-croix" class="input-group-addon "></span>
						</span>
					</div>
					
					<?php 
					if($requeteur->isCandidat($_SESSION['nom'], $_SESSION['prenom'])) {
						?>
						<div  class="form-group col-xm-12 col-sm-12 col-md-6 col-lg-6">
							<label class="label label-primary">Quel est votre dernier diplôme?</label>
							<input type="text" name="diplome" class="form-control diplome" value="<?php echo $val['lastDiploma']; ?>">
						</div>
						<div  class="form-group col-xm-12 col-sm-12 col-md-6 col-lg-6">
							<label class="label label-primary">Quel est votre domaine?</label>
							<input type="text" name="domaine" class="form-control domaine" value="<?php echo $val['domain']; ?>">
						</div>


						<div class="form-group col-xm-12 col-sm-12 col-md-6 col-lg-6 gene">
							<label class="label label-primary">Nombre d'années d'éxpérience:</label>
							<span class="input-group">
								<input id="exp" type="number" name="exp" class="form-control" value="<?php echo $val['experience']; ?>">
								<span id="croix" class="input-group-addon "></span>
							</span>
						</div>

					</div>
					<div class="row">
						<div  class="form-group col-xm-12 col-sm-12 col-md-6 col-lg-6">
							<label class="label label-primary">Etes-vous véhiculé?</label>
							<div class="radio">
								<label><input  type="radio" name="vehicule" value="oui" <?php if($val['vehicule']===true) { echo 'checked="checked"'; }?> ><span class="veh">Oui</span></label>
							</div>
							<div class="radio">
								<label><input  type="radio" name="vehicule" value="non" <?php if(!$val['vehicule']===false) { echo 'checked="checked"'; }?>><span class="veh">Non</span></label>
							</div>
						</div>

					</div>
					<div class="row" id="blackcolor">
						<div class="panel panel-default">
							<div class="panel-heading">
								<span>Choisissez les qualités qui vont définissent parmis celles qui figurent ci-dessous:</span>
							</div>
							<div class="panel-body form-inline">
								<div class="checkbox col-xs-12 col-sm-6 col-md-4 col-lg-3">
									<label class="checkbox-inline">
										<input name="qualite[]" type="checkbox" value="Enthousiaste" <?php if($requeteur->isUserHasQual($_SESSION['nom'],$_SESSION['prenom'],"Enthousiaste")){echo 'checked';} ?> >
										Enthousiaste
									</label>
								</div>
								<div class="checkbox col-xs-12 col-sm-6 col-md-4 col-lg-3">
									<label class="checkbox-inline"><input name="qualite[]" type="checkbox" value="Curieux" <?php if($requeteur->isUserHasQual($_SESSION['nom'],$_SESSION['prenom'],"Curieux")){echo 'checked';} ?>> Curieux</label>
								</div>
								<div class="checkbox col-xs-12 col-sm-6 col-md-4 col-lg-3">
									<label class="checkbox-inline"><input name="qualite[]" type="checkbox" value="Sociable" <?php if($requeteur->isUserHasQual($_SESSION['nom'],$_SESSION['prenom'],"Sociable")){echo 'checked';} ?>> Sociable</label>
								</div>
								<div class="checkbox col-xs-12 col-sm-6 col-md-4 col-lg-3">
									<label class="checkbox-inline"><input name="qualite[]" type="checkbox" value="Déterminé" <?php if($requeteur->isUserHasQual($_SESSION['nom'],$_SESSION['prenom'],"Déterminé")){echo 'checked';} ?>> Déterminé</label>
								</div>
								<div class="checkbox col-xs-12 col-sm-6 col-md-4 col-lg-3">
									<label class="checkbox-inline"><input name="qualite[]" type="checkbox" value="Rigoureux" <?php if($requeteur->isUserHasQual($_SESSION['nom'],$_SESSION['prenom'],"Rigoureux")){echo 'checked';} ?>> Rigoureux</label>
								</div>
								<div class="checkbox col-xs-12 col-sm-6 col-md-4 col-lg-3">
									<label class="checkbox-inline"><input name="qualite[]" type="checkbox" value="Organisé" <?php if($requeteur->isUserHasQual($_SESSION['nom'],$_SESSION['prenom'],"Organisé")){echo 'checked';} ?>> Organisé</label>
								</div>
								<div class="checkbox col-xs-12 col-sm-6 col-md-4 col-lg-3">
									<label class="checkbox-inline"><input name="qualite[]" type="checkbox" value="Intelligent" <?php if($requeteur->isUserHasQual($_SESSION['nom'],$_SESSION['prenom'],"Intelligent")){echo 'checked';} ?>> Intelligent</label>
								</div>
							</div>
						</div>
					</div>
					<?php 
				}
				?>
				<input type="hidden" name="modif" value="true">
				<div class="row">
					<button type="submit" class="btn btn-success col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-10 col-md-2 col-lg-offset-11 col-lg-1">Valider</button>
				</div>

			</form>
		</div>
	</div>
	<?php
	?>
</div>
<?php
include 'ressourcePHP/footer.php'
?>

<script src="jquery-3.2.1.min.js"></script>
<script src="js/general.js"></script>
<script src="js/inscription.js"></script>
<script src="js/ModifierProfil.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--<script src="bootstrap/js/bootstrap.min.js"></script>-->

</body>
</html>
