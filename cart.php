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
		<div class="container space" id="cartnumber">

			<div>
				<h3>1</h3>
			</div>
			<h2>Your cart</h2>
		</div>

		<div>
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-lg-3 container space">
						<a href="product_show.php?id=2">
						<div class="img_box">
							<img src="./assets/images/m3.jpg" class="d-block w-100" alt="...">
							<div class="container">
								<h3>product name</h3>
								<div class="price_div">
									<h4 class="cart_product_selling_price">$7,999</h4>
									<h6 class="cart_product_orginal_price side_space">$17,000</h6>
								</div>
							</div>
						</div>
					</a>
					</div>
				</div>					
			</div>
			<div class="container">
				<div class="row_style">
					<div>
						<h4>Total Items :</h4>
					</div>
					<div class="side_space">
						<h4>2</h4>
					</div>
				</div>
				<div class="row_style">
					<div>
						<h4>Total Price :</h4>
					</div>
					<div class="side_space">
						<h4>$4300</h4>
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
