<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile</title>

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
          <h2>Your Address</h2>
          '. $name .',<br>
          '. $house .'(ho),<br>
          '. $po .'<br>
          '. $district .'<br>
          PIN :'. $pin .'<br>
          '. $phone .'<br>
          '. $email .'<br>
          <a href="update_address.php?id='.$id.'" class="btn btn-primary main_theme space">Change Address</a><br><br>
          <a href="order.php" class="btn btn-primary main_theme space">Your Orders</a>
          </div>';

        }
      ?>
		</div>
	</main>

	<?php
		include 'footer.php';
	?>
</body>
</html>
<script type="text/javascript" src="./assets/js/main.js"></script>
