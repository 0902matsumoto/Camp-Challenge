<!DOCTYPE HTML PUBLIC"-//WSC//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<boby>

<?php
//２．現在の日時を「年-月-日 時:分:秒」で表示してください。
$now=time();


$nowtime=date('Y年m月d日H時i分s秒',$now);

print"$nowtime";

?>

</body>
</html>
