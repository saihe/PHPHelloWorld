<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<?php
/////////////////////////////////////////
function mat($mat){
	$sum = 0;
	$ave = 0;
	for( $i = 0 ; $i < count($mat) ; $i++){
		$sum += $mat[$i];
		}
	$ave = $sum / count($mat);
	echo "合計点：" . $sum;
	echo "<br>";
	echo "平均点：" . $ave;
	return $mat;
}
mat($kokugo = array(52 , 69 , 74 , 95 , 41));
/////////////////////////////////////////

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

/////////////////////////////////////////
function aaa($kokugo = array(52 , 69 , 74 , 95 , 41)){
	$sum = 0;
	$ave = 0;
	for( $i = 0 ; $i < count($kokugo) ; $i++){
		$sum += $kokugo[$i];
		}
	$ave = $sum / count($kokugo);
	return array($ave , $sum);
}
$a = aaa();
echo"合計点：" .  $a[0];
echo "<br>";
echo"平均点：" .  $a[1];
/////////////////////////////////////////

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

/////////////////////////////////////////
function sum($mat){
	$sum = 0;
	for( $i = 0 ; $i < count($mat) ; $i++){
		$sum += $mat[$i];
	}
return $sum;
}
/*平均点計算関数ave()*/
function ave($ave){
	$sum = 0;
	for( $i = 0 ; $i < count($ave) ; $i++){
		$sum += $ave[$i];
	}
return $sum / count($ave);
	
}
$kokugo = array(52 , 69 , 74 , 95 , 41);
echo "合計点：" . sum($kokugo);
echo "<br>";
echo "平均点：" . ave($kokugo);
/////////////////////////////////////////
?>
</body>
</html>