<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<?php
include 'dbh.php';
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>ShopRoute</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="custom-select-box">
                        <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
                            <option>¥ JPY</option>
                            <option>$ USD</option>
                            <option>€ EUR</option>
                        </select>
                    </div>
                    <div class="right-phone-box">
                        <p>Call US :- <a href="#"> +250780463135</a></p>
                    </div>
                    <div class="our-link">
                        <ul>
                            <!-- <li><a href="#"><i class="fa fa-user s_color"></i> My Account</a></li> -->
                            <li><a href="#"><i class="fas fa-location-arrow"></i> Our location</a></li>
                            <li><a href="#"><i class="fas fa-headset"></i> Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="login-box">
                        <a href="logout.php"><button style="width:auto; background: #b0b435; color: #ffffff; border:1px solid #b0b435;">Logout</button></a>
                    </div>
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                                <li>
                                    <p>Hey, <?php echo $_SESSION['username']; ?>! You are now user dashboard page.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- <a class="navbar-brand" href="index.html"><img src="images/l.png" class="logo" alt=""></a> -->
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">SHOP</a>
                            <ul class="dropdown-menu">
                                <li><a href="Simba.html">Simba supermarkets</a></li>
                                <li><a href="#">Nakumatt</a></li>
                                <li><a href="#">Sawa City</a></li>
                                <li><a href="#">T200</a></li>
                                <li><a href="#">Rwanda clothing store</a></li>
                                <li><a href="#">La Gardienne</a></li>
                                <li><a href="#">
                                        <?php
                                        $conn = mysqli_connect("localhost", "root", "", "shoproute");
                                        $sql = "SELECT * FROM shops WHERE id >='7';";
                                        $result = mysqli_query($conn, $sql);
                                        $resultCheck = mysqli_num_rows($result);

                                        if($resultCheck > 0){
                                            while($row = mysqli_fetch_assoc($result)){
                                                echo $row['shopName']."<br>";
                                            }
                                        }
                                        ?> </a>

                                </li>
                            </ul>
                        </li>
                        <!-- <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="contact-us.html">Contact Us</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>

                    </ul>
                </div>

                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        <li>
                            <a href="#" class="photo"><img src="images/mara.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Mara Z1 </a></h6>
                            <p>1x - <span class="price">150,000RWF</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/wire3.png" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Wireless Gaming headsets</a></h6>
                            <p>1x - <span class="price">15,000RWF</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/cui.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Beko ADVG592K</a></h6>
                            <p>1x - <span class="price">100,000RWF</span></p>
                        </li>
                        <li class="total">
                            <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                            <span class="float-right"><strong>Total</strong>: 265,000RWF</span>
                        </li>
                    </ul>
                </li>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <form action="search.php" method="POST">
        <div class="top-search">
            <div class="container">
                <div class="input-group">
                    <button type="submit" name="submit-search" style="background-color: black; border:1px solid black; "><span class="input-group-addon"><i class="fa fa-search"></i></span></button>
                    <input type="text" class="form-control" name="search" placeholder="Search any product">
                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                </div>

            </div>
        </div>
    </form>
    <!-- End Top Search -->

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="images/shop3.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Shoproute</strong></h1>
                            <p class="m-b-40">On this website you can compare prices of different products in different
                                shops <br> search any shop and shop with us!!!</p>
                            <p><a class="btn hvr-hover" href="#">Shop Now</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/shop4.png" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> ShopRoute</strong></h1>
                            <p class="m-b-40">On this website you can compare prices of different products in different
                                shops <br> search any shop and shop with us!!!</p>
                            <p><a class="btn hvr-hover" href="#">Shop Now</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/shop1.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> ShopRoute</strong></h1>
                            <p class="m-b-40">On this website you can compare prices of different products in different
                                shops <br> search any shop and shop with us!!!</p>
                            <p><a class="btn hvr-hover" href="#">Shop Now</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    <div class="col-md-12 text-center">
        <h1 class="m-b-20"><strong>Shop by category </strong>
    </div>
    <div class="categories-shop">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/electronic2.jpg " alt="" />
                        <a class="btn hvr-hover" href="add.php">Electronics Devices</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/beauty1.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">Beauty and personal care</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/home1.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">Home and kitchen</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/sport1.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">Sports and Outdoors</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/fashion1.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">Fashion</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/baby1.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">Babies Products</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Trending Products</h1>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".top-featured">Top featured</button>
                            <button data-filter=".best-seller">Best seller</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="article-container">
                <?php
                $sql = "SELECT * FROM trending";
                $result = mysqli_query($conn, $sql);
                $queryResults = mysqli_num_rows($result);

                if ($queryResults > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "
                            <head>
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
                ?>
            </div>

        </div>
    </div>
    <!-- End Categories -->
    <div class="products-box" style="margin-top: 300px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Promotion</h1>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button data-filter=".All">All</button>
                            <!-- <button data-filter=".top-featured">Top featured</button>
                            <button data-filter=".best-seller">Best seller</button> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="article-container">
                <?php
                $sql = "SELECT * FROM promotion";
                $result = mysqli_query($conn, $sql);
                $queryResults = mysqli_num_rows($result);

                if ($queryResults > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "
                            <head>
                            <link rel='stylesheet' href='css/addto.css'>
                            </head>
                            <body>
                            <div class='product_wrapper'>
                            <div class='article-box'>
                            <div class='image'><img src='" . $row['p_image'] . "' style='width: 250px; height: 200px;' /></div>
                            <div class='name'>" . $row['p_name'] . "</div>
                            <div class='percentage'>" . $row['p_percentage'] . "</div>
                            <div class='shop'>" . $row['p_shop'] . "</div>
                            <button type='submit' class='buy'>Buy Now</button>
                                </div>
                                </div>
                                </body>";
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Start Products  -->

    <!-- End Products  -->

    <!-- Start promotion  -->

    <!-- End promotion  -->


    <!-- Start Footer  -->
    <footer style="margin-top: 350px;">
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3>Business Time</h3>
                            <ul class="list-time">
                                <li>Monday - Friday: 08.00am to 05.00pm</li>
                                <li>Saturday: 10.00am to 08.00pm</li>
                                <li>Sunday: <span>Closed</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3>Newsletter</h3>
                            <form class="newsletter-box">
                                <div class="form-group">
                                    <input class="" type="email" name="Email" placeholder="Email Address*" />
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <button class="btn hvr-hover" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3>Social Media</h3>
                            <p>Follow ShopRoute on </p>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About ShopRoute</h4>
                            <p>ShopRoute is an online selling web-based application that is going to allow people to shop online but to also know local shops and supermarkets where they can find those product and a chance to know and compare prices in correspondence to those market for those who wish to go at the market in person.</p>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Delivery Information</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: KN7 <br>Remera</p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+250780463135">+250780463135</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:shoproute@gmail.com">ShopRoute@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <!-- <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2020</p>
    </div> -->
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>