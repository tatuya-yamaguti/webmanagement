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
<form action="../controllers/Test3.php" method="GET">
ユーザ名 ：<input type="text" name="user"><br>
パスワード：<input type="password" name="password"><br>
<input type="submit" value="ログイン">
</form>
</body>
</html>