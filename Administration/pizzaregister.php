<?php

include("../connect.php");
if(empty($_POST["name"]) || empty($_POST["price"]) || empty($_POST["description"])){
	header("Location: pizzaregisterpage.php");
	exit();
}

$name = mysqli_real_escape_string($connection, $_POST["name"]);
$price = mysqli_real_escape_string($connection, $_POST["price"]);
$description = mysqli_real_escape_string($connection, $_POST["description"]);


$query = "INSERT INTO db_pizzasystem.pizza (id, name, price, description) VALUES (NULL, '{$name}', '{$price}', '{$description}')";
$result = mysqli_query($connection, $query);
if($result){
    header("Location: index.php");
}else{
    header("Location: pizzaregisterpage.php");
}
?>