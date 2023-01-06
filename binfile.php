        <?php

        $id = $_GET['id'];

        $stmt2 = $mysqli->prepare ("SELECT id, productname, specifications, sellingprice, orginalprice, short_summery, long_summery, brand, img1, img2, img3  FROM product WHERE id = '$id'");
        if($stmt2->execute()) {
            $stmt2->bind_result($id, $productname, $specifications, $selling_price, $orginal_price, $short_summery, $long_summery, $brand, $img1, $img2, $img3);
            while ($stmt2->fetch()) {
                $image1 = unserialize($img1);
                $image3 = unserialize($img3);
                $image2 = unserialize($img2);
                foreach($image1 as $pic1) {
                    foreach($image2 as $pic2){
                        foreach($image3 as $pic3){
                            echo '<div id="product_show_img_div" class="container">
                            <div id="product_show_img" class="space container">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="'. $pic1 .'" class="d-block w-100" alt="fff">
                            </div>
                            <div class="carousel-item">
                            <img src="'. $pic2 .'" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="'. $pic3 .'" class="d-block w-100" alt="...">
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
                            <h3>'. $productname .'</h3>
                            </div>
                            <div class="price_div">
                            <div><h2 class="darkbg">$'. $selling_price .'</h2></div>
                            <div class="side_space cart_product_orginal_price"><h5 id="">$'. $orginal_price .'</h5></div>
                            </div>
                            <div id="product_short_summary">
                            <h5>'. $brand .'</h5>
                            <p><b>'. $short_summery .'</b></p>
                            </div>
                            <div id="product_long_summary">
                            '. $long_summery .'
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
                            '. $specifications .'
                            </div>';
                        }
                    }
                }
            }
        }
        ?>
        