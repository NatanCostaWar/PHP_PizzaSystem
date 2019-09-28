<!DOCTYPE html>
<html>
    <?php include("basepage.php"); ?>

    <body class="background">

        <div id="main">
            <div id="main-pizzaregister_form-div" style="color:#f4f7f5;">

                    <form action="clientedit.php" method="post">
                        <center>
                            <h2>Select Client:</h2>
                            <?php
                                include("../connect.php");
                                $query = "SELECT * FROM db_pizzasystem.client";
                                $result = mysqli_query($connection, $query);
                            ?>

                            <select name="id">
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
                            <h2>New Client Name</h2>
                            <input type="text" name="name">
                        </center>
                        
                        <center>
                            <h2>New Address</h2>
                            <input type="text" name="address">
                        </center>

                        <center>
                            <h2>New Phone</h2>
                            <input type="number" name="phone">
                        </center>
                        
                        
                        <center>
                            <button class="btn border" type="submit" style="color:#f4f7f5;margin-top:20px;">
                                edit
                            </button>
                        </center>
                    </form> 
                

            </div>
        </div>

        <div id="info">

        </div>


    </body> 


</html>