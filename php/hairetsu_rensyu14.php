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
		array("番号","点数"),
		array(0,80),
		array(1,60),
		array(2,92),
		array(3,22),
		array(4,50),
	);

for($i = 0 ; $i < count($data) ; $i++){
	echo "<tr>";
	foreach( $data[$i] as $key => $val){
		echo "<td>{$val}</td>";
	}
	echo "</tr>";
}
?>
</table>

<p>最高点：<?php
$a = array() ;
	for( $k = 1 ; $k < count($data) ; $k++){
		array_push($a , $data[$k][1]);
	};
rsort($a);
echo $a[0];
?>点</p>

<p>70点以上：
<?php
$high = 0; 
for( $l = 0 ; $l < count($a) ; $l++){
	if($a[$l] >= 70){
		$high++;
	}
}
echo $high;
?>名</p>

<p>最低点：<?php
sort($a);
echo $a[0];
?>点</p>

<p>平均点：<?php
$sum = 0;
for( $m = 0 ; $m < count($a) ; $m++){
	$sum += $a[$m];
}
echo $sum/count($a);
?>点</p>
</body>
</html>

