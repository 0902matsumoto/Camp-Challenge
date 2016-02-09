<!DOCTYPE HTML PUBLIC"-//WSC//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<boby>

<?php
//課題8:課題1、課題2のユーザー定義箇所を含んだutil.phpを作成し、
//requireで呼び出して表示する

require("util.php");
//自己紹介
my_profile();
print"<br>";

//奇数か偶数かの判別
$result=dis(101);
print"$result";

?>

</body>
</html>
