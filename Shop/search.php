<?php
include 'dbh.php';
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div>
        <?php
        if (isset($_POST['submit-search'])) {
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            $sql = "SELECT * FROM trending WHERE t_name LIKE '%$search%' OR t_supermarket LIKE '%$search%' OR t_price LIKE '%$search%'";
            $result = mysqli_query($conn, $sql);
            $queryResults = mysqli_num_rows($result);

            
            if ($queryResults > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<head>


                    <link rel='stylesheet' href='css/addto.css'>
                    
                    </head>
                    
                    <body>
                    <div class='product_wrapper'>
                    <div class='article-box'>
                    <div class='image'><img src='" . $row['image'] . "' style='width: 250px; height: 200px;' /></div>
                    <div class='name'>" . $row['t_name'] . "</div>
                    <div class='supermarket'>" . $row['t_supermarket'] . "</div>
                    <div class='price'>" . $row['t_price'] . "</div>
                    <button type='submit' class='buy'>Buy Now</button>
                    
                        </div>
                        </div>
                        </body>";
                            }
                        }
                    }

                    if (isset($_POST['submit-search'])) {
                        $search = mysqli_real_escape_string($conn, $_POST['search']);
                        $sql = "SELECT * FROM promotion WHERE p_name LIKE '%$search%' OR p_percentage LIKE '%$search%' OR p_shop  LIKE '%$search%'";
                        $result = mysqli_query($conn, $sql);
                        $queryResults = mysqli_num_rows($result);
            
                        
                        if ($queryResults > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                                            echo "<head>
                                            <link rel='stylesheet' href='css/addto.css'>
                                            </head>
                                            <body>
                                            <div class='product_wrapper'>
                                            <div class='article-box'>
                                            <div class='image'><img src='" . $row['p_image'] . "' style='width: 250px; height: 200px;' /></div>
                                            <div class='name'>" . $row['p_name'] . "</div>
                                            <div class='supermarket'>" . $row['p_percentage'] . "</div>
                                            <div class='price'>" . $row['p_shop'] . "</div>
                                            <button type='submit' class='buy'>Buy Now</button>
                                            
                                                </div>
                                                </div>
                                                </body>";
                                        }
                                    } else {
                                        echo "There are no results matching your search";
                                    }
                                }
                                ?>
                    
                    
    </div>

    
    
</body>

</html>