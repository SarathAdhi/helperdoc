<?php
	include "navbar.php";
	include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HDoc | <?php echo $_GET['id']; ?></title>

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
		.border h2
		{
			max-width: 90%;
			background: rgba(0, 0, 0, 0.8);
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

				$count1 = 0;
				$count2 = 0;

				$sql1 = mysqli_query($db, "SELECT * FROM `notes_hd` WHERE `coursecode` = '{$_GET["id"]}' AND `module` = 'Syllabus';");
				$sql2 = mysqli_query($db, "SELECT * FROM `notes_hd` WHERE `coursecode` = '{$_GET["id"]}' ORDER BY `module` ASC;");

				$row_syl = mysqli_fetch_assoc($sql1);
				echo "<h1>Syllabus</h1>";												/*Syllabus Only*/
				echo '<br><div class="border">';
				echo '<br><h2 style="color: white;">'.$row_syl['module'].'</h2><a href="'.$row_syl['link'].'" target="_blank" style="color: white;">click here</a><br><br><br>';
				echo '</div><br>';


				while($row = mysqli_fetch_assoc($sql2))
				{
					if($row['module'] == 'Other')
					{
						if($count1 == 0)
						{
							echo "<h1>Others</h1>";
							$count1 = $count1 + 1;
						}
						echo '<br><div class="border">';
						echo '<br><h2 style="color: white;">'.$row['topic'].'</h2><a href="'.$row['link'].'" target="_blank" style="color: white;">click here</a><br><br><br>';
						echo '</div><br>';
					}
					else
					{
						if($count2 == 0)
						{
							echo "<h1>Module Notes</h1>";
							$count2 = $count2 + 1;
						}
						echo '<br><div class="border">';
						echo '<br><h2 style="color: white;">'.$row['module'].'<br><br>'.$row['topic'].'</h2><a href="'.$row['link'].'" target="_blank" style="color: white;">click here</a><br><br><br>';
						echo '</div><br>';
					}
				}
			?>
		</center>
	</section>
</body>
</html>