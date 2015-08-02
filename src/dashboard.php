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

    <title>Family 2 family - dashboard</title>

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
			<div class="tabbable" id="searchTabs">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#panelFindHost" data-toggle="tab">Find host</a>
					</li>
					<li>
						<a href="#panelFavorites" data-toggle="tab">Favorites</a>
					</li>
				</ul>
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade in active" id="panelFindHost" align="center">
						<p>
						</p>
					    <form class="form-horizontal" role="form">
							<div class="form-group">
								<label for="location" class="col-sm-4">City, Country</label>
								<div class="col-sm-6">
									<input class="form-control" id="location" />
								</div>
								<div class="col-sm-2">
									<button type="submit" class="btn btn-primary" style="margin-right:20px"><span class="glyphicon glyphicon-search"></span><br/><small>Search</small></button>
								</div>
							</div>
							<div class="form-group">
								 <label for="keywords" class="col-sm-4">Keywords</label>
								 <div class="col-sm-6">
									<input class="form-control" id="keywords" />
								 </div>
							</div>
							
						</form>
						
						
						<!--------  Clickable svg buttons -->
						<? include './php/svg_btn_click_wifi.php'; ?>
						<? include './php/svg_btn_click_shopping.php'; ?>
						<? include './php/svg_btn_click_phone.php'; ?>
						<? include './php/svg_btn_click_smoking.php'; ?>
						
						<!--------  Google maps canvas placeholder -->
						<div class="embed-responsive embed-responsive-4by3">
							<div class="embed-responsive-item" id="map-canvas" style="width:100%; display: block; padding=0px; margin=0px">
							</div>
						</div>
					</div>
					<div class="tab-pane" id="panelFindFriends">
						<p>
						</p>
					</div>
					
					<div role="tabpanel" class="tab-pane fade" id="panelFavorites">
						<h3>Your favorite profiles</h3>
						<ul class="media-list">
							<li class="media">
								<a class="media-left" href="#show_family_nr9">
									<img style="float:left; margin-right:10px" src="http://lorempixel.com/64/64/people/9/" alt="Family nr. 9" />
								</a>
								<div class="media-body">
									<h5 class="media-heading"><b>Family Nine</b>, Krakow, Poland</h5>
									<small>We are a lovely family Cras justo odio, dapibus ac facilisis in, egestas eget quam.</small>
								</div>
							</li>
							<li class="media">
								<a class="media-left" href="#show_family_nr9">
									<img style="float:left; margin-right:10px" src="http://lorempixel.com/64/64/people/8/" alt="Family nr. 9" />
								</a>
								<div class="media-body">
									<h5 class="media-heading"><b>Family Eight</b>, Krakow, Poland</h5>
									<small>We are a lovely family Cras justo odio, dapibus ac facilisis in, egestas eget quam.</small>
								</div>
							</li>
							<li class="media">
								<a class="media-left" href="#show_family_nr9">
									<img style="float:left; margin-right:10px" src="http://lorempixel.com/64/64/people/7/" alt="Family nr. 9" />
								</a>
								<div class="media-body">
									<h5 class="media-heading"><b>Family Seven</b>, Krakow, Poland</h5>
									<small>We are a lovely family Cras justo odio, dapibus ac facilisis in, egestas eget quam.</small>
								</div>
							</li>
							<li class="media">
								<a class="media-left" href="#show_family_nr9">
									<img style="float:left; margin-right:10px" src="http://lorempixel.com/64/64/people/6/" alt="Family nr. 9" />
								</a>
								<div class="media-body">
									<h5 class="media-heading"><b>Family Six</b>, Krakow, Poland</h5>
									<small>We are a lovely family Cras justo odio, dapibus ac facilisis in, egestas eget quam.</small>
								</div>
							</li>
							<li class="media">
								<a class="media-left" href="#show_family_nr9">
									<img style="float:left; margin-right:10px" src="http://lorempixel.com/64/64/people/5/" alt="Family nr. 9" />
								</a>
								<div class="media-body">
									<h5 class="media-heading"><b>Family Five</b>, Krakow, Poland</h5>
									<small>We are a lovely family Cras justo odio, dapibus ac facilisis in, egestas eget quam.</small>
								</div>
							</li>
						</ul>
						<a class="row center" href="#more">show more</a>
						<h3>Suggested profiles</h3>
												<ul class="media-list">
							<li class="media">
								<a class="media-left" href="#show_family_nr9">
									<img style="float:left; margin-right:10px" src="http://lorempixel.com/64/64/people/9/" alt="Family nr. 9" />
								</a>
								<div class="media-body">
									<h5 class="media-heading"><b>Family Nine</b>, Krakow, Poland</h5>
									<small>We are a lovely family Cras justo odio, dapibus ac facilisis in, egestas eget quam.</small>
								</div>
							</li>
							<li class="media">
								<a class="media-left" href="#show_family_nr9">
									<img style="float:left; margin-right:10px" src="http://lorempixel.com/64/64/people/8/" alt="Family nr. 9" />
								</a>
								<div class="media-body">
									<h5 class="media-heading"><b>Family Eight</b>, Krakow, Poland</h5>
									<small>We are a lovely family Cras justo odio, dapibus ac facilisis in, egestas eget quam.</small>
								</div>
							</li>
							<li class="media">
								<a class="media-left" href="#show_family_nr9">
									<img style="float:left; margin-right:10px" src="http://lorempixel.com/64/64/people/7/" alt="Family nr. 9" />
								</a>
								<div class="media-body">
									<h5 class="media-heading"><b>Family Seven</b>, Krakow, Poland</h5>
									<small>We are a lovely family Cras justo odio, dapibus ac facilisis in, egestas eget quam.</small>
								</div>
							</li>
							<li class="media">
								<a class="media-left" href="#show_family_nr9">
									<img style="float:left; margin-right:10px" src="http://lorempixel.com/64/64/people/6/" alt="Family nr. 9" />
								</a>
								<div class="media-body">
									<h5 class="media-heading"><b>Family Six</b>, Krakow, Poland</h5>
									<small>We are a lovely family Cras justo odio, dapibus ac facilisis in, egestas eget quam.</small>
								</div>
							</li>
							<li class="media">
								<a class="media-left" href="#show_family_nr9">
									<img style="float:left; margin-right:10px" src="http://lorempixel.com/64/64/people/5/" alt="Family nr. 9" />
								</a>
								<div class="media-body">
									<h5 class="media-heading"><b>Family Five</b>, Krakow, Poland</h5>
									<small>We are a lovely family Cras justo odio, dapibus ac facilisis in, egestas eget quam.</small>
								</div>
							</li>
						</ul>
						<a class="row center" href="#more">show more</a>
						
						
					</div> <!--- end of tab: Favorites ---->
				</div> <!--- end of tabs content ---->
			</div>     <!--- end of tabbable content ---->
		</div>		   <!--- end of col-md-4 --->
		
