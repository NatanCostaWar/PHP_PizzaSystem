<?php

include("../connect.php");
if(empty($_POST["address"]) || empty($_POST["notes"]) || empty($_POST["pizza"])){
	header("Location: requestpage.php");
	exit();
}

$address = mysqli_real_escape_string($connection, $_POST["address"]);
$notes = mysqli_real_escape_string($connection, $_POST["notes"]);
$pizza = mysqli_real_escape_string($connection, $_POST["pizza"]);
$pizza = (int)($pizza);
$user = mysqli_real_escape_string($connection, $_POST["user"]);

echo $address;
echo $notes;

$query = "INSERT INTO db_pizzasystem.request (id, address, notes, pizza, user) VALUES (NULL, '{$address}', '{$notes}', '{$pizza}', '{$user}')";
$result = mysqli_query($connection, $query);

echo $result;
if($result){
    header("Location: index.php");
}else{
    header("Location: requestpage.php");
}
?>