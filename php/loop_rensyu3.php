<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
<script>
	var a = <?php echo $j;?>
</script>

</head>

<body>
<?php
	$j = 0;
	for( $i=0 ; $i<=100 ; $i++){
		if( $i%4 == 0 ){
			$j = $j + $i;
		}
	}
	echo "合計は{$j}";
?>
</body>
</html>