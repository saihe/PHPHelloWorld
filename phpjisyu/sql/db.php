<?php
class db{
	private $USER = "i510";
	private $PW   = "May.2015";
	private $dns  = "mysql:dbname=i510;host=sv1;charset=utf8";
		
	private function Connectdb(){
		try{
			$pdo = new PDO($this -> dns , $this -> USER , $this -> PW);
			return $pdo;
		}catch(Exception $e){
			return false;
		}
	}
	
	public function executeSQL($sql , $array){
		try{
			if(!$pdo = $this -> Connectdb())return false;
				$stmt = $pdo -> prepare($sql);
				$stmt -> execute($array);
		}catch(Exception $e){
			return false;
		}
	}
	
}
?>
