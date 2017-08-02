<?php
require("includes/adsession.php");  ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body >



<div class="row" style="border-radius: 10px;background-color:rgba(187, 221, 187, 0.45);  min-height: 100px;">
<div class="col-md-3"></div>
<div class="col-md-3"></div>
<div class="col-md-3"></div>
<div class="col-md-3">
	<center><a href="adlogout.php" class="btn btn-danger btn-lg" id="logout">Logout</a></center>
</div>



</div>






<div class="row">
<center><h1>WELCOME </h1></center>
<div class="col-md-4"></div>

<div class="col-md-4" style="border-radius: 10px;background-color:rgba(187, 221, 187, 0.45);  min-height: 300px;">
<br>
<br>
<br>
<div class="form">
<center><p><p>Admin</p><?php echo $_SESSION['username']; ?>!</p></center>
<center><p>You have more work to do today. We value you</p></center>
<br>
<br>
<br>
<div class="row">

    <div class="col-md-6">
        
    </div>

    <div class="col-md-6">
    <center><a href="register.php" class="btn btn-success btn-lg">Register</a></center>   
    </div>

</div>






<br /><br /><br /><br />

</div>
</div>
<div class="col-md-4"></div>
</div>
<!-- script -->
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
