<?php
	// Checks whether the file requested corresponds with file in the parameter
	function isActive($filename) {
		$path_parts = pathinfo($_SERVER['SCRIPT_NAME']);
		return ($filename == $path_parts['basename']);
	}

	function echoIfActive($filename) {
		$path_parts = pathinfo($_SERVER['SCRIPT_NAME']);
		if ($filename == $path_parts['basename']) {
			echo "active";
		}
	}

?>



	<div id="navigation_bar" class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="<?php echoIfActive("profileview.php");?>">
							<a href="./profileview.php" data-toggle="tooltip" data-placement="bottom" title="Information about your profile"><span class="glyphicon glyphicon-user"></span><small><small><?=$_SESSION['login']?></small></small></a>
						</li>
						<li class="<?php echoIfActive("dashboard.php");?>">
							<a href="./dashboard.php" data-toggle="tooltip" data-placement="bottom" title="Your starting point is here."><span class="glyphicon glyphicon-th-list"></span> Home</a>
						</li>
						<li class="dropdown <?php echoIfActive("messages.php");?>">
							 <a href="./messages.php" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-envelope"></span> Messages <span class="badge">12</span><strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="./messages.php#inbox" data-toggle="tooltip" data-placement="bottom" title="Incomming messages">Inbox <span class="badge">12</span></a>
								</li>
								<li>
									<a href="./messages.php#sent">Sent</a>
								</li>
								<li>
									<a href="./messages.php#marked" data-toggle="tooltip" data-placement="bottom" title="Messages you hand-picked">Marked <span class="glyphicon glyphicon-star-empty"></a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="./messages.php#compose">Compose <span class="glyphicon glyphicon-pencil"></span></a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="./blog.php">F2F blog <span class="badge" data-toggle="tooltip" data-placement="bottom" title="Your ever fresh source of information">updated</span></a>
								</li>
							</ul>
						</li>
						<li class="dropdown <?php echoIfActive("inspiration.php");?>" data-toggle="tooltip" data-placement="bottom" title="Get some inspiration for your next trip">
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
									<a href="#" data-toggle="tooltip" data-placement="bottom" title="Tell others about your trip!">Share my story... <span class="glyphicon glyphicon-pencil"></span></a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#" data-toggle="tooltip" data-placement="bottom" title="Get news about this website">F2F blog</a>
								</li>
							</ul>
						</li>
						<li data-toggle="tooltip" data-placement="bottom" title="Click to change your home availability for other families status"><p class="navbar-text">Available <input type="checkbox" name="available-switch" checked="" data-on-color="primary" data-off-color="default" data-size="small" data-on-text="Yes" data-off-text="No" data-toggle="tooltip" data-placement="bottom" title="Click to change your hosting availability status"/></p></li>
					</ul>
						
					<ul class="nav navbar-nav navbar-right">
						<li class="<?php echoIfActive("profileview.php");?>">
							<a href="./guide.php" data-toggle="tooltip" data-placement="bottom" title="Learn how to use this site"><span class="glyphicon glyphicon-book"></span> Guide</a>
						</li>
						<li class="<?php echoIfActive("profileview.php");?>">
							<a href="./support.php" data-toggle="tooltip" data-placement="bottom" title="Help this site to grow by donating"><span class="glyphicon glyphicon-heart-empty"></span> Support</a></li>
						</li>
						<li class="dropdown" data-toggle="tooltip" data-placement="bottom" title="Choose your preferred language">
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
							<li><a href="#" data-toggle="tooltip" data-placement="bottom" title="You can help us by translating this website to your language">Add translation</a></li>
							<li><a href="#">Support project</a></li>
						  </ul>
						</li>
						<li>
						   <form class="navbar-form navbar-right" role="search">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search..." size=8 data-toggle="tooltip" data-placement="bottom" title="Search content and profiles"/>
								</div>
								<button type="submit" class="btn btn-default" style="margin-right:20px"><span class="glyphicon glyphicon-search"></span></button>
								<a href="signin.php?logout=true" role="button" alt="Sign out" class="btn btn-default" style="margin-right:20px" data-toggle="tooltip" data-placement="bottom" title="Logout"><span class="glyphicon glyphicon-off"></span></a>							
							</form>
						</li>
					  </ul>
				</div>
				
			</nav>
		</div>
	</div>
