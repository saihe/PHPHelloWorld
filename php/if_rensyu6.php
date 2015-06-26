<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<form method="POST" action="">
	<p>性別を入力して下さい</p>
	<input type="text" name="user1" required><br>
	<input type="text" name="user2" required><br>
    <input type="submit">
</form>

<?php
$sex1 = "";
$sex2 = "";
if( isset ( $_POST['user1'] , $_POST['user1'] ) ){
	$sex1 = $_POST['user1'];
	$sex2 = $_POST['user2'];
 if( $sex1 == "男" && $sex2 == "男" ){          
		 echo "入場できません";
	 } else if ( $sex1 == "女" || $sex2 == "女" ){
		 echo "入場できます";
	 } else if ( $sex1 == "女" && $sex2 == "女" ){
		 echo "入場できます";
		 }}?>
</body>
</html>