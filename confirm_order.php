<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Confirm Order</title>

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
	<script type="text/javascript" src="./assets/js/main.js"></script>

	<!-- font awsome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

</head>
<body>
	<?php
		include 'header.php';
    $date = date('M d Y');
    $p_id = $_REQUEST['id'];
  ?>

      <div class="row container row_style space">
      
      <?php
        
        $stmt2 = $mysqli->prepare ("SELECT id, productname, brand, img1, sellingprice, orginalprice, short_summery FROM product WHERE id = '$p_id'");
        if($stmt2->execute()) {
          $stmt2->bind_result($id, $productname, $brand, $img1, $sellingprice, $orginal_price, $short_summery);
          }

      while ($stmt2->fetch()) {
        $image = unserialize($img1);
        foreach($image as $pic) {
          echo '
          <div class="col-md-6 col-lg-6 container">
          <a href="product_show.php?id='. $id .'">
          <div class="products_show_img">
          <div class="container space" style="width: 350px;">
          <img src="loginpanel/'. $pic .'" class="d-block w-100" alt="...">
          </div> 
          <div class="container space">
          <h4>'. $productname .'</h4>
          <div class="price_dv">
          <div class="price_div">
          <h4 class="cart_product_selling_price">₹ '. $sellingprice .'</h4>
          <h6 class="cart_product_orginal_price side_space">₹ '. $orginal_price .'</h6>
          </div>
          <p>'. $short_summery .'</p>
          </div>
          </div>
          </div>
          </a>
          </div>
          ';
        }
      }
      ?>
    </div>

    <div class="row container row_style space">
      <center>
        <h1 class="darkbg">Order Details</h1>
      </center>
      <?php
         $stmt2 = $mysqli->prepare ("SELECT id, name, house, po, district, pin, phone, email FROM useraddress LIMIT 1");
        if($stmt2->execute()) {
          $stmt2->bind_result($id, $name, $house, $po, $district, $pin, $phone, $email);
          }

      while ($stmt2->fetch()) {
        $image = unserialize($img1);
        foreach($image as $pic) {
          echo '
          <div class="col-md-6">
          <h2>Your Address</h2>
          '. $name .',<br>
          '. $house .'(ho),<br>
          '. $po .'<br>
          '. $district .'<br>
          PIN :'. $pin .'<br>
          '. $phone .'<br>
          '. $email .'<br>
          <a href="update_address.php" class="btn btn-primary main_theme space">Change Address</a>
          </div>';

        }}
      ?>
      <?php
        echo '
        <div class="col-md-6 col-lg-6 container space">
        <form action="adding_order_details.php" method="POST">
        <input type="hidden" name="firstname" class="form-control space" value="'.$name.'">
        <input type="hidden" name="address" class="form-control space" value="'.$house .',<br> '. $po.'<br> '. $district.'">
        <input type="hidden" name="phone" class="form-control space" value="'.$phone.'">
        <label for="validationDefault03" class="form-label label_color">Price</label>
        <input type="text" name="sellingprice" class="form-control space" value="₹ '. $sellingprice .'" readonly>
        <label for="validationDefault03" class="form-label label_color">Payment method</label>
        <input type="text" name="paymentmethod" class="form-control space" value="Cash On Delivery(COD)" readonly>

        <input type="hidden" name="lastname" class="form-control space" value="" readonly>
        <input type="hidden" name="p_id" class="form-control space" value="'. $p_id .'" readonly>
        <input type="hidden" name="date" class="form-control space" value="'. $date .'" readonly>
        <input type="hidden" name="pincode" class="form-control space" value="" readonly>
        <input type="hidden" name="email" class="form-control space" value="" readonly>
        <input type="hidden" name="image" class="form-control space" value="'. $pic .'" readonly>
        <input type="hidden" name="price" class="form-control space" value="'. $sellingprice .'" readonly>
        <input type="hidden" name="productname" class="form-control space" value="'. $productname .'" readonly>


        <input type="submit" class="btn btn-primary main_theme space" value="Confirm Order">
        </form>

        </div>
        ';
      ?>
    </div>
    


<?php

		include 'footer.php';
	?>
  <input type="text" name="" readonly>
</body>
</html>
<script type="text/javascript" src="./assets/js/main.js"></script>