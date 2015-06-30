<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<?php
$a = array("オレンジ" => 25 ,
		   "バナナ" => 30 , 
		   "りんご" => 38 , 
		   "みかん" => 62);

foreach($a as $key => $val){
	print "キー:" . $key . "　要素;" . $val . "<br>";
}
?>
</body>
</html>

