<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>PHP基礎</title>
</head>
<body>

<?php
//２．switch文を利用して、以下の処理を実現してください。
//　　　　値が'A'なら「英語」、値が'あ'なら「日本語」、それ以外は何も表示しない処理

$x='あ';
switch($x){
case 'A':print'英語';break;
case 'あ':print'日本語';break;
default:break;
}

?>

</body>
</html>