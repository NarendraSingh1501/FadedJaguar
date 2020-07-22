<?php
include 'include/common.php';
$id = $_SESSION['id'];
$i_id = filter_input(INPUT_GET, 'item_id', FILTER_SANITIZE_STRING);
$delete = "DELETE from users_items where item_id = '$i_id' and user_id = '$id'";
$d_exe = mysqli_query($con, $delete);
header("location: cart.php");