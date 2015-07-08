<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?php
$USER = "root";
$PW   = "dai" ;
$dns  = "mysql:dbname=root;host=locahost:82;charset=utf8";
try{
	$pdo = new PDO($dns , $USER , $PW);
	$res = "接続しました";
}catch(PDOException $e){
	$res = $e -> getMessage();
}


?>
<h1>PHPでMySQLに接続する</h1>
<?php echo $res; ?>
</body>
</html>