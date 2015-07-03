<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>

<?php

//セレクトボックス
print "<form  action='' >";
print    "<select>";
for($i = 2010 ; $i <= 2020 ; $i++){
print        "年：<option name='year'  value=$i>{$i}</option>";
}
print    "</select>";
print "<br>";
print    "<select>";
for($j =1 ; $j <= 12 ; $j++){
print        "月：<option name='month' value=$i>{$j}</option>";
}
print    "</select>";
print "<br>";
print    "<input type='button' value='表示'>";
print "</form>";

//カレンダーテーブル
$wd = array("日","月","火","水","木","金","土");
print "<table border = 1>";
print "<tr>";
for($k = 0 ; $k <= 6 ; $k++){
print "<th>{$wd[$k]}</th>";
}

//年月日曜日取得
$month = date("m");
$year  = date("n");
$date  = date("j");
$ld    = getdate(mktime(0 , 0 , 0 , $month + 1 , 0, $year));
$week  = date("w" , mktime(0 , 0 , 0 , $month   , $date , $year));
/*
print $month;
print "<br>";
print $year;
print "<br>";
print $date;
print "<br>";
print $week;
print "<br>";
print $wd[$week];
print "<br>";
print "<br>";
print $ld["mday"];
*/

for($a = 1 ; $a <= $ld ; $a++){
//日曜日に<tr>を作る
if( $week == 0 ){
	print "<tr>";
}
print "</tr>";
print "<tr><td></td></tr>";
print "</table>";
?>
</body>
</html>