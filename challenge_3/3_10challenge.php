<!DOCTYPE HTML PUBLIC"-//WSC//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<boby>

<?php
//課題10:先に$limit=2を定義しておき、課題9の処理のうち2人目($limitで定義した値の人数)
//まででforeachのループを抜けるようにする

function member(){
 $mem[1]=array("1","田中","一月一日","東京");
 $mem[2]=array("2","鈴木","二月二日",null);
 $mem[3]=array("3","佐藤","三月三日","福岡");

return $mem;
}
$i=1;
$limit=2;

$out=member();

foreach ($out as $value) {
if($i>$limit){
  break;
}
foreach ($value as $key=>$x){
  if($x==null){
    continue;
  }
  if($key==0){continue;}

  print"$x"."<br>";
}
$i++;
}




?>

</body>
</html>
