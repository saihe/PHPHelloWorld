<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<p>&nbsp;</p>
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
for($j = 1 ; $i <= 5 ; $i++){
	print "0";
	$sum = 0;
for($j = 1 ; $j <= $i ; $j++){
	print "+".$j;
		$sum += $j;
}
print "+" . $sum ."<br>";
}
?>
</select>
</body>
</html>