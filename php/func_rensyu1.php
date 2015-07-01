<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<?php
function greeting($name = "ゲスト"){
	echo "いらっしゃいませ、{$name}さん";
	}
greeting();
echo "<br>";
greeting('○○');
?>
</body>
</html>