<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "shoproute");

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$firstname = mysqli_real_escape_string($link, $_REQUEST['firstname']);
$lastname = mysqli_real_escape_string($link, $_REQUEST['lastname']);
$country = mysqli_real_escape_string($link, $_REQUEST['country']);
$streetaddress = mysqli_real_escape_string($link, $_REQUEST['streetaddress']);
$city = mysqli_real_escape_string($link, $_REQUEST['city']);
$zip = mysqli_real_escape_string($link, $_REQUEST['zip']);
$phonenumber = mysqli_real_escape_string($link, $_REQUEST['phonenumber']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$pay = mysqli_real_escape_string($link, $_REQUEST['pay']);
// Attempt insert query execution
$sql = "INSERT INTO orderform (firstname, lastname, country, streetaddress, city, zip, phonenumber, email, pay) VALUES ('$firstname', '$lastname','$country','$streetaddress','$city','$zip', '$phonenumber', '$email','$pay')";
if (mysqli_query($link, $sql)) {
    echo "
    <head>
       <link rel='stylesheet' href='css/thank.css'>
    </head>
    <body>
    <div class='top'>
      <div class='success-page'>
       <img  src='images/pay.gif' class='center' alt='' />
        <h2>Payment Successful !</h2>
         <p>We are delighted to inform you that we received your payments</p>
          <a href='Simba.html' class='btn-view-orders'><b>Continue Shopping</b></a>
      </div>
    </div>
    </body>
";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
