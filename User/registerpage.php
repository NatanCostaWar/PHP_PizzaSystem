<!DOCTYPE html>
<html>


<?php include("basepage.php"); ?>


    <body class="background" style="background-color:#160f29">


        <div id="main">
            <div id="main-login_form-div" style="color:#f4f7f5;">

                    <form action="register.php" method="post">
                        <center>
                            <h2>Username</h2>
                            <input type="text" placeholder="Username" name="username">
                        </center>
                        
                        <center>
                            <h2>Password</h2>
                            <input type="password" placeholder="Password" name="password">
                        </center>
                        
                        <center>
                            <button class="btn border" type="submit" style="color:#f4f7f5;margin-top:20px;">
                                Register
                            </button>
                        </center>
                    </form> 
                

            </div>
        </div>

        <div id="info">

        </div>


    </body> 


</html>