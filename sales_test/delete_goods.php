<?php
//サーバー名     sv1
//ユーザー名     i510
//データベース名 i510
//パスワード     May.2015
//文字コード     charset=utf8
$USER = "i510" ;
$PW   = "May.2015";
//パスワードが違うとエラーが出る
$dnsinfo = "mysql:dbname={$USER};host=sv1;charset=utf8";
	try{
			$pdo  = new PDO($dnsinfo,$USER,$PW);
			//デリートする
			$sql  = "DELETE FROM goods WHERE GoodsID = ?";
			$stmt = $pdo  -> prepare($sql);
			$res = $stmt  -> execute(array('1999'));
			//セレクトで呼び出す
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
	}catch(PDOException $e){
		$res = $e ->getMessage();
	}
	echo "<br>";
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>始めようPHP</title>
</head>

<body>
<h1>goodsテーブルのレコードを削除する</h1>
<?php 
	echo $res;
?>
</body>
</html>