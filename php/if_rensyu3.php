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
$blood = "";
if(isset($_POST['user'])){
	$blood =  $_POST['user'];

//$blood = "A";
 if( $blood == "A" ){
	 echo "A型です";
	 } else if( $blood == "B" ){      
		 echo "B型です";
	 } else if( $blood == "AB" ){
		 echo "AB型です";
	 } else if( $blood == "O" ){
		 echo "O型です";
		 }}?>
</body>
</html>