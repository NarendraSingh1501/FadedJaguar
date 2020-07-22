<?php
include 'include/common.php';
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$name = mysqli_real_escape_string($con, filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$pass = md5(md5(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING)));
$contact = filter_input(INPUT_POST, 'contact', FILTER_SANITIZE_STRING);
$city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING);
$address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
$fetch = "SELECT id from users where email='$email'";
$result = mysqli_query($con, $fetch);
if(mysqli_num_rows($result)>0){
    header('location: signup.php?email_error = email id already exist');
    exit();
}
else if(!preg_match($regex_email, $email)) {
  header('location: index.php?email_error=enter correct email');
}
else if(strlen($pass)<6){
    header('location: signup.php?password_error = enter correct password');
    exit();
}
    $user_reg = "INSERT INTO users(name,email,password,contact,city,address) values ('$name','$email','$pass','$contact','$city','$address')";
    $user_r_submit = mysqli_query($con, $user_reg) or die(mysqli_error($con));
    $_SESSION['id'] = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    if (isset($_SESSION['email'])) {
        header('location: home.php');
        exit();
    }