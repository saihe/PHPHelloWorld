<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
</head>
<body>
<?php
print "先頭から2文字切り取る:" . mb_substr("あいうえお",0,2);
print "<br>";
print "末尾から3文字切り取る:".mb_substr("あいうえお",-3,3);
?>
</body>
</html>