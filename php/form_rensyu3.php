<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<?php 
$name = $_POST['nam'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
/*
print $_POST['nam'];
print $_POST['pass1'];
print $_POST['pass2'];
*/
if(empty($name) && empty($pass1) && empty($pass2)){
	print "ユーザ名に何も入力されていません<br>";
	print "パスワードに何も入力されていません<br>";
	print "パスワード確認欄に何も入力されていません<br>";
}else if(empty($name)){
	print "ユーザ名に何も入力されていません";
}else if(empty($pass1)){
	print "パスワードに何も入力されていません";
}else if(empty($pass2)){
	print "パスワード確認欄に何も入力されていません";
}else if($pass1 != $pass2){
		print "パスワード欄とパスワード確認欄の値が違います";
}else if(strlen($pass1) < 4 || strlen($pass1) > 8){
		print "パスワードは4文字以上8文字以下にしてください";
}else{
	print "以下の内容で登録しました<br>";
	print "ユーザ名：" . $name . "<br>";
	print "パスワード：" . $pass1 . "<br>";
}

?>
</body>
</html>