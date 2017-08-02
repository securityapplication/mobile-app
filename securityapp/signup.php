<?php
require("includes/adsession.php");  ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Sign-up Form</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">



</head>
<body>


<div class="row" style="border-radius: 10px;background-color:rgba(187, 221, 187, 0.45);  min-height: 100px;">
<div class="col-md-3"></div>
<div class="col-md-3"></div>
<div class="col-md-3"></div>
<div class="col-md-3">
	<center><a href="adlogout.php" class="btn btn-danger btn-lg" id="logout">Logout</a></center>
</div>
</div>

<div class="row">
<center><h1>Resident Registration Form</h1></center>

<div class="col-md-4"></div>
<div class="col-md-4" style="border-radius: 10px; background-color:rgba(187, 221, 187, 0.45); min-height: 300px;">
<?php
	require('includes/connection.php');
    
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); 
		$username = mysqli_real_escape_string($con,$username); 
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){

            echo "<div class='form'><h1>You are registered as a resident successfully.</h1><br/>Click here to <a href='login.php' class='btn btn-success'>Login</a></div>";
        }
    }else{
?><br><br><br>

<div class="form">
<form name="registration" action="" method="post">
<center><input type="text" name="username" placeholder="Username" class="form-control" required /><br><br></center>
<center><input type="email" name="email" placeholder="Email" class="form-control" required /><br><br></center>
<center><input type="password" name="password" placeholder="Password" class="form-control" required /><br><br></center>
        
<div class="row">

    <div class="col-md-6">
        <center><a href='adhome.php' class="btn btn-primary btn-lg">Back</a></p></center>
    </div>

    <div class="col-md-6">
       <center><input type="submit" name="submit" value="Submit" class="btn btn-primary btn-lg" /></center>
    </div>

</div>



</form>
</div>
</div>
<div class="col-md-4"></div>
</div>
<?php } ?>
<!-- script -->
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
