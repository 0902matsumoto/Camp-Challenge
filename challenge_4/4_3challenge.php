<!DOCTYPE HTML PUBLIC"-//WSC//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<boby>

<?php
//３．2016年11月4日 10時0分0秒のタイムスタンプを作成し、
//「年-月-日 時:分:秒」で表示してください。

$a=mktime(10,0,0,11,4,2016);


$time=date('「Y年m月d日H時:i分:s秒」',$a);

print"$time";

?>

</body>
</html>
