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
    $p_id = $_GET['id'];
	?>

<div class="container space">
	<form class="row g-3" method="POST" action="confirm_order.php">
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationDefault01" name="firstname" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationDefault02" name="lastname" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">Email</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2">@</span>
      <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required name="email">
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationDefault03" class="form-label">Address</label>
    <input type="text" class="form-control" id="validationDefault03" required name="address">
  </div>
  <div class="col-md-3">
    <label for="validationDefault05" class="form-label">Pin code</label>
    <input type="text" class="form-control" id="validationDefault05" required name="pincode">
    <?php
    echo ' <input type="hidden" class="form-control" id="validationDefault05" required name="p_id" value="'. $p_id .'">';
    ?>
   
  </div>
  <div class="col-md-6">
    <label for="validationDefault03" class="form-label">Phone</label>
    <input type="text" class="form-control" id="validationDefault03" required name="phone">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Agree to terms and conditions
      </label>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary main_theme" type="submit" name="submit">Place Order</button>
  </div>
</form>
</div>

	<?php
		include 'footer.php';
	?>
</body>
</html>
<script type="text/javascript" src="./assets/js/main.js"></script>