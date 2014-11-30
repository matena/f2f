<?php 
session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="favicon.ico" />
    <LINK REL="SHORTCUT ICON" HREF="http://matena.free.fr/favicon.ico">
	<title>Family 2 family - Login Page</title>
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="./css/signin.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	</head>
  <body>
  

    <div class="container" align="right">
		<a class="btn btn-default btn-lg">
			Language <span class="glyphicon glyphicon-globe"></span> 
		</a>
    </div>
	<div class="container">
		
		<!-- display alerts and warnings --->
		<div class="row">
						
			<!-- New login -->
			<?php if (isset($_SESSION['newLogin']) AND (!isset($_SESSION['newLoginInfoShown']))):?>
			<!--- Display the account creation information -->
				<div class="alert alert-success" role="alert">
					<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<strong>Account created!</strong> You successfully created your account. Please proceed to singin.
				</div>
			<?php
				$_SESSION['newLoginInfoShown'] = true;
				endif;
			?>
			<!-- Warning -->
			<?php if (isset($_SESSION['warning'])):?>
			<!--- Display the account creation information -->
				<div class="alert alert-warning" role="alert">
					<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<strong>Watch out!</strong><br/>
					<?=$_SESSION['warning']?>
				</div>
			<?php
				unset($_SESSION['warning']);
				endif;
			?>
			
			<!-- Logout confirm -->
			<?php if (isset($_GET['logout'])):
				// Destroy the session...
				session_destroy();
			?>
				<!--- ... and display the account creation information -->
				<div class="alert alert-success" role="alert">
					<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<strong>Successfully signed out</strong><br/>
					You successfully signed out from your session on Family 2 family. We look forward to have you back soon!
					<?=$_SESSION['warning']?>
				</div>
			<?php
				endif;
			?>
		</div>
      <div class="row">
		
		<h1 class="text-center">Family 2 family
        <br />
        <small>... this is where families meet worldwide</small></h1>
	  </div>
      <!-- /container -->
      <form class="form-signin" role="form" action="./dashboard.php" method="post">
		<h2 class="form-signin-heading">Login
		<img src="./img/koala_in_tree_cut_rev.png" alt="Family koala" class="img-rounded" height="50" width="50" /></h2>
		<!-- display either new login resulting from the signup page or just a simple placeholder saying: Login -->
		<input name="login" type="login" class="form-control" required="" autofocus="" <?php if (isset($_SESSION['newLogin'])) { 
			//			Put new login or a placeholder 
				echo "value=\"" . $_SESSION['newLogin'] . "\"";
			} else {
				echo 'placeholder="Login"';
			} 
		?>  /> 
		<input name="pwd" type="password" class="form-control" placeholder="Password" required="" /> 
		<label class="checkbox">
		<input type="checkbox" value="remember-me" /> Remember me</label> 
		<button class="btn btn-lg btn-primary btn-block" type="submit">Login <span class="glyphicon glyphicon-ok"></span></button> 
		<div class="btn-group btn-block btn-group-lg">
			<a class="btn btn-default" href="./signup.php#signupform"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Join f2f!</a>
			<a class="btn btn-default" href="./signup.php#generalinfo">Learn more!</a>
		</div>
	  </form>
	  
    </div>
	
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="./js/alert.js"></script>

  </body>
</html>
