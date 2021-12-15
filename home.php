<?php
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
		<a href="cao.php">CAO</a>
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

			?>
				<script type="text/javascript">
					alert("THANK YOU FOR LOVE :D");
				</script>
			<?php
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
-->
</html>