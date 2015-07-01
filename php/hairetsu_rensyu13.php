<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<table border=1>
<?php
$data = array(
		array("都市名","最高気温","最低気温"),
		array("東京",32,25),
		array("名古屋",28,21),
		array("大阪",27,20),
		array("京都",26,19),
		array("福岡",27,22),
	);
for($i = 0 ; $i < count($data) ; $i++){
	if($i == 0){
	echo '<tr style="background-color:#ffff00;">';
	}else{
	echo "<tr>";
	}
	for($j = 0 ; $j < count($data[$i]) ; $j++){
		echo "<td>{$data[$i][$j]}</td>";
	}
	echo "</tr>";
}
?>
</table>
</body>
</html>

