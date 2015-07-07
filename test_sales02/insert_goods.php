<?php
$res = "";
if(isset($_POST['insert'])){
$USER = "i510" ;
$PW   = "May.2015";
$dnsinfo = "mysql:dbname={$USER};host=sv1;charset=utf8";
	try{
			$pdo  = new PDO($dnsinfo,$USER,$PW);
			$sql  = "INSERT INTO goods VALUES(? , ? , ?)";
			$stmt = $pdo  -> prepare($sql);
			$res = $stmt  -> execute(array($_POST['GoodsID'],
											$_POST['GoodsName'],
											$_POST['Price'])
											);
			if($res){
			$sql = "SELECT * FROM goods ";
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
			}
	}catch(PDOException $e){
		$res = $e ->getMessage();
	}
	echo "<br>";
}/*
else if(isset($_POST['delete'])){
$USER = "i510" ;
$PW   = "May.2015";
$dnsinfo = "mysql:dbname={$USER};host=sv1;charset=utf8";
	try{
			$pdo  = new PDO($dnsinfo,$USER,$PW);
			$sql  = "DELETE FROM goods WHERE GoodsID = ?";
			$stmt = $pdo  -> prepare($sql);
			$res = $stmt  -> execute(array($_POST['DeleteID']));
			if($res){
				$sql = "SELECT * FROM goods ";
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
			}
	}catch(PDOException $e){
		$res = $e ->getMessage();
	}
	echo "<br>";
}*/
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>売上管理システム</title>
</head>

<body>
<h1>商品マスタの登録</h1>
<form action = "" method = "post">
<label>GoodsID  <input type = "text" name = "GoodsID"   size = "20" ></label>
<label>GoodsName<input type = "text" name = "GoodsName" size = "40" ></label>
<label>Price    <input type = "text" name = "Price"     size = "20" ></label>
<input type = "submit" name = "insert" value = " 登録 ">
<br><!--
<form action = "" method = "post">
<label>GoodsID  <input type = "text" name = "DeleteID"   size = "20" ></label>
<input type = "submit" name = "delete" value = " 削除 ">
</form>-->
<?php 
	echo $res;
?>
</body>
</html>