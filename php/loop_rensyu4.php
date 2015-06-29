<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<?php
	echo "<select>";
	for($i = 15 ; $i <= 23 ; $i++ ){
	echo "<option>{$i}時</option>";
	}
	echo "</select>";
?>
<select>
<?php
	for($j = 15 ; $j <= 23 ; $j++ ){
		echo "<option>{$j}時</option>";
	}
?>
</select>
</body>
</html>