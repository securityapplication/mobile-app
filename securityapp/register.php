<?php
 require ("includes/connection.php");
 require ("includes/adsession.php");

  if(isset($_POST['btn_guest'])){

    
    $username=ucfirst(mysqli_real_escape_string($con,$_POST['username']));
    $email=ucfirst(mysqli_real_escape_string($con,$_POST['email']));
    $password=ucfirst(mysqli_real_escape_string($con,$_POST['password']));
    $password=md5(mysqli_real_escape_string($con,$_POST['password']));

   

     $query = "INSERT into users(username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
     
    $result=mysqli_query($con,$query);

    header("Location:register.php");
 }
   
    if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];  
    $query="DELETE FROM users WHERE id=$id";
    $result=mysqli_query($con,$query);
    header("Location:register.php");
  }
  ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
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

<div class="col-md-3"></div>
<div class="col-md-6" style="border-radius: 10px;background-color:rgba(187, 221, 187, 0.45);  min-height: 100px;">
<br>
<br>
<br>
<form action="register.php" method="POST" name="guest_form" onsubmit="return validate()">
      
      <input type="text" name="username" class="form-control" placeholder="username" required /><br>
      
      <input type="text" name="email"  class="form-control" placeholder="email" required /><br>
     
      <input type="password" name="password"  class="form-control" placeholder="password" required /><br><br>
     
      

        
<div class="row">

    <div class="col-md-6">
        <center><a href='adhome.php' class="btn btn-primary btn-lg">Back</a></p></center>
    </div>

    <div class="col-md-6">
       <center><input type="submit" name="submit" value="Submit" class="btn btn-success btn-lg" /></center>
    </div>

</div>
      <br>
     
    </form>
<table class="table">
<h1>Residents</h1>
  <thead>
      <tr>
        <th style="color:white;">ID</th>
        <th style="color:white;">USERNAME</th>
        <th style="color:white;">PASSWORD</th>
        <th style="color:white;">ACTION</th>
        <th style="color:white;">EDIT</th>

     </tr>    
  </thead>

  <tbody>
    <?php
    $query="SELECT * FROM users";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)) {
      echo '
      <tr>
      <td>'.$row['id'].'</td>
      <td>'.$row['username'].'</td>
      <td>'.$row['password'].'</td>
      
      <td><a href="register.php?deleteid='.$row['id'].'" class="btn  btn-danger"  onclick="return confirm(\'Delete?\')">DELETE</a>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
      <a href="edit.php?editid='.$row['id'].'" class="btn  btn-success">Edit</a>
      </td>
      </tr>';

    }
   ?>
  </tbody>
</table>

    <script>
   function validate() {
    var username=document.guest_form.username.value;
    var password=document.guest_form.password.value;
    if (fname=="") {
      alert('Please Enter username');
      return false;
    }
   
    else {
    return true;
  }
    } 
 </script>

</div>

 

  <div class="col-md-3"></div>



</div>



<!-- script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>