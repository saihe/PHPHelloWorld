<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<form method="POST" action="">
	<p>年齢を入力して下さい</p>
	<input type="text" name="user" required>
    <input type="submit">
</form>
<?php
$age = "";
if(isset($_POST['user'])){
	$age = $_POST['user'];
 if( $age >= 20 ){
	 echo "成人です";
	 }}?>
</body>
</html>