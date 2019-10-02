<?php
include('login_veryfy.php')
?>
<!DOCTYPE html>
<html>
    <?php include("basepage.php"); ?>

    <body class="background">

        <div id="main">
            <div id="main-pizzaregister_form-div" style="color:#f4f7f5;">

                    <form action="request.php" method="post">
                        <center>
                            <h2>Select Pizza:</h2>
                            <?php
                                include("../connect.php");
                                $query = "SELECT * FROM db_pizzasystem.pizza";
                                $result = mysqli_query($connection, $query);
                            ?>

                            <select name="pizza">
                            <?php
                                while($row = mysqli_fetch_array($result)) {
                                echo "<option value=". $row['id'] .">";
                                echo $row['name'];
                                echo "</option>";
                                }
                            ?> 
                            </select>

                        </center>
                        
                        <center>
                            <h2>Address</h2>
                            <input type="text" name="address">
                        </center>

                        <center>
                            <h2>Notes:</h2>
                            <textarea rows="5" cols="30" name="notes"></textarea>
                        </center>

                        
                            
                        <input type="hidden" name="user" value=<?php echo $_SESSION['username'] ?>>
                        
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