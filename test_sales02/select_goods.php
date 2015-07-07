<?php
$res = "";
if(isset($_POST['select'])){
$USER = "i510" ;
$PW   = "May.2015";
$dnsinfo = "mysql:dbname={$USER};host=sv1;charset=utf8";
	try{
			$pdo  = new PDO($dnsinfo,$USER,$PW);
			$sql = "SELECT * FROM goods WHERE GoodsID = ?";
			$array = array($_POST['select']);
			$stmt = $pdo -> prepare($sql);
			$stmt -> execute(null);
			$res = "<table border = 1>\n<tr><th>GoodsID</th><th>GoodsName</th><th>Price</th></tr>";
				while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
					$res .= "<tr><td>"  . $row['GoodsID']   . 
							"</td><td>" . $row['GoodsName'] .
							"</td><td>" . $row['Price']     .
							"</td></tr>\n";
				}
				$res .= "</table>\n";
	}catch(PDOException $e){
		$res = $e ->getMessage();
	}
	echo "<br>";
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>売上管理システム</title>
</head>

<body>
<h1>商品マスタの選択</h1>
<form action = "" method = "post">
<label>GoodsID  <input type = "text" name = "GoodsID"   size = "20" required></label>
<input type = "submit" name = "select" value = " 表示 ">
<?php 
	echo $res;
?>
</body>
</html>