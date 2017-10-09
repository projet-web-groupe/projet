<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Postuler</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/postuler.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<body>
	<?php
	include 'ressourcePHP/header.php'
	?>
	<div class="container" id="page">

		<div id="myModal" class="modal fade" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content modal-md">
					<div>
						<div id="panel" class="container ">
							<div id="mod" class="panel panel-info">
								<div class="panel-heading">
									<div class="panel-title">Sign In</div>
								</div>     

								<div class="panel-body" >
									<form id="loginform" class="form-horizontal">
										
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

											<div class=" controls ">
												<a id="btn-login" href="#" class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-8 col-md-3 col-lg-offset-9 col-lg-2 btn btn-success">Login  </a>

											</div>
										</div>

										<div class="row">
											<div class="form-group ">
												<div class="col-md-12 control">
													<div class="form-group-end">
														Don't have an account? 
														<a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
															Sign Up Here
														</a>
													</div>
												</div>
												<div>
													<div class="col-md-12 control text-right">
														<div>
															<a href="#">Forgot password ?</a>
														</div>
													</div>
												</div>
											</div>  
										</div>  
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>


		<div class="page-header">
			<h1>Détails de l'offre</h1>
		</div>

		

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
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a lectus nisi. Morbi molestie tortor in magna lobortis, ut dapibus nisl rhoncus. Quisque consectetur vulputate risus non vulputate. Pellentesque pharetra, risus id auctor congue, eros ex euismod mauris, eu tincidunt purus mauris et purus. Donec laoreet commodo nunc auctor vestibulum. Nulla in porttitor est. Proin a tortor id tellus posuere dignissim. Nunc sodales tempus ultricies. Praesent eu lectus mattis, blandit turpis eget, laoreet nisi. Proin auctor lacinia erat, non commodo nibh porta ac. Pellentesque et mauris eget ipsum pulvinar mollis. Nunc viverra rhoncus lorem, at pharetra tortor auctor a. Aenean feugiat arcu nec enim tempus, vitae varius tortor gravida. Suspendisse tincidunt est lectus, a pharetra nunc tincidunt id.

					Suspendisse feugiat pretium convallis. Donec aliquet libero et dolor rutrum, hendrerit euismod neque maximus. In rutrum convallis eros, vel volutpat tellus bibendum nec. Pellentesque sed metus vel metus pretium semper id in purus. Ut blandit convallis dolor nec malesuada. Phasellus et felis orci. Sed a elit eu neque facilisis rhoncus. Donec malesuada diam velit.
					
				</div>
			</div>
			<div class="panel panel-primary">
				<div class="panel-heading sec">
					<span class="plus glyphicon glyphicon-menu-down"></span>
					Profil
				</div>
				<div class="panel-body sb">
					<ul >
						<li>Bac +5 Informatique</li>
						<li>HTML 5/css 3</li>
						<li>Angular</li>
						<li>Enthousiate et dynamique</li>
					</ul>
				</div>
			</div>
			<div class="container text-center">
				<button type="button" class="btn btn-success">Postuler</button>
				<a href="offres.html" class="btn btn-primary" role="button">Retour</a>
			</div>
		</div>
	</div>
	<?php
	include 'ressourcePHP/footer.php'
	?>
	<script src="jquery-3.2.1.min.js"></script>
	<script src="js/general.js"></script>
	<script src="js/postuler.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!--<script src="bootstrap/js/bootstrap.min.js"></script>-->
</body>


</html>
