<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="./favicon.ico" />
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
		<button type="button" class="btn btn-default btn-lg">
			Language <span class="glyphicon glyphicon-globe"></span> 
		</button>
    </div>
	<div class="container">
      <div class="row">
		
		<h1 class="text-center">Family 2 family
        <br />
        <small>... this is where families meet worldwide</small></h1>
	  </div>
      <!-- /container -->
      <form class="form-signin" role="form" action="./dashboard.php">
		<h2 class="form-signin-heading">Login
		<img src="./img/hoopoe.png" alt="Family hoopoe" class="img-rounded" height="50" width="50" /></h2>
		<input type="login" class="form-control" placeholder="Login" required="" autofocus="" /> 
		<input type="password" class="form-control" placeholder="Password" required="" /> 
		<label class="checkbox">
		<input type="checkbox" value="remember-me" /> Remember me</label> 
		<button class="btn btn-lg btn-primary btn-block" type="submit">Login <span class="glyphicon glyphicon-ok"></span></button> 
		<div class="btn-group btn-block btn-group-lg">
			<a class="btn btn-default" href="./signup.php#signupform"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Join f2f!</a>
			<a class="btn btn-default" href="./signup.php#generalinfo">Learn more!</a>
		</div>
	  </form>
	  
    </div>
  </body>
</html>
