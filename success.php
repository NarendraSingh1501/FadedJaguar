<?php
include 'include/common.php';

$id = $_SESSION['id'];
$update = "UPDATE users_items SET status = 'confirmed' where user_id = '$id'";
$update_e = mysqli_query($con, $update);
echo "<center><img src = 'img/payment_tick.PNG' alt = 'tick'></center>";
echo "<center><p>Thank you ordering from FadedJaguar</p><br>"
. "<p>The order shall be delivered to you shortly.</p></center>";
echo "<center><p>Order some more electronic items "."<a href='home.php'>Click here</a>"." here</p></center>";