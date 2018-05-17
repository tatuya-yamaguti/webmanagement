<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>アンケートシステム</title>
</head>
<body>
<p>アンケートシステムのログインページです．</p>
<?php
if(isset($_GET['bad'])?($_GET['bad']):''){
    echo '<font color="red">ユーザ名またはパスワードが不正です<br></font>';
}
?>
<?php //print_r(isset($dbdata)?($dbdata):'') ?>
<?php print_r(isset($text)?($text):'') ?>
<form action="Index_cnt" method="GET">
ユーザID :<input type="text" name="userId"><br>
password：<input type="password" name="passwd"><br>
<input type="submit" value="ログイン">
</form>
</body>
</html>