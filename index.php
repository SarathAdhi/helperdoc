<!DOCTYPE html>
<html lang="en" >
<head>
  	<meta charset="UTF-8">
  	<title>HOME</title>
  	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">

  	<style type="text/css">
  		#login
  		{
		  	//background: lightblue; 
		}
  	</style>
</head>
<body>

<div class="container">

	<h1>Your information are stored securely using hashing. Dont worry :)</h1>
	<br>
	<h3>Log In or Signup</h3>

  	<button type='button' class="btn btn-success" data-toggle="modal" data-target="#login">Login</button>
  	<button type='button' class="btn btn-success" data-toggle="modal" data-target="#signup">Signup</button>
  
  	<div class="modal fade" id="login">
    	<div class="modal-dialog">
      		<div class="modal-content">
        		<div class="modal-header">

		          	<button type="button" class="close" data-dismiss="modal">&times;</button>
		          	<h3 class="modal-title">Login Form</h3>

		        </div>
		        <div class="modal-header">

		          	<form action="" method="post">
		            	<div class="form-group">
		              		<input type="text" name="text" class="form-control" placeholder="Enter your Username"/>
		              		<br>
		              		<input type="password" name="password" class="form-control" placeholder="Password" />
		            	</div>
		            	<div class="modal-footer">
				          	<button class="btn btn-primary btn-block" type="submit" name="loginbutton">Create an account</button>
				        </div>
		          	</form>
		        </div>
      		</div>
    	</div>
  	</div>

  	<div class="modal fade" id="signup">
    	<div class="modal-dialog">
      		<div class="modal-content">
        		<div class="modal-header">

		          	<button type="button" class="close" data-dismiss="modal">&times;</button>
		          	<h3 class="modal-title">Signup Form</h3>

		        </div>
		        <div class="modal-header">

		          	<form action="" method="post">
		            	<div class="form-group">
		              		<input type="text" name="username" class="form-control" placeholder="Enter your Username"/>
		              		<br>
		              		<input type="password" name="password" class="form-control" placeholder="Password" />
		              		<br>
		              		<input type="password" name="password2" class="form-control" placeholder="Re-Enter your Password" />
		              		<br>
		              		<button class="btn btn-primary btn-block" type="submit" name="signupbutton">Create an account</button>
		            	</div>
				          	
		          	</form>
		        </div>
      		</div>
    	</div>
  	</div>
</div>

<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>

<?php
	if(isset($_POST['signupbutton']))
	{
		?>
		<script type="text/javascript">
			alert('sign');
		</script>
		<?php
	}
	else if (isset($_POST['loginbutton']))
	{
		?>
		<script type="text/javascript">
			alert('log');
		</script>
		<?php
	} 
	else 
	{
		echo 'hlo';
	}
	
?>

</body>
</html>
