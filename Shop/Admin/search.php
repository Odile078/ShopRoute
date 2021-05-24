<?php

session_start();
include('includes/header.php');
include('includes/navbar.php');

?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body"> 

            <div class="form-group">
                <label> Username </label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control checking_email" placeholder="Enter Email">
                <small class="error_email" style="color: red;"></small>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
            </div>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">
<!-- DataTales Example-->
<div class="container">
<h1></h1></div>
<div class="row">
<div class="container content">
<!-- Topbar Search -->
<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" name="search" class="form-control bg-light border-0 small" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2" >
              <div class="input-group-append ">
                <button type="submit" name="submit-search" class="btn btn-primary"></button>
              </div>
            </div>
          </form>
</div>
<div class="container">
<h1></h1></div>
</div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-8 font-weight-bold text-primary">List Of Registered Users
               

            </h6>

        </div>
        <div class="card-body">

            <?php
            if(isset($_SESSION['success']) && $_SESSION['success'] !='')
            {
                echo '<h2> '.$_SESSION['success'].'</h2>';
                unset($_SESSION['success']);

            }

            if(isset($_SESSION['status']) && $_SESSION['status'] !='')
            {
                echo '<h2 class="bg-info"> '.$_SESSION['success'].'</h2>';
                unset($_SESSION['status']);

            }
            ?>
            <div class="table-responsive">

                <?php
                $conn = mysqli_connect("localhost","root","","shoproute");

                if (isset($_POST['submit-search'])){
                    $search = mysqli_real_escape_string($conn, $_POST['search']);
                    $sql = "SELECT * FROM orderform WHERE firstname LIKE '%search%' OR lastname LIKE '%search%' OR country LIKE '%search%' OR city LIKE '%search%'";
                    $result = mysqli_query($conn, $sql);
                    $queryResult = mysqli_num_rows($result);

                    echo "There are ".$queryResult."results!";

                    if($queryResult > 0)
                        {
                            while ($row = mysqli_fetch_assoc($result))
                            {
                                echo "
                                <table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
                         <thread>
                         <tr>
                            <th>ID</th>
                            <th>FirstName</th>
                            <th>LastName</th>
                            <th>email</th>
                            <th>Phone Number</th>
                            <th>Country</th>
                            <th>City</th>
                            <th>city Address</th>
                            <th>Zip</th>
                            
                         </tr>
                         </thread>
                         <tbody>
                         <tr>
                            <td> ".$row['id']."</td>
                            <td>". $row['firstname']."</td>
                            <td> ".$row['lastname']."</td>
                            <td> ".$row['email']."</td>
                            <td> ". $row['phonenumber']."</td>
                            <td> ". $row['country']."</td>
                            <td> ". $row['city']."</td>
                            <td> ". $row['streetaddress']."</td>
                            <td> ". $row['zip']."</td>
                        
                         </tr>
                                ";
                            }
                        }
                        else{
                            
                            echo "There are no results matching your search!";
                            
                        }
                    
                }
                ?>
                
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid-->

<?php
include('includes/scripts.php');

?>