<!DOCTYPE HTML PUBLIC"-//WSC//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<boby>

<?php
//４．2015年1月1日 0時0分0秒と2015年12月31日 23時59分59秒の差（総秒）
//を表示してください。

$a=mktime(0,0,0,1,1,2015);
$b=mktime(23,59,59,12,31,2015);

$time=$b-$a;


print"$time";

?>

</body>
</html>
