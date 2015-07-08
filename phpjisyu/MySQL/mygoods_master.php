<?php
$USER   = "root";
$PW     = "dai";
$dbname = "salesmanagement";
$dns    = "mysql:dbname={$dbname};host=127.0.0.1;charset=utf8";
try{
	$pdo = new PDO($dns , $USER , $PW);
	$res = "接続しました";
}catch(PDOException $e){
	$res = $e->getMessage();
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