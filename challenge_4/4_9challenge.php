<!DOCTYPE HTML PUBLIC"-//WSC//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<boby>

<?php
//９．ファイルから自己紹介を読み出し、表示してください。

$fp=fopen("4_8challenge.txt","r");

$moji=fgets($fp);

print"$moji";

fclose($fp);

?>

</body>
</html>
