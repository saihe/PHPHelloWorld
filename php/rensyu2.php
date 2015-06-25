<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>
<style>
table,td{
	border:solid 1px #CCC;
	text-align:	center;
}
td{
	box-shadow:1px 1px 1px #666 inset;
}
</style>
</head>

<body>
<?php
define("MILE",1.6);//単位(km)
$tokyo   = 715/MILE;//青森→東京　715km
$morioka = 180/MILE;//青森→盛岡　180km
$aomori  = 350/MILE;//青森→仙台　350km
echo "先に計算";
echo "東京{$tokyo}マイル".'<br>';
echo "盛岡{$morioka}マイル".'<br>';
echo "仙台{$aomori}マイル".'<br>';
?>
<?php
define("MILE2",1.6);//単位(km)
$totokyo   = 715;//青森→東京　715km
$tomorioka = 180;//青森→盛岡　180km
$toaomori  = 350;//青森→仙台　350km
echo "<p>後に計算</p>";
echo "<p>東京" . ($totokyo   /MILE2) . "マイル</p>";
echo "<p>盛岡" . ($tomorioka /MILE2) . "マイル</p>";
echo "<p>仙台" . ($toaomori  /MILE2) . "マイル</p>";
?>
</body>
</html>