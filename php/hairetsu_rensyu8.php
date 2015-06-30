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

foreach($shiken as $key => $val){
	print "氏名　:　";
	print $key   ;
	print "　";
	print "点数　:　";
	print $val   ;
	print "<br>" ;
}

?>
</body>
</html>

