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
			$sql  = "SELECT * FROM goods";
			//-> prepare($sql)で準備する
			$stmt = $pdo  -> prepare($sql);
			//-> execute(null)で実行する
			$stmt -> execute(null);
			$res = "";
			while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
				$res .= $row['GoodsID'] . "," . $row['GoodsName'] . ","  . $row['Price'] . "<br>\n";
			}
	}catch(PDOException $e){
		$res = $e->getMessage();
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
<h1>goodsテーブルのレコードを選択する</h1>
<?php 
if($res == TRUE){
	echo "OK";
	echo "<br>";
	echo $res;
}else if($res == FALSE){
	echo "NGだよ";
} 
?>
</body>
</html>