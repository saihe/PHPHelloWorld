<?php
echo "<pre>";
var_dump($_POST);
echo "</pre>";
$name = "";
if(isset($_POST['exe'])){
	$name = $_POST['username'];
	echo "<p>{$name}さんですね。</p>\n";
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>始めようphp</title>
</head>

<body>
<h1>動的なwebページの作成</h1>
<form method="post" action="">
<label>名前<input type="text" name="username" required></label>
<input type="submit" name="exe" value="実行">
</form>
<?php echo $name;?>
</body>
</html>