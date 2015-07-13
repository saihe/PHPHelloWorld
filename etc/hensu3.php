<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>他の変数を代入</title>
<?php
	$num1 = 320;
	$num2 =& $num1;
	print "num1=" . $num1 . "<br>";
	print "num2=" . $num2 . "<br>";
?>
</head>

<body>
</body>
</html>