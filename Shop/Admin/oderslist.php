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
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="search.php" method="POST">
            <div class="input-group">
              <input type="text" name="search" class="form-control bg-light border-0 small" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2" >
              <div class="input-group-append ">
                <button type="submit" name="submit-search" class="btn btn-primary">SEARCH</button>
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
             $connection = mysqli_connect("localhost","root","","shoproute");

            $query = "SELECT * FROM orderform";
            $query_run = mysqli_query($connection, $query);

            ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                        <?php
                        if(mysqli_num_rows($query_run)>0)
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                                ?>
                                
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['firstname']; ?></td>
                            <td><?php echo $row['lastname']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['phonenumber']; ?></td>
                            <td><?php echo $row['country']; ?></td>
                            <td><?php echo $row['city']; ?></td>
                            <td><?php echo $row['streetaddress']; ?></td>
                            <td><?php echo $row['zip']; ?></td>
                            
                        </tr>
                        <?php
                            }
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid-->

<?php
include('includes/scripts.php');

?>