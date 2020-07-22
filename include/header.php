<div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand">FadedJaguar</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                            if (isset($_SESSION['email'])) {
                        ?>
                        <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                        <li><a href = "setting.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                        <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                      
                        
                        <?php
                            } else {
                        ?> 
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> 
                        <li>
                        <a onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                        
                            <div id="id01" class="modal " >
                                <form class="modal-content animate" action="login_submit" method="post">
                                    <div class="imgcontainer">
                                        <img src="img/profile.jpg" alt="profile">
                                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                        <h1 class="container">LOGIN</h1>
                                    </div>
                                    <div class="container">
                                        <span class="new">Don't have an account? <a href="signup.php" style="color: #0077b3;">Register</a></span><br><br>
                                        <label for="email"><b>Email Id</b></label>
                                        <input type="text" placeholder="Enter Email Id" name="email" required style="margin-left: 30px;"><br><br>
                                        <label for="password"><b>Password</b></label>
                                        <input type="password" placeholder="Enter Password" name="password" required style="margin-left: 17px;"><br><br>
                                        <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                                        <span class="psw">Forgot <a href="#" style="color: #0077b3;">password?</a></span>
                                    </div>
                                </form>
                            </div>
                        
                            <script>
                                // Get the modal
                                var modal = document.getElementById('id01');
                                // When the user clicks anywhere outside of the modal, close it
                                window.onclick = function(event) {
                                    if (event.target == modal) {
                                        modal.style.display = "none";
                                    }
                                }
                            </script>
                            
                            </li>
                        <li><a href="about.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
                        <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact</a></li>
                        <?php
                            } 
                        ?>
                    </ul>
                </div>
            </div>
        </div>