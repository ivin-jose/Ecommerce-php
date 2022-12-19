<?php 
include_once 'db-connect.php';
include_once 'session.php';

if ($_SESSION['type'] != 'admin') {
  header("Location: index.php");
}
if ($_SESSION["type"] != 'admin') {
 header("Location: main.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>SHOP Admin Page</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

</head>

<body>
    <main>
        <section>
            <header id="loginpanel_header">
                <div class="container">
                    <div id="dashboard">
                        <span><h3>DASHBOARD</h3></span>
                        <div class="top-nav notification-row">
                            <!-- notificatoin dropdown start-->
                            <ul class="nav pull-right top-menu">
                                <!-- alert notification end-->
                                <!-- user login dropdown start-->
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                        <span class="username">ivinnjose</span>
                                        <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu extended logout">
                                        <div class="log-arrow-up"></div>
                           <!--  <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> My Profile</a>
                            </li> -->
                            <li>
                                <a href="logout.php"><i class="icon_key_alt"></i>Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
        </div>
    </div>
</header>
</section>
<div class="row">
    <div class="col-lg-6 col-md-6" id="sidebar_div">
        <aside>
            <div id="sidebar"  class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="">
                    <li class="dir">
                        <a class="" href="manage_admins.php">
                            <i class="icon_house_alt"></i>
                            <span class="li_color">Manage Admins</span>
                        </a>
                    </li>
                    <li class="dir">
                        <a class="" href="add_product.php">
                            <i class="icon_house_alt"></i>
                            <span class="li_color">Add Product</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>    
    </div>
    <div class="col-lg-6 col-md-6">

        <?php

        $id = $_GET['id'];

        $stmt2 = $mysqli->prepare ("SELECT id, productname, specifications, sellingprice, orginalprice, short_summery, long_summery, brand, img1, img2, img3  FROM product WHERE id = '$id'");
        if($stmt2->execute()) {
            $stmt2->bind_result($id, $productname, $specifications, $selling_price, $orginal_price, $short_summery, $long_summery, $brand, $img1, $img2, $img3);
            while ($stmt2->fetch()) {
                $image1 = unserialize($img1);
                $image3 = unserialize($img3);
                $image2 = unserialize($img2);
                foreach($image1 as $pic1) {
                    foreach($image2 as $pic2){
                        foreach($image3 as $pic3){
                            echo '<div id="product_show_img_div" class="container">
                            <div id="product_show_img" class="space container">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="'. $pic1 .'" class="d-block w-100" alt="fff">
                            </div>
                            <div class="carousel-item">
                            <img src="'. $pic2 .'" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="'. $pic3 .'" class="d-block w-100" alt="...">
                            </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                            </button>
                            </div>
                            </div>
                            <div id="share_wishlist_main_div" class="space side_space">
                            <div id="wishlist_div">
                            <a href="adding_wishlist.php?id=2" id="wishlist_btn" class="sw main_theme"><i class="fa-solid fa-heart"></i></a>
                            </div>
                            <div id="share_div" class="space">
                            <a href="#" id="share_btn" class="sw main_theme"><i class="fa-solid fa-share-nodes"></i></a>
                            </div>
                            </div>
                            </div>
                            <div class="container space">
                            <div class="container">
                            <div>
                            <h3>'. $productname .'</h3>
                            </div>
                            <div class="price_div">
                            <div><h2 class="darkbg">$'. $selling_price .'</h2></div>
                            <div class="side_space cart_product_orginal_price"><h5 id="">$'. $orginal_price .'</h5></div>
                            </div>
                            <div id="product_short_summary">
                            <h5>'. $brand .'</h5>
                            <p><b>'. $short_summery .'</b></p>
                            </div>
                            <div id="product_long_summary">
                            '. $long_summery .'
                            <br>
                            </div>
                            <div class="container price_div space">
                            <div id="">
                            <a class="cart_btns main_theme btn btn-primary adding_cart_btn" href="adding_cart.php?id=2">Add to cart</a>
                            </div>
                            <div id="">
                            <a class="order_btn btn btn-primary side_space" href="place_order.php?id=2">PLACE ORDER</a>
                            </div>
                            </div>
                            <div id="specifications">
                            '. $specifications .'
                            </div>';
                        }
                    }
                }
            }
        }
        ?>
        
    </div>
</main>
</div>
</div>
</main>
</body>