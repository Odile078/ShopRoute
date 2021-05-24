<?php
 $connection = mysqli_connect("localhost","root","","shoproute");


if (isset($_POST['submit'])){
    $file = $_FILES['image'];
    $error = array();

    $file_name = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $fileError = $_FILES['image']['error'];
    $fileType = $_FILES['image']['type'];

    $file_ext = strtolower(end(explode('.',$_FILES['image']['name+'])));
    $extensions = array("jpeg","jpg","png");
    if (in_array($title_ext,$extensions)== false){
        $error[]="Please choose the image with extension jpg,png or jpeg.";
    }
    if(empty($error) == true){
        move_upload_file($file_tmp,"img/promoimg".$file_name);
        $path = $_
    }

    
}

?>