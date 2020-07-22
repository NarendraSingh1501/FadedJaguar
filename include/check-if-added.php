<?php
function check_if_added_to_cart($item_id){
   $con = mysqli_connect("localhost","root","","final","3308","/tmp/mysql.sock") or die(mysqli_error($con));
   $user_id = $_SESSION['id'];
   $test = "SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'";
   $t_query = mysqli_query($con, $test);
   if(mysqli_num_rows($t_query)>=1){
       return '1';
   }
   else{
       return '0';
   }
}