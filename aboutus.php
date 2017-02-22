<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>ThoughtHub - Signup</title>

  <style type="text/css">
	@import "./css/bootstrap.min.css";
	@import "./css/sidebar.css";
  </style>

  <?php include "./core.php";
  		
  ?>

<style type="text/css">
	body {
		background-color: #525252;
	}
	.centered-form {
		margin-top: 60px;
	}
	.centered-form .panel {
		background: rgba(255, 255, 255, 0.8);
		box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
	}
</style>

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
				<a class="navbar-brand" href="./index.php">ThoughtHub</a>
			</div>

			<div id="navbar" class="navbar-collapse collapse">
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
							<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
						</button>
					</form>
			</div><!--/.navbar-collapse -->
		</div>
	</nav>
	<div style="margin-top:75px; text-align:center; color:white; margin-left: auto; margin-right:auto">
		<h2>Team Members from Left to Right</h2>
		<h2>Nicholas Grippo, Stephen Molaro, Carson Hynes, and Nicholas Seney</h2>
	</div>
	<div style="float:right;">
		<img src="./img/victory.jpg" alt="Victory" height="540px" weight="960px">
	</div>
	<div style="margin: 5px, 5px, 5px, 5px; color:white;">
		<p>War was at hand again. Two brothers and two bings fight their way to find somewhere they can use to survive the long hot nights. After debating over a plan of action, something approached one of the brothers. It was an alpha idea that had lost its pack to hunters. It was a long struggle, but we pacified the beast. But these were not crewel people. These people nurtured the idea until it was more beautiful than they could have imagined. The time passed slowely, and the energy fountain ran dry. Resources were scarce and only some could lay our heads for any rest. Now the war is coming to a close and they ready themselves for their final battle. A battle that the fates themselves will judge. </p>
	</div>
	</body>

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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="js/sidebar.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/functions.js"></script>

</html>