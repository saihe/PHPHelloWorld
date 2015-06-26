<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<form method="POST" action="">
	<p>在庫を入力して下さい</p>
	<input type="text" name="user1" required><br>
    <input type="submit">
</form>

<?php
$aa = "";
if( isset ( $_POST['user1'] ) ){
	$aa = $_POST['user1'];
}
switch( $aa ){
	 case 0 :         
		 echo "在庫がありません";
		 break;
	 case 1 :
	 case 2 :
	 case 3 :
		 echo "在庫がわずかです";
		 break;
	 default:
		 echo "在庫がございます";
}
?>
</body>
</html>