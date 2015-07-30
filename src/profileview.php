<?php include './php/access.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Family 2 family - profile view</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.css" rel="stylesheet">
	<!-- Bootstrap switch CSS -->
    <link href="./css/bootstrap-switch.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/sticky-footer-navbar.css" rel="stylesheet">
	<!--- Sharing in social media -->
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-546c50ce7062398f"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!--- jQuery to show tooltips --->
	<script src="./js/jquery.js"></script>
	
	<!-- Tooltip bootstrap opt-in -->
	<script type="text/javascript">
		$(function () {
		  $('[data-toggle="tooltip"]').tooltip({
			'delay': { show: 500, hide: 500 }})
		})		
	</script>
	
	<style>
		svg:hover
		{
			opacity: 0.3;
		}
	</style>
  </head>

  <body>
	<!--- Social media sharing --->
	<!-- Go to www.addthis.com/dashboard to customize your tools -->
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-546c50ce7062398f" async="async"></script>


    <div class="container">
	
		<!--- Include top navigation bar --->
		<?php include './php/navigation.php'; ?>


		<div class="row clearfix">
			<div class="col-md-4 column">
					<div class="alert alert-info alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<strong>Last profile revision</strong><br/>
					You last revised your <strong><?=$_SESSION['login']?></strong> profile on the 
<?php
dbConnect("matena");
$query = "SELECT profileLastReviewed FROM User WHERE
        login = '$_SESSION['login']'";
$result = mysql_query($query);
if (!$result) {
  error('A database error occurred while checking your '.
        'login details.\\nIf this error persists, please '.
        'contact f2f.support@kayak.webz.cz.');
}

if (mysql_num_rows($result) == 0) {
  unset($_SESSION['userId']);
  
} else {
	$_SESSION['lastReviewed'] = mysql_result($result,0,'profileLastReviewed');
}
					
				</div>

				</div>
			</div>
		</div>
	</div>
	
    <div class="footer">
      <div class="container" align="center">
        <p class="text-muted"><SMALL>Web by F2F team. All written and audiovisual documents are property of their respective authors. Respect their privacy.</SMALL></p>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="./js/bootstrap.js"></script>
	<script src="./js/bootstrap-switch.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	<script src="./js/main.js"></script>
	<script src="./js/googlemaps.js"></script>
	<script src="./js/tooltip.js"></script>
	
	
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>