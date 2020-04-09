
<table border="0">
  <tr bgcolor="#CC99FF">
   <td>功能</td><td>編號</td><td>名稱</td>
   <td>價格</td><td>數量</td></tr>
<?php 
$flag = false;  $total = 0;
while (list($arr, $value)=each($_COOKIE)) {
	if (isset($_COOKIE[$arr]) &&  is_array($_COOKIE[$arr])) {
		if ($flag) {
			$flag=false;
			$color="#FF99CC";
		}else{
			$flag=true;
			$color="#99FFC";
		}
		echo "<tr bgcolor='".$color."'><td>";
		echo "<a href='hwdelete.php?id=".$arr."'>";
		echo "刪除</a></td>";
		$price =0;
		$number=0;
		while (list($name, $value)=each($_COOKIE[$arr])) {
			
			echo "<td>".$value."</td>";
			
			if ($name=="price") $price=$value;
			if ($name=="number") $number=$value;
		}
		$total+=$price*$number;
		echo "</tr>";
	}
}

if ($total != 0) {  // 顯示總金額
   echo "<tr bgcolor=yellow><td colspan=5 align=right>";
   echo "總金額 = NT$".$total."元</td></tr>";
   }
 ?>
 </table><br>
 <a href="hwcatalog.php">商品目錄</a>