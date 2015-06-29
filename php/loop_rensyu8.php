<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<table border=1>
<?php
	echo "<tr>" ;
	for( $i = 1 ; $i <= 9 ; $i ++ ){
		echo "<th>{$i}</th>" ;
		}
	for( $j = 2 ; $j <= 9 ; $j ++ ){
		echo "<tr><th>{$j}</th>" ;
		for( $k = 2 ; $k <= 9 ; $k ++){
			$sum = $j * $k ;
			echo "<td>{$sum}</td>" ;
		}
	}
?>
</table>
</body>
</html>