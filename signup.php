<?php
include 'include/common.php';
if(isset($_SESSION['email'])) {
    header('location: home.php');
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
        <title>FadedJaguar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!--jquery library-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!--Latest compiled and minified Javascript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <link rel="stylesheet" href="style.css" type="text/css">
        <style>
            <?php include 'style.css';?>
        </style>
    </head>
    <body>
        <?php include 'include/header.php';?>
        <div class="container-fluid">
            <div class="background-image">
                <div class="content">
                    <div class="row">
                        <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                            <h2>SIGN UP</h2>
                            <form method="post" action="signup_script.php">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Email"  name="email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2.3}$">
                                    <div>
                                        <?php echo filter_input(INPUT_GET, 'email_error', FILTER_SANITIZE_STRING);?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required = "true" pattern=".{6,}">
                                    <div>
                                        <?php echo filter_input(INPUT_GET, 'password_error', FILTER_SANITIZE_STRING);?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control"  placeholder="Contact" name="contact" required = "true">
                                </div>
                                <div class="form-group">
                                    <input class="form-control"  placeholder="City" name="city" required = "true">
                                </div>
                                <div class="form-group">
                                    <input class="form-control"  placeholder="Address" name="address" required = "true">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                
                                
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-danger" style="margin-top: -50px">
      <div class="panel-heading">Information!</div>
      <div class="panel-body">If you already created an account then please LogIn.</div>
    </div>
        </div>
        <?php include 'include/footer.php';?>
    </body>
</html>