<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	

	<style type="text/css">
		::-webkit-scrollbar {
		  width: 1px;
		}
		body
        {
            background-color: #B0AEFE;
            font-family: Consolas !important;
        }
		.header 
		{
			position: relative;
			width: 70%;
			height: 60px;
			background-color: #523BF3;
			top: 0;
			left: 50%;
			transform: translate(-50%, -50%);
			margin-top: 50px;
			border-radius: 10px;
			z-index: 1000;
		}
		.header .navbar
		{
			padding-top: 10px;
			justify-content: center;
			text-align: center;
			word-spacing: 10px;

		}
		.navbar a {
		    transition: all 0.2s ease-out;
		    transform: scale(0.8);
		    display: inline-block;
		    padding: 4px;
		    text-decoration: none;
		    color: white;
		    font-weight: bold;
		    font-size: 20px;
		  }
		.navbar a:hover
		{
			transform: scale(1.05);
			margin: 10px;
		    margin-top: -10px;
		    position: relative;
		    text-decoration: none;
		    color: white;
		    font-weight: bold;
		}
	</style>
</head>
<body>
	<header class="header">
		<div class="navbar">
			<a href="index.php">HOME</a>
			<a href="index.php">COURSES</a>
			<a href="https://www.rapidtables.com/convert/number/decimal-to-binary.html" target="__blank">CALCULATOR</a>
			<?php
				if(isset($_SESSION['username']))
				{
				?>
					<a href="logout.php" class="logout" style="text-decoration: none;">Logout<i class="fa fa-sign-out"></i></a>
				<?php
				}
			?>
		</div>

		<div class="navbar">
			<div class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container">
				    <div class="navbar-header">
				      	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
				      	</button>
				    </div>

				    <div class="navbar-collapse collapse">
				      	<ul class="nav navbar-nav navbar-right">
					        <li class="active"><a href="#">Home</a></li>
					        <li class="active"><a href="#about">About</a></li>
					        <li class="active"><a href="#portfolio">Portfolio</a></li>
				        	<li class="active"><a href="#contact">Contact</a></li>
				      	</ul>
				    </div>
				</div>
			</div>
		</div>
	</header>
</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
</html>