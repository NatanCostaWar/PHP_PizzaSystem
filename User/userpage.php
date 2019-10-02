<?php
include('login_veryfy.php')
?>
<html>

<?php include("basepage.php"); ?>


    <body class="background" style="background-color:#160f29">

    	<h1 style="color:white;">
			Ola, <?php echo $_SESSION['username']; ?>
		</h1>

		<form action="logout.php">
			<button type="submit">
				Logout
			</button>
		</form>

        <div id="info">

        </div>


    </body> 


</html>