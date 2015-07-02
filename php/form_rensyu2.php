<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<?php 
$name = $_POST['nam'];
$pass = $_POST['pass'];
$msg = "ログインOK";
$errore = array("ue" => "ユーザ名に何も入力されていません" , "pe" => "パスワードに何も入力されていません");
$errorn = "ユーザ名またはパスワードが違います";

//print_r($errore);

if(empty($name) && empty($pass)){
	print $errore["ue"] . "<br>";
	print $errore["pe"] . "<br>";
}else if(empty($name)){
	print $errore["ue"];
}else if(empty($pass)){
	print $errore["pe"];
}else{
	if($name == "admin" && $pass == 1234){
		print $msg;
	}else{
		print $errorn;
	}
}

?>
</body>
</html>