<!DOCTYPE HTML PUBLIC"-//WSC//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<boby>

<?php
//８．ファイルに自己紹介を書き出し、保存してください。

$fp=fopen("4_8challenge.txt","a");

fwrite($fp,"こんにちは。松本です。宜しくお願いします。");

fclose($fp);

?>

</body>
</html>
