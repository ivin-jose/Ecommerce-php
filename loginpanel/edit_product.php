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
       <?php
    include 'includes/header.php';
    ?>

    <div class="row">
        <div class="col-lg-6" style="width: 20%;">
         <!--sidebar start-->
         <aside>
          <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
            <li class="">
              <a class="" href="main.php">
                  <i class="icon_house_alt"></i>
                  <span>Manage Admins</span>
              </a>
           </li>
          <li class="">
            <a class="" href="add_product.php">
              <i class="icon_house_alt"></i>
              <span>Products</span>
            </a>
          </li>
         </ul>
  <!-- sidebar menu end-->
     </div>
    </aside>
</div>
    <div class="col-lg-6 col-md-6" style="width: 80%; margin-top: 70px;">
                <?php

        $id = $_GET['id'];

        $stmt2 = $mysqli->prepare ("SELECT id, productname, specifications, sellingprice, orginalprice, short_summery, long_summery, brand, img1, img2, img3, searchingkeywords, shortname, type, catagory  FROM product WHERE id = '$id'");
        if($stmt2->execute()) {
            $stmt2->bind_result($id, $productname, $specifications, $selling_price, $orginal_price, $short_summery, $long_summery, $brand, $img1, $img2, $img3, $searchingkeywords, $shortname, $type, $category);
            while ($stmt2->fetch()) {
                $image1 = unserialize($img1);
                $image3 = unserialize($img3);
                $image2 = unserialize($img2);
                foreach($image1 as $pic1) {
                    foreach($image2 as $pic2){
                        foreach($image3 as $pic3){
                            echo '<div id="product_show_img_div" class="container">
                            <div class="container space">
                            <div class="container">
                            <div class="space">
                            <form action="update_product.php" method="POST">

                            <input type="hidden" value="'. $id .'" class="form-control" name="id"/>

                            <label style="color: green;">Product Name</label>
                            <input type="text" value="'. $productname .'" class="form-control" name="productname"/>
                            </div>

                            <div class="space">
                            <label style="color: green;">Selling Price</label>
                            <input type="text" value="'. $selling_price .'" class="form-control" name="selling_price" />
                            </div>

                            <div class="space">
                            <label style="color: green;">Orginal Price Name</label>
                            <input type="text" value="'. $orginal_price .'" class="form-control"  name="orginal_price"/>
                            </div>

                            <div class="space">
                            <label style="color: green;">Short Summery</label>
                            <input type="text" value="'. $short_summery .'" class="form-control"  name="short_summery"/>
                            </div>

                            <div class="space">
                            <label style="color: green;">Long Summery</label>
                            <input type="text" value="'. $long_summery .'" class="form-control"  name="long_summery"/>
                            </div>

                            <div class="space">
                            <label style="color: green;">Specifications</label>
                            <input type="text" value="'. $specifications .'" class="form-control"  name="specifications"/>
                            </div>

                            <div class="space">
                            <label style="color: green;">Category</label>
                            <input type="text" value="'. $category .'" class="form-control"  name="category"/>
                            </div>

                            <div class="space">
                            <label style="color: green;">Searching Keywords</label>
                            <input type="text" value="'. $searchingkeywords .'" class="form-control" name="searchingkeywords" />
                            </div>

                            <div class="space">
                            <label style="color: green;">Product Brand</label>
                            <input type="text" value="'. $brand .'" class="form-control"  name="brand"/>
                            </div>

                            <div class="space">
                            <label style="color: green;">Short Name</label>
                            <input type="text" value="'. $shortname .'" class="form-control"  name="shortname"/>
                            </div>

                            <div class="space">
                            <label style="color: green;">Type</label>
                            <input type="text" value="'. $type .'" class="form-control" name="type" />
                            </div>
                            
                            
                            <input type="submit" class="btn btn-primary main_theme space" />
                            </form
                            
                            ';
                        }
                    }
                }
            }
        }
        ?>
        
       
    </div>

</div>
</main>
</body>