<!--- search results -->	
		
		<div class="col-md-8 column">
			<h3 class="text-success">
				We have 24 families that fit your search:
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
							<iframe src="./svg_buttons_small.html" frameborder="0" style="border:0; padding=0px" scrolling="no" width="100%" height="35px">
							</iframe>
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
							<iframe src="./svg_buttons_small2.html" frameborder="0" style="border:0; padding=0px" scrolling="no" width="100%" height="35px">
							</iframe>
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
							<iframe src="./svg_buttons_small.html" frameborder="0" style="border:0; padding=0px" scrolling="no" width="100%" height="35px">
							</iframe>
							<p>
								<a class="btn btn-primary" href="#">Request</a> <a class="btn" href="#">More...</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="300x200" src="http://lorempixel.com/600/200/people/2" />
						<div class="caption">
							<h3>
								Travel bugs<br/><small>Worldwide</small>
							</h3>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
							<iframe src="./svg_buttons_small2.html" frameborder="0" style="border:0; padding=0px" scrolling="no" width="100%" height="35px">
							</iframe>
							<p>
								<a class="btn btn-primary" href="#">Request</a> <a class="btn" href="#">More...</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="300x200" src="http://lorempixel.com/600/200/people/3" />
						<div class="caption">
							<h3>
								Witold family<br/><small>Wroclaw, Poland</small>
							</h3>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
							<iframe src="./svg_buttons_small.html" frameborder="0" style="border:0; padding=0px" scrolling="no" width="100%" height="35px">
							</iframe>
							<p>
								<a class="btn btn-primary" href="#">Request</a> <a class="btn" href="#">More...</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="300x200" src="http://lorempixel.com/600/200/people/6" />
						<div class="caption">
							<h3>
								Matena family<br/><small>Brno, Czech Republic</small>
							</h3>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
							<iframe src="./svg_buttons_small2.html" frameborder="0" style="border:0; padding=0px" scrolling="no" width="100%" height="35px">
							</iframe>
							<p>
								<a class="btn btn-primary" href="#">Request</a> <a class="btn" href="#">More...</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div align="center">
				<ul class="pagination">
					<li>
						<a href="#">Prev</a>
					</li>
					<li>
						<a href="#">1</a>
					</li>
					<li>
						<a href="#">2</a>
					</li>
					<li>
						<a href="#">3</a>
					</li>
					<li>
						<a href="#">4</a>
					</li>
					<li>
						<a href="#">5</a>
					</li>
					<li>
						<a href="#">Next</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-4 column">
			<h2>
				Traveling safe
			</h2>
			<p>
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			<p>
				<a class="btn" href="#">Tell me more »</a>
			</p>
		</div>
		<div class="col-md-4 column">
			<h2>
				Museum lookup
			</h2>
			<p>
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			<p>
				<a class="btn" href="#">View details »</a>
			</p>
		</div>
		<div class="col-md-4 column">
			<h2>
				Airline tickets cheaper
			</h2>
			<p>
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			<p>
				<a class="btn" href="#">I want a deal »</a>
			</p>
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
	<script src="./js/bootstrap-switch.js"></script>  <!--- bootstrap switch helper --->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script> <!--- google maps helper --->
	<script src="./js/main.js"></script>		<!--- F2f related javascript helper --->
	<script src="./js/googlemaps.js"></script>	<!--- google maps helper --->
	<script src="./js/tooltip.js"></script>		<!--- bootstrap tooltips --->
	<script src="./js/tab.js"></script> 		<!--- bootstrap tabbed content --->
	
	
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
