<?php
require_once("func.php");
$res = "";
if(isset($_POST["submit"])){
		$res = JudgeEvenOdd($_POST["num"]);
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>はじめてのクラス</title>
</head>

<body>
<h1>Classの確認</h1>
<form method= "post" action= "">
<label>数字を入力<input type= "text" name = "num" required></label>
<input type = "submit" value= "　　判定　　" name = "submit"/>
</form>
<?php echo $res; ?>
</body>
</html>