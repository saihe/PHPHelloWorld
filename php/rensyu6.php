<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>

<style>
td{
	text-align:center;
	color:<?php echo $moij; ?>;
}
/*書くクラス（男女比率）において最大値と同じなら赤文字にする
.aod{
	color:<?php if($dr==$d1){echo $moji;} ?>
}
.aoj{
	color:<?php if($jr==$j1){echo $moji;} ?>
}
.iwd{
	color:<?php if($dr==$d2){echo $moji;} ?>
}
.iwd{
	color:<?php if($jr==$j2){echo $moji;} ?>
}
.akd{
	color:<?php if($dr==$d3){echo $moji;} ?>
}
.akd{
	color:<?php if($jr==$j3){echo $moji;} ?>
}*/
</style>
</head>

<body>
<!-- PHPで色を変数に代入・男女比率を計算し変数に代入 -->
<?php
$midashi = "#E1E1BC";
$cell    = "#E7E7E7";
$moji    = "red";
$d1      = 663/1407*100;          //青森男子
$j1      = 744/1407*100;          //青森女子
$d2      = 652/1364*100;          //岩手男子
$j2      = 712/1364*100;          //岩手女子
$d3      = 527/1121*100;          //秋田男子
$j3      = 593/1121*100;          //秋田女子
$dr      = max( $d1 , $d2 , $d3 );//各県男子比率の中から最大値を変数「$dr」に代入
$jr      = max( $j1 , $j2 , $j3 );//各県女子比率の中から最大値を変数「$jr」に代入
?>
<!-- 上記PHPで計算された数値を「printf("%.1f")」で小数点1位まで表示する -->
<!-- PHPでは「&#37」が「%」と表示される -->
<table>
  <tr style = "background-color:<?php echo $midashi?>;">
    <td rowspan = "2">件名</td>
    <td rowspan = "2">総人口（千人）</td>
    <td rowspan = "2">男性（千人）</td>
    <td rowspan = "2">女性（千人）</td>
    <td colspan = "2">男女比</td>
  </tr>
  <tr style = "background-color:<?php echo $midashi?>;">
  	<td>男性</td>
    <td>女性</td>
  </tr>
  <tr style = "background-color:<?php echo $cell?>;">
    <td>青森県</td>
    <td>1407(千人）</td>
    <td>663(千人）</td>
    <td>774(千人）</td>
  	<td class=aod style="color:<?php if($dr==$d1){echo $moji;} ?>;"><?php printf( "%.1f&#37" , $d1 ); ?></td>
    <td class=aoj style="color:<?php if($jr==$j1){echo $moji;} ?>;"><?php printf( "%.1f&#37" , $j1 ); ?></td>
  </tr>
  <tr style = "background-color:<?php echo $cell?>;">
    <td>岩手県</td>
    <td>1364(千人）</td>
    <td>652(千人）</td>
    <td>712(千人）</td>
  	<td class=iwd style="color:<?php if($dr==$d2){echo $moji;} ?>;"><?php printf( "%.1f&#37" , $d2 ); ?></td>
    <td class=iwj style="color:<?php if($jr==$j2){echo $moji;} ?>;"><?php printf( "%.1f&#37" , $j2 ); ?></td>
  </tr>
  <tr style = "background-color:<?php echo $cell?>;">
    <td>秋田県</td>
    <td>1121(千人）</td>
    <td>527(千人）</td>
    <td>593(千人）</td>
  	<td class=akd style="color:<?php if($dr==$d3){echo $moji;} ?>;"><?php printf( "%.1f&#37" , $d3 ); ?></td>
    <td class=akj style="color:<?php if($jr==$j3){echo $moji;} ?>;"><?php printf( "%.1f&#37" , $j3 ); ?></td>
  </tr>
</table>
</body>
</html>