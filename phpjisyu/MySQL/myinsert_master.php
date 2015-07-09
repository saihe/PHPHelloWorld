<?php
	require_once("mydbgoods.php");
	$db = new MYDB();
	$sql = "SELECT * FROM goods";
	$res = $db -> executeSQL($sql , null);
	$recordlist = "<table>";
	while($row = $res -> fetch(PDO::FETCH_ASSOC)){
		$recordlist .= "<tr><td>{$row['GoodsID']}</td>";
		$recordlist .= "<td>{$row['GoodsName']}</td>";
		$recordlist .= "<td>{$row['Price']}</td></tr>";
		
	}
	$recordlist .= "</table>\n";
?>



<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>始めようPHP</title>
</head>

<body>
<h1>PHPでマスターを表示する</h1>
<form action = "" method = "post">
<label>GoodsID<input type = "text" name  = "" value = "" ></label>
<label>GoodsName<input type = "text" name  = "" value = "" ></label>
<label>Price<input type = "text" name  = "" value = "" ></label>
<input type = "submit" value = "登録">

</form>

<?php echo $res; ?>
</body>
</html>