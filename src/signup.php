<?php // signup.php
session_start();

	// Needed for user signup
	include("./php/common.php");
	include("./php/db.php");
	include("./php/console.php");

	
	if (!isset($_POST['submitok'])) {
		// Display the user signup form
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="favicon.ico" />
    <LINK REL="SHORTCUT ICON" HREF="http://matena.free.fr/favicon.ico"><title>Family 2 family - General information and signup page</title>
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="./css/signin.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- A script to check the user name availability (and minimum number of characters on the fly -->
	<script type="text/javascript">
		function checkAvailability($requiredLogin,$field) {
			var min_chars = 5;
			if ($requiredLogin.length < min_chars) {
				//if it's bellow the minimum show characters_error text
				document.getElementById("loginAvail").innerHTML = "<font color=red>Login is too short<strong>... </strong></font>";
			} else {	
				if (window.XMLHttpRequest) {
					// Modern browsers use this type of request
					request = new XMLHttpRequest();
				} else {
					// Old Microsoft Browsers use this type!
					request = new ActiveXObject("Microsoft.XMLHTTP");
				}
				request.onreadystatechange=function() {
					if ( request.readyState == 4 && request.status == 200) {
						debug_to_console("php/check_username.php?u=" + $requiredLogin + "\&field=" + $field);
						request.open("GET","php/check_username.php?u=" + $requiredLogin + "\&field=" + $field,true);
						request.send();
						document.getElementById("loginAvail").innerHTML = request.response ;
					}
				}
				
				
			}
		}
	</script>
  </head>
  <body>
    <a name="generalinfo"></a>
	<div class="container" align="right">
		<button type="button" class="btn btn-default btn-lg">
			Language <span class="glyphicon glyphicon-globe"></span> 
		</button>
    </div>
	<div class="container">
      <div class="row">
		
		<h1 class="text-center">Family 2 family
        <br />
        <small>... explore the world of homes and hearts open to your family</small></h1>
	  </div>
	  
	  <div>
	  <p class="lead">Family2Family is the first international web platform designed for families who want to travel otherwise, share cultures and lifestyles.
	  </p>
	  <p>	
<h2 class="text-center">Family Stay &amp; Culture Exchange</p></h2>
<p><em>It is</em> a platform that allows you to find families around the world that match your personal preferences and lifestyles, who seem interesting and inspiring to you and your children, and who are ready to host you and your family in their home for a while for FREE!. Anywhere in the world!</p>
<p>It is a place where all families have a common goal &#8211; <strong>sharing and exchanging cultures and lifestyles</strong>. It is also a great way for home schooling families to exchange ideas on cross-curricular education, and learn from one another!</p>
<p>Family2Family is a community of families who are ready to understand your background and customs, and really care about your family.</p>
<h4 class="text-center">www.family2family.kidsngo.org</h4>
<img class="alignleft size-full wp-image-287" src="http://www.kidsngo.kidsngo.org/wp-content/uploads/2014/04/Slide19.jpg" alt="Slide1" width="958" height="135" /></p>
	  <p>	

Donec suscipit sollicitudin tellus, sit amet aliquet diam suscipit vitae. Fusce condimentum fringilla ultrices. Suspendisse viverra eu neque dictum iaculis. Nulla vel mi odio. Morbi eu efficitur nulla, vulputate pellentesque erat. Vestibulum augue elit, consequat vitae aliquam vitae, consequat id nunc. Aenean tempor in risus a lacinia. Duis hendrerit nisl sit amet ante laoreet, vel pretium sapien vehicula. Aliquam aliquet sem quis tellus fringilla tincidunt. Nulla auctor, mauris sit amet viverra dictum, mi mi volutpat sapien, euismod feugiat metus est vitae odio. Phasellus ac tempor urna, sit amet commodo augue.
	  </p>
	  <p>	

Aliquam dictum hendrerit sollicitudin. Donec ac ligula in mauris ultrices varius ac et metus. Mauris in rutrum mi. Integer ut lectus non dolor ullamcorper dictum. In eget dolor pharetra, rutrum urna vitae, efficitur mi. Nulla rutrum sem risus, eu dignissim erat dapibus vel. Nulla nec euismod augue. Vivamus eu ipsum nisl. Nullam posuere accumsan eros eget congue. Integer euismod in orci vitae imperdiet. Sed malesuada cursus elit, nec porttitor lorem dignissim sit amet. Aenean in ornare orci. Praesent ex eros, tincidunt sit amet ultricies a, sagittis ut nunc. Vivamus iaculis lectus id mattis cursus.
	  </p>
	  <p>	

Vivamus vitae ullamcorper nunc, id gravida nisi. Cras blandit turpis non enim sagittis, ut blandit augue vehicula. Fusce tempor tincidunt risus ac molestie. Ut aliquet, velit nec tempus bibendum, nunc lectus dictum odio, eu mattis velit ex ultrices dui. Sed ultricies, sem nec sodales bibendum, ante sem pellentesque velit, quis pharetra felis tortor id ligula. Nullam ut placerat lectus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam aliquam est in est consequat, at cursus tortor rutrum. Donec hendrerit, nunc ut congue tristique, justo elit porta mauris, quis pharetra neque dui sit amet odio. Integer metus felis, pharetra sit amet orci sed, volutpat consectetur elit. Ut sit amet nibh fermentum, accumsan sapien quis, auctor metus. Sed at sapien ipsum. Duis iaculis, tortor sit amet molestie faucibus, risus nunc commodo tortor, vel maximus arcu est bibendum ligula. In hac habitasse platea dictumst. Aliquam velit lectus, mattis vel sapien sit amet, commodo sagittis ligula.
	  </p>
	  </div>
	  
	  	  <div>
	  <p>	
	  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a vestibulum ante. Nullam eget ornare ipsum, eu cursus ligula. Donec sed accumsan sapien. Integer aliquam neque massa, convallis semper arcu malesuada a. Vestibulum vulputate velit quam, ac mattis nibh bibendum vitae. Integer auctor purus at augue vulputate congue. Suspendisse sed ligula mauris. Donec a massa purus. Nunc a turpis eu erat laoreet vehicula. Donec et neque consectetur, ultricies leo vitae, fermentum turpis. Proin viverra in elit non rutrum. Etiam eu enim tempor, accumsan erat non, placerat augue. Donec eu tristique ex.
	  </p>
	  </div>
	
	
	<a name="signupform"></a>
	  
      <div class="row">
		
		<h2 class="text-center">Family 2 family
        <br />
        <small>... start your amazing world-wide experience</small></h1>
	  </div>

	  <!-- /container -->
      <form name="signupFormForm" class="form-signin text-center" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<h2 class="form-signin-heading">Signup
			<img src="./img/koala_in_tree_cut_rev.png" alt="Family Koala" class="img-rounded" height="50" width="50" />
		</h2>
		<div id="loginAvail">
			<h3 class="text-center">
				<span> </span>
			</h3>
		</div> <!--- class="form-control" placeholder="Login" ---->
		<input name="newLogin" type="login" class="form-control" placeholder="Login" required="" onkeyup="checkAvailability(document.signupFormForm.newLogin.value,login)" onfocusout="checkAvailability(document.signupFormForm.newLogin.value,login)"/> 
		<input name="newFullName" class="form-control" placeholder="Full name" required="" onkeyup="checkAvailability(document.signupFormForm.newLogin.value)" onfocusout="checkAvailability(document.signupFormForm.newLogin.value,\"displayName\")"/> 
		<input name="newEmail" type="email" class="form-control" placeholder="Email address" required="" /> 
		<input name="newPassword" type="password" class="form-control" placeholder="Password" required="" /> 
		<button name="submitok" class="btn btn-lg btn-primary btn-block" type="submit">Signup <span class="glyphicon glyphicon-ok"></span></button> 
		<div class="btn-group btn-block btn-group-lg">
			<a class="btn btn-default" href="#generalinfo">Learn more!</a>
			<a class="btn btn-default" href="./signin.php">Back to login</a>
		</div>

		</form>
    </div>
    <!-- /container -->
  </body>
</html>

 <?php
} else {
    // Process signup submission arriving from the same page.
    dbConnect('matena');
    if ($_POST['newLogin']=='' or $_POST['newFullName']==''
      or $_POST['newEmail']=='') {
        error('One or more required fields were left blank.\\n'.
              'Please fill them in and try again.');
    }
    
    // Check for existing user with the new id
    $sql = "SELECT COUNT(*) FROM User WHERE login = '$_POST[newLogin]'";
    $result = mysql_query($sql);
    if (!$result) {	
        error('A database error occurred in processing your '.
              'submission.\\nIf this error persists, please '.
              'contact support@kidsngo.org.');
    }
    if (mysql_result($result,0,0)>0) {
        error('A user already exists with your chosen login.\\n'.
              'Please try another.');
    }
    
    $newpass = substr(md5(time()),0,7);
    
    $sql = "INSERT INTO User SET
              login = '$_POST[newLogin]',
              password = PASSWORD('$_POST[newPassword]'),
              displayName = '$_POST[newFullName]',
              email = '$_POST[newEmail]',
              createDate = 'date()',
			  lastLogin = '0',
			  premium = '0',
			  userLevel = '0'
			  ";
    if (!mysql_query($sql))
        error('A database error occurred in processing your '.
              'submission.\\nIf this error persists, please '.
              'contact you@example.com.\\n' . mysql_error());
              
    // Email the new password to the person.
    $message = "Hello!

Your personal account for the Family 2 family project web
has been created! To log in, proceed to the
following address:

    http://matena.free.fr/test/signin.php?login=/

Your personal login and password are as
follows:

    userid: $_POST[newLogin]
    password: $newPassword

You aren't stuck with this password! Your can
change it at any time after you have logged in.

If you have any problems, feel free to contact me at
<support@kids2go>.

-Lukas Matena
 Your f2f Webmaster
";

    mail($_POST['newEmail'],"Your Password for the Project Website",
         $message);
    

	$_SESSION['newLogin'] = $_POST[newLogin];
  
    ?>
	<!DOCTYPE html>
	<html lang="en">
    <head>
		<title>f2f - Registration Complete </title>
		<meta http-equiv="refresh" content="5; URL=signin.php">
		<meta charset="utf-8" />
	    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		    <!-- Bootstrap core CSS -->
		<link href="./css/bootstrap.css" rel="stylesheet" />

		<link rel="icon" href="./favicon.ico" />
		
    
    </head>
    <body>
		<div class="container">
			<!-- Main jumbotron for a primary marketing message or call to action -->
			<div class="jumbotron">
				<h1>User registration successful!</h1>
				<p>Your login and password have been emailed to <strong><u><?php $_POST['newEmail']; ?></u></strong>,
				the email address you just provided in your registration form. To log in,
				click <a href="signin.php">here</a> to return to the login
				page, and enter your new personal userid and password.</p>
				<p>
					<a class="btn btn-default" href="signin.php">Go to login page <span class="glyphicon glyphicon-forward"></span></a>
				</p>
			</div>
		</div>
    </body>
    </html>
    <?php
}
?>
