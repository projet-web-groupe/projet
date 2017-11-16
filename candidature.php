<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Candidature</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/general.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<body>
	<?php include 'ressourcePHP/session.php' ?>
	<?php include 'ressourcePHP/requeteur.class.php' ?>
	<?php
	require_once('ressourcePHP/header.php');
	?>
	
	<div class="container" id="page" >
		<div class="page-header">
			<h1>Candidatures</h1>
		</div>
		
		<?php
		include 'ressourcePHP/modal.php'
		?>
		<?php
			if(!(isset($_SESSION['connecte'])) || $_SESSION['connecte']!= true){
				echo"<h2><span class=\"label label-warning\">Vous n'êtes pas connecté. Veullez vous connecter pour accéder au contenu.</span></h2>";
			}
			else{
				echo"
				<div class=\"row\">
					<div class=\"table-responsive \">";
						
							echo" <p id=\"sessionNom\" hidden>".$_SESSION['nom']."</p>";
							echo" <p id=\"sessionPrenom\" hidden>".$_SESSION['prenom']."</p>";
						echo"
						<table class=\"table table-bordered \" id=\"listeOffre\">
							";
								$requeteur= new requeteur;
								if( $requeteur->isCandidat($_SESSION['nom'],$_SESSION['prenom'])){
									
									$req= $requeteur->getRequete('select count(*) as nb from offre where approuve=1 and id_cand = (select numCandidat from candidat where id_pers= (select id from personne where  nom="'.$_SESSION['nom'].'" and prenom="'.$_SESSION['prenom'].'"))');
									$req->execute();
									$nombre= $req->fetch(PDO::FETCH_ASSOC);
									//var_dump($nombre['nb']);
									echo"<tr class=\"bg-primary\">
										<th class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\">Réf de l'offre</th>
										<th class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\">Lien de l'offre</th>
										<th class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\" >Accepter</th>
										<th class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\">Refuser</th>
									</tr>";
									if($nombre['nb'] ==1)
									{
										$req= $requeteur->getRequete('select ref, accepte from offre where approuve=1 and id_cand = (select numCandidat from candidat where id_pers= (select id from personne where nom="'.$_SESSION['nom'].'" and prenom="'.$_SESSION['prenom'].'"))');
										$req->execute();
										$l=$req->fetch(PDO::FETCH_ASSOC);
										if($l['accepte']==1)
										{
											echo "<tr>

												<td class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center ref\">".$l['ref']."</td>
												<td class=\"col-lg-1 col-md-1 col-sm-3 col-xs-3 text-center\"><a href=\"postuler.php?id=".htmlspecialchars($l['ref'])."\"><span class=\"glyphicon glyphicon-eye-open\"> Voir</span></a></td>
												<td class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\">déjà accepté</td>
												<td class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center btn-ref\">trop tard</td>
											</tr>";
										}
										else{
											echo "<tr >

													<td class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center ref\">".$l['ref']."</td>
													<td class=\"col-lg-1 col-md-1 col-sm-3 col-xs-3 text-center\"><a href=\"postuler.php?id=".htmlspecialchars($l['ref'])."\"><span class=\"glyphicon glyphicon-eye-open\"> Voir</span></a></td>
													<td class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center btn-acc\"><button type=\"button\" class=\"btn btn-success\">Accepter</button></td>
													<td class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center btn-ref\"><button type=\"button\" class=\"btn btn-danger\">Refuser</button></td>
												</tr>";
										}
										
									}
									else{
										$req= $requeteur->getRequete('select ref from offre where approuve=1 and id_cand = (select numCandidat from candidat where id_pers= (select id from personne where nom="'.$_SESSION['nom'].'" and prenom="'.$_SESSION['prenom'].'"))');	
										$req->execute();
										while($l=$req->fetch(PDO::FETCH_ASSOC)){
											/*var_dump($i);
											$r= $requeteur->getRequete('select description, label, profil from description where ref="'.$l['ref'].'"');
											$r->execute();
											$r2= $r->fetch(PDO::FETCH_ASSOC);*/
											echo "<tr >

													<td class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center ref\">".$l['ref']."</td>
													<td class=\"col-lg-1 col-md-1 col-sm-3 col-xs-3 text-center\"><a href=\"postuler.php?id=".htmlspecialchars($l['ref'])."\"><span class=\"glyphicon glyphicon-eye-open\"> Voir</span></a></td>
													<td class=\"col-lg-1 col-md-1 col-sm-3 col-xs-3 text-center\"><a href=\"ModifierProfil.php\"><span class=\"glyphicon glyphicon-eye-open\"> Voir</span></a></td>
													<td class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center btn-acc\"><button type=\"button\" class=\"btn btn-success\">Accepter</button></td>
													<td class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center btn-ref\"><button type=\"button\" class=\"btn btn-danger\">Refuser</button></td>
												</tr>";
										}
									}
									
								}
								elseif($requeteur->isRh($_SESSION['nom'],$_SESSION['prenom'])){
									$requeteur= new requeteur;
									$req= $requeteur->getRequete('select ref, id_cand from offre where approuve=0');
									$req->execute();
									echo"<tr class=\"bg-primary\">
											<th class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\">Réf de l'offre</th>
											<th class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\">Lien de l'offre</th>
											<th class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\">Profil</th>
											<th class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\" >Accepter</th>
											<th class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\">Refuser</th>
										</tr>";
									while($l=$req->fetch(PDO::FETCH_ASSOC)){
										echo "<tr >
													<td class=\"numCandRh\" hidden>".$l['id_cand']."</td>
													<td class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center ref-rh\">".$l['ref']."</td>
													
													<td class=\"col-lg-1 col-md-1 col-sm-3 col-xs-3 text-center\"><a href=\"postuler.php?id=".htmlspecialchars($l['ref'])."\"><span class=\"glyphicon glyphicon-eye-open\"> Voir</span></a></td>
													<td class=\"col-lg-1 col-md-1 col-sm-3 col-xs-3 text-center\"><a href=\"ModifierProfil.php\"><span class=\"glyphicon glyphicon-eye-open\"> Voir</span></a></td>
													<td class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center btn-acc-rh\"><button type=\"button\" class=\"btn btn-success\">Accepter</button></td>
													<td class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center btn-ref-rh\"><button type=\"button\" class=\"btn btn-danger\">Refuser</button></td>
												</tr>";
									}
									$req= $requeteur->getRequete('select ref, id_cand from offre where approuve=1 and accepte=0');
									$req->execute();
									while($l=$req->fetch(PDO::FETCH_ASSOC)){
										echo "<tr >
													<td class=\"numCandRh\" hidden>".$l['id_cand']."</td>
													<td class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center ref-rh\">".$l['ref']."</td>
													
													<td class=\"col-lg-1 col-md-1 col-sm-3 col-xs-3 text-center\"><a href=\"postuler.php?id=".htmlspecialchars($l['ref'])."\"><span class=\"glyphicon glyphicon-eye-open\"> Voir</span></a></td>
													<td class=\"col-lg-1 col-md-1 col-sm-3 col-xs-3 text-center\"><a href=\"ModifierProfil.php\"><span class=\"glyphicon glyphicon-eye-open\"> Voir</span></a></td>
													<td class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center btn-acc-rh\">pas encore accepté par le candidat</td>
													<td class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center btn-ref-rh\"> trop tard déjà approuvé</td>
												</tr>";
									}
									$req= $requeteur->getRequete('select offre.ref, id_cand, personne.id from offre join description on offre.ref= description.ref join candidat on candidat.numCandidat= offre.id_cand join personne on candidat.id_pers= personne.id where approuve=1 and accepte=1');
									$req->execute();
									while($l=$req->fetch(PDO::FETCH_ASSOC)){
										echo "<tr >
													<td class=\"numCandRh\" hidden>".$l['id_cand']."</td>
													<td class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center ref-rh\">".$l['ref']."</td>
													<td class=\"col-lg-1 col-md-1 col-sm-3 col-xs-3 text-center\"><a href=\"postuler.php?id=".htmlspecialchars($l['ref'])."\"><span class=\"glyphicon glyphicon-eye-open\"> Voir</span></a></td>
													<td class=\"col-lg-1 col-md-1 col-sm-3 col-xs-3 text-center\">
														<form action= \"ModifierProfil.php\" method=\"post\">
															<span class=\"glyphicon glyphicon-eye-open\"><input type=\"submit\" value=\"Voir\"></span></td>
														</form>
													<td class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center btn-acc-rh\">accepté par le candidat</td>
													<td class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center btn-ref-rh\">déjà approuvé</td>
												</tr>";
									}
								}
							echo"	
							</table>
						</div>
					</div>
				</div>";
			}

		?>
		
	<?php
	include 'ressourcePHP/footer.php'
	?>
	<script src="jquery-3.2.1.min.js"></script>
	<script src="js/general.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/candidature.js"></script>
	<!--<script src="bootstrap/js/bootstrap.min.js"></script>-->
</body>
</html>
