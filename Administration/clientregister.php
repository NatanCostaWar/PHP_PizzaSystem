<?php

include("../connect.php");
if(empty($_POST["name"]) || empty($_POST["address"]) || empty($_POST["phone"])){
	header("Location: clientregisterpage.php");
	exit();
}

$name = mysqli_real_escape_string($connection, $_POST["name"]);
$address = mysqli_real_escape_string($connection, $_POST["address"]);
$phone = mysqli_real_escape_string($connection, $_POST["phone"]);

$query = "INSERT INTO db_pizzasystem.client (id, name, address, phone) VALUES (NULL, '{$name}', '{$address}', '{$phone}')";
$result = mysqli_query($connection, $query);
if($result){
    header("Location: index.php");
}else{
    header("Location: clientregisterpage.php");
}
?>