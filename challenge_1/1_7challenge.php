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
//ポイントの率を表示するのではなく、実際に何ポイント付与されるのかを表示
$nebiki_4=$yen*0.04;
$nebiki_5=$yen*0.05;
if(($yen>=3000) && ($yen<5000)){print"$nebiki_4";}
if($yen>=5000){print"$nebiki_5";}
 
?>


</body>
</html>