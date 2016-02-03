<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>PHP基礎</title>
</head>
<body>

<?php
//５．四則演算の結果をそれぞれ表示してください。
$a=5;
$b=7;
const A=8;
const B=6;

$x=A+$a;
$y=$b-B;
$z=A*B+$a/$b;

print"$x".'<br/>';
print"$y".'<br/>';
print"$z".'<br/>';

print A."+$a=$x".'<br/>';

?>

</body>
</html>