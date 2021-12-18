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
		.form-popup
        {
            display: none;
            position: relative;
            z-index: 9;
            max-width: 600px;
        }

	</style>
</head>
<body>

<section>

	<a class="scroll" href="#content"><span>&#11165;</span></a>

	<div class="content" id="content">
		<center>
			<br>

			<div class="border2">

				<h2>Quine-McCluskey Solver</h2><a href="http://quinemccluskey.com/" target="_blank">click here</a>
				<br><br>

			</div>

			<br><br>

			<div class="border">

				<h2>Karnaugh Map Solver</h2>
				
				<button class="open-button" onclick="openForm('kmap')" style="border-radius: 10px;">Click here</button><br><br>

				<div class="form-popup" id="kmap">
					<iframe src="https://www.charlie-coleman.com/experiments/kmap/" style="border:0px #ffffff none;" name="myiFrame" frameborder="1" marginheight="0px" marginwidth="0px" height="500px" width="100%" allowfullscreen></iframe>
					<br>
					<button type="button" class="btn cancel" onclick="closeForm('kmap')">Close</button>
				</div>

			</div>

			<br><br>
			
		</center>
	</div>
</section>

</body>
<script>
    function openForm(x) {
        document.getElementById(x).style.display = "block";
        var elem = document.getElementById(x);
        elem.scrollIntoView();
    }

    function closeForm(x) {
        document.getElementById(x).style.display = "none";
        window.scrollBy(0,-20);
    }
</script>
</html>