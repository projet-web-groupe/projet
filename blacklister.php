<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Blacklist</title>
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
		require_once('ressourcePHP/session.php');
		require_once('ressourcePHP/requeteur.class.php');
		require_once('ressourcePHP/header.php');
	?>
	<div class="container" id="page" >
		<div class="page-header">
			<h1>Mettre sur blacklist</h1>
		</div>
		<?php
			$requeteur= new requeteur;
			if(isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['mail'])){
				$req=$requeteur->getRequete('select numCandidat from candidat where id_pers=(select id from personne where nom=:n and prenom= :p and mail= :m)');
				$req->bindValue(':n',$_POST['nom']);
				$req->bindValue(':p',$_POST['prenom']);
				$req->bindValue(':m',$_POST['mail']);
				$req->execute();
				$l=$req->fetch(PDO::FETCH_ASSOC);
				$req2=$requeteur->getRequete('select count(*) as nb from candidat where id_pers=(select id from personne where nom=:n and prenom= :p and mail= :m)');
				$req2->bindValue(':n',$_POST['nom']);
				$req2->bindValue(':p',$_POST['prenom']);
				$req2->bindValue(':m',$_POST['mail']);
				$req2->execute();
				$l2=$req2->fetch(PDO::FETCH_ASSOC);
				if($l2['nb']>0){
					$req=$requeteur->getRequete('select numRh from rh where id_pers= :id');
					$req->bindValue(':id',$_SESSION['id']);
					$req->execute();
					$l3=$req->fetch(PDO::FETCH_ASSOC);
					$req2=$requeteur->getRequete('select count(*) as nb from rh where id_pers= :id');
					$req2->bindValue(':id',$_SESSION['id']);
					$req2->execute();
					$l4=$req2->fetch(PDO::FETCH_ASSOC);
					if($l4['nb']>0){
						$verif=$requeteur->getRequete('select count(*) as nb from blacklist where rh= :rd and candidat= :c');
						$verif->bindValue(':rd',$l3['numRh']);
						$verif->bindValue(':c',$l['numCandidat']);
						$verif->execute();
						$n=$verif->fetch(PDO::FETCH_ASSOC);
						if($n['nb'] ==0){
							$req=$requeteur->getRequete('insert into blacklist values(:rd,:c)');
							$req->bindValue(':rd',$l3['numRh']);
							$req->bindValue(':c',$l['numCandidat']);
							$req->execute();
							echo"<h2><span class=\"label label-warning\">Le candidat a été blacklisé.</span></h2>";
						}
						else{
							echo"<h2><span class=\"label label-warning\">Le candidat a déjà été blacklisé.</span></h2>";
						}
						
					}
					else{
						echo"<h2><span class=\"label label-warning\">Votre num RH est incorrect.</span></h2>";
					}
				}
				else{
					echo"<h2><span class=\"label label-warning\">Le candidat n'existe pas.</span></h2>";
				}
			}
		?>
		<div class="row">
			<div class="form-group">
				<?php 
					$requeteur= new requeteur;
					if($requeteur->isRh($_SESSION['nom'],$_SESSION['prenom'])){
						echo"
							<form action=\"blacklister.php\" method=\"post\">
								<div class=\"form-group\">
								  <label class=\"label label-primary\">Nom du candidat à blacklister:</label>
								  <input type=\"text\" class=\"form-control\" name=\"nom\">
								</div>
								<div class=\"form-group\">
								  <label class=\"label label-primary\">Prenom du candidat à blacklister:</label>
								  <input type=\"text\" class=\"form-control\" name=\"prenom\">
								</div>
								<div class=\"form-group\">
								  <label class=\"label label-primary\">Mail du candidat à blacklister:</label>
								  <input type=\"text\" class=\"form-control\" name=\"mail\">
								</div>
								<input type=\"submit\" class=\"btn btn-primary\" value=\"blacklister\">
							</form>
						";

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