<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Historique</title>
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
	<div class="container" id="page">
		<div class="page-header">
			<h1>Historique</h1>
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
		
		<div class="panel panel-primary">
			<div class="panel-heading">
				Activités
			</div>
			<div class="panel-body">
				Maecenas convallis lectus vitae fermentum porttitor. Vestibulum aliquam diam efficitur turpis placerat, nec lobortis turpis varius. In turpis mi, imperdiet et massa et, bibendum scelerisque diam. Etiam placerat eu nibh ut cursus. Sed a sollicitudin ex. Pellentesque auctor mattis ex, vel lacinia lectus maximus sed. In eu ipsum nec sem luctus mollis. Sed vehicula eu erat vel laoreet.

				Maecenas feugiat est eget metus cursus imperdiet. Quisque vestibulum velit velit, non lobortis tortor faucibus at. Duis condimentum, arcu in venenatis finibus, libero mauris venenatis elit, sagittis vulputate nisi nulla ut magna. Nam nec massa consequat, varius libero vel, pulvinar neque. Integer dapibus aliquam orci, quis lacinia dolor tempor vel. Sed lacinia eros sit amet nibh scelerisque, a vehicula urna eleifend. Ut nec urna lorem. Nunc volutpat lorem eget urna luctus, id maximus metus egestas. Ut eget nisl sit amet risus maximus commodo. Quisque hendrerit dui non ligula imperdiet tempus.

				Aliquam nec feugiat massa. Vestibulum laoreet erat ipsum, sit amet vehicula erat viverra sed. Vivamus in pellentesque mi. Suspendisse semper finibus arcu. Fusce quam nisl, aliquam non tortor in, euismod imperdiet libero. Maecenas vitae felis quis augue laoreet posuere. Pellentesque ac mattis ipsum, eu tempor augue. Vestibulum maximus pulvinar sapien non pulvinar. Aenean in tempus purus. Duis sit amet ex lacus.

				Nullam lobortis, enim vitae finibus vulputate, nibh arcu viverra turpis, at molestie magna odio eget augue. Cras maximus varius eros eu dignissim. Nullam orci erat, sagittis vel malesuada vehicula, finibus vel est. Pellentesque scelerisque sodales mi. Proin finibus felis in sapien condimentum, in tempus mi tempus. Nam sit amet fringilla ligula, ut consectetur elit. Proin suscipit ante sed purus interdum laoreet. Phasellus bibendum semper fermentum. Integer erat diam, varius nec mollis et, maximus at sem. Etiam facilisis tellus hendrerit ligula dictum porttitor. Vivamus suscipit sed libero non eleifend. Morbi molestie tristique dui vitae aliquet. Aenean rhoncus molestie malesuada. Donec arcu odio, ultricies id congue vel, malesuada eget ante. In bibendum faucibus quam sit amet malesuada. Suspendisse ipsum leo, ornare non ultricies in, pretium placerat nisl.

				Vestibulum eleifend eu erat sed vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce vel ultricies ante. Nullam iaculis laoreet ex sit amet auctor. Cras pretium, metus eget molestie mollis, nulla lectus consectetur magna, id scelerisque urna eros ut enim. Nulla accumsan justo quis risus tincidunt, id pretium ligula tempus. Nullam ante elit, rhoncus vitae posuere ac, finibus ac orci. Phasellus malesuada tortor a urna ultrices, non finibus nisl congue. Nulla vehicula placerat faucibus. Morbi congue tincidunt est, iaculis facilisis enim congue nec. Fusce nec risus sapien. Mauris ultrices consequat suscipit. Nulla non ultricies lorem. Proin dapibus porttitor tristique. Nulla rutrum sodales ultricies.
			</div>
			
		</div>
		
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
