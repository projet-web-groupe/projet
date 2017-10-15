<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title> Accueil</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/Accueil.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">

	<style>
	div#login-alert{
		display: none;
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
		padding-right:0;
		padding-left:0;
	}
	#mod{
		margin-bottom:0px;
	}
	.moda{
		display:block;
		padding-top: 15px;
		cursor:pointer;
		color: #9d9d9d;
	}
	.moda:hover{
		color:white;
	}

	#footer
	{
		margin-bottom:0px;

	}
	.droite
	{
		margin-right:0px;
	}
	#pa
	{
		margin-top: 120px;
	}

</style>
</head>

<body>
	<?php
	include 'ressourcePHP/header.php'
	?>
	<div class="container" id="page">
		<div class="page-header">
			<h1>Bienvenue</h1>
		</div>
		<div class="panel panel-primary">
			<div class="panel-heading">
				Activités
			</div>

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


			<div class="panel-body">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer scelerisque accumsan turpis a egestas. Suspendisse scelerisque fermentum est, et tincidunt risus. Aliquam at metus malesuada, mattis magna eu, hendrerit diam. Proin eu tellus semper, viverra tellus at, bibendum ipsum. Pellentesque sed volutpat metus. Aenean hendrerit risus a augue varius mattis. Donec vel felis pellentesque, pellentesque nibh et, dapibus libero. Etiam faucibus massa et ligula mattis, a rutrum leo mattis.

				Nunc elementum ante risus, eget hendrerit mi scelerisque in. Proin tempus mi nec vestibulum tristique. Donec a nunc sed velit facilisis pharetra. Aenean eu congue dolor. Curabitur ornare mauris sit amet nulla lacinia pulvinar. Nulla sapien velit, luctus non feugiat nec, hendrerit imperdiet nunc. Nullam in finibus dolor. Integer dictum feugiat porta.

				Vivamus quis luctus tortor. Proin quis purus et enim vulputate accumsan sed id libero. Phasellus nec hendrerit velit. Nulla condimentum sollicitudin mi at blandit. Nunc a porta ipsum. Praesent non massa urna. Nam molestie erat at diam efficitur, quis ultrices erat sollicitudin. Cras quis luctus nisl, id rutrum justo.

				Curabitur commodo convallis enim nec fermentum. Curabitur imperdiet urna auctor orci congue, nec venenatis odio posuere. Donec velit est, efficitur convallis egestas sit amet, tristique sed ligula. Ut facilisis vitae erat tristique sollicitudin. Suspendisse pellentesque diam ac massa congue mattis. Sed quis nibh est. Nullam cursus pellentesque urna eget congue. Fusce aliquet lorem nisl, suscipit dictum mauris ultrices et. In nisl nunc, mollis non scelerisque lobortis, tincidunt ut lectus. Nunc tempor vel neque eget eleifend. Morbi id sem tortor. Phasellus at enim sodales risus ultrices fringilla. Morbi maximus vehicula ullamcorper. Curabitur nunc arcu, posuere vitae est ac, eleifend tincidunt ex. Integer orci lacus, mattis vitae rhoncus ultrices, suscipit et metus.

				Pellentesque nec varius dui. Donec laoreet felis vitae dictum sagittis. Cras eros purus, suscipit non erat ac, finibus sagittis justo. Donec non risus a est iaculis commodo. Donec libero tellus, aliquet id elit ac, aliquam tincidunt tellus. Fusce laoreet non ante non efficitur. Mauris iaculis, mi ac luctus maximus, ante elit tristique nisi, et elementum nibh mi a velit. Integer cursus diam ut ligula condimentum porttitor.
			</div>

		</div>

	</div>

	<?php
	include 'ressourcePHP/footer.php'
	?>

	<script src="jquery-3.2.1.min.js"></script>
	<script src="js/general.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!--<script src="bootstrap/js/bootstrap.min.js"></script>-->
</body>


</html>
