<?php
include_once 'loginpanel/session.php';
include_once 'loginpanel/db-connect.php';

    
    $o_id = $_GET['id'];
    if ($o_id != '') {
        $insrt = $mysqli->prepare("DELETE FROM order_details WHERE id = '$o_id'");
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
  <title>Order Canceled</title>

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
                 font-size: 45px;">ORDER CANCELED</h1>
                 <p>Your cancellation confirmed</p>
            </div>
            <div>
                <img class="" src="./assets/images/preloader/orderplaced.gif">
            </div>
            <div>
                <?php
                echo '
                <a href="order.php" class="btn btn-primary main_theme" style="width: 100px;">GO BACK</a>';
                ?>
            </div>
        </div>
    </center>
</body>
</html>