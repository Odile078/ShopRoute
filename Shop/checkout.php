<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "shoproute");

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$yourname = mysqli_real_escape_string($link, $_REQUEST['yourname']);
$youraddress = mysqli_real_escape_string($link, $_REQUEST['youraddress']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
$yourmessage = mysqli_real_escape_string($link, $_REQUEST['yourmessage']);
$cardname = mysqli_real_escape_string($link, $_REQUEST['cardname']);
$cardnumber = mysqli_real_escape_string($link, $_REQUEST['cardnumber']);
$expmonth = mysqli_real_escape_string($link, $_REQUEST['expmonth']);
$expyear = mysqli_real_escape_string($link, $_REQUEST['expyear']);
$telephone = mysqli_real_escape_string($link, $_REQUEST['telephone']);

// Attempt insert query execution
$sql = "INSERT INTO billing (yourname, youraddress, phone, yourmessage, cardname, cardnumber, expmonth, expyear, telephone) VALUES ('$yourname','$youraddress','$phone','$yourmessage','$cardname','$cardnumber','$expmonth','$expyear','$telephone')";
if (mysqli_query($link, $sql)) {
    echo "
    <head>
    <link rel='stylesheet' href='css/thank.css'>
    
 </head>
 <body>
 <div>
   <div class='success-page'>
    <img  src='images/pay.gif' class='center' alt='' />
     <h2>Your payment was received sucessfully</h2>
      <p>Thank you for shopping with us !!!</p>
      <div><button style='background-color: green; color: white; border:1px solid green; padding: 10px;'><a style='color: white;' href='index.php'>Home</a></button></div>
   </div>
 </div>
 </body>
";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
