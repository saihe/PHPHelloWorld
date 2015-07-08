<?php
$res = "";
$USER = "i510" ;
$PW   = "May.2015";
$dnsinfo = "mysql:dbname={$USER};host=sv1;charset=utf8";
$pdo  = new PDO($dnsinfo,$USER,$PW);
//更新処理
if(isset($_POST["submit"])){
	try{
		$sql = "UPDATE goods SET GoodsName = ? , Price = ? WHERE GoodsID = ?";
		$stmt = $pdo  -> prepare($sql);
		$array = array($_POST["GoodsName"] , $_POST["Price"] ,  $_POST["GoodsID"]);
		$stmt  -> execute($array);
	}catch(Exception $e){
		$res = $e ->getMessage();
	}
}
//任意のレコードの更新ボタンがクリックされたときの処理
if(isset($_POST["update"])){
	try{
		$sql = "SELECT * FROM goods WHERE GoodsID = ?";
		$stmt = $pdo -> prepare($sql);
		$array = array($_POST["id"]);
		$stmt -> execute($array);
		$row = $stmt -> fetch(PDO::FETCH_ASSOC);
		$GoodsID = $row["GoodsID"];
		$GoodsName = $row["GoodsName"];
		$Price = $row["Price"];
	}catch(Exception $e){
		$res = $e ->getMessage();
	}
}
//削除ボタンがクリックされた時の処理
if(isset($_POST["delete"])){
	try{
		$sql = "DELETE  FROM goods WHERE GoodsID = ?";
		$stmt = $pdo -> prepare($sql);
		$array = array($_POST["id"]);
		$stmt -> execute($array);
		$row = $stmt -> fetch(PDO::FETCH_ASSOC);
		$GoodsID = $row["GoodsID"];
		$GoodsName = $row["GoodsName"];
		$Price = $row["Price"];
	}catch(Exception $e){
		$res = $e ->getMessage();
	}
}

//全レコードを更新ボタン付きで表示する処理
try{
	$sql = "SELECT * FROM goods";
	$stmt = $pdo -> prepare($sql);
	$array = null;
	$stmt -> execute($array);
	$res = "<table border = 1>\n";
		while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
			$res .= "<tr><td>" . $row["GoodsID"] . "</td><td>" . $row["GoodsName"] . "</td>" ; 
//更新ボタンのコード
			$res .= <<<eof
			<td><form method = "post" action ="">
			<input type = "hidden" name = "id" value = "{$row['GoodsID']}">
			<input type = "submit" name = "update" value = "更新">
			</form></td>
eof;
//削除ボタンのコード
			$res .= <<<eof
			<td><form method = "post" action ="">
			<input type = "hidden" name = "id" value = "{$row['GoodsID']}">
			<input type = "submit" name = "delete" value = "削除" onClick = "return CheckDelete()">
			</form></td>
	
eof;
		$res .= "</tr>\n";
		}
		$res .= "</table>\n";
	}catch(Exception $e){
		$res = $e ->getMessage();
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>売上管理システム</title>
<script>
function CheckDelete(){
	return confirm("削除してもよろしいですか？");
}
</script>
</head>

<body>
<h1>商品マスタの更新</h1>
<?php
//商品一覧の更新ボタンが押されたときに出てくる入力フォーム
	if(isset($_POST["update"])){
?>
<form action = "" method = "post">
<p>GoodsID：<?php echo $GoodsID; ?></p>
<label><input type ="hidden" name ="GoodsID" value ="<?php echo $GoodsID; ?>"></label>
<label>GoodsName<input type = "text" name = "GoodsName" size = "30" value = "<?php echo $GoodsName; ?>"></label>
<label>Price    <input type = "text" name = "Price"     size = "10" value = "<?php echo $Price; ?>"></label>
<input type = "submit" name = "submit" value = " 更新 ">
</form>
<?php 
	}
?>
<?php
	echo $res;
	if(isset($_POST["update"])){print_r($_POST);}
	if(isset($_POST["submit"])){print_r($_POST);}
?>
</body>
</html>