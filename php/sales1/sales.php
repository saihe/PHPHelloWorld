<!doctype html>
<html>
<head>
<meta charset"UTF-8>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<table>
<?php
//$fp = fopen("sales.csv","r");
//$fp = fopen("test1.csv","r");
$fp = fopen("test2.csv","r");

/*自分のやつ
$sumA = 0;
$sumB = 0;
$sumC = 0;

while($stat = fgetcsv($fp)){
//print_r($stat);
	if($stat[0] == "A"){$sumA += $stat[1];}
	if($stat[0] == "B"){$sumB += $stat[1];}
	if($stat[0] == "C"){$sumC += $stat[1];}
}

print "商品：A合計：" . $sumA;
print "<br>";
print "商品：B合計：" . $sumB;
print "<br>";
print "商品：C合計：" . $sumC;
print "<br>";
print "<br>";
*/

//先生のやつ
$rawdata    = array();
$price      = array();
$stat       = array();
$amount     = array();

//csvファイルを１行ずつ取り出しrawdataに配列する。
while(!feof($fp)){
	$rawdata[] = fgetcsv($fp);
}
//rawdata配列の要素を取り出しlineに配列しなおす。
//取り出したlineをkeyとしてprice[line[0]]に代入していく。
//ここではline[0]がAとかになってるからAというkeyに0を入れていく。
foreach($rawdata as $line){
	if(!isset($price[$line[0]])){
		$price[$line[0]] = 0;
	}
//qtyに1を入れる。もしline[2]に数値が入っていればqtyにその数値を代入する。
//そしてline[1]と掛け算することで合計を求める。
//それをprice[line[0]](Aとか)の配列に追加する。
//繰り返すたびにamount,statにそれぞれ値段、数量を配列する。A => 100とか。
	$qty = 1;
	if(isset($line[2])){
		$qty = $line[2];
	}
	$price[$line[0]] += $line[1] * $qty;
	$amount  += array($line[0] => $line[1]);
	$stat    += array($line[0] => $line[2]);
/*print_r($line);
print "<br>";
print_r($price);
print "<br>";
print_r($amount);
print "<br>";
print_r($stat);
print "<br>";*/
}

//priceのkeyとvalueを取り出し表示する。
//amount[key],stat[key]とするとkeyから呼び出せる。
foreach($price as $k => $v){
	if($k == ""){
		continue;
	}
	print "<tr>";
	print "<td>商品："  . $k           . "</td>";
	print "<td>合計："  . $amount[$k]  . "</td>";
	print "<td>数量："  . $stat[$k]    . "</td>";
	print "<td>=     "  . $v           . "</td>";
	print "</tr>";
}

fclose($fp);
?>
</table>
</body>
</html>