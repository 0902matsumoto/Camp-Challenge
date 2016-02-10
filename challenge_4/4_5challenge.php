<!DOCTYPE HTML PUBLIC"-//WSC//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<boby>

<?php
//５．自分の氏名について、バイト数と文字数を取得して、表示してください。

$bai=strlen('まつもとたくや');

$moji=mb_strlen('まつもとたくや');

print"まつもとたくや<br>";

print"バイト数は"."$bai"."です。<br>";

print"文字数は"."$moji"."です。";


?>

</body>
</html>
