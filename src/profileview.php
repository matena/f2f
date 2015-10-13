<?php include './php/access.php';
include_once './php/common.php';
include_once './php/db.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
	<LINK REL="SHORTCUT ICON" HREF="http://family2family.byethost.com/favicon.ico">
	
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
			<div class="col-md-4 col-xs-12">
					<div class="alert alert-info alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<strong>Last profile revision</strong><br/>
					You last reviewed your <strong><?=$_SESSION['login']?></strong> profile on <strong>  
					<?php
						echo($_SESSION['profileLastReviewed']);
					?> 
					</strong>. <i>This is server time, now your local time</i>
					<?php 						
						$userId = $_SESSION['userId'];
						echo(update_last_reviewed($userId));
					?> 
					

				</div>
			</div>
			<div class="col-md-8 col-xs-12">
					<!--- Include all other warnings --->
					<?php include './php/session_bootstrap_alert.php'; ?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-11">
				<div class="page-header">
					<h1>
						Lukas family <small>Horní Počernice, Czech republic</small>
					</h1>
				</div>
			</div>
			<div class="col-xs-1">
				<br/>
				<button type="button" class="btn btn-danger">
					Report <span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span>
				</button>
	
			</div>
			</div> <!-- headline row -->
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-6">
						<img alt="Our family in woods" src="http://lorempixel.com/400/200/sports/2/" class="img-thumbnail">
						<p>
						<dl>
							<dt>
								Can host now!
							</dt>
							<dd>
								Hosting up to 2 adults and 4 children
							</dd>
							<dt>
								Family members
							</dt>
							<dd>
								Lukas, Klara, Timon, Rebeka
							</dd>
							<dt>
								Willing to host:
							</dt>
							<dd>
								Etiam porta sem malesuada magna mollis euismod.
							</dd>
							<dt>
								Cultural advice
							</dt>
							<dd>
								Please remove your shoes before entering tatami.
							</dd>
						</dl>
						</p>
					</div>
					<div class="col-md-6">
											<!--------  Clickable svg buttons -->
						<? include './php/svg_btn_click_wifi.php'; ?>
						<? include './php/svg_btn_click_shopping.php'; ?>
						<? include './php/svg_btn_click_phone.php'; ?>
						<? include './php/svg_btn_click_smoking.php'; ?>

						<p>
							About us:
						</p>
						<div>
							We are a young usce dapibus, tellus ac cursus commodo, tortor mauris condimen
						</div>
						
						<p>
							<a class="btn" href="#">Read all »</a>
							
						</p>
							<button type="button" class="btn btn-lg btn-success">
								Stay with Lukas <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
							</button> 
							<button type="button" class="btn btn-lg btn-info">
								Send message <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
							</button> 

					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
									<div class="carousel slide" id="carousel-311431">
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#carousel-311431">
					</li>
					<li data-slide-to="1" data-target="#carousel-311431">
					</li>
					<li data-slide-to="2" data-target="#carousel-311431">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img alt="Carousel Bootstrap First" src="http://lorempixel.com/output/sports-q-c-1600-500-1.jpg" />
						<div class="carousel-caption">
							<p>
								Papa playing baseball.
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="Carousel Bootstrap Second" src="http://lorempixel.com/output/sports-q-c-1600-500-2.jpg" />
						<div class="carousel-caption">
							<p>
								Oliver surfing the ocean.
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="Carousel Bootstrap Third" src="http://lorempixel.com/output/sports-q-c-1600-500-3.jpg" />
						<div class="carousel-caption">
							<p>
								Good things come....
							</p>
						</div>
					</div>
				</div> <a class="left carousel-control" href="#carousel-311431" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-311431" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
					
						
						</div>
					</div>
				</div> <!-- internal row -->
			</div> <!-- col-md-8     -->
			
			<div class="col-md-4">
				<ul class="nav nav-pills" role="tablist">
					<li role="presentation" class="active"><a href="#">All references<span class="badge">42</span></a></li> 
				</ul>
				<button type="button" class="btn btn-default btn-info">
								Leave reference <span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>
							</button> 
							
				<ul class="nav nav-pills" role="tablist">
				  <li role="presentation"><a href="#">Positive<span class="badge success">40</span></a></li>
				  <li role="presentation"><a href="#">Neutral<span class="badge info">1</span></a></li>
				  <li role="presentation"><a href="#">Negative<span class="badge danger">1</span></a></li>
				</ul>
				<div class="media">
					 <a href="#" class="pull-left"><img alt="Bootstrap Media Preview" src="http://lorempixel.com/64/64/people/8" class="media-object img-rounded"></a>
					<div class="media-body">
						<h4 class="media-heading">
							From DeeJay for Lukas family
						</h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
						<div class="media">
							 <a href="#" class="pull-left"><img alt="Bootstrap Media Another Preview" src="http://lorempixel.com/64/64/people/2" class="media-object img-rounded"></a>
							<div class="media-body">
								<h4 class="media-heading">
									From Lukas family for DeeJay
								</h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
							</div>
						</div>
					</div>
				</div>
				<hr/>
				<div class="media">
					 <a href="#" class="pull-left"><img alt="Bootstrap Media Preview" src="http://lorempixel.com/64/64/" class="media-object img-rounded"></a>
					<div class="media-body">
						<h4 class="media-heading">
							From DeeJay for Lukas family
						</h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
						<div class="media">
							 <a href="#" class="pull-left"><img alt="Bootstrap Media Another Preview" src="http://lorempixel.com/64/64/people/2" class="media-object img-rounded"></a>
							<div class="media-body">
								<h4 class="media-heading">
									From Lukas family for DeeJay
								</h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
							</div>
						</div>
					</div>
				</div>
				<hr/>
				<div class="media">
					 <a href="#" class="pull-left"><img alt="Bootstrap Media Preview" src="http://lorempixel.com/64/64/" class="media-object img-rounded"></a>
					<div class="media-body">
						<h4 class="media-heading">
							From DeeJay for Lukas family
						</h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
						<div class="media">
							 <a href="#" class="pull-left"><img alt="Bootstrap Media Another Preview" src="http://lorempixel.com/64/64/people/2" class="media-object img-rounded"></a>
							<div class="media-body">
								<h4 class="media-heading">
									From Lukas family for DeeJay
								</h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<div class="row">
		<hr/>
		<div class="col-md-12">
			<p></p>
			<h3>
				Similar families in the same region
			</h3>
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="300x200" src="http://lorempixel.com/600/200/people/5" />
						<div class="caption">
							<h3>
								Thumbs family<br/><small>Lisbon, Portugal</small>
							</h3>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
							<?php include 'php/svg_btns_click_small.php'; ?>
							<p>
								<a class="btn btn-primary" href="#">Request</a> <a class="btn" href="#">More...</a>
							</p>
							
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="300x200" src="http://lorempixel.com/600/200/people/4" />
						<div class="caption">
							<h3>
								Crocodiles <br/><small>Lisbon, Portugal</small>
							</h3>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
							<?php include 'php/svg_btns_click_small.php'; ?>
							<p>
								<a class="btn btn-primary" href="#">Request</a> <a class="btn" href="#">More...</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="300x200" src="http://lorempixel.com/600/200/people/1" />
						<div class="caption">
							<h3>
								Mumbai family<br/><small>Mumbai, India</small>
							</h3>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
							<?php include 'php/svg_btns_click_small.php'; ?>
							<p>
								<a class="btn btn-primary" href="#">Request</a> <a class="btn" href="#">More...</a>
							</p>
						</div>
					</div>
				</div>

			</div>
			<h3>
				Read great stuff!!
			</h3>
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
