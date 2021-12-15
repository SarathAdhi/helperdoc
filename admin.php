<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>admin</title>
</head>
<body>

<section>
	<div class="content">

		<form action="" method="post">
			
			<p style="font-size: 20px;">password:</p>
			<input type="password" name="password" placeholder="Enter password" required width="300px" height="10px">
			<button type="submit" name="submit" style="width: 60px; height: 30px;">Submit</button>

		</form>

	</div>
</section>

<?php
	if(isset($_POST['submit']))
	{
		$pass = 123123123;
		if($_POST['password'] == $pass)
		{
		?>
			<script type="text/javascript">
				location.replace('adminpage.php');
			</script>
		<?php
		}
		else
		{
		?>
			<script type="text/javascript">
				alert("Wrong password :(");
			</script>
		<?php
		}

	}
?>

</body>
</html>