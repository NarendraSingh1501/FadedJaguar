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
        <title>FadedJaguar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!--jquery library-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!--Latest compiled and minified Javascript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link href="style.css" type="text/css" rel="stylesheet">
        <style>
            <?php include 'style.css';?>
            .footer{
                margin-top: 100px;
            }
        </style>
    </head>
    <body>
        <?php include 'include/header.php';
            $user = $_SESSION['id'];
            $get = "SELECT items.id, items.price from items INNER JOIN users_items where items.id = users_items.item_id and users_items.user_id = '$user' and users_items.status = 'Added to cart'";
            $get1 = mysqli_query($con, $get);
            $total = 0;
            if(mysqli_num_rows($get1)==0){
                echo "Add items to the cart first!";
            }
            else{
        ?>
        <div class="container" style="margin-top: 70px;">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Item Number</th>
                            <th>Price</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            while($x = mysqli_fetch_array($get1)){
                                echo "<tr>";
                                    echo "<th>".$x['id']."</th>";
                                    echo "<th>".$x['price']."</th>";
                                    $total = $total + $x['price'];
                                    echo "<th>"."<a href='cart-remove.php?item_id={$x['id']}' class='remove_item_link'> Remove</a>"."</th>";
                                echo "</tr>";
                            }?>
                            <th>TOTAL = </th>
                            <th><?php echo $total?></th><br>
                            <th><a class="btn btn-primary" href="success.php">Confirm Order</a></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
            <?php } echo $user;
            include 'include/footer.php';?>
    </body>
</html>