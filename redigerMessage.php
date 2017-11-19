<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Rédiger</title>
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
		require_once('ressourcePHP/modal.php');
	?>
	<div class="container" id="page" >
		<div class="page-header">
			<h1>Rédiger Message</h1>
		</div>
		<?php
			$requeteur= new requeteur;
			if(isset($_POST['destinataire'])){
				$verif= $requeteur->getRequete('select count(*) as nb from personne where mail=:de');
				$verif->bindValue(':de',$_POST['destinataire']);
				$verif->execute();
				$l=$verif->fetch(PDO::FETCH_ASSOC);
				if($l['nb'] >0){
					if(isset($_POST['objet']) and isset($_POST['emetteur']) and isset($_POST['message'])){
						if(trim($_POST['message'])==""){
							echo"<h2><span class=\"label label-warning\">Un problème est survenu. Votre message est vide.</span></h2>";
						}
						else{
							$req= $requeteur->getRequete('select numRh from rh join personne on personne.id= rh.id_pers where personne.mail= :de');
							$req->bindValue(':de', $_POST['destinataire']);
							$req->execute();
							$r=$req->fetch(PDO::FETCH_ASSOC);
							$req= $requeteur->getRequete('select numCandidat from candidat join personne on personne.id= candidat.id_pers where personne.mail= :em');
							$req->bindValue(':em', $_POST['emetteur']);
							$req->execute();
							$r2=$req->fetch(PDO::FETCH_ASSOC);
							$verif=$requeteur->getRequete('select count(*) as nb from blacklist where rh= :de and candidat= :em');
							$verif->bindValue(':em',$r2['numCandidat']);
							$verif->bindValue(':de',$r['numRh']);
							$verif->execute();
							$res=$verif->fetch(PDO::FETCH_ASSOC);
							if($res['nb']==0)
							{
								$req= $requeteur->getRequete('insert into messages values(:em,:de,:ob,NOW(),:me)');
								$req->bindValue(':em',$_POST['emetteur']);
								$req->bindValue(':de',$_POST['destinataire']);
								$req->bindValue(':ob',$_POST['objet']);
								$req->bindValue(':me',$_POST['message']);
								$req->execute();
								echo"<h2><span class=\"label label-warning\">Message envoyé.</span></h2>";
							}
							else{
								echo"<h2><span class=\"label label-warning\">Impossible d'envoyer le message vous avez été blacklisté.</span></h2>";
							}
							
						}
						
					}
					else{
						echo"<h2><span class=\"label label-warning\">Un problème est survenu. Vous avez mal rempli les champs.</span></h2>";
					}
				}
				else{
					echo"<h2><span class=\"label label-warning\">Un problème est survenu. Votre destinataire n'existe pas.</span></h2>";
				}
			}
		?>
		<div class="row">
			<div class="form-group">
				<?php 
					if(isConnecter()){
						$requeteur= new requeteur;
						$req= $requeteur->getRequete('select mail from personne where id='.$_SESSION['id']);
						$req->execute();
						$l=$req->fetch(PDO::FETCH_ASSOC);
						echo"
							<form action=\"redigerMessage.php\" method=\"post\">
								<div class=\"form-group\">
								  <label class=\"label label-primary\">Destinataire:</label>
								  <input type=\"text\" class=\"form-control\" name=\"destinataire\">
								</div>
								<div class=\"form-group\">
								  <label class=\"label label-primary\">Objet:</label>
								  <input type=\"text\" class=\"form-control\" name=\"objet\">
								</div>
				 				<input type=\text\" name=\"emetteur\" value=\"".$l['mail']."\"hidden>
				 				<div class=\"form-group\">
								  <label class=\"label label-primary\">Message:</label>
									<textarea name=\"message\" rows=\"30\" cols=\"165\">
									</textarea>
								</div>
								<input type=\"submit\" class=\"btn btn-primary\" value=\"Envoyer\">
							</form>";
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
</body>


</html>