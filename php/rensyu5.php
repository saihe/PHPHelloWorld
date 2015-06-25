<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>

<style>
</style>
</head>

<body>
<?php
define("TSUBO",3.3);//1坪=3.3平米
echo "<p>全部別別表記</p>";
//100平米
printf('%s',"101号室→");
printf('%.2f', 100/TSUBO);
printf('%s<br>',"坪");
//75
printf('%s',"102号室→");
printf('%.2f', 75/TSUBO);
printf('%s<br>',"坪");
//150
printf('%s',"103号室→");
printf('%.2f', 150/TSUBO);
printf('%s<br><br><br><br>',"坪");

echo "<p>部屋ごとPHP</p>";
printf('<p>101号室→%.2f坪</p>',100/TSUBO);//100平米
printf('<p>102号室→%.2f坪</p>', 75/TSUBO);//75
printf('<p>103号室→%.2f坪</p>',150/TSUBO);//150
?>
</body>
</html>