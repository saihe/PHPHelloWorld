<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<?php
for( $i = 1 ; $i <= 40 ; $i ++ ){
	echo $i ;
	if( $i % 3 == 0 || strstr( $i , "3" ) != 0){
		echo "&ensp;YES!" ;
		}
	if( $i % 8 == 0 || strstr( $i , "8" ) != 0){
		echo "&ensp;OK!" ;
	}
	echo "<br>" ;
	}
?>
</select>
</body>
</html>