<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Page test</title>
		<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="css/footer.css">
		<script src="jquery-3.2.1.min.js"></script>
		<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
	</head>
	<style type="text/css">
		#footer {
			bottom: 0;
		}
		div#login-alert{
			display: none;
		}
		.panel-body{
			padding-top: 30px;
		}
		.input-group {
			margin-bottom: 25px;
		}
		.form-group-end{
			border-top: 1px solid#888;
			padding-top:15px;
			font-size:85%;
		}

		#panel {
			max-width: 600px;
		}

		.bg-img {
			background-image: url("dark-triangles.png");
			background-repeat: repeat;
		}
	</style>
	<body>
		<header>
			<nav class="bg-img navbar navbar-inverse ">
			
				<div class="text-center">
					<div class="container-fluid">
						<div class="row">
							<div class="navbar-header ">
							  <span class="navbar-text" id="titre">Bye Bye Chômage</span>
							</div>
							<ul class="nav navbar-nav col-md-5">
							  <li><a href="inscription.html"><span class="glyphicon glyphicon-user"></span> s'inscrire</a></li>
							  <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> se connecter</a></li>
							</ul>
						</div>
						<div class="row">
							<ul class="nav navbar-nav col-lg-8 ">
								<li><a  href="Accueil.html"><span class="glyphicon glyphicon-home"></span> </a></li>
								<li ><a href="offres.html">Consulter offres</a></li>
								<li><a href="candidature.html" class="active"> Candidatures</a></li>
								<li><a href="creerOffre.html"> Créer Offres</a></li>
								<li><a href="contacterRH.html"> Contacter RH</a></li>
								<li><a href="rechercherCandidat.html"> Rechercher Candidat</a></li>
							</ul>
						</div>	
					</div>
				</div>
			</nav>
		</header>
		<div id="panel" class="container ">
			<div class="panel panel-info">
				<div class="panel-heading">
                   <div class="panel-title">Sign In</div>
                </div>     
                    <div class="panel-body" >
                        <form id="loginform" class="form-horizontal" role="form">        
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">                                        
                            </div>
                                
                            <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                    </div>
                                    

                                
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                      </div>
                                    </div>


                                <div  class="form-group ">
                                    <!-- Button -->

                                    <div class=" controls">
                                      <a id="btn-login" href="#" class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-8 col-md-3 col-lg-offset-9 col-lg-2 btn btn-success">Login  </a>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div class="form-group-end">
                                            Don't have an account! 
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Sign Up Here
                                        </a>
                                        </div>
                                    </div>
                                    <div class="col-md-12 control text-right">
                                        <div>
                                            <a href="#">Forgot password ?</a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     



                        </div>                     
                    </div>
			</div>
		</div>
		</div>
		<footer>
			<div class="text-center bg-img navbar-fixed-bottom row-fluid navbar navbar-inverse hidden-xs footer">
						
				<div class=" container " >
					
					<div class="row test">
						<div class="col-lg-4" >
							<span><a class="navbar-brand" href="historique.html">Qui sommes-nous?</a></span>
						</div>
						<div class="col-lg-5" >
							<span class="navbar-text">ByeByeChômage,INC. Tous droits réservés</span>
						</div>
						<div class="text-center col-lg-3 pull-right" >
							<a class="navbar-text" href="https://www.facebook.com"><i class="fa fa-facebook-square fb"></i></a>
							<a class="navbar-text" href="https://www.twitter.com"><i class="fa fa-twitter-square tweet"></i></a>
							<a class="navbar-text" href="https://www.instagram.com"><i class="fa fa-instagram insta"></i></a>	
						</div>
						
					</div>
				</div>
			</div>
			<div class="bg-img  row-fluid navbar navbar-inverse hidden-lg hidden-md hidden-sm footer">
						
				<div class="container" >
					
					<div class="row test">
						<div class="col-md-12" >
							<span><a class="text-center navbar-brand" href="historique.html">Qui sommes-nous?</a></span>
						</div>
						<div class="brand-padding col-md-5" >
							<span class="inc navbar-text">ByeByeChômage,INC. Tous droits réservés</span>
						</div>
						<div class="text-right col-md-4" >
							<a class="navbar-text" href="https://www.facebook.com"><i class="fa fa-facebook-square fb"></i></a>
							<a class="navbar-text" href="https://www.twitter.com"><i class="fa fa-twitter-square tweet"></i></a>
							<a class="navbar-text" href="https://www.instagram.com"><i class="fa fa-instagram insta"></i></a>	
						</div>
						
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>
