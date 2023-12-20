<?php


if($_SERVER['REQUEST_METHOD']=='POST'){

    include 'connect.php';

    $username = $_POST['name'];
    $password = $_POST['password'];





$sql ="select * from `registration` where username = '$username' and password ='$password'";
$result =mysqli_query($conn,$sql);
if($result){
    if(mysqli_num_rows($result)>0){
      //   echo '<div class="alert alert-success" role="alert">
      //   login succesfull <a href="#" class="alert-link"></a>
      // </div>';
      session_start();
      $_SESSION['username']=$username;
        
           header("location:Home.php");
        
    }

    else{
        echo '<div class="alert alert-warning" role="alert">
        Sorry,But it is invalid data
      </div>';
     
    }
}
}

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>login_up</title>
  </head>
  <body>
    
    <h1 class ='text-center'>Login page</h1>
   <div class="conatiner m-5">
   <form action ='login.php' method ='POST'>
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" placeholder ='Enter the name' name='name'>
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" placeholder ='Enter the password' name='password' >
  </div>
  
  <button type="submit" class="btn btn-primary w-100">Login</button>
  <!-- <button type="submit" class="btn btn-primary w-100">signup</button> -->
</form>
   </div>

    
  </body>
</html>