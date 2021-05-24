<?php 


$connection = mysqli_connect("localhost","root","","shoproute");

if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    if($password === $cpassword)
    {
        $query ="INSERT INTO administrators (username,email,password) VALUES('$username','$email','$password')";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            //echo "saved";
            $_SESSION['success'] = "Admin Profile Added";
            header('Location: register.php');
        }
        else{
            $_SESSION["status"] = "Admin Profile NOT Added";
            header('Location: register.php');
        }
    }
    else{
        $_SESSION['status'] = "Password and Confirm Password Does Not Match";
        header('Location: register.php');
    }

    
}


if(isset($_POST['login_btn']))
{
    $email_login = $_POST['email'];
    $password_login = $_POST['password'];

    $query = "SELECT * FROM administrators WHERE email= '$email_login' AND password = '$password_login' ";
    $query_run = mysqli_query($connection, $query);
    if($query_run)
    {
        $SESSION['username'] = $email_login;
        header('Location:index.php');
    }
    else{
        $_SESSION['status']= "Email/ Password is invalid";
        header('Location:login.php');
    }
}



if(isset($_POST['shopbtn']))
{
    $shopName = $_POST['ShopName'];
    $Adress = $_POST['Adress'];
    $Phonenumber = $_POST['Phonenumber'];
    $cPhonenumber = $_POST['confirmPhonenumber'];
    $StartDate = $_POST['StartDate'];
    $EndDate = $_POST['EndDate'];

    if($Phonenumber === $cPhonenumber)
    {
        $query ="INSERT INTO shops (ShopName,Phonenumber,Adress,StartDate,EndDate) VALUES('$shopName','$Phonenumber','$Adress','$StartDate','$EndDate ')";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            //echo "saved";
            $_SESSION['success'] = "Shop Added";
            header('Location: shopslist.php');
        }
        else{
            $_SESSION["status"] = "Shop NOT Added";
            header('Location: shopslist.php');
        }
    }
    else{
        $_SESSION['status'] = "Phonenumber and Confirm Phonenumber Does Not Match";
        header('Location: shopslist.php');
    }

    
}


if(isset($_POST['promotionbtn']))
{
    $shopName = $_POST['p_shop'];
    $cshopName = $_POST['cp_shop'];
    $product = $_POST['p_name'];
    $percentage = $_POST['p_percentage'];
    $image = $_POST['p_image'];
    

    if($shopName === $cshopName)
    {
        $query ="INSERT INTO promotion (p_name,p_percentage,p_shop,p_image) VALUES('$product','$percentage','$shopName','$image')";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            //echo "saved";
            $_SESSION['success'] = "Promotion Added";
            header('Location: promotion.php');
        }
        else{
            $_SESSION["status"] = "Promotion NOT Added";
            header('Location: promotion.php');
        }
    }
    else{
        $_SESSION['status'] = "Phonenumber and Confirm Phonenumber Does Not Match";
        header('Location: promotion.php');
    }

    
}


?>