<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<?php

for( $j = 1 ; $j <=5 ; $j++ ){
	$sum = 0;
	echo "{$sum}";
	for( $i = 1 ; $i <= 5 ; $i++){
		echo "+{$i}";
		$sum = $sum + $i ;
		if( $j == $i ){
			echo "={$sum}" ;
			break;
		}
	}
	echo "<br>";
}
?>
</select>
</body>
</html>