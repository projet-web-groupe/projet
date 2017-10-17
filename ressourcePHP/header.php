<header>
	
		<nav class="bg-img navbar navbar-fixed-top navbar-inverse hidden-xs">
			
			<div class="text-center">
				<div class="container-fluid ">
					<div class="row">
						<div class="navbar-header ref">
							<span class="navbar-text titre">Bye Bye Chômage</span>
						</div>

						<ul class="nav navbar-nav navbar-right droite">
							<li><a href="inscription.php"><span class="glyphicon glyphicon-user"></span> s'inscrire</a></li>
							<?php 
								if(!empty($_SESSION['connecte']) && $_SESSION['connecte']==true)
								{
									echo"<form method=\"get\" action=\"accueil.php\">
										<button  name=\"deco\" type=\"submit\" class=\"btn btn-success\">Déconnexion</button>
										</form> 
									";
								}
								else{
									echo"<li class=\"moda\" data-toggle=\"modal\" data-target=\"#myModal\"><span class=\"glyphicon glyphicon-log-in\"></span> se connecter</li>";
								}
							?>
						</ul>
					</div>

					<div class="row">
						<?php 
							if(!empty($_SESSION['nom']) && !empty($_SESSION['prenom']))
							{
								echo"<span class=\"ide\"> Bienvenue ".$_SESSION['nom']." ".$_SESSION['prenom']."</span>";
							}
						?>
						<ul class="nav navbar-nav" >
							<li><a  href="Accueil.php"><span class="glyphicon glyphicon-home home"></span> </a></li>
							<li class="liste"><span class="glyphicon glyphicon-th-list deroule"><span class="taille deroule"></span></span></li>

						</ul>
						<div class="row menu">
							<ul class="in">
								<li ><a href="offres.php">Consulter offres</a></li>
								<li><a href="candidature.php"> Candidatures</a></li>
								<li><a href="creerOffre.php"> Créer Offres</a></li>
								<li><a href="contacterRH.php"> Contacter RH</a></li>
								<li><a href="rechercherCandidat.php"> Rechercher Candidat</a></li>
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
								if(!empty($_SESSION['connecte']) && $_SESSION['connecte']==true)
								{
									echo"<form method=\"get\" action=\"accueil.php\">
										<button type=\"submit\" class=\"btn btn-success\">Déconnexion</button>
										</form> 
									";
								}
								else{
									echo"<li class=\"moda\" data-toggle=\"modal\" data-target=\"#myModal\"><span class=\"glyphicon glyphicon-log-in\"></span> se connecter</li>";
								}
							?>
							
							
						</ul>
					</div>
					<div class="row">
						<?php 
							if(!empty($_SESSION['nom']) && !empty($_SESSION['prenom']))
							{
								echo"<span class=\"ide\"> Bienvenue ".$_SESSION['nom']." ".$_SESSION['prenom']."</span>";
							}
						?>
						<ul class="nav navbar-nav" >
							<li><a  href="Accueil.php"><span class="glyphicon glyphicon-home home"></span> </a></li>
							<li class="liste"><span class="glyphicon glyphicon-th-list deroule"><span class="taille deroule"></span></span></li>
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