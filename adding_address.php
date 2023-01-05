<?php
include_once 'loginpanel/session.php';
include_once 'loginpanel/db-connect.php';

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $po = filter_input(INPUT_POST, 'po', FILTER_SANITIZE_STRING);
    $house = filter_input(INPUT_POST, 'house', FILTER_SANITIZE_STRING);
    $district = filter_input(INPUT_POST, 'district', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
    $pincode = filter_input(INPUT_POST, 'pincode', FILTER_SANITIZE_STRING);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    
        $insrt = $mysqli->prepare("UPDATE useraddress SET name = ?, house = ?, po = ?, district = ?, pin = ?, phone = ?, email = ? WHERE id = 1");
        $insrt->bind_param('sssssss', $name, $house, $po, $district, $pincode, $phone, $email);
         $insrt->execute();
  ?>
