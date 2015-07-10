<?php
require_once("mydb.php");
class DBSalesInfo extends MYDB{
	//salesinfoテーブルのCRUD担当
	public function ListGoods(){
		//商品名リストの作成
		$sql   = "SELECT GoodsID , GoodsName , Price FROM goods ORDER BY GoodsID";
		$res   = parent::executeSQL($sql , null);
		$list  = "<select name = 'GoodsID'>\n";
		$list .= "<option value = '-99'>--選択してください。--</option>\n";
		foreach($row = $res -> fetchAll(PDO::FETCH_ASSOC) as $row){
			$list .= "<option balue ='{$row['GoodsID']}'>{$row['GoodsName']}</option>\n";
		}
		$list .= "</select>\n";
		return $list;
	}
	
	public function InsertSalesinfo(){
	//顧客IDと商品IDが選択されていたら登録
		if($_POST["CustomerID"] > 0 && $_POST["GoodsID"] > 0){
			$sql ="INNSERT INTO salesinfo VALUES(? , ? , ? , ? , ?)";
			$array = array(null , 
							$_POST["SalesDate"]  , 
							$_POST["CustomerID"] , 
							$_POST["GoodsID"]    , 
							$_POST["Quantity"]);
			parent::executeSQL($sql , $array);
		}
	}

	private function getSalesinfo(){
	//結果セットを取得
		$sql = <<<eof
		SELECT salesinfo.id , salesinfo.SalesDate , customer.CustomerName , goods.GoodsName , goods.Price , salesinfo.Quantity , goods.Price*salesinfo.Quantity FROM salesinfo INNER JOIN customer ON salesinfo.CustomerID = customer.CustomerID INNERJOIN goods ON salesinfo.GodsID = goods.GoodsID WHERE salesinfo.SalesDate = ? and salesinfo.CustomerID = ? ORDER BY salesinfo.id
eof;
		$array = array($salesDate , $customerID);
		$res = parent::executeSQL($sql , $array);
		return $res;
	}
	
	public function SelectSalesinfo(){
	//日付と顧客IDで売り上げ情報を抽出(更新・削除ボタン付き)
		$res = $this -> getSalesinfo($salesDate , $customerID);
		$data = "<table id = 'entryslip'>\n";
		$data .= "<tr><th>IDM/th><th>日付</th><th>顧客名</th><th>商品名</th><th>短歌</th><th>数量</th><th>金額</th></tr>\n";
		foreach($rows = $res ->fechAll(PDO::FETCH_NUM) as $row){
			$data .= "<tr>";
			for($i = 0 ; $i <count($row) ; $i++){
				$data .= "<td>{$row[$i]}</td>";
			}
			$data .= "</tr>\n";
		}
		$data .= "</table>\n";
		return $data;
	
	}


	public funtion ListCustomerWithSelectel("CustomerID"){
	//顧客名リストの作成(引数の値を表示)
	}


}
?>
