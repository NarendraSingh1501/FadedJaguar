<?php
include 'include/common.php';
$user_id = $_SESSION['id'];
$id2 = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
$insert = "INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$id2', 'Added to cart')";
mysqli_query($con, $insert);
header('location: home.php');
exit();