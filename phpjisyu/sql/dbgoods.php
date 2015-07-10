<?php
require_once("db.php");
class dbgoods extends db{
	
	public function insertGoods(){
			$sql = "INSERT INTO goods VALUES(? , ? , ?) ";
			$array = array($_POST["insertGoodsID"] , $_POST["insertGoodsName"] , $_POST["insertPrice"]);
			parent::executeSQL($sql , $array);
	}
	
}
?>
