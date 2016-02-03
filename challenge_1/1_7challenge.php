<!DOCTYPE HTML PUBLIC"-//WSC//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<boby>

<?php
$total=$_GET['total'];
$name=$_GET['name'];
$yen=$_GET['yen'];

if($name==1){print'雑貨';}
elseif($name==2){print'生鮮食品';}
else{print'その他';}
print'<br/>';

$x=$yen/$total;
print"$x".'<br/>';

if(($yen>=3000) && ($yen<5000)){print'4%';}
if($yen>=5000){print'5%';}
 
?>


</body>
</html>