<?php
    include 'include/common.php';
    if (isset($_SESSION['email'])) {
        header('location: home.php');
        exit();
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
        <link href="style.css" type="text/css" rel="stylesheet">
        <style>
            <?php include 'style.css';?>
        </style>
    </head>
    <body onload="document.getElementById('defaultOpen').click();">
        <?php include 'include/header.php';?>
        <div class="container-fluid">
        <div class="container">
            <div class="jumbotron">
                <center>
                    <h1>Welcome to our Series Store!</h1>
                    <p>We have all the series and movies you want. No need to hunt around, we have all in one place.</p>
                </center>
            </div>
        </div>
            <div class="tab">
                <button>Power Ranger</button>
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'series')" id="defaultOpen">Series</button>
                <button class="tablinks" onclick="openCity(event, 'movies')">Movies</button>
            </div>
                <button class="tablinks" onclick="openCity(event, 'harry')">Harry Potter</button>
            </div>
            <div id="power">
            <div id="series" class="tabcontent">
        <div class="name">
            <h1>SERIES</h1>
            <div class="row">
            <div class="col-xs-3">
                <div class="thumbnail">
                    <img src="img/1.jpg" alt="">
                    <div class="caption">
                        <center>
                            <h1>Mighty Morphin Power Ranger</h1>
                            <h3>(1993)</h3>
                            <p>Price: Rs.599.00</p>
                        </center>
                        <a href="signup.php"><button type="submit" name="submit" class="btn btn-primary btn-block">Order Now</button></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="thumbnail">
                    <img src="img/2.jpg" alt="">
                    <div class="caption">
                        <center>
                            <h1>Mighty Morphin Alien Rangers</h1>
                            <h3>(1996)</h3>
                            <p>Price: Rs.599.00</p>
                        </center>
                        <a href="signup.php"><button type="submit" name="submit" class="btn btn-primary btn-block">Order Now</button></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="thumbnail">
                    <img src="img/5.jpg" alt="">
                    <div class="caption">
                        <center>
                            <h1>Power Rangers in Space</h1>
                            <h3>(1998)</h3>
                            <p>Price: Rs.629.00</p>
                        </center>
                        <a href="signup.php"><button type="submit" name="submit" class="btn btn-primary btn-block">Order Now</button></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="thumbnail">
                    <img src="img/7.jpg" alt="">
                    <div class="caption">
                        <center>
                            <h1>Power Rangers Lightspeed Rescue</h1>
                            <h3>(2000)</h3>
                            <p>Price: Rs.639.00</p>
                        </center>
                        <a href="signup.php"><button type="submit" name="submit" class="btn btn-primary btn-block">Order Now</button></a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xs-3">
                <div class="thumbnail">
                    <img src="img/9.jpg" alt="">
                    <div class="caption">
                        <center>
                            <h1>Power Rangers Wild Force</h1>
                            <h3>(2002)</h3>
                            <p>Price: Rs.650.00</p>
                        </center>
                        <a href="signup.php"><button type="submit" name="submit" class="btn btn-primary btn-block">Order Now</button></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="thumbnail">
                    <img src="img/14.jpg" alt="">
                    <div class="caption">
                        <center>
                            <h1>Power Rangers Operation Overdrive</h1>
                            <h3>(2007)</h3>
                            <p>Price: Rs.659.00</p>
                        </center>
                        <a href="signup.php"><button type="submit" name="submit" class="btn btn-primary btn-block">Order Now</button></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="thumbnail">
                    <img src="img/15.jpg" alt="">
                    <div class="caption">
                        <center>
                            <h1>Power Rangers Jungle Fury</h1>
                            <h3>(2008)</h3>
                            <p>Price: Rs.699.00</p>
                        </center>
                        <a href="signup.php"><button type="submit" name="submit" class="btn btn-primary btn-block">Order Now</button></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="thumbnail">
                    <img src="img/18.jpg" alt="">
                    <div class="caption">
                        <center>
                            <h1>Power Rangers Super Samurai</h1>
                            <h3>(2011)</h3>
                            <p>Price: Rs.709.00</p>
                        </center>
                        <a href="signup.php"><button type="submit" name="submit" class="btn btn-primary btn-block">Order Now</button></a>
                    </div>
                </div>
            </div>
        </div>
            
            <div class="row">
            <div class="col-xs-3">
                <div class="thumbnail">
                    <img src="img/20.jpg" alt="">
                    <div class="caption">
                        <center>
                            <h1>Power Rangers Super Megaforce</h1>
                            <h3>(2014)</h3>
                            <p>Price: Rs.729.00</p>
                        </center>
                        <a href="signup.php"><button type="submit" name="submit" class="btn btn-primary btn-block">Order Now</button></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="thumbnail">
                    <img src="img/22.jpg" alt="">
                    <div class="caption">
                        <center>
                            <h1>Power Rangers Dino Super Charge</h1>
                            <h3>(2016)</h3>
                            <p>Price: Rs.739.00</p>
                        </center>
                        <a href="signup.php"><button type="submit" name="submit" class="btn btn-primary btn-block">Order Now</button></a>
                    </div>
                </div>
            </div>
            
            <div class="col-xs-3">
                <div class="thumbnail">
                    <img src="img/24.jpg" alt="">
                    <div class="caption">
                        <center>
                            <h1>Power Rangers: Super Ninja Steel</h1>
                            <h3>(2018)</h3>
                            <p>Price: Rs.749.00</p>
                        </center>
                        <a href="signup.php"><button type="submit" name="submit" class="btn btn-primary btn-block">Order Now</button></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="thumbnail">
                    <img src="img/25.jpg" alt="">
                    <div class="caption">
                        <center>
                            <h1>Power Rangers Beast Morphers</h1>
                            <h3>(2019)</h3>
                            <p>Price: Rs.749.00</p>
                        </center>
                        <a href="signup.php"><button type="submit" name="submit" class="btn btn-primary btn-block">Order Now</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
            </div>
            <div id="movies" class="tabcontent">
        <div class="name">
            <h1>MOVIES</h1>
        <div class="row">
            <div class="col-xs-3">
                <div class="thumbnail">
                    <img src="img/26.jpg" alt="">
                    <div class="caption">
                        <center>
                            <h1>Mighty Morphin Power Rangers: The Movie</h1>
                            <h3>(1995)</h3>
                            <p>Price: Rs.799.00</p>
                        </center>
                        <a href="signup.php"><button type="submit" name="submit" class="btn btn-primary btn-block">Order Now</button></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="thumbnail">
                    <img src="img/27.jpg" alt="">
                    <div class="caption">
                        <center>
                            <h1>Turbo: A Power Rangers Movie</h1>
                            <h3>(1997)</h3>
                            <p>Price: Rs.899.00</p>
                        </center>
                        <a href="signup.php"><button type="submit" name="submit" class="btn btn-primary btn-block">Order Now</button></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="thumbnail">
                    <img src="img/28.jpg" alt="">
                    <div class="caption">
                        <center>
                            <h1>Power Rangers</h1>
                            <h3>(2017)</h3>
                            <p>Price: Rs.999.00</p>
                        </center>
                        <a href="signup.php"><button type="submit" name="submit" class="btn btn-primary btn-block">Order Now</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
            </div>
            
            <div id="harry" class="tabcontent">
            <div class="harry">
            <h1>HARRY POTTER</h1>
            <div class="row">
            <div class="col-xs-3">
                <div class="thumbnail">
                    <img src="img/31.jpg" alt="">
                    <div class="caption">
                        <center>
                            <h1>Harry Potter and the Philosopher's Stone</h1>
                            <h3>(2001)</h3>
                            <p>Price: Rs.499.00</p>
                        </center>
                        <a href="signup.php"><button type="submit" name="submit" class="btn btn-primary btn-block">Order Now</button></a>
                    </div>
                </div>
            </div>
                <div class="col-xs-3">
                <div class="thumbnail">
                    <img src="img/32.jpg" alt="">
                    <div class="caption">
                        <center>
                            <h1>Harry Potter and the Chamber of Secrets</h1>
                            <h3>(2002)</h3>
                            <p>Price: Rs.549.00</p>
                        </center>
                        <a href="signup.php"><button type="submit" name="submit" class="btn btn-primary btn-block">Order Now</button></a>
                    </div>
                </div>
            </div>
                <div class="col-xs-3">
                <div class="thumbnail">
                    <img src="img/33.jpg" alt="">
                    <div class="caption">
                        <center>
                            <h1>Harry Potter and the Prisoner of Azkaban</h1>
                            <h3>(2004)</h3>
                            <p>Price: Rs.599.00</p>
                        </center>
                        <a href="signup.php"><button type="submit" name="submit" class="btn btn-primary btn-block">Order Now</button></a>
                    </div>
                </div>
            </div>
                <div class="col-xs-3">
                <div class="thumbnail">
                    <img src="img/34.jpg" alt="">
                    <div class="caption">
                        <center>
                            <h1>Harry Potter and the Goblet of Fire</h1>
                            <h3>(2005)</h3>
                            <p>Price: Rs.649.00</p>
                        </center>
                        <a href="signup.php"><button type="submit" name="submit" class="btn btn-primary btn-block">Order Now</button></a>
                    </div>
                </div>
            </div>
            </div>
            <div class="row">
                <div class="col-xs-3">
                <div class="thumbnail">
                    <img src="img/35.jpg" alt="">
                    <div class="caption">
                        <center>
                            <h1>Harry Potter and the Order of the Phoenix</h1>
                            <h3>(2007)</h3>
                            <p>Price: Rs.699.00</p>
                        </center>
                        <a href="signup.php"><button type="submit" name="submit" class="btn btn-primary btn-block">Order Now</button></a>
                    </div>
                </div>
            </div>
                <div class="col-xs-3">
                <div class="thumbnail">
                    <img src="img/36.jpg" alt="">
                    <div class="caption">
                        <center>
                            <h1>Harry Potter and the Half-Blood Prince</h1>
                            <h3>(2009)</h3>
                            <p>Price: Rs.749.00</p>
                        </center>
                        <a href="signup.php"><button type="submit" name="submit" class="btn btn-primary btn-block">Order Now</button></a>
                    </div>
                </div>
            </div>
                <div class="col-xs-3">
                <div class="thumbnail">
                    <img src="img/37.jpg" alt="">
                    <div class="caption">
                        <center>
                            <h1>Harry Potter and the Deathly Hallows – Part 1</h1>
                            <h3>(2010)</h3>
                            <p>Price: Rs.799.00</p>
                        </center>
                        <a href="signup.php"><button type="submit" name="submit" class="btn btn-primary btn-block">Order Now</button></a>
                    </div>
                </div>
            </div>
                <div class="col-xs-3">
                <div class="thumbnail">
                    <img src="img/38.jpg" alt="">
                    <div class="caption">
                        <center>
                            <h1>Harry Potter and the Deathly Hallows – Part 2</h1>
                            <h3>(2011)</h3>
                            <p>Price: Rs.799.00</p>
                        </center>
                        <a href="signup.php"><button type="submit" name="submit" class="btn btn-primary btn-block">Order Now</button></a>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
         
        <script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
       </div>
        <?php include 'include/footer.php';?>
    </body>
</html>