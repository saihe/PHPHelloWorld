<!DOCTYPE HTML>
<html>
<head><title>ファイル情報</title></head>
<body>
<table border="1">
<tr><th>番号</th><th>内容</th></tr>
<?php
$status = stat("hensu1.php");
foreach($status as $key => $val){
  print "<tr><td>{$key}</td><td>{$val}</td></tr>";
}
?>
</table>
</body>
</html>


