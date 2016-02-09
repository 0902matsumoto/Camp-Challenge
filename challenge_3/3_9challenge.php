<!DOCTYPE HTML PUBLIC"-//WSC//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<boby>

<?php
//課題9:課題6の3人分のプロフィールのうち1人だけ住所が値nullの状態で定義し、
//foreachで全員分のプロフィールをid以外表示する処理を実行する。この際、
//歯抜けになっているデータはcontinueで飛ばす

function member(){
 $mem[1]=array("1","田中","一月一日","東京");
 $mem[2]=array("2","鈴木","二月二日",null);
 $mem[3]=array("3","佐藤","三月三日","福岡");

return $mem;
}

$out=member();

foreach ($out as $value) {

foreach ($value as $key=>$x){
  if($x==null){
    continue;
  }
  if($key==0){continue;}

  print"$x"."<br>";
}

}


?>

</body>
</html>
