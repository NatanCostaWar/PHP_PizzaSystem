<?php

include("../connect.php");

if(empty($_POST["id"])){
	header("Location: requestpage.php");
	exit();
}

$id = mysqli_real_escape_string($connection, $_POST["id"]);

$query = "DELETE FROM db_pizzasystem.request WHERE id = $id";

$result = mysqli_query($connection, $query);
if($result){
    header("Location: requestpage.php");
}else{
    header("Location: index.php");
}
?>