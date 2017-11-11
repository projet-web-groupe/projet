<header>
	<?php 
	require_once('ressourcePHP/requeteur.class.php');
	require_once('ressourcePHP/session.php');
	?>
	<nav class="bg-img navbar navbar-fixed-top navbar-inverse hidden-xs">

		<div class="text-center">
			<div class="container-fluid ">
				<div class="row">
					<div class="navbar-header ref">
						<span class="navbar-text titre">Bye Bye Chômage</span>

					</div>

					<ul class="nav navbar-nav navbar-right droite">
						<?php 
						if(!(isInscritRh() or isConnecter()))
						{
							?>
							<li>
								<a href="inscription.php">
									<span class="glyphicon glyphicon-user"></span> s'inscrire
								</a>
							</li>
							<?php 
						}
						if(isConnecter())
						{
							echo"<li ><form method=\"post\" action=\"Accueil.php\">
							<button name=\"deco\" type=\"submit\" class=\"moda\"><span class=\"glyphicon glyphicon-log-out\"></span> Déconnexion</button>
							</form> </li>
							";
						}
						else{
							echo"<li data-toggle=\"modal\" data-target=\"#myModal\">
							<button name=\"deco\" class=\"moda\"><span class=\"glyphicon glyphicon-log-in\"></span> Se connecter</button>
							</li>
							";
						}
						?>
					</ul>
				</div>

				<div class="row">
					<ul class="nav navbar-nav" >
						<li><a  href="Accueil.php"><span class="glyphicon glyphicon-home home"></span> </a></li>
						<li class="liste"><span class="glyphicon glyphicon-th-list deroule"><span class="taille deroule"></span></span></li>
						<?php 
						if(isConnecter() && !empty($_SESSION['nom']) && !empty($_SESSION['prenom']))
						{
							echo"<li class=\"ide\"><a href=\"ModifierProfil.php\"><span class=\"glyphicon glyphicon-lock\"></span> ".$_SESSION['nom']." ".$_SESSION['prenom']."</a></li>";
						}
						?>

					</ul>
					<div class="row menu">
						<ul class="in">
							<?php 
							if(!isConnecter())
								{?>
									<li>
										<a href="offres.php">Consulter offres</a>
									</li>
									<li>
										<a href="contacterRH.php"> Contacter RH</a>
									</li>
									<?php 
								}
								else
								{
									$requeteur = new requeteur;
									if($requeteur->isRh($_SESSION['nom'],$_SESSION['prenom']) or $requeteur->isCandidat($_SESSION['nom'],$_SESSION['prenom'])){
										?>
										<li><a href="offres.php">Consulter offres</a></li>
										<li><a href="candidature.php"> Candidatures</a></li>
										<li><a href="ModifierProfil.php">Mon Profil</a></li>
										<?php 
									}
									if($requeteur->isRh($_SESSION['nom'],$_SESSION['prenom'])){
										?>
										<li><a href="creerOffre.php"> Créer Offres</a></li>
										<li><a href="rechercherCandidat.php"> Rechercher Candidat</a></li>
										<li><a href="inscription.php"> Inscrire un collègue RH</a></li>
										<?php 
									}
									if($requeteur->isCandidat($_SESSION['nom'],$_SESSION['prenom'])){
										?>
										<li><a href="contacterRH.php"> Contacter RH</a></li>
										<?php 
									}
								}
								?>
							</ul>
						</div>	
					</div>
				</div>
			</div>
		</nav>
		<nav class="bg-img navbar navbar-inverse hidden-lg hidden-md hidden-sm ">

			<div class="text-center">
				<div class="container-fluid ">
					<div class="row">
						<div class="navbar-header ref">
							<span class="navbar-text titre">Bye Bye Chômage</span>
						</div>
						<ul class="nav navbar-nav navbar-right droite">
							<li><a href="inscription.php"><span class="glyphicon glyphicon-user"></span> s'inscrire</a></li>
							<?php 
							if(isConnecter())
							{
								echo"<li ><form method=\"post\" action=\"Accueil.php\">
								<button name=\"deco\" type=\"submit\" class=\"moda\"><span class=\"glyphicon glyphicon-log-out\"></span> Déconnexion</button>
								</form> </li>
								";
							}
							else{
								echo"<li data-toggle=\"modal\" data-target=\"#myModal\">
								<button name=\"deco\" class=\"moda\"><span class=\"glyphicon glyphicon-log-in\"></span> Se connecter</button>
								</li>
								";
							}
							?>

						</ul>
					</div>
					<div class="row">
						<ul class="nav navbar-nav" >
							<li><a  href="Accueil.php"><span class="glyphicon glyphicon-home home"></span> </a></li>
							<li class="liste"><span class="glyphicon glyphicon-th-list deroule"><span class="taille deroule"></span></span></li>
							<?php 
							if(isConnecter() && !empty($_SESSION['nom']) && !empty($_SESSION['prenom']))
							{
								echo"<li class=\"ide\"><a href=\"ModifierProfil.php\"><span class=\"glyphicon glyphicon-lock\"></span> ".$_SESSION['nom']." ".$_SESSION['prenom']."</a></li>";
							}
							?>
						</ul>
						<ul class="nav navbar-nav menu-xs">

							<li><a href="offres.php">Consulter offres</a></li>
							<li><a href="candidature.php" class="active"> Candidatures</a></li>
							<li><a href="creerOffre.php"> Créer Offres</a></li>
							<li><a href="contacterRH.php"> Contacter RH</a></li>
							<li><a href="rechercherCandidat.php"> Rechercher Candidat</a></li>
						</ul>

					</div>

				</div>
			</div>
		</nav>
	</header>