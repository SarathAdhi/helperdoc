<?php
	include "navbar.php";
	include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7928001530877143" crossorigin="anonymous"></script>
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
			background: rgba(255, 255, 255, 0.8);
			border-radius: 10px;
			color: black;
		}
		.topic
		{
			max-width: 90%;
			background: rgba(0, 0, 0, 0.8);
			border-radius: 10px;
			color: white;
		}

	</style>
</head>
<body>
	<section class="section1">
		<center>
		<br>
		<?php
		if(isset($_SESSION['username']))
		{
		?>
		<h1 style="font-size: 40px;"><?php echo $_GET['id']; ?></h1>
			<?php

				$count1 = 0;
				$count2 = 0;

				$sql1 = mysqli_query($db, "SELECT * FROM `notes_hd` WHERE `coursecode` = '{$_GET["id"]}' AND `module` = 'Syllabus';");
				$sql2 = mysqli_query($db, "SELECT * FROM `notes_hd` WHERE `coursecode` = '{$_GET["id"]}' AND `module` LIKE '%module%' ORDER BY `module` ASC;");
				$sql3 = mysqli_query($db, "SELECT * FROM `notes_hd` WHERE `coursecode` = '{$_GET["id"]}' AND `module` = 'Recordings';");
				$sql4 = mysqli_query($db, "SELECT * FROM `notes_hd` WHERE `coursecode` = '{$_GET["id"]}' AND `module` = 'Other' ORDER BY `topic` ASC;");
				

				$row_syllabus = mysqli_fetch_assoc($sql1);
				$count_syllabus = mysqli_num_rows($sql1);

				$row_recording = mysqli_fetch_assoc($sql3);
				$count_recording = mysqli_num_rows($sql3);

				if($count_syllabus != 0)
				{
					echo '<h1 class="topic">Syllabus</h1>';												/*Syllabus Only*/
					echo '<br><div class="border">';
					echo '<br><h2>'.$row_syllabus['module'].'</h2><a href="'.$row_syllabus['link'].'" target="_blank" style="color: white;">click here</a><br><br><br>';
					echo '</div><br>';
				}

				while($row = mysqli_fetch_assoc($sql2))
				{
					if($count1 == 0)
						{
							echo '<h1 class="topic">Module Notes</h1>';
							$count1 = $count1 + 1;
						}
						echo '<br><div class="border">';
						echo '<br><h2>'.$row['module'].'<br><br>'.$row['topic'].'</h2><a href="'.$row['link'].'" target="_blank" style="color: white;">click here</a><br><br><br>';
						echo '</div><br>';
				}

				if($count_recording != 0)
				{
					echo '<h1 class="topic">Recordings</h1>';												/*Recordings Only*/
					echo '<br><div class="border">';
					echo '<br><h2>'.$row_recording['module'].'</h2><p>NOTE: '.$row_recording['topic'].'</p><a href="'.$row_recording['link'].'" target="_blank" style="color: white;">click here</a><br><br><br>';
					echo '</div><br>';
				}

				while($row = mysqli_fetch_assoc($sql4))
				{
					if($count2 == 0)
					{
						echo '<h1 class="topic">Others</h1>';
						$count2 = $count2 + 1;
					}
					echo '<br><div class="border">';
					echo '<br><h2>'.$row['topic'].'</h2><a href="'.$row['link'].'" target="_blank" style="color: white;">click here</a><br><br><br>';
					echo '</div><br>';
				}
			?>
		</center>

		<?php
	}
	else
	{
		?>
            <script type="text/javascript">
            	location.replace('home');
                alert("Please login first");
            </script>
        <?php
	}
	?>
	</section>
</body>
</html>