<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Inscription</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/inscription.css">
	<link rel="stylesheet" href="css/general.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<body>
	<?php include 'ressourcePHP/session.php' ?>
	<?php
		include 'ressourcePHP/header.php';
	?>

	<?php
		
		if(isset($_GET['nom']) and isset($_GET['prenom']) and isset($_GET['login']) and isset($_GET['mdp']) and isset($_GET['genre']) and isset($_GET['date']) and isset($_GET['diplome']) and isset($_GET['exp']) and isset($_GET['mail']) and isset($_GET['vehicule']) and isset($_GET['qualite']) and (trim($_GET['nom']!='')) and (trim($_GET['prenom']!='')) and (trim($_GET['login']!='')) and (trim($_GET['mdp']!='')) and (trim($_GET['genre']!='')) and (trim($_GET['date']!='')) and (trim($_GET['diplome']!='') )and (trim($_GET['exp']!='')) and (trim($_GET['mail']!='')) and (trim($_GET['vehicule']!='')) and (trim($_GET['qualite']!='')))
		{
			try{


				$db= new PDO('mysql:host=localhost;dbname=web','root','');
				$db->query('SET NAMES utf8');
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$r=$db->prepare('SELECT count(*) as nbPerso from personne');
				$r->execute();
				$val=$r->fetch();
				echo "test!!!!";
				$verif= $db->prepare('SELECT nom, prenom, dateNaissance, login, mail from personne where nom= :nom, prenom= :prenom, dateNaissance= :dateNaissance, login= :login, mail= :mail ');

				$verif->bindValue(':nom', $_GET['nom']);
				$verif->bindValue(':prenom', $_GET['prenom']);
				$verif->bindValue(':dateNaissance',$_GET['date']);
				$verif->bindValue(':login', $_GET['login']);
				$verif->bindValue(':mail', $_GET['mail']);
				echo "test2!!!!";
				$verif->execute();
				echo "test3!!!!";
				$vtab= $verif->fetch();
				if(empty($vtab))
				{
					$verif=$db->prepare('INSERT INTO personne(id, nom, prenom, dateNaissance, sexe, login, mdp, mail) VALUES(:id,:nom,:prenom,:dateNaissance,:sexe,:login,:mdp,:mail)');
					$req->bindValue(':id', $val['nbPerso']+1);
					$req->bindValue(':nom', $_GET['nom']);
					$req->bindValue(':prenom', $_GET['prenom']);
					$req->bindValue(':dateNaissance',$_GET['date']);
					$req->bindValue(':sexe',$_GET['genre']);
					$req->bindValue(':login', $_GET['login']);
					$req->bindValue(':mdp', $_GET['mdp']);
					$req->bindValue(':mail', $_GET['mail']);
					$req->execute();
				}
				else{
					echo "deja present!!!!";
				}
				

			}
			catch(PDOException $e){
				die('<p> La connexion a échoué. Erreur[' .$e->getCode().'] : '.$e->getMessage().'</p>');
			}
		}
		else{
			include 'ressourcePHP/inscriptionForm.php';
		}
		
	?>
 
	<div class="container " id="page">
		<div class="page-header">
			<h1>Inscrivez-vous!</h1>
		</div>

		<?php
		include 'ressourcePHP/modal.php'
		?>

		<div id="form">
			<form id="insc" method="get" action="accueil.php">
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
							<input type="text" id="mdp" name="mdp" class="form-control" placeholder="choisissez un mot de passe">
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

								<input type="date" name="date" name="naissance" class="form-control">
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
