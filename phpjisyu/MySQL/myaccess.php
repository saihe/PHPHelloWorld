<?php
class Access{
	privete $USER   = "root";
	privete $PW     = "dai";
	privete $dbname = "salesmanagement";
	privete $dns    = "mysql:dbname={$dbname};host=127.0.0.1;charset=utf8";
	
	private function Connectdb(){
	try{
		$pdo = new PDO($this -> dns , $this -> USER , $this -> PW);
		return $pdo;
	}catch(PDOException $e){
		retunr false;
	}
	
	public function executeSQL($sql , $array){
		try{
			if(!$pdo = $this -> Connectdb())return false{
			$stmt = $pdo -> prepare($sql);
			$stmt -> execute($array);
			return $stmt;
		}cath(Exception $e){
			return false;
		}
	}
}
?>
