<?php

$connection = mysqli_connect("localhost","root","","shoproute");
session_start();

if(isset($_SESSION["username"])){
  header("location:index.php");
}
if(isset($_POST['login'])){
  if(empty($_POST["username"]) ||empty($_POST["password"])){
    echo '<script>alert("Both fields are required")</script>';

  }
  else{
    $username=mysqli_real_escape_string($connection, $_POST['username']);
    $password=mysqli_real_escape_string($connection, $_POST['password']);
    $query = "SELECT * from administrators where username= '$username' and password = '$password' ";
    $result=mysqli_query($connection, $query);
    if(mysqli_num_rows($result)>0)
    {
      $_SESSION["username"]=$username;
      header("location:index.php");
    }else{
      echo '<script> alert("Wrong Credentials")</script>';
    }

  }
}

include('includes/header.php');

?>

<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

  <div class="col-xl-6 col-lg-6 col-md-6">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row"  >
          
          <div class="col-lg-12" style='background-color: lightgrey'>
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Login to the Dashboard</h1>
                
                
              </div>
              <form class="user"  method ="POST">
                    <div class="form-group">
                    <input type="text" name="username"id="username" class="form-control form-control-user"  placeholder="Username..." required>
                    </div>
                    <div class="form-group">
                    <input type="password" name="password" id="inputPassword" class="form-control form-control-user"  placeholder="Password" required>
                    </div>
                    
                    <button type="submit" name="login"  class="btn btn-primary btn-user btn-block">
                    Login
                    </button>
                    <hr>
                
              </form>
             
              
              
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

</div>

 







<?php
include('includes/scripts.php');

?>
