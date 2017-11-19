<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Postuler</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/general.css">
	<link rel="stylesheet" href="css/postuler.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<body>
	<?php 
	require_once('ressourcePHP/session.php');
	require_once('ressourcePHP/requeteur.class.php');
	require_once('ressourcePHP/requeteur.class.php');
	require_once('ressourcePHP/header.php');
	?>
	
	<div class="container" id="page">

		<?php
		include 'ressourcePHP/modal.php'
		?>

		<div class="page-header">
			<h1>Détails de l'offre</h1>
		</div>


		<?php 
		$requeteur= new requeteur;
		$req= $requeteur->getRequete('SELECT description, profil, id_cand from description natural join offre join candidat on offre.id_cand= candidat.numCandidat where ref= :id and candidat.id_pers="'.$_SESSION['id'].'"');
		$req->bindValue(':id', $_POST['id']);
		$req->execute();
		$val= $req->fetch();
		?>
		<div class="container-fluid">
			<div class="panel panel-primary">
				<div class="panel-heading sec">
					<span class="plus glyphicon glyphicon-menu-down"></span>
					Entreprise
				</div>
				<div class="panel-body sb">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a lectus nisi. Morbi molestie tortor in magna lobortis, ut dapibus nisl rhoncus. Quisque consectetur vulputate risus non vulputate. Pellentesque pharetra, risus id auctor congue, eros ex euismod mauris, eu tincidunt purus mauris et purus. Donec laoreet commodo nunc auctor vestibulum. Nulla in porttitor est. Proin a tortor id tellus posuere dignissim. Nunc sodales tempus ultricies. Praesent eu lectus mattis, blandit turpis eget, laoreet nisi. Proin auctor lacinia erat, non commodo nibh porta ac. Pellentesque et mauris eget ipsum pulvinar mollis. Nunc viverra rhoncus lorem, at pharetra tortor auctor a. Aenean feugiat arcu nec enim tempus, vitae varius tortor gravida. Suspendisse tincidunt est lectus, a pharetra nunc tincidunt id.

					Suspendisse feugiat pretium convallis. Donec aliquet libero et dolor rutrum, hendrerit euismod neque maximus. In rutrum convallis eros, vel volutpat tellus bibendum nec. Pellentesque sed metus vel metus pretium semper id in purus. Ut blandit convallis dolor nec malesuada. Phasellus et felis orci. Sed a elit eu neque facilisis rhoncus. Donec malesuada diam velit.

				</div>
			</div>
			<div class="panel panel-primary">
				<div class="panel-heading sec">
					<span class="plus glyphicon glyphicon-menu-down"></span>
					Poste
				</div>
				<div class="panel-body sb">
					<?php
					echo"<span>".$val['description']."</span>";
					?>

				</div>
			</div>
			<div class="panel panel-primary">
				<div class="panel-heading sec">
					<span class="plus glyphicon glyphicon-menu-down"></span>
					Profil
				</div>
				<div class="panel-body sb">
					<?php
					echo"<span>".$val['profil'];
					?>

				</div>
			</div>
			<div class="container text-center">
				<?php 
					$_requeteur = new requeteur;
					$verif= $_requeteur->getRequete('SELECT count(*) as nb from offre where ref= :ref and id_cand= :cand');
					$verif->bindValue(':ref', $_POST['id']);
					$verif->bindValue(':cand', $val['id_cand']);
					$verif->execute();
					$res= $verif->fetch();
					if($res['nb']==0)
					{
						if(isConnecter() && isset($_SESSION['nom']) && isset($_SESSION['prenom']) && $_requeteur->isCandidat($_SESSION['nom'],$_SESSION['prenom']))
						{
							?>
							<form action= "accueil.php" method="post">
								<?php
									echo"
									<input  type=\"text\" name=\"max\" value=\"".$val['id_cand']."\"hidden>
									<input  type=\"text\" name=\"ref\" value=\"".$_POST['id']."\"hidden>";
								?>
								<button type="submit" class="btn btn-success">Postuler</button>
								<a href="offres.php" class="btn btn-primary" role="button">Retour</a>
							</form>
							
							<?php 
						} 
					}
					else{
						echo"<h4><span class=\"label label-warning\">Vous avez déjà postulé à cette offre.</span></h4>
						<a href=\"offres.php\" class=\"btn btn-primary\" role=\"button\">Retour</a>";
					}
					
				?>
				
			</div>
		</div>
	</div>
	<?php
	require_once('ressourcePHP/footer.php');
	?>
	<script src="jquery-3.2.1.min.js"></script>
	<script src="js/general.js"></script>
	<script src="js/postuler.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!--<script src="bootstrap/js/bootstrap.min.js"></script>-->
</body>


</html>
