<?php
	include "navbar.php";
	include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $_GET['id']; ?></title>

	<style type="text/css">
		body
		{
            background-image: url('background/1.jpg');
            background-size: cover;
            background-attachment: fixed;
            font-family: Consolas !important;
		}
		.border
		{
			border: 5px solid red;
		}
	</style>
</head>
<body>
	<section class="section1">
		<center>
		<br>
			<?php

				$sql = mysqli_query($db, "SELECT * FROM `notes_hd` WHERE `coursecode` = '{$_GET["id"]}';");

				while($row = mysqli_fetch_assoc($sql))
				{
					echo '<br><div class="border">';
					echo '<h2>'.$row['module'].'</h2><a href="'.$row['link'].'" target="_blank">click here</a>';
					echo '<br></div><br><br>';

				}
			?>
		</center>
	</section>
</body>
</html>