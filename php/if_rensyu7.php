<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<form method="POST" action="">
	<p>年齢を入力して下さい</p>
	<input type="text" name="user1" required><br>
    <p>身長を入力してください</p>
	<input type="text" name="user2" required><br>
    <input type="submit">
</form>

<?php
$age = "";
$height = "";
if( isset ( $_POST['user1'] , $_POST['user2'] ) ){
	$age    = $_POST['user1'];
	$height = $_POST['user2'];
 if( $age >= 6 && $height >= 120 ){          
		 echo "乗れます";
	 } else {
		 echo "乗れません";
		 }}?>
</body>
</html>