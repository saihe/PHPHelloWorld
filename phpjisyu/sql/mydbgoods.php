<?php
require_once("mydb.php");
class dbgoods extends db{
	
	public function selectGoods(){
		$sql = "SELECT * FROM goods";
		$res = parent::executeSQL($sql , null);
		$data = "<table>";
		$data .= "<tr><th>ID</th><th>商品名</th><th>単価</th><th></th><th></th></tr>\n";

		foreach($rows = $res -> fetchAll(PDO::FETCH_NUM) as $row){
			$data .= "<tr>";
			for($i = 0 ; $i < count($row) ; $i++){
				$data .= "<td>{$row[$i]}</td>";
			}
			$data .= "<td><form method = 'post' action = ''><input type = 'hidden' name = 'updateGoodsID' value = {$row[0]}><input type = 'submit' name = 'updateGoods' value =  '更新'></form></td>";
			$data .= "<td><form method = 'post' action = ''><input type = 'hidden' name = 'deleteGoodsID' value = {$row[0]}><input type = 'submit' name = 'deleteGoods' value =  '削除'></form></td>";
			$data .= "</tr>\n";
		}
		$data .= "</table>\n";
		return $data;
	}
	
	public function insertGoods(){
			$sql = "INSERT INTO goods VALUES(? , ? , ?) ";
			$array = array($_POST["insertGoodsID"] , $_POST["insertGoodsName"] , $_POST["insertPrice"]);
			parent::executeSQL($sql , $array);
	}
	
	public function deleteGoods(){
		$sql = "DELETE FROM goods WHERE GoodsID = ?";
		$array = array($_POST["deleteGoodsID"]);
		parent::executeSQL($sql , $array);
	}
	
	public function updateGoods(){
		$sql = "UPDATE SET GoodsName , Price WHERE GoodsID = ?";
		$array = array($_POST[""] , $_POST[""]);
		parent::executeSQL($sql , $array);
	}
}
?>
