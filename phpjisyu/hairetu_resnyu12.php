<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<table border = 1>
<?php
$kokugo = array("鈴木" => 92 ,
				 "佐藤" => 74,
				 "中村" => 42,
				 "三浦" => 65
				 );
	print "ソート前";
	print "<br>";
foreach($kokugo as $key => $val){
	print "キー："   . $key;
	print "　要素：" . $val;
	print "<br>";
}

arsort($kokugo);
	print "ソート後";
	print "<br>";
foreach($kokugo as $key => $val){
		print "キー："   . $key;
	print "　要素：" . $val;
	print "<br>";
}

/*氏名、点数、評価
$sum = 0;
foreach($kokugo as $name => $score){
	print "氏名："   . $name;
	print "　点数：" . $score;
	$value = "不可";
	if($score >= 80){
		$value = "優";
	}else if($score >= 70){
		$value = "良";
	}else if($score >= 60){
		$value = "可";
	}
	print "　評価：" .$value ;
	print "<br>";
	$sum += $score;
}
*/
/*合計点、平均点
$ave = sprintf("%.1f" , ($sum / count($kokugo)));
print "合計点：" . $sum;
print "<br>";
print "平均点：" . $ave;
*/

?>
</table>
</body>
</html>