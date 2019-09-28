<!DOCTYPE html>
<html>
    <?php include("basepage.php"); ?>

    <body class="background">

        <div id="main">
            <div id="main-pizzaregister_form-div" style="color:#f4f7f5;">

                    <form action="pizzaedit.php" method="post">
                        <center>
                            <h2>Select Pizza:</h2>
                            <?php
                                include("../connect.php");
                                $query = "SELECT * FROM db_pizzasystem.pizza";
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
                            <h2>New Pizza Name</h2>
                            <input type="text" placeholder="Name" name="name">
                        </center>
                        
                        <center>
                            <h2>New Price</h2>
                            <input type="number" placeholder="10,0" step="0.01" name="price">
                        </center>

                        <center>
                            <h2>New Description</h2>
                            <textarea rows="5" cols="30" name="description"></textarea>
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