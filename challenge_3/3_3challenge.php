<!DOCTYPE HTML PUBLIC"-//WSC//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<boby>

<?php
//課題3:引き数が3つの関数を定義する。1つ目は適当な数値を、2つ目はデフォルト値が5の数値を、
//最後はデフォルト値がfalse(bool値)の$typeを引き数として定義する。1つ目の引き数に2つ目
//の引き数を掛ける計算をする関数を作成し、$typeがfalseの時はその値を表示、trueのときは
//さらに累乗して表示する。

//例）function sample($□□□, $△△△, $type) // 引数が３つの関数書き出し部分(デフォルト値なし)

function zzz($g1,$g2=5,$type=false){
$g4=$g1*$g2;
if($type===true){
$g5=$g4*$g2;
print"$g5";
}else{
print"$g4";
}
}

$a=100;
$b=true;
$d=6;
zzz($a,$d,$b);

?>

</body>
</html>
