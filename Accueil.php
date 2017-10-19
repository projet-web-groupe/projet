<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title> Accueil</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/general.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<body>
	
	<?php
	require_once('ressourcePHP/session.php'); 
	require_once('ressourcePHP/requeteur.class.php');

	if(isset($_GET['deco']))
	{
		session_destroy();
		session_start();
	}

	if(isset($_GET['login']) && isset($_GET['mdp']))
	{
		$_requeteur = new requeteur;
		$requete = $_requeteur->getRequete('SELECT nom, prenom FROM personne where login =:log and mdp =:md'); //equiv a prepare()
		$requete->bindValue(':log', $_POST['login']);
		$requete->bindValue(':md', $_POST['mdp']);
		$requete->execute();
		$tab= $requete->fetch(PDO::FETCH_ASSOC);
		if(empty($tab))
		{
			echo "!!!!!!!!!!!!!erreur !!!!!!!!!!!!!!!!!!!! <br><br>";
		}

		$_SESSION['nom'] = htmlspecialchars($tab['nom']);
		$_SESSION['prenom'] = htmlspecialchars($tab['prenom']);
		$_SESSION['connecte'] = true;
	}

	require_once('ressourcePHP/header.php');
	?>
	
	<div class="container" id="page">
		<div class="page-header">
			<h1>Bienvenue</h1>
		</div>
		<div class="panel panel-primary">
			<div class="panel-heading">
				Activités
			</div>

			<?php require_once('ressourcePHP/modal.php'); ?>

			<div class="panel-body">
				
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer scelerisque accumsan turpis a egestas. Suspendisse scelerisque fermentum est, et tincidunt risus. Aliquam at metus malesuada, mattis magna eu, hendrerit diam. Proin eu tellus semper, viverra tellus at, bibendum ipsum. Pellentesque sed volutpat metus. Aenean hendrerit risus a augue varius mattis. Donec vel felis pellentesque, pellentesque nibh et, dapibus libero. Etiam faucibus massa et ligula mattis, a rutrum leo mattis.

				Nunc elementum ante risus, eget hendrerit mi scelerisque in. Proin tempus mi nec vestibulum tristique. Donec a nunc sed velit facilisis pharetra. Aenean eu congue dolor. Curabitur ornare mauris sit amet nulla lacinia pulvinar. Nulla sapien velit, luctus non feugiat nec, hendrerit imperdiet nunc. Nullam in finibus dolor. Integer dictum feugiat porta.

				Vivamus quis luctus tortor. Proin quis purus et enim vulputate accumsan sed id libero. Phasellus nec hendrerit velit. Nulla condimentum sollicitudin mi at blandit. Nunc a porta ipsum. Praesent non massa urna. Nam molestie erat at diam efficitur, quis ultrices erat sollicitudin. Cras quis luctus nisl, id rutrum justo.

				Curabitur commodo convallis enim nec fermentum. Curabitur imperdiet urna auctor orci congue, nec venenatis odio posuere. Donec velit est, efficitur convallis egestas sit amet, tristique sed ligula. Ut facilisis vitae erat tristique sollicitudin. Suspendisse pellentesque diam ac massa congue mattis. Sed quis nibh est. Nullam cursus pellentesque urna eget congue. Fusce aliquet lorem nisl, suscipit dictum mauris ultrices et. In nisl nunc, mollis non scelerisque lobortis, tincidunt ut lectus. Nunc tempor vel neque eget eleifend. Morbi id sem tortor. Phasellus at enim sodales risus ultrices fringilla. Morbi maximus vehicula ullamcorper. Curabitur nunc arcu, posuere vitae est ac, eleifend tincidunt ex. Integer orci lacus, mattis vitae rhoncus ultrices, suscipit et metus.

				Pellentesque nec varius dui. Donec laoreet felis vitae dictum sagittis. Cras eros purus, suscipit non erat ac, finibus sagittis justo. Donec non risus a est iaculis commodo. Donec libero tellus, aliquet id elit ac, aliquam tincidunt tellus. Fusce laoreet non ante non efficitur. Mauris iaculis, mi ac luctus maximus, ante elit tristique nisi, et elementum nibh mi a velit. Integer cursus diam ut ligula condimentum porttitor.
			</div>

		</div>

	</div>

	<?php require_once('ressourcePHP/footer.php'); ?>

	<script src="jquery-3.2.1.min.js"></script>
	<script src="js/general.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!--<script src="bootstrap/js/bootstrap.min.js"></script>-->
</body>


</html>
