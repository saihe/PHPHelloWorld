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
			$sql  = "INSERT INTO goods VALUES('1999' , '神秘的な鉛筆' , 300)";
			//-> prepare($sql)で準備する
			$stmt = $pdo  -> prepare($sql);
			//-> execute(null)で実行する
			$res  = $stmt -> execute(null);
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
<h1>goodsテーブルにレコードを追加する</h1>
<?php 
if($res == TRUE){echo "OK";
}else if($res == FALSE){echo "NGだよ";
}else{echo $res;
} 
?>
</body>
</html>