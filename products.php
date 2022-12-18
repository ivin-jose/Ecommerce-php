<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>products</title>

	<!-- Bootstrap 5 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.4/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.4/dist/js/bootstrap.bundle.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.5/dist/js/bootstrap.bundle.min.js"></script>

	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<!-- google font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;700&display=swap" rel="stylesheet">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="#">

	<!-- font awsome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

	<?php
	include 'header.php';
	?>

</head>
<body>
	<div>
		<div class="row container row_style">
			<div class="col-md-6 col-lg-6 container space">
				<a href="product_show.php?id=2">
					<div class="products_show_img">
						<div class="container space" style="width: 350px;">
							<img src="./assets/images/m3.jpg" class="d-block w-100" alt="...">
						</div>
						<div class="container space">
							<h4>product name</h4>
							<div class="price_dv">
								<h4 class="cart_product_selling_price">$7,999</h4>
								<h6 class="cart_product_orginal_price side_space">$17,000</h6>
								<p>short summary fdldf dfkjdf dkjfndflj dkjdfvn dkjfnlj kjdsfnlfdjn kjnj dkjfnlvjdn kjlnrgoe qlknrglern kjngrl</p>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>

    <?php
	include 'footer.php';
	?>
</body>
</html>
<script type="text/javascript" src="./assets/js/main.js"></script>