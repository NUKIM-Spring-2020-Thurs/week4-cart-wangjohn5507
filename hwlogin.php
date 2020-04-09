<h1>LOG IN</h1>

<?php
if(isset($_COOKIE["ID"])){
	$user=$_COOKIE["ID"];
	echo "歡迎再度光臨".$_COOKIE["ID"];

	setcookie("ID","",time()-3600);
}else{
	$user="";
	echo "歡迎新朋友";
}
?>
<form action="hwcheck.php" method="post">

Please input your username:<input type="text" name="id" value="<?php echo $user;?>"required><br>
Please input yout password:<input type="password" name="pwd" required><br>

<input type="submit" name="">	
</form>
