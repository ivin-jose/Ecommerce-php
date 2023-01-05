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

	<?php 

	$stmt2 = $mysqli->prepare ("SELECT count(id) as no_id FROM cart");
		if($stmt2->execute()) {
			$stmt2->bind_result($no_id);
			while ($stmt2->fetch()) {
				}
			}
	$stmt2 = $mysqli->prepare ("SELECT sum(sellingprice) as totalprice FROM cart");
		if($stmt2->execute()) {
			$stmt2->bind_result($totalprice);
			while ($stmt2->fetch()) {
				}
			}
	 ?>

	<main>
		<div class="container space" id="cartnumber">

			<div>
				<?php echo '<h3>'. $no_id .'</h3>'?>
			</div>
			<h2>Your cart</h2>
		</div>
		<hr class="borderline">

		<div>
			<div class="container">
				<div class="row">
					<?php
					$stmt2 = $mysqli->prepare ("SELECT id, productname, sellingprice, originalprice, product_id, image  FROM cart");
			if($stmt2->execute()) {
				$stmt2->bind_result($id, $productname, $sellingprice, $originalprice, $product_id, $image);

					while ($stmt2->fetch()) {
					{
						echo '
						<div class="col-md-3 col-lg-3 container space">
						<a href="product_show.php?id='. $product_id .'">
						<div class="img_box cart_img_box container">
						<img src="loginpanel/'. $image .'" class="d-block w-100 container" alt="...">
						<div class="container">
						<h6>'. $productname.'</h6>
						<div class="price_div">
						<h4 class="cart_product_selling_price">₹'. $sellingprice.'</h4>
						<h6 class="cart_product_orginal_price side_space"></h6>
						</div>
						<div>
						<a href="remove_cart.php?id='. $id .'" class="btn btn-primary main_theme space">Remove</a>
						</div>
						</div>
						</div>
						</a>
						</div>
						';
					}}}
					?>
	
				</div>					
			</div>
			<div class="container" id="cart_total_section">
				<div class="row_style">
					<div>
						<h4>Total Items :</h4>
					</div>
					<div class="side_space">
						<?php echo '<h4 class="darkbg">'. $no_id .'</h4>'?>
					</div>
				</div>
				<div class="row_style">
					<div>
						<h4>Total Price :</h4>
					</div>
					<div class="side_space">
						<?php echo '<h4 class="darkbg">₹'. $totalprice .'</h4>'?>
					</div>
				</div>
				<div>
					<a href="place_order.php" class="btn btn-primary main_theme">ORDER NOW</a>
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
