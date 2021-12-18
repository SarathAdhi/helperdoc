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
			max-width: 600px;
			background: rgba(0, 0, 0, 0.5);
			border-radius: 10px;
		}

	</style>
</head>
<body>
	<section class="section1">
		<center>
		<br>
		<h1><?php echo $_GET['id']; ?></h1>
			<?php

				$sql = mysqli_query($db, "SELECT * FROM `notes_hd` WHERE `coursecode` = '{$_GET["id"]}' ORDER BY `module` ASC;");

				while($row = mysqli_fetch_assoc($sql))
				{
					if($row['module'] == 'Other')
					{
						echo '<br><div class="border">';
						echo '<br><h2 style="color: white;">'.$row['topic'].'</h2><a href="'.$row['link'].'" target="_blank" style="color: white;">click here</a><br><br><br>';
						echo '</div><br>';
					}
					else
					{
						echo '<br><div class="border">';
						echo '<br><h2 style="color: white;">'.$row['module'].'</h2><a href="'.$row['link'].'" target="_blank" style="color: white;">click here</a><br><br><br>';
						echo '</div><br>';
					}
				}
			?>
		</center>
	</section>
</body>
</html>