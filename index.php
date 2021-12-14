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

	<div class="content" id="content">
		<center>

			<div class="border">

				<h2>PERFORMANCE OF A PROCESSOR</h2><a href="https://www.geeksforgeeks.org/computer-organization-performance-of-computer/" target="__blank">click here</a>
				<br><br>
			</div>
			<br><br>

			<div class="border2">

				<h3>Addition</h3>
				<p>Ripple-Carry Addition , Manchester Adder , Carry-Look-Ahead Adder , Ling's Adder , Conditional-Sum Adder , Carry-Select Adder , Carry-Skip Adder , Hybrid Adder (Lynch and Swartzlander)</p>

				<h3>Multiplication</h3>
				<p>Sequential , Booth's Algorithm , Modified Booth's Algorithm , Two's Complement Array Multiplier , Fused Multiplier-Adder , Multiplication by a Constant</p>

				<h3>Division</h3>
				<p>Restoring , Non-Restoring , SRT Radix-2 , SRT Radix-4 , SRT Radix-8 , SRT with overalpping stages , By Convergence , By Convergence With Table Lookup , By Reciprocation</p>


				<h3>Square Root</h3>
				<p>Restoring , Non-Restoring , SRT Radix-2 , SRT Radix-4 , By convergence</p>

				<h2>ALL IN ONE CALCULATOR</h2><a href="https://www.ecs.umass.edu/ece/koren/arith/simulator/" target="__blank">click here</a>
				<br><br>

			</div>

			<br><br>
			<div class="border">
			
				<h2>NON RESTORING DIVISION</h2><a href="nondivi.php" target="__blank">click here</a>
				<br><br>

			</div>
			<br><br>
			<div class="border2">

				<h2>BOOTHS MULTIPLICATION</h2><a href="http://www.grahn.us/projects/booths-algorithm/" target="__blank">click here</a>
				<br><br>

			</div>
			<br><br>
			<div class="border">

				<h2>MODIFIED BOOTHS MULTIPLICATION</h2><a href="https://www.ecs.umass.edu/ece/koren/arith/simulator/ModBooth/" target="__blank">click here</a>
				<br><br>

			</div>
			<br><br>
			<div class="border2">

				<h2>IEEE CONVERSION</h2><a href="https://binary-system.base-conversion.ro/convert-real-numbers-from-decimal-system-to-32bit-single-precision-IEEE754-binary-floating-point.php" target="__blank">click here</a>
				<br><br>

			</div>
			<br><br>
			<div class="border">

				<h2>PAGE REPLACEMENT SUM</h2><a href="https://solver.assistedcoding.eu/page_replacement" target="__blank">click here</a>
				<br><br>

			</div>

		</center>
	</div>
</section>
<h1>Thanks laa Aparom sollugaa namba...<span style="color: red;">&#9829;
</span></h1>
<h1>Like this page:</h1>

<form action="" method="post">
	<button type="submit" name="submit"><span>&#128077;</span></button>
</form>
</body>

<?php
	
	if(isset($_POST['submit']))
	{
		$sql = mysqli_query($db, "SELECT `like` FROM `like_cheatnow`;");

		$res = mysqli_fetch_assoc($sql);
		$c = $res['like'] + 1;

		$sql2 = mysqli_query($db, "UPDATE `like_cheatnow` SET `like` = $c;");

		$sql2 = mysqli_query($db, "SELECT `like` FROM `like_cheatnow`;");

		$res2 = mysqli_fetch_assoc($sql2);

		echo '<h1>Number of peoples who likes this page including you: '; echo $res2['like']; echo '</h1>';
	}
?>



<!-- 
mod 1 perfomance of processors
mod 2 fully numericals thaan....
mod 4 memory allocation(fifo,optimal page replacement ,etc....)
mod 6 raid
thats all ig..... 
-->
</html>