	
<!DOCTYPE html> 
<html>
<head>
	<title>HOSPITAL SYSTEM</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>

#login_form{
    width:350px;
    height:350px;
    position:relative;
    top:10px;
    margin: auto;
    padding: auto;
   
}

</style>
</head>

<body>
	<div class="container">
	   <div class="row">
        <?php include 'menu.php'; ?>       
	   </div>
	   <br>
	  
<center> 
     <h1><center><span class="glyphicon glyphicon-lock"></span> Patient Login</center></h1>
</center>
  </div>
  <div class="container">
	<div id="login_form" ><hr>
		<form method="POST" action="check-loginU.php">
		Patient Name : <input type="text" name="username" placeholder="Enter username" class="form-control" required>
		<div style="height: 15px;"></div>		
		Password : <input type="password" name="password" placeholder="Enter password" class="form-control" required> 
		<div style="height: 10px;"></div>
		<div style="height: 10px;"></div>

	
		<button type="submit" name="login" class="btn btn-success"><span class="glyphicon glyphicon-log-in"></span> Login</button>  New account? <a href="signupU.php">   Sign up</a>

     
        <!--<a style="color:Red;" href="">   Home</a>-->
		</form>
		<div style="height: 15px;"></div>
		<div style="color: red; font-size: 15px;">
			<center>
			<?php
                @session_start();
                if (isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
            ?>
			</center>
		
		</div>
	</div>
</div>
 



<br>
<br>
<br>
<br>
<marquee behavior="alternate" direction="up" width="100%"><marquee direction="right">&copy;  2018 Department Of Information and Tchnology, Faculty of Science and Tchnology , Fatoni University   </marquee></marquee>

</body>
</html>