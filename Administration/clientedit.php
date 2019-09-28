<?php

include("../connect.php");

if(empty($_POST["id"])){
	header("Location: clienteditpage.php");
	exit();
}

$id = mysqli_real_escape_string($connection, $_POST["id"]);

if(!empty($_POST["name"])){
	$name = mysqli_real_escape_string($connection, $_POST["name"]);
	$query = "UPDATE db_pizzasystem.client SET name = '{$name}' WHERE id = {$id} LIMIT 1";
	$result = mysqli_query($connection, $query);
}

if(!empty($_POST["address"])){
	$address = mysqli_real_escape_string($connection, $_POST["address"]);
	$query = "UPDATE db_pizzasystem.client SET address = '{$address}' WHERE id = {$id} LIMIT 1";
	$result = mysqli_query($connection, $query);
}

if(!empty($_POST["phone"])){
	echo "rola";
	$phone = mysqli_real_escape_string($connection, $_POST["phone"]);
	$query = "UPDATE db_pizzasystem.client SET phone = '{$phone}' WHERE id = {$id} LIMIT 1";
	$result = mysqli_query($connection, $query);
}


header("Location: index.php");
?>