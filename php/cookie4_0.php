<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>会員ページ１</title>
</head>

<body>
<?php 
if($_POST["user"] == "root" && $_POST["pass"] == "1234"){
  $msg = "ログインしました<br>";
  //次回からのID入力を省略するにチェックがあったら、クッキーをセット
  if(isset($_POST["ck"]) && $_POST["ck"] == "on"){
    //有効期限1時間でクッキーをセット
    setcookie("user" , $_POST['user'], mktime(0 , 0 , 0 , 5 , 1 , 2016));
    setcookie("pass" , $_POST['pass'], mktime(0 , 0 , 0 , 5 , 1 , 2016));
    setcookie("ck"   , $_POST['ck']  , mktime(0 , 0 , 0 , 5 , 1 , 2016));
  }else if(empty($_POST["ck"])){
  setcookie("user", "");
  setcookie("pass", "");
  setcookie("ck", "");
  }
}else{
  $msg = "ユーザー名またはパスワードが間違っています。<br>";
  setcookie("user", "");
  setcookie("pass", "");
  setcookie("ck", "");
}
?>
<hr>
<?php print $msg; ?>
<a href="cookie4_1.php">ログインページに戻る</a>

</body>
</html>