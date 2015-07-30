<?php 
session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="Lukáš Matěna" />
	<link rel="icon" href="favicon.ico" />
    <LINK REL="SHORTCUT ICON" HREF="http://matena.free.fr/favicon.ico">
	<title>Family 2 family - Login Page</title>
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="./css/signin.css" rel="stylesheet" />
	<!--- for nice social login buttons: font-awesome -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> 
    <!--- for nice social login buttons -->
    <link href="./css/bootstrap-social.css" rel="stylesheet" />
    
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!--- Google Plus API --->
	<meta name="google-signin-clientid" content="187823826585-c56m828vcjsci4hf2otbalfgeo7ubtue.apps.googleusercontent.com" />
	<meta name="google-signin-scope" content="https://www.googleapis.com/auth/plus.login" />
	<meta name="google-signin-requestvisibleactions" content="http://schema.org/AddAction" />
	<meta name="google-signin-cookiepolicy" content="single_host_origin" />
	<meta name="google-signin-callback" content="signinCallback" />
	
	</head>
  <body>
	<!------ facebook and google plus social login ----->
		<script>
		//google plus Sign In callback
		  
			function onSuccess(googleUser) {
			  console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
			}
			function onFailure(error) {
			  console.log(error);
			}
			function renderButton() {
			  gapi.signin2.render('gPlusSignIn', {
				'scope': 'https://www.googleapis.com/auth/plus.login',
				'width': 120,
				'height': 36,
				'longtitle': false,
				'theme': 'dark',
				'onsuccess': onSuccess,
				'onfailure': onFailure
			  });
			}
			
		  // Google Plus sign in process
		  function onSignIn(googleUser) {
			var profile = googleUser.getBasicProfile();
			console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
			console.log('Name: ' + profile.getName());
			console.log('Image URL: ' + profile.getImageUrl());
			console.log('Email: ' + profile.getEmail());
		  }

		  // Facebook> This is called with the results from from FB.getLoginStatus().
		  function statusChangeCallback(response) {
			console.log('statusChangeCallback');
			console.log(response);
			// The response object is returned with a status field that lets the
			// app know the current login status of the person.
			// Full docs on the response object can be found in the documentation
			// for FB.getLoginStatus().
			if (response.status === 'connected') {
			  // Logged into your app and Facebook.
			  setFbLogin();			  
			} else if (response.status === 'not_authorized') {
			  // The person is logged into Facebook, but not your app.
			  document.getElementById('status').innerHTML = 'Please log ' +
				'into this app.';
			} else {
			  // The person is not logged into Facebook, so we're not sure if
			  // they are logged into this app or not.
			  document.getElementById('status').innerHTML = 'Please log ' +
				'into Facebook.';
			}
		  }

		  // This function is called when someone finishes with the Login
		  // Button.  See the onlogin handler attached to it in the sample
		  // code below.
		  function checkLoginState() {
			FB.getLoginStatus(function(response) {
			  statusChangeCallback(response);
			});
		  }

		  window.fbAsyncInit = function() {
		  FB.init({
			appId      : '1419150145041906',
			cookie     : true,  // enable cookies to allow the server to access 
								// the session
			xfbml      : true,  // parse social plugins on this page
			version    : 'v2.1' // use version 2.1
		  });

		  // Now that we've initialized the JavaScript SDK, we call 
		  // FB.getLoginStatus().  This function gets the state of the
		  // person visiting this page and can return one of three states to
		  // the callback you provide.  They can be:
		  //
		  // 1. Logged into your app ('connected')
		  // 2. Logged into Facebook, but not your app ('not_authorized')
		  // 3. Not logged into Facebook and can't tell if they are logged into
		  //    your app or not.
		  //
		  // These three cases are handled in the callback function.

		  FB.getLoginStatus(function(response) {
			statusChangeCallback(response);
		  });

		  };

		  // Load the SDK asynchronously
		  (function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js";
			fjs.parentNode.insertBefore(js, fjs);
		  }(document, 'script', 'facebook-jssdk'));

		  // Here we run a very simple test of the Graph API after login is
		  // successful.  See statusChangeCallback() for when this call is made.
		  function setFbLogin() {
			console.log('Welcome!  Fetching your information.... ');
			FB.api('/me', function(response) {
			  console.log('Successful login for: ' + response.email);
			  document.getElementById('status').innerHTML =
				'Thanks for logging in, ' + response.email + '!';
			});
		  }
		</script>
		
		<!--- facebook script 
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=1419150145041906";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
		-->
		
		
    <div class="container"> 		  <!-- /container  - wrapping element for bootstrap -->		

	<!-- display alerts and warnings --->
		<div class="row">
			<div class="col-xs-6 col-md-2 col-md-offset-8">
				<p class="text-right">
					<a class="btn btn-default btn-lg">
					Language <span class="glyphicon glyphicon-globe"></span> 
					</a>
				</p>
			</div>
		</div>
		<div class="row">
		
			<div class="col-xs-12">		
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
			

		</div>
		
		<div class="row">	
			<h1 class="text-center">Family 2 family
			<br />	
			<small>... this is where families meet worldwide</small></h1>
		</div>
			  
	<!-- original social buttons:
		
		<div class="row" height="30">
			<form class="form-signin">
			
				<div class="col-sm-6">
					<span><div class="fb-login-button" data-size="xlarge" data-show-faces="false" data-auto-logout-link="false"></div>
					</span>
				</div>	
				<div class="col-sm-6">						
					<span>	
						<div id="gPlusSignIn">
								<script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
						</div>
					</span>
				</div>
			 </form>
		</div>
	--->
		
		<div class="row">
			<div class="col-sm-4 col-sm-offset-1">
				<form class="form-signin" style="min-height:150px">
						<a href="login.php?provider=facebook" class="btn btn-block btn-social btn-facebook">
								<i class="fa fa-facebook"></i> Sign in with Facebook
						</a>
						<a href="login.php?provider=google" class="btn btn-block btn-social btn-google">
								<i class="fa fa-google"></i> Sign in with Google+
						</a>
						<a href="login.php?provider=twitter" class="btn btn-block btn-social btn-twitter">
								<i class="fa fa-twitter"></i> Sign in with Twitter
						</a>
						
				 </form>
			</div>	
			
			<div class="col-sm-1" class="text-center">
				<p class="text-center" valign="center">
					<br/>
					<br/>
					<br/>
					<i>or</i>
				</p>
			</div>
			
			<div class="col-sm-4">
			
				<form class="form-signin" role="form" action="./dashboard.php" method="post">
					<h2 class="form-signin-heading"><img src="./img/koala_in_tree_cut_rev.png" alt="Family koala" class="img-rounded" height="40" width="40" /> Log In</h2>
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
					<div class="btn-group btn-block btn-group-lg" style="halign:center">
						<a class="btn btn-default" href="./signup.php#signupform"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Join f2f!</a>
						<a class="btn btn-default" href="./signup.php#generalinfo">Learn more!</a>
					</div>
				</form>
			</div>
		</div>
    </div> <!--- container --->
	
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="https://apis.google.com/js/client:platform.js" async defer></script>
	<script src="./js/alert.js"></script>

  </body>
</html>
