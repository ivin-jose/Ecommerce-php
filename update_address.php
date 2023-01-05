<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update Address</title>

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
	<main>
		<div class="container space">
			    <?php
         $stmt2 = $mysqli->prepare ("SELECT id, name, house, po, district, pin, phone, email FROM useraddress LIMIT 1");
        if($stmt2->execute()) {
          $stmt2->bind_result($id, $name, $house, $po, $district, $pin, $phone, $email);
          }

      while ($stmt2->fetch()) {
          echo '
          <div class="col-md-6">
          	<form method="POST" action="adding_address.php">
          		<label style="color: red">Name</label>
          		<input type="text" name="name" value="'. $name .'" class="form-control"><br>
          		<label style="color: red">House Name</label>
          		<input type="text" name="house" value="'. $house .'" class="form-control"><br>
          		<label style="color: red">Post Office</label>
          		<input type="text" name="po" value="'. $po .'" class="form-control"><br>
          		<label style="color: red">Sub/District</label>
          		<input type="text" name="district" value="'. $district .'" class="form-control"><br>
              <label style="color: red">Phone Number</label>
          		<input type="text" name="phone" value="'. $phone .'" class="form-control"><br>
          		<label style="color: red">Email</label>
          		<input type="text" name="email" value="'. $email .'" class="form-control"><br>
          		<label style="color: red">Pin Number</label>
          		<input type="text" name="pin" value="'. $pin .'" class="form-control"><br>
          		<input type="submit" name="submit" class="btn btn-primary main_theme">
          	</form>

        ';}
      ?>
		</div>
	</main>

	<?php
		include 'footer.php';
	?>
</body>
</html>
<script type="text/javascript" src="./assets/js/main.js"></script>
