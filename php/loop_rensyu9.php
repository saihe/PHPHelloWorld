<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
<style>
th{
	background-color:yellow;
}
</style>
</head>

<body>
<table border=1>
<tr>
<th>カウント</th>
<th>合計</th>
</tr>
<?php
$a = "#fcfcfc" ;
$b = "#cfcfcf" ;
$sum = 0 ;
for( $i =1 ; $i <= 10 ; $i ++){
	$sum = $sum +$i;
	/*elseを書くより下記のようにしたほうがよい*/
	/*自分で書いたやつ
	if( $i % 2 != 0){
		echo "<tr bgcolor={$a}>" ;
	}else{
		echo "<tr bgcolor={$b}>" ;
	}
	*/
	$bgc = "#fcfcfc";
	if($i % 2 == 0 ){
		$bgc = "#cfcfcf";
	}
	echo'<tr style="background-color:' . $bgc . '">';
	echo "<td>{$i}</td><td>{$sum}</td>" ;
	echo "</tr>" ;
}
?>
</table>
</body>
</html>

