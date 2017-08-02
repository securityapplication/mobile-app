<?php
	require('includes/connection.php');
     session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>key</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">


</head>
<body>


<div class="row" style="border-radius: 10px;background-color:rgba(187, 221, 187, 0.45);  min-height: 100px;">
</div>




<div class="row">
<center><h1>Switch User</h1></center>

<div class="col-md-4"></div>

<div class="col-md-4" style="border-radius: 10px;background-color:rgba(187, 221, 187, 0.45);  min-height: 300px;">

<div class="form">
<form action="" method="post" name="access"><br><br><br><br>
<center><a href='login.php' class="btn btn-primary btn-lg">Resident</a></center><br><br><br>
<center><a href='adlogin.php' class="btn btn-danger btn-lg">Admin</a></center>
</div>
</div>
<div class="col-md-4"></div>
</div>
<!-- script -->
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
