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
$sum     = 0;


foreach($shiken as $key => $val){
	$hyouka = "不可";
	if( $val >= 80 ){
		$hyouka = "優";
	}else if($val >= 70 ){
		$hyouka = "良";
	}else if($val >= 60 ){
		$hyouka = "可";
	}
	print "キー:"   ;
	print  $key     ;
	print  "　要素:";
	print  $val     ;
	print  "　評価:"  ;
	print  $hyouka  ;
	print  "<br>"   ;
}
/*for($i = 0 ; $i < count($point) ; $i++){
	$sum = $sum + $point[$i];
}
	print "合計点:" . $sum ;
	print "<br>";
	print "平均点:" . $sum/count($point);
*/
?>
</body>
</html>

