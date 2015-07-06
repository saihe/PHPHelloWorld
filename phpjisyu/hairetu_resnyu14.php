<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<table border = 1>
<tr>
<th>番号</th>
<th>名前</th>
<th>点数</th>
</tr>
<?php
$max = 0;
$min = 100;
$sum = 0;
$high = array();
$score = array(
			array("青木" => 80),
			array("石田" => 60),
			array("内山" => 92),
			array("榎本" => 22),
			array("岡野" => 50)
			);
			
for($i = 0 ; $i < count($score) ; $i++){
	foreach($score[$i] as $key => $val){
		print "<tr>";
		print "<td>" . $i . "</td>";
		print "<td>" . $key . "</td>";
		print "<td>" . $val . "</td>";
		print "</tr>";
		if($max < $val){
			$max = $val;
		}
		if($min > $val){
			$min = $val;
		}
		if($val >= 70){
			array_push($high , $val);
		}
	$sum += $val;
	}
}
print "</table>";

print "最高点："   . $max . "点";
print "<br>";
print "最低点："   . $min . "点";
print "<br>";
print "平均点："   . ($sum / count($score)). "点";
print "<br>";
print "70点以上：" . count($high) . "名"; 

?>
</body>
</html>