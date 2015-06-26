<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<form method="POST" action="">
	<p>性別を入力して下さい</p>
	<input type="text" name="user" required>
    <input type="submit">
</form>

<?php
$sex = "";
if( isset ( $_POST['user'] ) ){
	$sex = $_POST['user'];
 if( $sex == "男" ){          
	 echo "男性です";
	 } else {
		 echo "女性です";
		 }}?>
</body>
</html>