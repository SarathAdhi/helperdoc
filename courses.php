<?php
	include "navbar.php";
	include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HOME</title>
	<style type="text/css">
		.content
		{

		}
		.content .border
		{
			border: 5px solid red;
		}
		.content .border2
		{
			border: 5px solid blue;
		}
		.scroll 
		{
			position: fixed;
			top: 90%;
			right: 0;
			text-decoration: none;
			background-color: lightgrey;
			width: 30px;
		}
		.scroll span
		{
			font-size: 30px;
			color: black;
		}

	</style>
</head>
<body>

<section>

	<a class="scroll" href="#content"><span>&#11165;</span></a>

	<center>

		<div class="content" id="content">
			<h3>COMPUTER ARCHITECTURE AND ORGANISATION CSE2001  <a href="cse2001.php">click here..</a></h3>
		</div>
		<div class="content" id="content">
			<h3>DISCRETE MATHEMATICS AND GRAPH THEORY MATH1014 <a href="math1014.php">click here..</a></h3>
		</div>

		
	</center>
</section>

</body>
</html>