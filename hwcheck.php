<?php
ob_start(); //緩衝區，按照程式順序而沒有優先權
session_start();
$id=$_POST["id"];
$pwd=$_POST["pwd"];

$uid="John";
$upwd="John550714";


if($id==$uid && $pwd==$upwd){
	$_SESSION["login"]="S";
	$_SESSION["ID"]=$id;
	echo "login success";
	//echo "<meta http-equiv='refresh' content='2;url=imcamp.php'/>";
	header('location:hwcatalog.php');
}else{
	$_SESSION["login"]="F";
	//echo "login failed, back to login page in 3 seconds";
	//echo "<meta http-equiv='refresh' content='3;url=login.php'/>";
	header('location:hwlogin.php');
}


?>