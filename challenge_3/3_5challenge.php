<!DOCTYPE HTML PUBLIC"-//WSC//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<boby>

<?php
//課題5:戻り値としてある人物のid(数値),名前,生年月日、
//住所を返却し、受け取った後はid以外の値を表示する

list($id,$name,$birth,$address)=number();

print $name."<br>".$birth."<br>".$address;

function number(){
$id=1;
$name="田中";
$birth='1月1日';
$address='東京';
return array($id,$name,$birth,$address);
}

?>

</body>
</html>
