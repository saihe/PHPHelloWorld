<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<form method="POST" action="">
	<input type="text" name="user1" required><br>
    <input type="submit">
</form>

<?php
$aa = "";
if( isset ( $_POST['user1'] ) ){
	$aa = $_POST['user1'];
}
if( $aa == "" ){
	echo "<p>点数を入力して下さい</p>";
}else if( $aa >= 80 ){
	echo "A判定";
}else if( $aa >= 70 ){
	echo "B判定";
}else if( $aa >= 60 ){
	echo "C判定";
}else if( $aa <  60 ){
	echo "D判定";
}
?>
</body>
</html>