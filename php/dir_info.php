<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<table border= "1">
<tr>
<th>名前</th>
<th>最終サクセス時刻</th>
<th>最終修正時間</th>
<th>作成時刻</th>
<th>サイズ</th>
</tr>
<?php
$curdir = opendir(".");
while($name = readdir($curdir)){
	print "<tr><td>{$name}</td>";
		$status = stat($name);		
		print "<td>" . date('y/m/d　H:i:s',$status['atime']) . "</td>";
		print "<td>" . date('y/m/d　H:i:s',$status['mtime']) . "</td>";
		print "<td>" . date('y/m/d　H:i:s',$status['ctime']) . "</td>";
		print "<td>" . $status['size'] . "</td>";
	print "</tr>";
}

closedir($curdir);
?>
</table>
</body>
</html>