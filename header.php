<?php
include_once 'loginpanel/db-connect.php';
include_once 'loginpanel/session.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>products</title>

	<!-- Bootstrap 5 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.4/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.4/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-growl/1.0.0/jquery.bootstrap-growl.min.js" integrity="sha512-pBoUgBw+mK85IYWlMTSeBQ0Djx3u23anXFNQfBiIm2D8MbVT9lr+IxUccP8AMMQ6LCvgnlhUCK3ZCThaBCr8Ng==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<!-- google font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;700&display=swap" rel="stylesheet">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">

	<!-- font awsome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

</head>
<body>
	<div id="preloader"></div>

	<div>
		<div id="header">
			<div class="container">
				<span><a href="index.php"><h3 class="white">Online Shop</h3></a></span>
			</div>
			<div>
				<form action="search_product.php" method="POST">
					<div id="search_form_div" class="row_style">
						<input type="search" name="searching_element" class="form-control" placeholder="search products, brands etc.." id="searchbar">
						<input type="submit" name="search_submit" class="btn btn-primary main_theme side_space" value="Search">
					</div>
				</form>
			</div>
			<div id="cwddiv" class="row_style space">
				<div>
				<div id="hldiv" class="side_space container row_style">
						<div id="cart_logo_div">
							<a href="cart.php"><i id="cart_logo" class="fa-solid fa-cart-shopping white"></i></a>
						</div>
						<div id="wishlist_logo_div" class="">
							<a href="wishlist.php"><i id="wishlist_logo" class="white fa-solid fa-heart"></i></a>
						</div>
					</div>
			</div>
			<div>
				<div class="dropdown container space">
						<button type="button" class="main_theme btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
							Categories
						</button>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="products.php?category=electronics">Electronics</a></li>
							<li><a class="dropdown-item" href="products.php?category=fashion">Fashion</a></li>
							<li><a class="dropdown-item" href="products.php?category=HomeAplliences">Home Apliances</a></li>
						</ul>
					</div>

			</div>
			</div>
		
			
		</div>

</body>
</html>
<script type="text/javascript" src="./assets/js/main.js"></script>