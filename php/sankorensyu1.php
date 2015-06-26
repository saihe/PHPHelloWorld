<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<form method="POST" action="">
	<p>所持金を入力して下さい</p>
	<input type="text" name="user1" required><br>
    <input type="submit">
</form>

<?php
$aa = "";
if( isset ( $_POST['user1'] ) ){
	$aa = $_POST['user1'];
	echo ($aa >= 1000 ) ? "入場できます" : "入場できません" ;
}

?>
</body>
</html>