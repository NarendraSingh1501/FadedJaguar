<?php
include 'include/common.php';
if(!isset($_SESSION['email'])){
    header('location: index.php');
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!--jquery library-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!--Latest compiled and minified Javascript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include 'include/header.php';?>
        <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2 style="margin-top: 70px;">Change Password</h2>
                        <form method="post" action="setting_script.php">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Old Password" name="oldPassword" required = "true">
                                <div>
                                    <?php echo filter_input(INPUT_GET, 'password_error', FILTER_SANITIZE_STRING);?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="New Password" name="newPassword" required = "true">
                                <div>
                                    <?php echo filter_input(INPUT_GET, 'password_error', FILTER_SANITIZE_STRING);?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Re-type New Password" name="reNewPassword" required = "true">
                                <div>
                                    <?php echo filter_input(INPUT_GET, 'password_error', FILTER_SANITIZE_STRING);?>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Change</button><br><br><br><br><br>
                        </form>
                    </div>
                </div>
            </div>
        <?php include 'include/footer.php';?>
    </body>
</html>