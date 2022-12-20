<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">

	<!-- font awsome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

</head>
<body>
	<?php
	include 'header.php';
	?>

	<div id="product_ads_1" class="space">
		<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="./assets/images/ad2.webp" class="d-block w-100" alt="fff">
				</div>
				<div class="carousel-item">
					<img src="./assets/images/ad3.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="./assets/images/ad4.webp" class="d-block w-100" alt="...">
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

	<div id="product_ads_2">
		<div class="row container-fluid" id="product_ads_2">
			<?php
			$stmt2 = $mysqli->prepare ("SELECT id, type, brand, img1, sellingprice  FROM product LIMIT 4");
			if($stmt2->execute()) {
				$stmt2->bind_result($id, $type, $brand, $img1, $sellingprice);
				while ($stmt2->fetch()) {
					$image = unserialize($img1);
					foreach($image as $pic) {
						echo '
						<div class="col-md-3 col-lg-3 container space">
						<a href="product_show.php?id='. $id .'">
						<div class="img_box container">
						<img src="loginpanel/'. $pic .'" class="d-block w-100 space" alt="...">
						<div class="container">
						<h4>'. $brand .' '. $type .'</h4>
						<p>Only ₹ '. $sellingprice.'</p>
						</div>
						</div>
						</a>
						</div>
						';
					}
				}
			}
			?>
		</div>
	</div>

	<!-- brand logos -->

	<div id="brandlogos space">
		<div class="row container-fluid">
			<div class="col-lg-2 col-md-3">
				<div class="brandlogo_box">
					<a href="#"><img src="./assets/images/brandlogos/canon.png" class="d-block w-100" alt="..."></a>
				</div>
			</div>
			<div class="col-lg-2 col-md-3">
				<div class="brandlogo_box">
					<a href="#"><img src="./assets/images/brandlogos/nike.png" class="d-block w-100" alt="..."></a>
				</div>
			</div>
			<div class="col-lg-2 col-md-3">
				<div class="brandlogo_box">
					<a href="#"><img src="./assets/images/brandlogos/nike.png" class="d-block w-100" alt="..."></a>
				</div>
			</div>
			<div class="col-lg-2 col-md-3">
				<div class="brandlogo_box">
					<a href="#"><img src="./assets/images/brandlogos/hp.jpg" class="d-block w-100" alt="..."></a>
				</div>
			</div>
			<div class="col-lg-2 col-md-3">
				<div class="brandlogo_box">
					<a href="#"><img src="./assets/images/brandlogos/canon.png" class="d-block w-100" alt="..."></a>
				</div>
			</div>
			<div class="col-lg-2 col-md-3">
				<div class="brandlogo_box">
					<a href="#"><img src="./assets/images/brandlogos/nike.png" class="d-block w-100" alt="..."></a>
				</div>
			</div>
		</div>
	</div>

	<?php
	include 'footer.php';
	?>
</body>
</html>

<script type="text/javascript" src="./assets/js/main.js"></script>