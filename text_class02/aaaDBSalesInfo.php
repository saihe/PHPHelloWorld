<?php 
require_once("db.php");
class DBSalesInfo extends DB{
//salesInfoテーブルのCRUD担当
	public function ListGoods(){
	//商品名リストの作成
		$sql = "SELECT GoodsID , GoodsName , Price  FROM goods ORDER BY GoodsID";
		$res = parent::executeSQL($sql , null);
		$list  = "<select name = 'GoodsID'>\n";
		$list .= "<option value = '-99'>--選択してください--</option>\n";
		foreach($rows = $res -> fetchAll(PDO::FETCH_ASSOC) as $row){
			$list .= "<option value = '{$row['GoodsID']}'>--{$row['GoodsName']}</option>\n";print_r($row);
		}
		$list .= "</select>\n";
		return $list;
	}
	
	public function InsertSalesInfo(){
	//顧客IDと商品IDが選択されていたら登録
		if($_PSOT["CustomerID"] > 0 && $_POST["GoodsID"] > 0){
			$sql  = "INSERT INTO salesinfo VALUES(? , ? , ? , ? , ?)";
			$array = array(null , $_POST['SalesDate'] , $_POST['CustomerID'] , $_POST['GoodsID'] , $_POST['Quantity']);
			parent::executeSQL($sql , $array);
		}
	}

	private function getSalesinfo($salesDate , $customerID){
	//結果セットを取得
		$sql = <<<eof
		SELECT salesinfo.id , salesinfo.SalesDate , customer.CustomerName , goods.GoodsName , goods.Price , salesinfo.Quantity , goods.Price*salesinfo.Quantity FROM salesinfo INNER JOIN customer ON salesinfo.CustomerID = customer.CustomerID INNER JOIN goods ON salesinfo.GoodsID = goods.GoodsID WHERE salesinfo.SalesDate = ? and salesinfo.CustomerID = ? ORDER BY salesinfo.id
eof; 
		$array = array($salesDate , $customerID);
		$res   = parent::executeSQL($sql , $array);
		return $res;
	}

}
?>
