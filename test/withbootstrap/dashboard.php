<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Family 2 family - dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.css" rel="stylesheet">
	<!-- Bootstrap switch CSS -->
    <link href="./css/bootstrap-switch.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/sticky-footer-navbar.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	

    <div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<!--<div class="alert alert-success alert-dismissable">
				 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4>
					Alert!
				</h4> <strong>Warning!</strong> Best check yo self, you're not looking too good. <a href="#" class="alert-link">alert link</a>
			</div>
			-->
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-user"></span><small>Globetrotters_family</small></a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#"><span class="glyphicon glyphicon-th-list"></span> Dash</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-envelope"></span> Messages <span class="badge">12</span><strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Inbox <span class="badge">12</span></a>
								</li>
								<li>
									<a href="#">Sent</a>
								</li>
								<li>
									<a href="#">Marked <span class="glyphicon glyphicon-star-empty"></a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Compose <span class="glyphicon glyphicon-pencil"></span></a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">F2F blog <span class="badge">updated</span></a>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-plane"></span> Inspiration<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">F2F travel stories</a>
								</li>
								<li>
									<a href="#">F2F travel cook book</a>
								</li>
								<li>
									<a href="#">F2F safety tips</a>
								</li>
								<li>
									<a href="#">Random family profile</a>
								</li>
								
								<li class="divider">
								</li>
								<li>
									<a href="#">Share my story... <span class="glyphicon glyphicon-pencil"></span></a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">F2F blog</a>
								</li>
							</ul>
						</li>
						<li><p class="navbar-text">Available <input type="checkbox" name="available-switch" checked="" data-on-color="primary" data-off-color="default" data-size="small" data-on-text="Yes" data-off-text="No"/></p></li>
					</ul>
						
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#about"><span class="glyphicon glyphicon-book"></span> Guide</a></li>
						<li><a href="#contact"><span class="glyphicon glyphicon-heart-empty"></span> Support</a></li>
						<li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-globe"></span> Langugage <span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="#">Česky</a></li>
							<li><a href="#">Deutsch</a></li>
							<li><a href="#">English</a></li>
							<li><a href="#">Espagnol</a></li>
							<li><a href="#">Français</a></li>
							<li><a href="#">Polski</a></li>
							<li><a href="#"></a></li>
							<li class="divider"></li>
							<li class="dropdown-header">You can help</li>
							<li><a href="#">Add translation</a></li>
							<li><a href="#">Support project</a></li>
						  </ul>
						</li>
						<li>
						   <form class="navbar-form navbar-right" role="search">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search..." size=10/>
								</div>
								<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
							</form>
						</li>
					  </ul>
				</div>
				
			</nav>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-4 column">
			<div class="tabbable" id="tabs-52283">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#panelFindHost" data-toggle="tab">Find host</a>
					</li>
					<li>
						<a href="#panelFindFriends" data-toggle="tab">Find friends</a>
					</li>
					<li>
						<a href="#panelFavorites" data-toggle="tab">Favorites</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="panelFindHost" align="center">
						<p>
						</p>
					    <form class="form-horizontal" role="form">
							<div class="form-group">
								<label for="location" class="col-sm-4">City, Country</label>
								<div class="col-sm-6">
									<input class="form-control" id="location" />
								</div>
								<div class="col-sm-2">
									<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span><br/><small>Search</small></button>
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
						
						<div class="embed-responsive embed-responsive-16by9">
							<div class="embed-responsive-item">
								<iframe src="./svg_buttons.html" frameborder="0" style="border:0" width="100%">
								</iframe>
							</div>
						</div>
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
					<div class="tab-pane" id="panelFavorites">
						<p>
						</p>
					</div>
				</div>
			</div>
		</div>
		
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
	<script src="./js/bootstrap-switch.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	<script src="./js/main.js"></script>
	<script src="./js/googlemaps.js"></script>

	
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
