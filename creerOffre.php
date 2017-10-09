<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Créer votre offre</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
	<style>
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
		margin-top: 100px;
	}

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

</style>
</head>

<body>
	<?php
	include 'ressourcePHP/header.php'
	?>
	<div class="container" id="pa">
		<div class="page-header">
			<h1>Créer votre offre</h1>
		</div>
		<form>
			<div class="row">
				
				<div class="page-header">
					<h1>Créer votre offre</h1>
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
				

				<span class="label label-primary">Employeur : </span>
				<input type="text" class="form-control">
				
				<span class="label label-primary">Description du poste : </span>
				<textarea class="form-control"></textarea>
			</div>
			<div class="row">
				<div class="col-lg-1 col-lg-push-11">
					<button type="button" class="btn btn-success btn-block">Valider</button>
				</div>
			</div>
		</form>
	</div>
	<?php
	include 'ressourcePHP/footer.php'
	?>
	<script src="jquery-3.2.1.min.js"></script>
	<script src="js/general.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!--<script src="bootstrap/js/bootstrap.min.js"></script>-->
</body>
</html>
