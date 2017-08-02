<!--update--> 
 <?php
require('includes/connection.php');
?>
<?php
 //edit variable
if(isset($_GET['editid'])){

  $editid=$_GET['editid'];
  }
     elseif(isset($_POST['editid'])){
    $editid = $_POST['editid'];
    $username=ucfirst(mysqli_real_escape_string($con,$_POST['username']));
    $password=ucfirst(mysqli_real_escape_string($con,$_POST['password']));

    $query="UPDATE users SET username='{$username}',password='{$password}'
    WHERE id=$editid";

    $result=mysqli_query($con,$query) or die ("Query failed".mysqli_error($con));
        header("Location:edit.php?editid=$editid&success=1");
}
  else{
    header("Location:register.php");
  }

//sql statement
  $query="SELECT * FROM users WHERE id=$editid";
   $result=mysqli_query($con,$query) or die ("Query failed".mysqli_error($con));
       while($row=mysqli_fetch_array($result)){
  $username=$row['username'];
  $password=$row['password'];
       }
      ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- Latest compiled and minified CSS -->
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
 <center><h1>Edit residents</h1></center>

  <div class="col-md-4"></div>
    <div class="col-md-4"style="border-radius: 10px;background-color:rgba(187, 221, 187, 0.45);  min-height: 100px;">
    <br>
    <br>
    <br>



    <form action="edit.php" method="POST" name="guest_form" onsubmit="return validate()">
      <input type="text" class="form-control" value="<?php echo $username;?>" name="username"></input><br><br>
    
      <input type="text" class="form-control" placeholder="password" value="<?php echo $password;?>"/><br><br>
    


<div class="row">

    <div class="col-md-6">
       <center><input type="submit" name="submit" value="Submit" class="btn btn-primary btn-lg" /></center>
    </div>

    <div class="col-md-6">
       <a href="register.php" class="btn btn-success btn-lg">Done</a>
    </div>

</div>
<br><br>
    </form>

    <script>
   function validate() {
    var fname=document.guest_form.firstname.value;
    var lname=document.guest_form.lastname.value;
    if (fname=="") {
      alert('Please Enter firstname');
      return false;
    }
   if(lname==""){
    alert('Please enter lastname')
      return false;
   }
    
    return true;
 
    } 
 </script>

  </div>
   <div class="col-md-4"></div>
</div>

</div>
</div>


<!--CONTENT TABLE-->




<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>