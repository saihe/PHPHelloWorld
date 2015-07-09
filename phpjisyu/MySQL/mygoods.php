<?php
require_once("mydb.php");
$db = new MYDB();
$sql = "SELECT * FROM goods";
$res = $db -> executeSQL($sql , null);
$recordlist = "<table>\n";

while($row = $res -> fetch(PDO::FETCH_ASSOC)){
	$recordlist .= "<tr><td>{$row['GoodsID']}</td>";
	$recordlist .= "<td>{$row['GoodsName']}</td>";
	$recordlist .= "<td>{$row['Price']}</td></tr>\n";
}
$recordlist .= "</table>\n";
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>クラスの活用</title>
</head>

<body>
<h1>goodsマスタテーブル</h1>
<?php echo $recordlist; ?>
<td></td>
</body>
</html>