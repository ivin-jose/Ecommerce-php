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
		<div id="sorting_div">
			<div class="dropdown container space">
				<button type="button" class="main_theme btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
					Sort
				</button>
				<ul class="dropdown-menu">
			     
                    <?php
                    $searching_element = $_POST['searching_element'];
					  	echo '
					  		<li><a class="dropdown-item" href="search_sorting.php?value=1&&search_word='. $searching_element.'">price low-> high</a></li>
							<li><a class="dropdown-item" href="search_sorting.php?value=0&&search_word='. $searching_element.'">price high-> low</a></li>'
					?>
				</ul>
			</div>
		</div>

		<div id="filter_div">
			
		</div>
		<div class="row container row_style space">
			<?php
			if (isset($_POST['searching_element'])) {

				$searching_element = filter_input(INPUT_POST, 'searching_element' ,FILTER_SANITIZE_STRING);
				$search = ('%'. $searching_element. '%');

				$stmt2 = $mysqli->prepare ("SELECT id, catagory, productname, brand, img1, sellingprice, orginalprice, short_summery  FROM product WHERE productname LIKE '$search' OR brand LIKE '$search' OR type LIKE '$search' OR sellingprice LIKE '$search' OR catagory LIKE '$search' OR searchingkeywords LIKE '$search'");
				if($stmt2->execute()) {
					$stmt2->bind_result($id, $category, $productname, $brand, $img1, $sellingprice, $orginal_price, $short_summery);
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
				}
			}
			?>
		</div>
	</div>

    <?php
	include 'footer.php';
	?>
</body>
</html>
<script type="text/javascript" src="./assets/js/main.js"></script>