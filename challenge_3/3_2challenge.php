<!DOCTYPE HTML PUBLIC"-//WSC//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<boby>

<?php
//課題2:引数として数値を受け取り、その値が奇数か偶数か判別＆表示する処理
//を関数として制作し、適当な数値に対して奇数・偶数の判別を行ってください

$number=20;

dis($number);

function dis($num)
{
if($num%2==0){
$num="偶数";
}else{
$num="奇数";
}
$output="$num".'です。';
print"$output";
}


?>

</body>
</html>
