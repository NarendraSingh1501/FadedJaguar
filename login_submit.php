<?php
include 'include/common.php';
$email = mysqli_real_escape_string($con, filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING));
$pass = md5(md5(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING)));
$fetch = "SELECT id,email from users where email='$email' and password='$pass'"; 
$result = mysqli_query($con, $fetch);
if(mysqli_num_rows($result)==0){
    header('location: index.php?email_error = Enter correct email and password.');
}
else{
    $row = mysqli_fetch_array($result);
    $_SESSION['id'] = $row['id'];
    $_SESSION['email'] = $row['email'];
    if (isset($_SESSION['email'])) {
        header('location: home.php');
    }
}