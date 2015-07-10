<?php
require_once("DBCustomer.php");
$dbCustomer = new DBCustomer();
//更新処理
if(isset($_POST["submitUpdate"])){
	$dbCustomer -> UpdateCustomer();
}

//更新用フォーム要素の表示
if(isset($_POST["update"])){
	//更新対象の値を取得
	$dbCustomerID   = $_POST["id"];
	$dbCustomerName = $dbCustomer -> CustomerNameForUpdate($_POST["id"]);
	$TEL            = $dbCustomer -> TELForUpdate         ($_POST["id"]);
	$Email          = $dbCustomer -> EmailForUpdate       ($_POST["id"]);
	//クラスを記述することで表示/非表示を設定
	$updateCss   = "class = 'hideArea'";
	$entryCss = "";
}else{
	$updateCss   = "";
	$entryCss = "class = 'hideArea'";
}

//削除処理
if(isset($_POST['delete'])){
	$dbCustomer -> DeleteCustomer($_POST["id"]);
}


//新規登録の処理
if(isset($_POST['submitEntry'])){
	$dbCustomer -> InsertCustomer();
}

//テーブルデータの一覧表示
$date = $dbCustomer -> SelectCustomerAll();

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel = "stylesheet" type = "text/css" href = "style.css">
<title>クラスの活用</title>
<script type = "text/javascript">
function CheckDelete(){
	return confirm("削除してもよろしいですか？");
}
</script>

</head>

<body>
<div id = "menu">
    <ul>
        <li><a href = "salesinfo.php"     >売り上げ情報</a>  </li>
        <li><a href = "salesinfoEntry.php">伝票の新規作成</a></li>
        <li><a href = "bill.php"          >請求書</a>        </li>
        <li><a href = "customer.php"      >顧客マスタ</a>    </li>
        <li><a href = "goods.php"         >商品マスタ</a>    </li>
    </ul>
</div>
<h1>商品マスタ</h1>
<div id = "entry" <?php echo $entryCss; ?>>
<form action = "" method = "post">
<h2>新規登録</h2>
<label><span class = "entrylabel">ID</span>    <input type = "text" name = "CustomerID"   size = "10" required></label>
<label><span class = "entrylabel">顧客名</span><input type = "text" name = "CustomerName" size = "30" required></label>
<label><span class = "entrylabel">TEL</span>   <input type = "text" name = "TEL"      size = "10" required></label>
<label><span class = "entrylabel">Emal</span>  <input type = "text" name = "Email"     size = "10" required></label>
<input type = "submit" name = "submitEntry" value = "　　新規登録　　">
</form>
</div>

<div id = "update" <?php echo $entryCss; ?>>
<h2>更新</h2>
<form action = "" method = "post">
<p>CustomerID：<?php echo $dbCustomerID; ?></p>
<input type ="hidden" name ="CustomerID" value ="<?php echo $dbCustomerID; ?>">
<label><span class = "entrylabel">顧客名</span><input type = "text" name = "CustomerName" size = "30" value ="<?php echo $dbCustomerName; ?>" required></label>
<label><span class = "entrylabel">TEL</span>  <input type = "text" name = "TEL"     size = "10" value ="<?php echo $TEL; ?>" required></label>
<label><span class = "entrylabel">Email</span>  <input type = "text" name = "Email"     size = "10" value ="<?php echo $Email; ?>" required></label>
<input type = "submit" name = "submitUpdate" value = "　　更新　　">
</form>
</div>

<div>
<?php echo $date; ?>
</div>
</body>
</html>