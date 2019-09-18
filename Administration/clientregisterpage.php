<!DOCTYPE html>
<html>
    <?php include("basepage.php"); ?>

    <body class="background">

        <div id="main">
            <div id="main-pizzaregister_form-div" style="color:#f4f7f5;">

                    <form action="clientregister.php" method="post">
                        <center>
                            <h2>Client Name</h2>
                            <input type="text" name="name">
                        </center>
                        
                        <center>
                            <h2>Address</h2>
                            <input type="text" name="address">
                        </center>

                        <center>
                            <h2>Phone</h2>
                            <input type="number" name="phone">
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