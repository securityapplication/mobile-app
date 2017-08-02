<?php
require('includes/connection.php');
include("includes/session.php");  ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Your home security</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">


</head>
<body>


<div class="row" style="border-radius: 10px;background-color:rgba(187, 221, 187, 0.45);  min-height: 100px;">
<div class="col-md-3"></div>
<div class="col-md-3"></div>
<div class="col-md-3"></div>
<div class="col-md-3">
	<center><a href="logout.php" class="btn btn-danger btn-lg" id="logout">Logout</a></center>
</div>



</div>





<div class="row">
<center><h1>My security status</h1></center>


<div class="col-md-4"></div>

<div class="col-md-4" style="border-radius: 10px;background-color:rgba(187, 221, 187, 0.45);  min-height: 300px;">

<div class="form"><br><br><br><br>
<center><p>You are fully secure from any attack at your home for now<br>thankyou for using our site.</p></center>
<br>
<br>
<br>

<div class="row">

    <div class="col-md-6">
        <center><a href='index.php' class="btn btn-success btn-lg">Back</a></p></center> 
    </div>

    <div class="col-md-6">
    
    </div>

</div>






<br>
</div>
</div>
<div class="col-md-4"></div>
</div>
<!-- script -->
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
