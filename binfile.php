<?php
include_once 'loginpanel/db-connect.php';
include_once 'loginpanel/session.php';

if (isset($_POST['searching_element'])) {
	
	$searching_element = filter_input(INPUT_POST, 'searching_element' ,FILTER_SANITIZE_STRING);
	$search = ('%'. $searching_element. '%');
	$stmt2 = $mysqli->prepare ("SELECT id, type, brand, img1, sellingprice  FROM product WHERE productname LIKE '$search'");
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
}
?>
