<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">
    	::-webkit-scrollbar
    	{
		  width: 1px;
		}
		html{
			scroll-behavior: smooth;
		}
		.body
		{
		  	display: flex;
			justify-content: center;
			align-items: center;
		}

		.header
		{
			margin-top: 5px;
		  	background-color: #523BF3;
		  	font-family: Consolas !important;
		  	width: 95%;
		  	border-radius: 10px;
		}

		.main-nav
		{
			display: flex;
			justify-content: space-between;
			align-items: center;
			flex-direction: row;
		  	height: 60px;
		}

		.logo:hover
		{
			color: white;
		  	text-decoration: none;
		}

		.main-nav .logoimg
		{
		  	height: 50px;
		  	margin-left: 5px;
			border-radius: 10px 10px;
		}

		.navlinks
		{
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: row;
		}

		.navlinks a
		{
		  	color: white;
		  	text-decoration: none;
		  	font-size: 18px;
		  	font-weight: bold;
			text-transform: uppercase;
			margin-right: 20px;
			cursor: pointer;
			transition: all 0.2s ease-in-out;
		}

		.navlinks a:hover
		{
			text-decoration: none;
		  	color: #7ebcb9;
    		border-bottom: 2px solid #7ebcb9;
		  	color: #7ebcb9;
		}

		.menu-btn
		{
		  	color: white;
		  	font-size: 25px;
		  	float: right;
		  	line-height: 90px;
		  	margin-right: 40px;
		  	cursor: pointer;
		  	display: none;
		}

		#isChecked
		{
		  	display: none;
			
		}

		@media (max-width: 700px)
		{
		  .navlinks
		  {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
		    position: fixed;
		    width: 95%;
		    height: auto;
		    padding-bottom: 5px;
		    text-align: center;
		    background: #222831;
		    top: -100%;
		    transition: all 0.5s ease-in-out;
		    border-radius: 10px;
		    z-index: 9;
		    left: 50%;
		    transform: translate(-50%, 0);
		  }

		  .navlinks a
		  {
		    font-size: 20px;
			margin-top: 30px;
		  }

		  .navlinks a:last-child{
			  margin-bottom: 30px;
		  }

		  .navlinks a:hover
		  {
		    border-bottom: none;
		  }

		  .menu-btn
		  {
		    display: block;
			position: absolute;
			right: 0px;
		  }

		  #isChecked:checked ~ .navlinks
		  {
		    top: 15%;
		  }
		}

    </style>
 </head>

 <div class="body">
    <header class="header">
      	<nav class="main-nav">
	        <input type="checkbox" id="isChecked" />

	        <label for="isChecked" class="menu-btn">
	        	<i class="fa fa-bars"></i>
	        </label>

	        <div class="logo">
	        	<a href="home"><img src="background/HD-logo.jpg" class="logoimg"></a>
			</div>

	        <div class="navlinks">

	        	<a href="home">HOME</a>
				<a href="courses">COURSES</a>
	          	<a href="aboutme">ABOUT</a>
	          	<?php
	          	if(isset($_SESSION['username']))
	          	{
	          	?>
					<a href="logout.php" style="text-decoration: none;"><?php echo $_SESSION['username']; ?> <i class="fa fa-sign-out"></i></a>
				<?php
				}
				else
				{
					?>
					<a onclick="openForm('myForm1', 'myForm2')" style="text-decoration: none;"><i class="fa fa-sign-in"></i> LOGIN</a>
					<?php
				}
				?>

	        </div>
      	</nav>
    </header>
</div>
</html>
