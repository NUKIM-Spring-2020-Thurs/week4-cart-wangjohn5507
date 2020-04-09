<?php 
session_start();
if (isset($_SESSION["ID"])) {
	$id=$_SESSION["id"];
	$name=$_SESSION["name"];
	$price=$_SESSION["price"];
	$num=$_SESSION["number"];

	setcookie($id."[id]", $id, time()+3600);
	setcookie($id."[name]", $name, time()+3600);
	setcookie($id."[price]", $price, time()+3600);
	setcookie($id."[number]", $num, time()+3600);
}

header('Location:hwcatalog.php');
 ?>



