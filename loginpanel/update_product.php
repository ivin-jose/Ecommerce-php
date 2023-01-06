<?php

include_once 'db-connect.php';
include_once 'session.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$productname = filter_input(INPUT_GET, 'productname', FILTER_SANITIZE_STRING);
$sellingprice = filter_input(INPUT_GET, 'selling_price', FILTER_SANITIZE_STRING);
$originalprice = filter_input(INPUT_GET, 'orginal_price', FILTER_SANITIZE_STRING);
$short_summery = filter_input(INPUT_GET, 'short_summery', FILTER_SANITIZE_STRING);
$long_summery = filter_input(INPUT_GET, 'long_summery', FILTER_SANITIZE_STRING);
$specifications = filter_input(INPUT_GET, 'specifications', FILTER_SANITIZE_STRING);
$category = filter_input(INPUT_GET, 'category', FILTER_SANITIZE_STRING);
$searchingkeywords = filter_input(INPUT_GET, 'searchingkeywords', FILTER_SANITIZE_STRING);
$brand = filter_input(INPUT_GET, 'brand', FILTER_SANITIZE_STRING);
$shortname = filter_input(INPUT_GET, 'shortname', FILTER_SANITIZE_STRING);
$type = filter_input(INPUT_GET, 'type', FILTER_SANITIZE_STRING);



?>