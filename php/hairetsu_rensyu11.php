<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<?php
$shiken  = array( "鈴木" => 92 , "佐藤" => 74 , "中村" => 42 , "三浦" => 65 );

print "ソート前";
foreach($shiken as $key => $val){
print "<br>";
print "キー：" . $key;
print "　要素：" . $val;
}
print "<br>";

print "ソート後";
rsort($shiken);
foreach($shiken as $key => $val){
print "<br>";
print "キー：" . $key;
print "　要素：" . $val;
}

?>
</body>
</html>

