<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<?php 
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
print "num1=" . $num1 . "<br>";
print "num2=" . $num2 . "<br>";
print "num1 + num2 =" . ($num1 + $num2) . "<br>";
print "num1 - num2 =" . ($num1 - $num2) . "<br>";
print "num1 * num2 =" . ($num1 * $num2) . "<br>";
print "num1 / num2 =" . ($num1 / $num2) . "<br>";
?>
</body>
</html>