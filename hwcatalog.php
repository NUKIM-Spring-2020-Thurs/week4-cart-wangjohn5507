
<?php
session_start();



if(isset($_SESSION["login"])){
    $date = strtotime("+7 days",time());
    $uName=$_SESSION["ID"];
    setcookie("ID",$uName,$date);

}else{
	echo "請先登入再進來哦 乖";
	echo "<a href='hwlogin.php'>回去登入</a>";
}
?>
 <?php
session_start();
if (isset($_POST["product"])) {
	$_SESSION["number"]=$_POST["number"];
	$id=$_POST["product"];
	$_SESSION["id"]=$id;
	switch (strtoupper($id)) {
		case "A":
			$_SESSION["name"]="液晶螢幕";
			$_SESSION["price"]=5000;
			break;
		case "B":
			$_SESSION["name"]="無線鍵盤";
			$_SESSION["price"]=2000;
			break;
		case "C":
			$_SESSION["name"]="無線滑鼠";
			$_SESSION["price"]=1000;
			break;
		case "D":
			$_SESSION["name"]="耳機";
			$_SESSION["price"]=1000;
			break;
		case "E":
			$_SESSION["name"]="顯示卡";
			$_SESSION["price"]=5000;
			break;
		case "F":
			$_SESSION["name"]="主機";
			$_SESSION["price"]=3000;
			break;
	}
	header("Location:hwaddcart.php");
}
?>

<form action="hwcatalog.php" method="post">
 	<select name="product">
 		<option value="A">液晶螢幕 $5000</option>
 		<option value="B">無線鍵盤 $2000</option>
 		<option value="C">無線滑鼠 $1000</option>
 		<option value="D">耳機 $1000</option>
 		<option value="E">顯示卡 $5000</option>
 		<option value="F">主機 $3000</option>
 	</select>
 	<select name="number">
 		<option value="1">1</option>
 		<option value="2">2</option>
 		<option value="3">3</option>
 		<option value="4">4</option>
 		<option value="5">5</option>
 		<option value="6">6</option>
 	</select>
 	<input type="submit" value="加入購物車"><br>
 </form>
<a href="hwcart.php" style="border: 1px">購物車</a>
<a href="hwlogout.php" style="border: 1px">登出</a>

