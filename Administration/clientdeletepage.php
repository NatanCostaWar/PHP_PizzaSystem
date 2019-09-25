<!DOCTYPE html>
<html>
    <?php include("basepage.php"); ?>

    <body class="background">

        <div id="main">
            <div id="main-pizzaregister_form-div" style="color:#f4f7f5;">

                    <form action="clientdelete.php" method="post">
                        <center>
                            <h2>Select Pizza:</h2>
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
                            <button class="btn border" type="submit" style="color:#f4f7f5;margin-top:20px;">
                                Delete
                            </button>
                        </center>
                    </form> 
                

            </div>
        </div>

        <div id="info">

        </div>


    </body> 


</html>