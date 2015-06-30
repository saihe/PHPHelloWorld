<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<?php
$shiken  = array( "鈴木" => 92 , "佐藤" => 74 , "中村" => 42 , "三浦" => 65 );
$name    = array( "鈴木" , "佐藤" , "中村" , "三浦"); 
$point   = array( 92 , 74 , 42 , 65 );
$ave     = 0;
$sum     = 0;


foreach($shiken as $key => $val){
	print "キー:" . $key . "　要素:" . $val . "<br>";
	$sum += $val;
}
/*
for($i = 0 ; $i < count($point) ; $i++){
	$sum = $sum + $point[$i];
}*/
	print "合計点:" . $sum ;
	print "<br>";
	printf("平均点:%.1f",$sum/count($shiken));

?>
</body>
</html>

