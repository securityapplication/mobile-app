<?php
	require('includes/connection.php');
     session_start();
?>
<?php
if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); 
		$username = mysqli_real_escape_string($con,$username);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: index.php"); 
            }else{

				echo 
               "<center><div class='col-md-4' style='border-radius: 10px;background-color: #bdb;  min-height: 300px;'><h1>You have Entered either a wrong Username/password.</h1><br/>Click here to <a href='login.php'>Retry</a></div></center>"
             

				;
				}
    }else{
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">


</head>
<body>
<div class="row" style="border-radius: 10px;background-color:rgba(187, 221, 187, 0.45);  min-height: 100px;">
</div>
<div class="row">
<center><h1>Resident login</h1></center>


<div class="col-md-4"></div>

<div class="col-md-4" style="border-radius: 10px;background-color:rgba(187, 221, 187, 0.45);  min-height: 300px; ">
<br><br>

<div class="form">
<form action="" method="post" name="login">
<center><input type="text" name="username" class="form-control" placeholder="House No" required /><br><br></center>
<center><input type="password" name="password" class="form-control" placeholder="Passcode" required /><br><br></center>
</div>

<div class="row">

    <div class="col-md-6">
        <center><input name="submit" type="submit" value="login" class="btn btn-success btn-lg" /></center>
    </div>

    <div class="col-md-6">
        <center><a href='key.php' class="btn btn-primary btn-lg">Back</a></p></center>
    </div>

</div>


</form><br><br>
</div>
</div>
</div>

<div class="col-md-4"></div>
<?php } ?>
<!-- script -->
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
