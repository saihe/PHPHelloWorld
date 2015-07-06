<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<table border = 1>
<tr bgcolor = #ffff00>
<th>都市名</th>
<th>最高気温</th>
<th>最低気温</th>
</tr>
<?php
$city = array(
			array("東京"   , 32 , 25),
			array("名古屋" , 28 , 21),
			array("大阪"   , 27 , 20),
			array("京都"   , 26 , 19),
			array("福岡"   , 27 , 22)
				);
for($i = 0 ; $i < count($city) ; $i++){
	print "<tr>";
	for($j = 0 ; $j < count($city[$i]) ; $j++){
		print "<td>" . $city[$i][$j] . "</td>";
	}
	print "</tr>";
}
?>
</table>
</body>
</html>