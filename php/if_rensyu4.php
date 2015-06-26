<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<form method="POST" action="">
	<p>貯金額を入力してください</p>
	<input type="text" name="user" required>
    <input type="submit">
</form>

<?php
$bank = "";
if(isset($_POST['user'])){
	$bank =  $_POST['user'];

//$bank = 5000;
 if( $bank <= 0 ){
	 echo "貯金がありません";
	 } else if( $bank <= 1000 ){
		 echo "貯金がわずかです";
	 } else{
		 echo "貯金がございます";
		 }}?>
</body>
</html>