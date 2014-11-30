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
						<div class="btn" data-toggle="tooltip" data-placement="top" title="Show only hosts with WiFi">
							<svg alt="Pick hosts with Wifi" version="1.2" baseProfile="tiny" id="wifi_icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								 x="0px" y="0px" width="50px" height="50px" viewBox="0 0 25 25" xml:space="preserve" onclick="ChangeColor1()" >
								Pick hosts with Wifi
								<script type="text/ecmascript" cursor="pointer">	
									<![CDATA[

										var clickedWifi;
										clickedWifi = false;
										
										function ChangeColor1() {
										//  document.getElementById("wifi").setAttribute("filter","url(#blur1)");
											clickedWifi = !clickedWifi;
											if (clickedWifi) { 
												document.getElementById("wifiBackground").setAttribute("fill","#E8F12B");
											} else {
												document.getElementById("wifiBackground").setAttribute("fill","#e0e0e0");
											}
										  }
									 ]]>

								</script>
								<defs>
									<filter id="blur1" x="0" y="0">
										<feGaussianBlur in="SourceGraphic" stdDeviation="0.2" />
									</filter>
								</defs>
								<g id="wifiBackground" fill="#e0e0e0">
									<rect id="wifiBackgroundRect" x="0" y="0" rx="3" ry="3" width="24" height="24"/>
								</g>
								<g id="waves" fill="#808080">
								<g>
									<path d="M13.414,19.412c0.783-0.779,0.783-2.047,0-2.826c-0.781-0.785-2.049-0.785-2.828-0.002c-0.783,0.783-0.783,2.051,0,2.831
										C11.367,20.195,12.635,20.196,13.414,19.412z"/>
								</g>
								<g>
									<path d="M20.485,11.515c-0.512,0-1.024-0.195-1.414-0.586c-3.899-3.899-10.243-3.898-14.143,0c-0.782,0.781-2.048,0.78-2.829,0
										c-0.781-0.781-0.781-2.047,0-2.829c5.459-5.458,14.341-5.458,19.799,0c0.781,0.781,0.781,2.047,0,2.828
										C21.509,11.319,20.997,11.515,20.485,11.515z"/>
								</g>
								<g>
									<path d="M7.757,15.757c-0.512,0-1.024-0.195-1.414-0.586c-0.781-0.781-0.781-2.047,0-2.828c3.118-3.119,8.194-3.119,11.313,0
										c0.781,0.781,0.781,2.047,0,2.829c-0.781,0.781-2.047,0.781-2.829,0c-1.559-1.56-4.097-1.559-5.657,0
										C8.781,15.562,8.269,15.757,7.757,15.757z"/>
								</g>
								</g>
							</svg>
						</div>
						
						<div class="btn" data-toggle="tooltip" data-placement="top" title="Show only hosts nearby a shopping facility">
							<svg alt="Pick hosts with shop nearby" version="1.2" baseProfile="tiny" id="shopping_icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
							 x="0px" y="0px" width="50px" height="50px" viewBox="0 0 25 25" xml:space="preserve" onclick="ChangeColor2()" >
							 Pick hosts with shop nearby
							<script type="text/ecmascript">
							 <![CDATA[
								var clickedShopping;
								clickedPhone = false;
								
								function ChangeColor2() {
								//  document.getElementById("phone").setAttribute("filter","url(#blur1)");
									clickedShopping = !clickedShopping;
									if (clickedShopping) { 
										document.getElementById("shoppingBackground").setAttribute("fill","#E8F12B");
									} else {
										document.getElementById("shoppingBackground").setAttribute("fill","#e0e0e0");
									}
								  }
							 ]]>
							</script>
							<g id="shoppingBackground" fill="#e0e0e0">
								<rect id="shoppingBackgroundRect" x="0" y="0" rx="3" ry="3" width="24" height="24"/>
							</g>
							<g id="shopping" fill="#808080">

									<path d="M20.756,5.345C20.565,5.126,20.29,5,20,5H6.181L5.986,3.836C5.906,3.354,5.489,3,5,3H2.75c-0.553,0-1,0.447-1,1
										s0.447,1,1,1h1.403l1.86,11.164c0.008,0.045,0.031,0.082,0.045,0.124c0.016,0.053,0.029,0.103,0.054,0.151
										c0.032,0.066,0.075,0.122,0.12,0.179c0.031,0.039,0.059,0.078,0.095,0.112c0.058,0.054,0.125,0.092,0.193,0.13
										c0.038,0.021,0.071,0.049,0.112,0.065C6.748,16.972,6.87,17,6.999,17C7,17,18,17,18,17c0.553,0,1-0.447,1-1s-0.447-1-1-1H7.847
										l-0.166-1H19c0.498,0,0.92-0.366,0.99-0.858l1-7C21.031,5.854,20.945,5.563,20.756,5.345z M18.847,7l-0.285,2H15V7H18.847z M14,7
										v2h-3V7H14z M14,10v2h-3v-2H14z M10,7v2H7C6.947,9,6.899,9.015,6.852,9.03L6.514,7H10z M7.014,10H10v2H7.347L7.014,10z M15,12v-2
										h3.418l-0.285,2H15z"/>
									<circle cx="8.5" cy="19.5" r="1.5"/>
									<circle cx="17.5" cy="19.5" r="1.5"/>
								
							</g>
						</svg>
						</div>
						
						<div class="btn" data-toggle="tooltip" data-placement="top" title="Show only hosts with telephone available to guests">
						<svg alt="Pick hosts with phone available" version="1.2" baseProfile="tiny" id="phone_icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
							 x="0px" y="0px" width="50px" height="50px" viewBox="0 0 25 25" xml:space="preserve" onclick="ChangeColor3()" >
							Pick hosts with phone available
							<script type="text/ecmascript">

								 <![CDATA[
									var clikedPhone;
									clickedPhone = false;
									
									function ChangeColor3() {
									//  document.getElementById("phone").setAttribute("filter","url(#blur1)");
										clickedPhone = !clickedPhone;
										if (clickedPhone) { 
											document.getElementById("phoneBackground").setAttribute("fill","#E8F12B");
											document.getElementById("phone_icon").setAttribute("color","red");
										} else {
											document.getElementById("phoneBackground").setAttribute("fill","#e0e0e0");
											document.getElementById("phone_icon").setAttribute("color","grey");
										}
									  }
								 ]]>
							</script>
							<g id="phoneBackground" fill="#e0e0e0">
								<rect id="phoneBackground" x="0" y="0" rx="3" ry="3" width="24" height="24"/>
							</g>

						<g id="phone" fill="#808080">
							<path d="M13.374,7.083l3.711-3.71l-0.438-0.434c-0.566-0.566-1.555-0.566-2.121,0l-1.586,1.586C12.656,4.809,12.5,5.186,12.5,5.586
								s0.156,0.777,0.438,1.06L13.374,7.083z"/>
							<path d="M6.646,12.939c-0.566-0.566-1.555-0.566-2.121,0l-1.586,1.586C2.656,14.809,2.5,15.186,2.5,15.586s0.156,0.777,0.441,1.062
								l0.437,0.432l3.703-3.703L6.646,12.939z"/>
							<path d="M18.437,4.729l-0.354-0.354l-3.708,3.708l0.65,0.649c0.095,0.095,0.146,0.22,0.146,0.354s-0.052,0.259-0.146,0.354
								l-5.586,5.586c-0.189,0.188-0.518,0.189-0.707,0l-0.65-0.65L4.38,18.086l0.354,0.354c0.26,0.26,1.246,1.105,3.056,1.105
								c1.616,0,4.256-0.712,7.65-4.105C22.213,8.665,18.598,4.89,18.437,4.729z"/>
						</g>
							
						</svg>
						</div>
						
						<div class="btn" data-toggle="tooltip" data-placement="top" title="Toggle to show only hosts who´s home is smoking/nosmoking">
						
						<svg alt="Pick non-smoking hosts" version="1.2" id="smoking_allowed" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 width="50px" height="50px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" onclick="ChangeColor4()">
							 Pick non-smoking hosts
							<script type="text/ecmascript">
							 <![CDATA[
								var clickedShopping;
								clickedPhone = false;
								
								function ChangeColor4() {
								//  document.getElementById("phone").setAttribute("filter","url(#blur1)");
									clickedShopping = !clickedShopping;
									if (clickedShopping) {
										document.getElementById("smoke").setAttribute("fill","red");
										document.getElementById("smokeBackground").setAttribute("fill","#E8F12B");
									} else {
										document.getElementById("smoke").setAttribute("fill","#e0e0e0");
										document.getElementById("smokeBackground").setAttribute("fill","#e0e0e0");
									}
								  }
							 ]]>
							</script>
							<g id="smokeBackground" fill="#e0e0e0">
								<rect id="smokeBackgroundRect" x="0" y="0" rx="8" ry="8" width="64" height="64"/>
							</g>

							 <g id="smoking_sign" fill="#808080">
							<path id="smoke" fill="#e0e0e0" d="M32.083,61.5c16.338,0,29.583-13.245,29.583-29.583c0-16.338-13.245-29.583-29.583-29.583
								C15.745,2.333,2.5,15.578,2.5,31.917C2.5,48.255,15.745,61.5,32.083,61.5z M32.083,7.333c13.555,0,24.583,11.028,24.583,24.583
								c0,5.674-1.938,10.902-5.179,15.067L40.481,36.011h5.686v-8.565H31.89L16.957,12.559C21.132,9.29,26.382,7.333,32.083,7.333z
								 M12.716,16.804l10.675,10.642H10.5v8.565h21.483l15.274,15.227c-4.182,3.292-9.45,5.263-15.173,5.263
								C18.528,56.5,7.5,45.472,7.5,31.917C7.5,26.221,9.452,20.976,12.716,16.804z"/>
							<rect x="10" y="27.446" width="36.5" height="8.565"/>
							<rect x="47.5" y="27.446" width="2.667" height="8.565"/>
							<rect x="51.5" y="27.446" width="2.667" height="8.565"/>
							<path d="M39.994,18.538c0,0,10.006-0.041,12.173,6.36c0,0-0.5-10.059-12.833-9.874c-12.333,0.185-11.5-5.733-11.5-5.733
								S24.488,16.873,39.994,18.538z"/>
							<path d="M49.333,26.632c0,0-0.409-7.038-10.489-6.908c-10.081,0.129-9.399-4.011-9.399-4.011s-2.734,5.305,9.94,6.47
								C39.384,22.182,47.562,22.154,49.333,26.632z"/>
						</g>
						</svg>
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
