<?php
	include "navbar.php";
	include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>COURSES</title>
	<style type="text/css">
		body
		{
			background-color: #EBEAFD;
			font-family: Consolas !important;
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

	<?php
	if(isset($_SESSION['username']))
	{
	?>
	<a class="scroll" href="#content"><span>&#11165;</span></a>

	<center>
		<br>

		<?php
			$sql = mysqli_query($db, "SELECT DISTINCT `coursecode` FROM `notes_hd`;");
			while($row = mysqli_fetch_assoc($sql))
			{
				echo '<div class="content" id="content">';
				echo '<h3>'.$row['coursecode'].' <a href="notesview.php?id='.$row['coursecode'].'" class="btn btn-success">click here</a></h3>';
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
            	location.replace('index.php');
                alert("Please login first");
            </script>
        <?php
	}
	?>
</section>

</body>
</html>