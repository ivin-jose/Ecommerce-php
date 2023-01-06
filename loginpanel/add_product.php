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
    <div class="col-lg-6 col-md-6" style="width: 80%;">
        <div class="container" id="productnamediv"><br>
            <h3>ADD PRODUCTS</h3>
        </div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn btn-primary main_theme space space" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
         ADD PRODUCT
     </button>

     <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">ADD PRODUCT</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                <form method="POST" action="upload_product.php" enctype="multipart/form-data" id="resume_upload_portfolio" name="resume_upload_portfolio">
                    <input type="text" name="product_name" class="space form-control" placeholder="Product name"></input><br>
                    <input type="text" name="short_name" class="space form-control" placeholder="Short Product name"></input><br>
                    <input type="text" name="selling_price" class="space form-control" placeholder="Selling price"></input><br>
                    <input type="text" name="orginal_price" class="space form-control" placeholder="Orginal price"></input><br>

                    <input type="text" name="category" class="space form-control" placeholder="Category, Fashion electronics etc.."></input><br>
                    <input type="text" name="type" class="space form-control" placeholder="Type, camara desktop etc.."></input><br>

                    <input type="text" name="brand" class="space form-control" placeholder="Brand"></input><br>
                    <input type="text" name="specifications" class="space form-control" placeholder="Specifications"></input><br>
                    <input type="text" name="short_summery" class="space form-control" placeholder="Short Summery"></input><br>

                    <input type="text" name="searchingkeywords" class="space form-control" placeholder="searching_keywords"></input><br>

                    <textarea type="text" name="long_summery" class="space form-control" placeholder="Long summery"></textarea><br>

                    <input type="file" name="image1[]" class="form-control"/>
                    <input type="file" name="image2[]" class="form-control"/>
                    <input type="file" name="image3[]" class="form-control"/>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary main_theme" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary main_theme">Submit</button>
                </form>
            </div>     
        </div>
    </div>
</div><br><br>
<div class="row">
    <?php
    $stmt2 = $mysqli->prepare ("SELECT id, productname, img1  FROM product");
    if($stmt2->execute()) {
        $stmt2->bind_result($id, $productname, $img1);
        while ($stmt2->fetch()) {
            $image = unserialize($img1);
            foreach($image as $pic) {
                echo '
                <div class="col-md-3" style="height= 300px;">
                <h6>'. $productname .'</h6>
                <a href="show_product.php?id='. $id .'">
                <img src="'. $pic .'" width="200" height="300" class="loginpanel_img" alt="..."></a>

                </div>
                ';
            }
        }
    }
    ?>
</div>

</div>
</main>
</body>