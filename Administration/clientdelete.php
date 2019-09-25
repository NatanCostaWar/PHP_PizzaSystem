<?php

include("../connect.php");

if(empty($_POST["id"])){
	header("Location: clientdeletepage.php");
	exit();
}

$id = mysqli_real_escape_string($connection, $_POST["id"]);

$query = "DELETE FROM db_pizzasystem.client WHERE id = $id";

$result = mysqli_query($connection, $query);
if($result){
    header("Location: index.php");
}else{
    header("Location: clientdeletepage.php");
}
?>