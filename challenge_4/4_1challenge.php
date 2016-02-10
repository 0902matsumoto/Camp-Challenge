<!DOCTYPE HTML PUBLIC"-//WSC//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<boby>

<?php

//１．2016年1月1日 0時0分0秒のタイムスタンプを作成し、表示してください。
$stamp=mktime(0,0,0,1,1,2016);

 $today = date('Y年m月d日H時i分s秒',$stamp);

print $today;


?>

</body>
</html>
