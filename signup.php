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

		<div class="container">
        <div class="row centered-form">
        <div style="margin-top:10em; width:40em; margin-left:auto; margin-right:auto">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Please sign up for ThoughtHub</h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form" action="./auth/submit.php" method="post">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group col-xs-12 col-sm-12 col-md-12">
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
			    					</div>
			    				</div>
			    			</div>
			    			
			    			<input type="submit" value="Register" class="btn btn-info btn-block">
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
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