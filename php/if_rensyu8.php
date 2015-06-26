<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<form method="POST" action="">
	<p>Aを入力して下さい</p>
	<input type="text" name="user1" required><br>
    <p>Bを入力してください</p>
	<input type="text" name="user2" required><br>
    <input type="submit">
</form>

<?php
$aa = "";
$bb = "";
if( isset ( $_POST['user1'] , $_POST['user2'] ) ){
	$aa = $_POST['user1'];
	$bb = $_POST['user2'];
}
if( $aa == $bb ){          
		 echo "{$aa}と{$bb}は等しい";
	 } else if( $aa > $bb ){
		 echo "{$aa}は{$bb}より大きい";
	 } else if( $aa < $bb ){
		 echo "{$aa}は{$bb}より小さい";
}
?>
</body>
</html>