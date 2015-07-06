<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<table border = 1>
<?php
for($j = 1; $j <= 9 ; $j++){
	print "<tr>";
	print "<td>" . $j . "</td>";
	for($i = 2 ; $i <= 9 ; $i++){
		print "<td>" . $i * $j . "</td>";
	}
	print "</tr>";
}

?>
</table>
</body>
</html>