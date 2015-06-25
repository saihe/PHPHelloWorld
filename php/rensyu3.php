<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>

<style>
table,th,td{
	border:solid 1px #CCC;
	text-align:	center;
}
th,td{
	box-shadow:1px 1px 1px #666 inset;
}
th{background-color:$midashi;
}
td{background-color:$cell;
}
</style>
</head>

<body>
<?php
$midashi = "#E1E1BC";
$cell    = "#E7E7E7";
?>

<table>

  <tr>
    <?php echo "<th style = background-color:$midashi>ホテル名</th>"; ?>
    <?php echo "<th style = background-color:$midashi>予約状況</th>"; ?>
  </tr>
  <tr>
    <?php echo "<td style = background-color:$cell>○○ホテル</td>"; ?>
    <?php echo "<td style = background-color:$cell>空室あり</td>"; ?>
  </tr>
  <tr>
    <?php echo "<td style = background-color:$cell>××旅館</td>"; ?>
    <?php echo "<td style = background-color:$cell>満室</td>"; ?>
  </tr>
</table>

</body>
</html>