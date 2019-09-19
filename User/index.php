<!DOCTYPE html>
<html>
    <?php include("basepage.php"); ?>

    <body class="background">

        <div id="main">
        	<div class="jumbotron jumbotron-fluid">
				<div class="container">
			    	<center>
                		<h1><span class="badge badge-danger">Menu</span><h1>
                	</center>

                	<hr class='my-4'>
        		
		        <?php
				include("../connect.php");

				$query = "SELECT * FROM db_pizzasystem.pizza";
				$result = mysqli_query($connection ,$query) or die(mysql_error());

				while($fetch = mysqli_fetch_row($result)){
		        	echo "<div class='row'>
		                    <div class='col-sm-12 col-md-12 col-lg-12'>
		                        <h1 style='float:right'>" . "$" . $fetch[2] . "</h1>
		                        <h1>" . $fetch[0] . " - " . $fetch[1] . "</h1>
		                        <small>" . $fetch[3] . "</small>
		                    </div>
		                </div>";

					echo "<hr class='my-4'>";

			    }
				?>
        		</div>
			</div>
        </div>

        <div id="info">

        </div>


    </body> 


</html>