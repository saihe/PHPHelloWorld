<?php
//$USER = "i510";
for($i = 501 ; $i <= 520 ; $i++){
$USER = "i" . $i ;
$PW   = "May.2015";
//パスワードが違うとエラーが出る
$dnsinfo = "mysql:dbname={$USER};host=sv1;charset=utf8";
	try{
			$pdo = new PDO($dnsinfo,$USER,$PW);
			$res = "接続しました";
	}catch(PDOException $e){
		$res = $e->getMessage();
	}
	echo $i . $res;
	echo "<br>";
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>始めようPHP</title>
</head>

<body>
<h1>PHPでMySQLに接続する</h1>
<?php echo $res; ?>
</body>
</html>