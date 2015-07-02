<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<?php 
print "お名前：".$_GET['namae']."<br>";
//最低1個チェックされているか確認
if(array_key_exists('color',$_GET)){
	foreach($_GET['color'] as $val){
		print "好きな色：".$val."<br>";
	}
}
?>
</body>
</html>