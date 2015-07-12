<?php
	//require_once("dbgoods.php");
	require_once("mydbgoods.php");
	$dbgoods = new dbgoods();
	$res = $dbgoods -> selectGoods();
	if(isset($_POST["insertGoods"])){
		$dbgoods -> insertGoods();
		$res = $dbgoods -> selectGoods();
	}
	if(isset($_POST["deleteGoods"])){
		$dbgoods -> deleteGoods();
	}
?>


<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>自習PHP・SQL</title>
</head>

<body>
<form method = "post" action = "">
<p>商品を追加</p>
<label>GoodsID  <input type = "text" name = "insertGoodsID"  ></label>
<label>GoodsName<input type = "text" name = "insertGoodsName"></label>
<label>Price    <input type = "text" name = "insertPrice"    ></label>
<input type = "submit" name ="insertGoods" value = "　　追加　　">
</form>
<?php echo $res;?>
</body>
</html>