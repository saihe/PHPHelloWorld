<?php

require_once("DBSalesInfo.php");
$slipDetail = "";
$total = "";
$SalesDate = new DateTime("NOW");
$SalesDate = $SalesDate -> format("Y-m-d");
$dbSalesInfo = new DBSalesInfo();
//日付ボタンの設定
if(isset($_POST["SalesDate"])){
	$SalesDate = $_POST["SalesDate"];
}

//←ボタンの処理(１日前を表示)
if(isset($_POST["prev"])){
	$SalesDate = new DateTime($_POST["SalesDate"]);
	//日付の減産処理はsubメソッド
	$SalesDate -> sub(new DateInterval("P1D"));
	$SalesDate = $SalesDate -> format("Y-m-d");
}

//→ボタンの処理(１日後を表示)
if(isset($_POST["next"])){
	$SalesDate = new DateTime($_POST["SalesDate"]);
	//日付の加算処理はaddメソッド
	$SalesDate -> add(new DateInterval("P1D"));
	$SalesDate = $SalesDate -> format("Y-m-d");
}

//伝票明細の削除
if(isset($_POST["deletedetail"])){
	$SalesDate = $dbSalesInfo -> getSalesDate($_POST["id"]);
	$dbSalesinfo -> DeleteDetail();
}

//明細行の更新ボタンの処理(更新用フォームの表示とデータの設定)
$updateCss   = "class = 'hideArea'";
if(isset($_POST["updatedetail"])){
	//フォーム要素の仕込み
	$updateCss   = "";
	$id = $_POST["id"];
	$SalesDate  = $dbSalesInfo -> getSalesDate($id);
	$CustomerID = $dbSalesInfo -> getCustomerID($id);
	$customerList = $dbSalesInfo -> ListCustomerWithSelected($CustomerID);
	$GoodsID = $dbSalesInfo -> getGoodsID($id);
	$GoodsList= $dbSalesInfo -> ListGoodsWithSelected($GoodsID);
	$Quantity = $dbSalesInfo -> getQuantity($id); 
}

//詳細ボタンの処理
if(isset($_POST["detail"])){
	$SalesDate = $_POST["SalesDate"];
	$CustomerID = $_POST["CustomerID"];
	$slipDetail = $dbSalesInfo -> SelectSalesinfoWithButton($SalesDate , $CustomerID);
	$total = $dbSalesInfo -> TotalAmount($SalesDate , $CustomerID);  //伝票の合計額
	//number_format関数は３桁区切りの文字列を返す
	$total= ($total == null)?"" : "合計金額：" .number_format($total) . "円";
}

//伝票の削除
if(isset($_POST['delete'])){
	$dbSalesInfo -> DeleteSlip();
}

//指定日の伝票一覧(無条件に表示)
$slips = $dbSalesInfo -> SelectSlips($SalesDate);
if($slips == ""){
	$slips - "<tr><td>伝票はありません</td></tr>\n";
}

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel = "stylesheet" type = "text/css" href = "style.css">
<title>売上管理システム</title>
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
<h1>売上情報</h1>
<div id = "search">
<form action = "" method = "post">
<label>日付<input type ="date" id = "SalesDate" name = "SalesDate" value = "<?php echo $SalesDate; ?>" required></label>
<input type ="submit" value = "　　検索　　" name = "submit">
<input type ="submit" value = "←" name = "prev">
<input type ="submit" value = "→" name = "next">
</form>
</div>
<div id = "sliplist">
<table>
<?php echo $slips; ?>
</table>
<div id = "update" <?php echo $updateCss; ?>>
<form action = "" method = "post">
<label>日付<input type ="date" id = "SalesDate" name = "SalesDate" value = "<?php echo $SalesDate; ?>" required></label>
<label>顧客名<?php echo $CustomerList; ?></label>
<label>商品名<?php echo $GoodsList; ?></label>
<label>数量<?php echo $Quantity; ?></label>
<input type = "hidden" name = "id" value = "<?php echo $id; ?>">
<input type = "submit" value = "更新" name = "submit_updatedetail">
</form>
</div>
<div id = "totalAmount">
<?php echo $total; ?>
</div>
</div>
</body>
</html>