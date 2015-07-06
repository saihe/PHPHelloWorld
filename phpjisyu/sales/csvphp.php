<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<table>
<?php
$fp = fopen("sales.csv","r");
$rawdata = array();
$line = array();
$amount = array();
$stat = array();
$price = array();
/*
while(!feof($fp)){
	$rawdata[] = fgetcsv($fp);
}
foreach($rawdata as$line){
	if(empty($price[$line[0]])){
		$price[$line[0]] = 0;
	}
	$amount += array($line[0] => $line[1]);
	$stat += array($line[0] => $line[2]);
}
*/


while(!feof($fp)){
	$rawdata[] = fgetcsv($fp);
}
foreach($rawdata as $line){
	if(!isset($price[$line[0]])){
		$price[$line[0]] = 0;
	}
	$qty = 1;
	if(isset($line[2])){
		$qty = $line[2];
	}
	$price[$line[0]] += $line[1] * $qty;
	$amount  += array($line[0] => $line[1]);
	//$stat    += array($line[0] => $line[2]);
	foreach($price as $k => $v){
		if($k == ""){
			continue;
		}
	}
	print "<tr>";
	print "<td>商品："  . $k           . "</td>";
	print "<td>合計："  . $amount[$k]  . "</td>";
	//print "<td>数量："  . $stat[$k]    . "</td>";
	print "<td>=     "  . $v           . "</td>";
	print "</tr>";
}

fclose($fp);

?>
</table>
</body>
</html>