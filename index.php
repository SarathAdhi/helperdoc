<?php
	include "navbar.php";
	include "connection.php";

	$ip1 = $_SERVER['REMOTE_ADDR'];
	$count = 0;
	$sql3 = mysqli_query($db, "SELECT * FROM `people_cheatnow` WHERE `ip` = '$ip1';");
	while($check1 = mysqli_fetch_assoc($sql3))
	{
		if($check1['ip'] == $ip1)
		{
			$count = $check1['count'] + 1;
		}
	}

	if($count == 0)
	{
		$sql4 = mysqli_query($db, "INSERT INTO `people_cheatnow` VALUES ('$ip1', 1);");
	}
	else
	{
		
		$sql5 = mysqli_query($db, "UPDATE `people_cheatnow` SET `count` = $count WHERE `ip` = '$ip1';");
	}

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

				<h2>PERFORMANCE OF A PROCESSOR</h2><a href="https://www.geeksforgeeks.org/computer-organization-performance-of-computer/" >click here</a>
				<br><br>
			</div>

			<br><br>

			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7928001530877143" crossorigin="anonymous"></script>

			<div class="border2">

				<h3>Addition</h3>
				<p>Ripple-Carry Addition , Manchester Adder , Carry-Look-Ahead Adder , Ling's Adder , Conditional-Sum Adder , Carry-Select Adder , Carry-Skip Adder , Hybrid Adder (Lynch and Swartzlander)</p>

				<h3>Multiplication</h3>
				<p>Sequential , Booth's Algorithm , Modified Booth's Algorithm , Two's Complement Array Multiplier , Fused Multiplier-Adder , Multiplication by a Constant</p>

				<h3>Division</h3>
				<p>Restoring , Non-Restoring , SRT Radix-2 , SRT Radix-4 , SRT Radix-8 , SRT with overalpping stages , By Convergence , By Convergence With Table Lookup , By Reciprocation</p>


				<h3>Square Root</h3>
				<p>Restoring , Non-Restoring , SRT Radix-2 , SRT Radix-4 , By convergence</p>

				<h2>ALL IN ONE CALCULATOR</h2><a href="https://www.ecs.umass.edu/ece/koren/arith/simulator/" >click here</a>
				<br><br>

			</div>

			<br><br>

			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7928001530877143" crossorigin="anonymous"></script>

			<div class="border">
			
				<h2>RESTORING DIVISION</h2>
				<a href="image/5.png" target="_blank">view flowchart</a>
				<br><br>

			</div>

			<br><br>

			<div class="border2">
			
				<h2>NON RESTORING DIVISION</h2><a href="nondivi.php" >click here</a>
				<br>
				<a href="image/4.png" target="_blank">view flowchart</a>
				<br><br>

			</div>

			<br><br>

			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7928001530877143" crossorigin="anonymous"></script>

			<div class="border">

				<h2>BOOTHS MULTIPLICATION</h2><a href="http://www.grahn.us/projects/booths-algorithm/" >click here</a>
				<br><br>

			</div>

			<br><br>

			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7928001530877143" crossorigin="anonymous"></script>

			<div class="border2">

				<h2>MODIFIED BOOTHS MULTIPLICATION</h2><a href="https://www.ecs.umass.edu/ece/koren/arith/simulator/ModBooth/" >click here</a>
				<br><br>

			</div>

			<br><br>

			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7928001530877143" crossorigin="anonymous"></script>

			<div class="border">

				<h2>IEEE CONVERSION</h2><a href="https://binary-system.base-conversion.ro/convert-real-numbers-from-decimal-system-to-32bit-single-precision-IEEE754-binary-floating-point.php" >click here</a>
				<br><br>

			</div>

			<br><br>

			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7928001530877143" crossorigin="anonymous"></script>

			<div class="border2">

				<h2>PAGE REPLACEMENT SUM</h2><a href="https://solver.assistedcoding.eu/page_replacement" >click here</a>
				<br><br>

			</div>

			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7928001530877143" crossorigin="anonymous"></script>

     		<br><br>

     		<div class="border">

				<h2>HAMMING CODE</h2><a href="https://www.ecs.umass.edu/ece/koren/FaultTolerantSystems/simulator/Hamming/HammingCodes.html" >click here</a>
				<br><br>

			</div>

			<br><br>

			<div class="border2">

				<h2>ADDITION & SUBTRACTION</h2><a href="image/3.jpg" target="_blank">view flowchart</a>
				<br><br>

			</div>

			<br><br>
			
		</center>
	</div>
</section>

<h2>தூய தமிழன்</h2>
<h2>Thank me later...<span style="color: red;">&#9829;
</span></h2>


<form action="" method="post">
	<p style="font-size: 20px;">NOTE: Your information are stored securely using hashing. Dont worry :)</p>
	<input type="text" name="name" placeholder="Enter your name" required width="300px" height="10px">
	<h1>Like this page: <button type="submit" name="submit"><span style="color: yellow;">&#128077;</span></button></h1>
	
</form>
</body>

<?php
	
	if(isset($_POST['submit']))
	{
		$ip = $_SERVER['REMOTE_ADDR'];
		
		$count = 0;

		$check = mysqli_query($db, "SELECT * FROM `user_cheatnow` WHERE `name` = '$_POST[name]' AND `ip` = '$ip';");

		while($r = mysqli_fetch_assoc($check)) /*checking if the name already exist */
        {
            if($r['name'] == $_POST['name'])
            {
                $count=$count+1;
            }
            
        }
		if($count != 0)
		{
			?>
				<script type="text/javascript">
					alert("Username already exist or You have already liked our website. THANK YOU");
				</script>
			<?php
		}
		else
		{
				
			$sql = mysqli_query($db, "INSERT INTO `user_cheatnow` VALUES ('$_POST[name]', '$ip');");

			$sql1 = mysqli_query($db, "SELECT `like` FROM `like_cheatnow`;");

			$res = mysqli_fetch_assoc($sql1);
			$c = $res['like'] + 1;

			$sql2 = mysqli_query($db, "UPDATE `like_cheatnow` SET `like` = $c;");
		}

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