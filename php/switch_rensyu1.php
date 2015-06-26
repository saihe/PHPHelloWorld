<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<form method="POST" action="">
	<p>血液型を入力してください</p>
	<input type="text" name="user" required>
    <input type="submit">
</form>

<?php
$blood = "" ;
if( isset( $_POST['user'] ) ){
	$blood = $_POST['user'];
}
 switch( $blood ){
	 case "A" :
	 echo "A型です";
	 break;
	 case "B" :
	 echo "B型です";
	 break;
	 case "AB" :
	 echo "AB型です";
	 break;
	 case "O" :
	 echo "O型です";
	 break;
		 }?>
</body>
</html>