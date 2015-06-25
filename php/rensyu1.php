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
$sei = "齋藤";
$mei = "恭平";
$hyouji = <<<namaehyouji
		<table>
		<tr>
		<td>姓</td>
		<td>名</td>
		</tr>
		<tr>
		<td>{$sei}</td>
		<td>{$mei}</td>
		</tr>
namaehyouji;
echo "<p>phpですべて表示</p>";
echo "{$hyouji}";
?>

<p>htmlでtable、phpで内容を表示</p>
<table>
  <tr>
    <td>姓</td>
    <td>名</td>
  </tr>
  <tr>
    <td><?php echo "{$sei}"?></td>
    <td><?php echo "{$mei}"?></td>
  </tr>
</table>

</body>
</html>