<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<html>
<head><title>テスト</title></head>
<body>
<form method="post" action="cookie4_0.php">
ユーザー名：<input type="text" name="user"
 value="<?php if(isset($_COOKIE["user"])) print $_COOKIE["user"]; ?>">
<br>
パスワード：<input type="password" name="pass"
 value="<?php if(isset($_COOKIE["pass"])) print $_COOKIE["pass"]; ?>">
<br>
<input type="checkbox" name="ck" value="on" <?php if(isset($_COOKIE["ck"])) print "checked" ;?>>次回からのID入力を省略
<br>
<input type="submit" value="送信">
</body>
</html> 
</body>
</html>
