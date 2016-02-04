<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>PHP基礎</title>
</head>
<body>

<?php
//　１．switch文を利用して、以下の処理を実現してください。
//　　　　値が1なら「one」、値が2なら「two」、それ以外は「想定外」と表示する処理

$x=7;

switch($x){
case 1:
$y='one';
break;

case 2:
$y='two';
break;

default:
$y='想定外';
break;
}

print"$y";

?>

</body>
</html>