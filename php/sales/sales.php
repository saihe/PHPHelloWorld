<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<?php

$fp = fopen("test1.csv","r");

while(!feof($fp)){
  $str = fgetcsv($fp);
  if(isset($str[0])){print "商品"  . $str[0];}
  if(isset($str[1])){print "商品"  . $str[1];}
  if(isset($str[2])){print "数量:" . $str[2];}
  print "<br>";
  /*print "商品"  . $str[0];
  print "商品"  . $str[0];
  print "数量:" . $str[2];
  print "<br>";*/
//print_r($str);
//print "<br>";
}

fclose($fp);
  
?>
</table>
</body>
</html>