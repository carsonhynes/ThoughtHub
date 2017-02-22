<?php
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>ThoughtHub</title>

  <style type="text/css">
	@import "./css/bootstrap.min.css";
	@import "./css/sidebar.css";
  </style>

  <?php include "./core.php";
  		
  ?>

  <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">ThoughtHub</a>
			</div>

			<div id="navbar" class="navbar-collapse collapse">
				<div class="col-lg-3 hidden-md hidden-sm hidden-xs">
					<form class="navbar-form" role="search">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
							<div class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
							</div>
						</div>
					</form>
				</div>

					<form role="form" class="navbar-form navbar-right" action="./auth/auth.php" method="post">
						<div class="form-group">
							<input type="text" name="email" placeholder="Email" class="form-control"/>
						</div>
						<div class="form-group">
							<input type="password" name="password" placeholder="Password" class="form-control"/>
						</div>
						<button type="submit" class="btn btn-success">Sign in</button>
						<a href="./signup.php" type="submit" class="btn btn-danger">Sign up</a>
						<button type="button" class="btn btn-default" aria-label="Left Align">
							<span id="buttonHide" class="glyphicon glyphicon-cog" aria-hidden="true"></span>
						</button>
					</form>

			</div><!--/.navbar-collapse -->
		</div>
	</nav>
	<div id="wrapper" class="active">
	<!-- Sidebar -->
		<div id="sidebar-wrapper">
			<ul id="sidebar_menu" class="sidebar-nav">
				<li class="sidebar-brand"><a id="menu-toggle" href="#toggle-menu">Saved Projects</a>
				</li>
			</ul>
			<ul class="sidebar-nav" id="sidebar">
				<li><h4 style="color:white;">Saved Projects<h4></li>
				<li><a href="#placeholder">Saved Link 01</a></li>
				<li><a href="#placeholder">Saved Link 02</a></li>
				<li><a href="#placeholder">Saved Link 03</a></li>
				<li><a href="#placeholder">Saved Link 04</a></li>
				<li><a href="#placeholder">Saved Link 05</a></li>
			</ul>
		</div>
	</div>

	<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="jumbotron" style="z-index:1">
		<div class="container">
		<h1 style="margin-top:40px;">Welcome to ThoughtHub</h1>
		<p>Looking for ideas for your next project? Look no further!</p>
		<p><a class="btn btn-primary btn-lg" href="./submission.php" role="button">Submit Idea</a></p>
		</div>
	</div>

	<div class="container">
		<!-- Example row of columns -->
		<div class="row" id="row0">
			<?php getDefault(); ?>
		</div>
	</div>

	<style type="text/css">
		html {
		  position: relative;
		  min-height: 100%;
		}
		body {
		  /* Margin bottom by footer height */
		  margin-bottom: 30px;
		}
		.footer {
			text-align: center;
		  position: absolute;
		  bottom: 0;
		  width: 100%;
		  /* Set the fixed height of the footer here */
		  height: 30px;
		  background-color: #080808;
		}
	</style>

    <footer class="footer">
      <div class="container">
        <p class="text-muted">Made by The Tall Guy, Nick², and W3Edit</p>
      </div>
    </footer>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="js/sidebar.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/functions.js"></script>
  </body>
</html>