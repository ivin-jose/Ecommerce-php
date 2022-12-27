<?php
include_once 'loginpanel/session.php';
include_once 'loginpanel/db-connect.php';

    $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
    $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
    $pincode = filter_input(INPUT_POST, 'pincode', FILTER_SANITIZE_STRING);
    $p_id = filter_input(INPUT_POST, 'p_id', FILTER_SANITIZE_STRING);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);

    if ($firstname != '') {
        $insrt = $mysqli->prepare("INSERT INTO order_details (product_id, firstname, lastname, email, address, pincode, phone, date) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
        $insrt->bind_param('isssssss', $p_id, $firstname, $lastname, $email, $address, $pincode, $phone, $date);
         $insrt->execute();
    }
    else{
        header('Location: product_show.php?id='. $p_id .'');
    }


  ?>
  <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Order Placed</title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <script type="text/javascript" src="./assets/js/main.js"></script>

    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.4/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.4/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body style="">
    <center>
        <div>
            <div>
                <h1 class="space space space" style="margin-top: 80px;
                 font-size: 45px;">ORDER PLACED</h1>
                 <p>We will update the details on Time</p>
            </div>
            <div>
                <img class="" src="./assets/images/preloader/orderplaced.gif">
            </div>
            <div>
                <?php
                echo '
                <a href="product_show.php?id='. $p_id .'" class="btn btn-primary main_theme" style="width: 100px;">OK</a>';
                ?>
            </div>
        </div>
    </center>
</body>
</html>