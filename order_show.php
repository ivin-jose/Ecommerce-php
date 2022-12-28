<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
	<script type="text/javascript" src="./assets/js/main.js"></script>



	<!-- font awsome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

</head>
<body>
	<?php
	include 'header.php';
	?>
	<main>
		<div>
			<div class="container">
				<div class="row">
			<?php

			$o_id = $_GET['id'];

			$stmt2 = $mysqli->prepare ("SELECT id, product_id, productname, image, price, firstname, address, email, phone, date FROM order_details WHERE id='$o_id'");
			if($stmt2->execute()) {
				$stmt2->bind_result($o_id, $product_id, $productname, $image, $sellingprice, $firstname, $address, $email, $phone, $date);

				$tommarow_date = date("M-d-Y", strtotime("+1 day"));
				$now_date = date("M d Y");

                

				while ($stmt2->fetch()) {
					{
						echo '
						<div class="col-md-3 col-lg-3 container space">
						<a href="product_show.php?id='. $product_id .'">
						<div class="img_box container">
						<img src="loginpanel/'. $image .'" class="d-block w-100 container" alt="...">
						<div class="container">
						<h6>'. $productname.'</h6>
						<div class="price_div">
						<h4 class="cart_product_selling_price">₹'. $sellingprice.'</h4>
						<h6 class="cart_product_orginal_price side_space"></h6>
						</div>
						<div>
						</div>
						</div>
						</div>
						</a>
						</div>
            
            <section id="order" class="order">
			<div class="order-item">
            <h4>to '. $firstname .'</h4>
            <h5>Ordered DATE - '. $date .'</h5>
            <p><em>'. $email .'</em></p>
            <p>
            <ul>
            <li>'. $address .'.</li>
            <li>'. $phone .'</li>
            </ul>
            </p>
            </div>
            <div class="order-item">
            <h4> Order placed / packed </h4>
            <h5>'. $date .'</h5>
            <p><em>Your order picked by our partner</em></p>
            </div>
            <div class="order-item">
            <h4> Shipping </h4>
            <h5>'. $now_date .'</h5>
            <p><em></em></p>
            </div>
            <div class="order-item">
            <h4> Delivering Order </h4>
            <h5>'. $tommarow_date .'</h5>
            <p><em>expecting tommarow</em></p>
            </div>
            <div class="order-item">
            <h4> <a href="cancel_order.php?id='. $o_id .'" class="btn btn-primary main_theme">Cancel Product</a> </h4>
            <p><em>Cancel your product</em></p>
            </div>
            </section>
						';
					}}}
					?>
	
				</div>					
			</div>
		</div>
	</main>

	<?php
		include 'footer.php';
	?>
</body>
</html>
<script type="text/javascript" src="./assets/js/main.js"></script>
