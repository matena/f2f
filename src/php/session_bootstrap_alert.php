			<!-- Success -->
				<?php if (isset($_SESSION['success'])):?>
				<!--- Display the account creation information -->
					<div class="alert alert-success alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<strong>Great!</strong><br/>
						<?=$_SESSION['success']?>
					</div>
				<?php
					unset($_SESSION['success']);
					endif;
				?>

			<!-- Info -->
				<?php if (isset($_SESSION['info'])):?>
				<!--- Display the account creation information -->
					<div class="alert alert-info alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<!-- <strong>Ok.</strong><br/> -->
						<?=$_SESSION['info']?>
					</div>
				<?php
					unset($_SESSION['info']);
					endif;
				?>

			<!-- Warning -->
				<?php if (isset($_SESSION['warning'])):?>
				<!--- Display the account creation information -->
					<div class="alert alert-warning alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<strong>Warning!</strong><br/>
						<?=$_SESSION['warning']?>
					</div>
				<?php
					unset($_SESSION['warning']);
					endif;
				?>

			<!-- Danger -->
				<?php if (isset($_SESSION['danger'])):?>
				<!--- Display the account creation information -->
					<div class="alert alert-danger alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<strong>Watch out!</strong><br/>
						<?=$_SESSION['danger']?>
					</div>
				<?php
					unset($_SESSION['danger']);
					endif;
				?>