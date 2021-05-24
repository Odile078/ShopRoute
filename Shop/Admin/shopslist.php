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
                <label> shopNname </label>
                <input type="text" name="ShopName" class="form-control" placeholder="Enter Shop name" required>
            </div>
            
            
            <div class="form-group">
                <label>Phone number</label>
                <input type="text" name="Phonenumber" class="form-control" placeholder="Enter Phone number" required>
            </div>
            <div class="form-group">
                <label>Confirm Phone number</label>
                <input type="text" name="confirmPhonenumber" class="form-control" placeholder="Confirm Phone number" requied>
            </div>
            <div class="form-group">
                <label>Adress</label>
                <input type="text" name="Adress" class="form-control" placeholder="enter address" required>
                <small class="error_email" style="color: red;"></small>
            </div>
            <div class="form-group">
                <label>Start Date</label>
                <input type="date" name="StartDate" class="form-control" placeholder="Start Date" required>
                
            </div>
            <div class="form-group">
                <label>End Date</label>
                <input type="date" name="EndDate" class="form-control" placeholder="Enter End Date" required>
                
            </div>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="shopbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">
<!-- DataTales Example-->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-8 font-weight-bold text-primary">List Of Shops
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                Add Shop 
                </button>

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
                echo '<h2 class="bg-info"> '.$_SESSION['status'].'</h2>';
                unset($_SESSION['status']);

            }
            ?>
            <div class="table-responsive">

            <?php
             $connection = mysqli_connect("localhost","root","","shoproute");

            $query = "SELECT * FROM shops";
            $query_run = mysqli_query($connection, $query);

            ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thread>
                        <tr>
                            <th>ID</th>
                            <th>ShopName</th>
                            <th>phonenumber</th>
                            <th>Address</th>
                            <th>Start Date </th>
                            <th>End Date</th>
                            
                            
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
                            <td><?php echo $row['shopName']; ?></td>
                            <td><?php echo $row['Phonenumber']; ?></td>
                            <td><?php echo $row['Adress']; ?></td>
                            <td><?php echo $row['StartDate']; ?></td>
                            <td><?php echo $row['EndDate']; ?></td>
                            
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