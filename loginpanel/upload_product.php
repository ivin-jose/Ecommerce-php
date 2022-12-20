<?php 
include_once 'db-connect.php';
include_once 'session.php';

if ($_SESSION['type'] != 'admin') {
  header("Location: index.php");
}
if ($_SESSION["type"] != 'admin') {
 header("Location: main.php");
}

if (isset($_POST['product_name'], $_POST['selling_price'], $_POST['orginal_price'])) {
  
  $product_name = filter_input(INPUT_POST, 'product_name', FILTER_SANITIZE_STRING);
  $selling_price = filter_input(INPUT_POST, 'selling_price', FILTER_SANITIZE_STRING);
  $orginal_price = filter_input(INPUT_POST, 'orginal_price', FILTER_SANITIZE_STRING);
  $category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);
  $specifications = filter_input(INPUT_POST, 'specifications', FILTER_SANITIZE_STRING);
  $short_summery = filter_input(INPUT_POST, 'short_summery', FILTER_SANITIZE_STRING);
  $long_summery = filter_input(INPUT_POST, 'long_summery', FILTER_SANITIZE_STRING);
  $brand = filter_input(INPUT_POST, 'brand', FILTER_SANITIZE_STRING);
  $type = filter_input(INPUT_POST, 'type', FILTER_SANITIZE_STRING);
  //Adding images to database
  // image 1

  $img1_array = array();
  $img1_array_main =array();

  foreach ($_FILES['image1']['name'] as $img1key => $img1value) {
    $p_target_dir = "assets/images/products/";
    $p_target_file = $p_target_dir.$_FILES['image1']['name'][$img1key];
    if (move_uploaded_file($_FILES['image1']['tmp_name'][$img1key], $p_target_file)) {
      $img1_array_main[] = $p_target_file;
    }
  }
  if (!empty($img1_array_main)) {
    foreach($img1_array_main as $image_src) {
      array_push($img1_array, $image_src);
    }
  }

  // image 2

  $img2_array = array();
  $img2_array_main =array();

  foreach ($_FILES['image2']['name'] as $img2key => $img2value) {
    $p_target_dir = "assets/images/products/";
    $p_target_file = $p_target_dir.$_FILES['image2']['name'][$img2key];
    if (move_uploaded_file($_FILES['image2']['tmp_name'][$img2key], $p_target_file)) {
      $img2_array_main[] = $p_target_file;
    }
  }
  if (!empty($img2_array_main)) {
    foreach($img2_array_main as $image_src) {
      array_push($img2_array, $image_src);
    }
  }

  // image 3

  $img3_array = array();
  $img3_array_main =array();

  foreach ($_FILES['image3']['name'] as $img3key => $img3value) {
    $p_target_dir = "assets/images/products/";
    $p_target_file = $p_target_dir.$_FILES['image3']['name'][$img3key];
    if (move_uploaded_file($_FILES['image3']['tmp_name'][$img3key], $p_target_file)) {
      $img3_array_main[] = $p_target_file;
    }
  }
  if (!empty($img3_array_main)) {
    foreach($img3_array_main as $image_src) {
      array_push($img3_array, $image_src);
    }
  }

  if ($product_name != '') {
  $insert_resume = $mysqli->prepare("INSERT INTO product (productname, sellingprice, orginalprice, catagory, specifications, short_summery, long_summery, img1, img2, img3, brand, type) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

  $img1 = serialize($img1_array_main);
  $img2 = serialize($img2_array_main);
  $img3 = serialize($img3_array_main);

  $insert_resume->bind_param('ssssssssssss', $product_name, $selling_price, $orginal_price, $category, $specifications, $short_summery, $long_summery, $img1, $img2, $img3, $brand, $type);
  $insert_resume->execute();

  header('Location: add_product.php');
  echo 'success';
  }
}
?>



