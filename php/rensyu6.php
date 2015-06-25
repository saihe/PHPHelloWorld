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
$midashi = "#E1E1BC";
$cell    = "#E7E7E7";
$moji    = "red";
$aod     =663/1407*100;//青森男子
$aoj     =774/1407*100;//青森女子
$iwd     =652/1364*100;//岩手男子
$iwj     =712/1364*100;//岩手女子
$akd     =527/1121*100;//秋田男子
$akj     =593/1121*100;//秋田女子
$d       =max($aod,$iwd,$akd);
$j       =max($aoj,$iwj,$akj);
?>
<table>
  <tr style = "background-color:<?php echo $midashi?>;">
    <td rowspan="2">件名</td>
    <td rowspan="2">総人口（千人）</td>
    <td rowspan="2">男性（千人）</td>
    <td rowspan="2">女性（千人）</td>
    <td colspan="2">男女比</td>
  </tr>
  <tr style = "background-color:<?php echo $midashi?>;">
  	<td>男性</td>
    <td>女性</td>
  </tr>
  <tr style = "background-color:<?php echo $cell?>;">
    <td>青森県</td>
    <td>1407</td>
    <td>663</td>
    <td>774</td>
  	<td><?php printf("%.1f&#37",$aod); ?></td>
    <td><?php printf("%.1f&#37",$aoj); ?></td>
  </tr>
  <tr style = "background-color:<?php echo $cell?>;">
    <td>岩手県</td>
    <td>1364</td>
    <td>652</td>
    <td>712</td>
  	<td><?php printf("%.1f&#37",$iwd); ?></td>
    <td><?php printf("%.1f&#37",$iwj); ?></td>
  </tr>
  <tr style = "background-color:<?php echo $cell?>;">
    <td>秋田県</td>
    <td>1121</td>
    <td>527</td>
    <td>593</td>
  	<td><?php printf("%.1f&#37",$akd); ?></td>
    <td><?php printf("%.1f&#37",$akj); ?></td>
  </tr>
</table>
</body>
</html>