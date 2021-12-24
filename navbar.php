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

		.body
		{
			margin-top: 5px;
		  	display: grid;
		  	place-items: center;
		  	position: relative;
		}

		.header
		{
		  	background-color: #523BF3;
		  	font-family: Consolas !important;
		  	width: 80%;
		  	border-radius: 10px;
		}

		.main-nav
		{
		  	height: 90px;
		}

		.logo
		{
		  	color: palegoldenrod;
		  	line-height: 90px;
		  	font-size: 30px;
		  	font-weight: bold;
		  	text-decoration: none;
		  	margin-left: 30px;
		  	font-family: "AstroSpace", sans-serif;
		}

		.logo:hover
		{
			color: white;
		  	text-decoration: none;
		}
		.text
		{
		  	color: white;
		  	line-height: 90px;
		  	font-size: 20px;
		  	font-weight: bold;
		  	text-decoration: none;
		  	margin-left: 10px;
		  	font-family: "AstroSpace", sans-serif;
		  	display: none;
		}

		.main-nav .logoimg
		{
		  	position: absolute;
		  	height: 40px;
		 	margin-top: 25px;
		  	padding-left: 10px;
		}

		.navlinks
		{
		  	list-style: none;
		  	float: right;
		  	line-height: 90px;
		  	margin: 0;
		  	padding: 0;
		}

		.navlinks li
		{
		  	display: inline-block;
		  	margin: 0 10px;
		}

		.navlinks li a
		{
		  	color: white;
		  	text-decoration: none;
		  	font-size: 18px;
		  	text-transform: uppercase;
		  	transition: all 0.3s linear 0s;
		  	font-weight: bold;
		}

		.navlinks li a:hover
		{
		  	color: #7ebcb9;
		  	padding-bottom: 7px;
		  	border-bottom: 2px solid #7ebcb9;
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
		    position: fixed;
		    width: 95%;
		    height: auto;
		    padding-bottom: 5px;
		    text-align: center;
		    background: #222831;
		    top: -100%;
		    transition: all 0.5s;
		    border-radius: 10px;
		    z-index: 9;
		    left: 50%;
		    transform: translate(-50%, 0);
		  }

		  .navlinks li
		  {
		    display: block;
		  }

		  .navlinks li a
		  {
		    font-size: 20px;
		  }

		  .navlinks li a:hover
		  {
		    border-bottom: none;
		  }

		  .menu-btn
		  {
		    display: block;
		  }

		  .logo
		  {
		    display: none;
		  }

		  .text
		  {
		    display: inline-block;
		  }

		  #isChecked:checked ~ .navlinks
		  {
		    top: 15%;
		  }
		}

		@media (max-width: 700px)
		{
		  .header
		  {
		    width: 95%;
		  }

		  .checkbox
		  {
		    background-color: white;
		  }
		  
		  .logoimg
		  {

		    display: inline-block;
		  }

		  .menu-btn {
		    margin-right: 15px;
		    font-size: 25px;
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

	        <a href="home" class="logo">HelperDOC </a>
	        <a href="home" class="text">H_DOC</a>
	        <a href="home"><img src="background/open-book.png" class="logoimg"></a>

	        <ul class="navlinks">

	        	<li><a href="home">HOME</a></li>
				<li><a href="courses">COURSES</a></li>
	          	<li><a href="aboutme">ABOUT ME</a></li>
	          	<?php
	          	if(isset($_SESSION['username']))
	          	{
	          	?>
					<li><a href="logout.php" style="text-decoration: none;"><?php echo $_SESSION['username']; ?> <i class="fa fa-sign-out"></i></a></li>
				<?php
				}
				else
				{
					?>
					<li><a onclick="openForm('myForm1', 'myForm2')" style="text-decoration: none;"><i class="fa fa-sign-in"></i> LOGIN</a></li>
					<?php
				}
				?>

	        </ul>
      	</nav>
    </header>
</div>
</html>
