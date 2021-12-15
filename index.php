<!DOCTYPE html>
<html lang="en" >
<head>
  	<meta charset="UTF-8">
  	<title>HOME</title>
  	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">

  	<style type="text/css">
  		#popUpWindow
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
  	<button type='button' class="btn btn-success" data-toggle="modal" data-target="#popUpWindow">Login</button>
  
  	<div class="modal fade" id="popUpWindow">
    	<div class="modal-dialog">
      		<div class="modal-content">
        		<div class="modal-header">
		          	<button type="button" class="close" data-dismiss="modal">&times;</button>
		          	<h3 class="modal-title">Login Form</h3>
		        </div>
		        <div class="modal-header">
		          	<form action="" method="post">
		            	<div class="form-group">
		              		<input type="email" name="email" class="form-control" placeholder="Enter your VIT-email"/>
		              		<br>
		              		<input type="password" name="password" class="form-control" placeholder="Password" />
		            	</div>
		          	</form>
		        </div>
		        <div class="modal-footer">
		          	<button class="btn btn-primary btn-block">Log In</button>
		        </div>
        
      		</div>
    	</div>
  	</div>
  
</div>

<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>

</body>
</html>
