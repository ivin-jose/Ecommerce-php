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
    <div id="product_show_img_div" class="container">
    	<div id="product_show_img" class="space container">
		<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="./assets/images/m3.jpg" class="d-block w-100" alt="fff">
				</div>
				<div class="carousel-item">
					<img src="./assets/images/m2.jpeg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="./assets/images/m1.jpg" class="d-block w-100" alt="...">
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
	    <div id="share_wishlist_main_div" class="space side_space">
	     	<div id="wishlist_div">
			    <a href="adding_wishlist.php?id=2" id="wishlist_btn" class="sw main_theme"><i class="fa-solid fa-heart"></i></a>
	    	</div>
		    <div id="share_div" class="space">
		    	<a href="#" id="share_btn" class="sw main_theme"><i class="fa-solid fa-share-nodes"></i></a>
		    </div>
	     </div>
    </div>
    <div class="container space">
    	<div class="container">
    		<div>
    			<h3>Lenovo D-Series</h3>
    		</div>
    		<div class="price_div">
    			<div><h2 class="darkbg">$12,999</h2></div>
    			<div class="side_space cart_product_orginal_price"><h5 id="">$17000</h5></div>
    		</div>
    		<div id="product_short_summary">
    			<p><b>It is high quality display with antiglare glass</b></p>
    		</div>
    		<div id="product_long_summary">
    			Lenovo D-Series 54.61 cm (22 inch) FHD VA 3-Side NearEdgeless Monitor |16.7 Mn Colors, 3000:1 Contrast Ratio, 75Hz, 4ms, AMD FreeSync, HDMI, VESA Wall Mount, TUV Eye Comfort & Low Blue Light -D22e-20
    			<br>
    		</div>
    		<div class="container price_div space">
    			<div id="">
    				<a class="cart_btns main_theme btn btn-primary adding_cart_btn" href="adding_cart.php?id=2">Add to cart</a>
    			</div>
    			<div id="">
    				<a class="order_btn btn btn-primary side_space" href="place_order.php?id=2">PLACE ORDER</a>
    			</div>
    		</div>
    		<div id="specifications">
    			Specifications
    		</div>
    		<div class="space">
    			<h3 class="space">Reviews</h3>
    			<div class="card space">
    				<div class="card-header">
    					<i class="fa-solid fa-user side_space" style="color: #009894"></i>
    					User Name
    				</div>
    				<div class="card-body">
    					<h5 class="card-title">short summery</h5>
    					<p class="card-text">long summery</p>
    				</div>
    				<div class="card-footer text-muted">
    					2 days ago
    				</div>
    			</div>
    		</div>

    		<div class="space">
    			<div><h3>Write a Review</h3></div>
    			<form action="adding_review.php" method="POST">
    				<input type="textarea" name="" id="username_review_textarea" placeholder="Username(must)" class="review_textarea"/>
    				<input type="textarea" name="" id="username_review_textarea" placeholder="Short Review(must)" class="review_textarea"/>
    				<textarea type="textarea" name="" id="username_review_textarea" placeholder="Long Summery(Optional)" class="review_textarea"></textarea><br>
    				<input id="review_submit_btn" type="submit" name="" class="btn btn-primary main_theme">
    			</form>
    		</div>

    			<div id="product_ads_2">
		<div class="row container-fluid" id="product_ads_2">
			<div class="col-md-3 col-lg-3 container space">
				<a href="product_show.php?id=2">
				<div class="img_box">
					<img src="./assets/images/m3.jpg" class="d-block w-100" alt="...">
					<div class="container">
						<h3>GT MST</h3>
						<p>only $33</p>
					</div>
				</div>
			</a>
			</div>
			<div class="col-md-3 col-lg-3 container space">
				<div class="img_box">
					<a href="#"><img src="./assets/images/m3.jpg" class="d-block w-100" alt="..."></a>
					<div class="container">
						<h3>GT MST</h3>
						<p>only $33</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-lg-3 container space">
				<div class="img_box">
					<a href="#"><img src="./assets/images/m3.jpg" class="d-block w-100" alt="..."></a>
					<div class="container">
						<h3>GT MST</h3>
						<p>only $33</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-lg-3 container space">
				<div class="img_box">
					<a href="#"><img src="./assets/images/m1.jpg" class="d-block w-100" alt="..."></a>
					<div class="container">
						<h3>GT MST</h3>
						<p>only $33</p>
					</div>
				</div>
			</div>

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