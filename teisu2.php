<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>他の変数を代入</title>
<?php
	define("TAX" , 0.08);
	$price1 = 100 * (1 + TAX);
	$price2 =  84 * (1 + TAX);
	$price3 = 180 * (1 + TAX);
	print "price1=" . $price1."<br>";
	print "price2=" . $price2."<br>";
	print "price3=" . $price3."<br>";
?>
</head>

<body>
</body>
</html>