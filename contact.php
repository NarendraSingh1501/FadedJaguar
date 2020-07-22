<?php
    include 'include/common.php';
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
    </head>
    <body>
        <?php include 'include/header.php';?>
        <style>
            <?php include 'style.css';?>
        </style>
        <div class="row" style="margin-top: 45px;">
            <div class="container">
                <h1>LIVE SUPPORT</h1>
                <p>24 hours | 7 days a week | 365 days a year Live Technical Support</p>
                <h4>We are here to help you any time you want. Just drop a message and we will take action on it ASAP (as soon as possible).<br>
                    We are here to help and assist you with any kind of problem that you face while browsing on our site.<br>
                    Just tell us what you want to see. So that we can add it.</h4><br><br>
                <div class="col-xs-7">
                    <h1>CONTACT US</h1>
                    <form action="mail.php" method="post">
                        <div class="form-group">
                            <input class="form-control" placeholder="Name" name="name"  required pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" placeholder="Email"  name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2.3}$">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Message" name="message" required></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-xs-5">
                    <h1>COMPANY INFORMATION:</h1>
                    <p>Address:Jaipur, Rajasthan</p>
                    <p>Phone: (+91)123-00-00000</p>
                    <p>Fax: (000)000 00 0</p>
                    <p>Email: narendrarewar966@gmail.com</p>
                    <p>Instagram: @fadedjaguar</p>
                    <p>Twitter: @Narendr51942797</p>
                    <p>Follow Me On: Instagram, Twitter</p>
                </div>
            </div>
        </div><br><br>
        <?php include 'include/footer.php';?>
    </body>
</html>