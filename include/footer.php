<div class="footer">
    <div class="row">
    <div class="col-xs-4">
        <div class="caption">
            <center>
                <h1>Information</h1>
                <p><a href="about.php">About Us</a></p>
                <p><a href="contact.php">Contact Us</a></p>
            </center>
        </div>
    </div>
    <div class="col-xs-4">
        <div class="caption">
            <center>            
                <h1>My Account</h1>
                <p><a onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</a>
                        
                            <div id="id01" class="modal">
                                <form class="modal-content animate" action="" method="post">
                                    <div class="imgcontainer">
                                        <img src="img/profile.jpg" alt="profile">
                                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                        <h1>LOGIN</h1>
                                    </div>
                                    <div class="container">
                                        <span class="new">Don't have an account? <a href="signup.php" style="color: #0077b3;">Register</a></span><br><br>
                                        <label for="uname"><b>Email Id</b></label>
                                        <input type="text" placeholder="Enter Email Id" name="uname" required style="margin-left: 30px;"><br><br>
                                        <label for="psw"><b>Password</b></label>
                                        <input type="password" placeholder="Enter Password" name="psw" required style="margin-left: 17px;"><br><br>
                                        <button type="submit" class="btn btn-primary">Login</button><br><br>
                                        <span class="psw">Forgot <a href="forgot.php" style="color: #0077b3;">password?</a></span>
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
            </p>
                <p><a href="signup.php">Signup</a></p>
            </center>
        </div>
    </div>
    <div class="col-xs-4">
        <div class="caption">
            <center>            
                <h1>Contact Us</h1>
                <p></p>
                <p>Contact: +91-123-0000000</p>
            </center>            
        </div>
    </div>
    </div>
</div>

    <div class="footer2">
            <center>
                <p>Copyright © FadedJaguar. All Rights Reserved.</p>
            </center>
        </div>
