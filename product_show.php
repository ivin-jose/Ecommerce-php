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

        $id = $_GET['id'];

        $stmt2 = $mysqli->prepare ("SELECT id, productname, specifications, sellingprice, orginalprice, catagory, short_summery, long_summery, brand, img1, img2, img3, type  FROM product WHERE id = '$id'");
        if($stmt2->execute()) {
            $stmt2->bind_result($id, $productname, $specifications, $selling_price, $orginal_price, $category, $short_summery, $long_summery, $brand, $img1, $img2, $img3, $type);
            while ($stmt2->fetch()) {
                $image1 = unserialize($img1);
                $image3 = unserialize($img3);
                $image2 = unserialize($img2);
                foreach($image1 as $pic1) {
                    foreach($image2 as $pic2){
                        foreach($image3 as $pic3){
                        	echo'
                        	<div id="product_show_img_div" class="container">
                        	<div id="product_show_img" class="space container">
                        	<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        	<div class="carousel-inner">
                        	<div class="carousel-item active">
                        	<img src="loginpanel/'. $pic1 .'" class="d-block w-100" alt="fff">
                        	</div>
                        	<div class="carousel-item">
                        	<img src="loginpanel/'. $pic2 .'" class="d-block w-100" alt="...">
                        	</div>
                        	<div class="carousel-item">
                        	<img src="loginpanel/'. $pic3 .'" class="d-block w-100" alt="...">
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
                        	<a href="adding_wishlist.php?id='.$id.'&&pic='.$pic1.'&&sp='.$selling_price.'&&op='.$orginal_price.'&&pname='.$productname.'" id="wishlist_btn" class="sw main_theme"><i class="fa-solid fa-heart"></i></a>
                        	</div>
                        	<div id="share_div" class="space">
                        	<a href="#" id="share_btn" class="sw main_theme"><i class="fa-solid fa-share-nodes"></i></a>
                        	</div>
                        	</div>
                        	</div>
                        	<div class="container space">
                        	<div class="container">
                        	<div>
                        	<h3>'. $productname .'</h3>
                        	</div>
                        	<div class="price_div">
                        	<div><h2 class="darkbg">₹ '. $selling_price .'</h2></div>
                        	<div class="side_space cart_product_orginal_price"><h5 id="">₹ '. $orginal_price .'</h5></div>
                        	</div>
                        	<div id="product_short_summary">
                        	<p><b>'. $short_summery .'</b></p>
                        	</div>
                        	<div id="product_long_summary">
                        	'. $long_summery .'
                        	<br>
                        	</div>
                        	<div class="container price_div space">
                        	<div id="">
                        	<a class="cart_btns main_theme btn btn-primary adding_cart_btn" href="adding_cart.php?id='.$id.'&&pic='.$pic1.'&&sp='.$selling_price.'&&op='.$orginal_price.'&&pname='.$productname.'">Add to cart</a>
                        	</div>
                        	<div id="">
                        	<a class="order_btn btn btn-primary side_space" href="place_order.php?id='.$id.'">PLACE ORDER</a>
                        	</div>
                        	</div>
                        	<div id="specifications">
                        	'. $specifications .'<br>
                        	Brand :<span style="color: red;"><b> '. $brand .'</b></span><br>
                        	Type : '. $type .'
                        	</div>
                        	';

                        }
                    }
                }
            }
        }
    ?>
    <div class="space">
    	<h3 class="space">Reviews</h3>
    <?php
    $stmt2 = $mysqli->prepare ("SELECT id, username, short_review, long_review, date  FROM review WHERE product_id = '$id'");
    if($stmt2->execute()) {
    	$stmt2->bind_result($id, $username, $short_review, $long_review, $date);
    	while ($stmt2->fetch()) {
    		echo '
    		<div class="card space">
    		<div class="card-header">
    		<i class="fa-solid fa-user side_space" style="color: #009894"></i>
    		'. $username .'
    		</div>
    		<div class="card-body">
    		<h5 class="card-title">'. $short_review .'</h5>
    		<p class="card-text">'. $long_review .'</p>
    		</div>
    		<div class="card-footer text-muted">
    		'. $date .'
    		</div>
    		</div>
    		
    		';
    	}
    }

    		?>

    		

    		<div class="container space">
    			<div><h3>Write a Review</h3></div>
    			<?php
                $ids = $_GET['id'];
    			echo '<form action="adding_review.php" method="POST">
    			<input type="hidden" name="p_id" value="'. $ids .'" />
    			<input type="textarea" name="username" id="username_review_textarea" placeholder="Username(must)" class="review_textarea"/>
    			<input type="textarea" name="short_review" id="short_review_textarea" placeholder="Short Review(must)" class="review_textarea"/>
    			<textarea type="textarea" name="long_review" id="long_review_textarea" placeholder="Long Summery(Optional)" class="review_textarea"></textarea><br>
    			<input id="review_submit_btn" type="submit" name="" class="btn btn-primary main_theme">
    			</form>';
    			?>
    			
    		</div>

    		<div id="product_ads_2">
    			<div class="row container-fluid" id="product_ads_2">

    				<?php
    				$stmt2 = $mysqli->prepare ("SELECT id, shortname, brand, img1, sellingprice  FROM product WHERE type = '$type' ORDER BY RAND() LIMIT 4");
    				if($stmt2->execute()) {
    					$stmt2->bind_result($id, $shortname, $brand, $img1, $sellingprice);
    					while ($stmt2->fetch()) {
    						$image = unserialize($img1);
    						foreach($image as $pic) {
    							echo '
    							<div class="col-md-3 col-lg-3 container space">
    							<a href="product_show.php?id='. $id .'">
    							<div class="img_box container">
    							<img src="loginpanel/'. $pic .'" class="d-block w-100 space" alt="...">
    							<div class="container">
    							<h4>'. $shortname .'</h4>
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
    		<div id="product_ads_2">
    			<div class="row container-fluid" id="product_ads_2">

    				<?php
    				$stmt2 = $mysqli->prepare ("SELECT id, shortname, brand, img1, sellingprice  FROM product WHERE catagory = '$category' ORDER BY RAND() LIMIT 4");
    				if($stmt2->execute()) {
    					$stmt2->bind_result($id, $shortname, $brand, $img1, $sellingprice);
    					while ($stmt2->fetch()) {
    						$image = unserialize($img1);
    						foreach($image as $pic) {
    							echo '
    							<div class="col-md-3 col-lg-3 container space">
    							<a href="product_show.php?id='. $id .'">
    							<div class="img_box container">
    							<img src="loginpanel/'. $pic .'" class="d-block w-100 space" alt="...">
    							<div class="container">
    							<h4>'. $shortname .'</h4>
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
    	</div>
    </div>



	
	<?php
	   include 'footer.php';
	?>
</body>
</html>
<script type="text/javascript" src="./assets/js/main.js"></script>