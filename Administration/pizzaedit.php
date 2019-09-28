<?php

include("../connect.php");

if(empty($_POST["id"])){
	header("Location: pizzaeditpage.php");
	exit();
}

$id = mysqli_real_escape_string($connection, $_POST["id"]);


if(!empty($_POST["name"])){
	$name = mysqli_real_escape_string($connection, $_POST["name"]);
	$query = "UPDATE db_pizzasystem.pizza SET name = '{$name}' WHERE id = {$id} LIMIT 1";
	$result = mysqli_query($connection, $query);
}

if(!empty($_POST["price"])){
	$price = mysqli_real_escape_string($connection, $_POST["price"]);
	$query = "UPDATE db_pizzasystem.pizza SET price = '{$price}' WHERE id = {$id} LIMIT 1";
	$result = mysqli_query($connection, $query);
}

if(!empty($_POST["description"])){
	$description = mysqli_real_escape_string($connection, $_POST["description"]);
	$query = "UPDATE db_pizzasystem.pizza SET description = '{$description}' WHERE id = {$id} LIMIT 1";
	$result = mysqli_query($connection, $query);
}


header("Location: index.php");
?>