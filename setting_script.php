<?php
include 'include/common.php';
$id = $_SESSION['id'];
if(!isset($_SESSION['email'])){
    header('location: index.php');
}
$old = md5(md5(filter_input(INPUT_POST, 'oldPassword', FILTER_SANITIZE_STRING)));
$new = md5(md5(filter_input(INPUT_POST, 'newPassword', FILTER_SANITIZE_STRING)));
$re = md5(md5(filter_input(INPUT_POST, 'reNewPassword', FILTER_SANITIZE_STRING)));
if($new == $re){
    $passw = "SELECT password from users where id = '$id'";
    $try = mysqli_query($con, $passw);
    $b = mysqli_fetch_array($try);
    if($b['password'] == $old){
        $new_p = "UPDATE users SET password = '$re' where id = '$id'";
        $set = mysqli_query($con, $new_p);
        header('location: home.php');
    }
    else{
        header('location: setting.php?password_error = enter correct old password');
    }
}
else{
    header('location: setting.php?password_error = enter correct new password');
    exit();
}