<!DOCTYPE HTML PUBLIC"-//WSC//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<boby>

<?php
//課題4:課題1で定義した関数に追記する形として、戻り値　true(bool値)　を返却するように
//修正し、関数の呼び出し側でtrueを受け取れたら「この処理は正しく実行できました」、
//そうでないなら「正しく実行できませんでした」と表示する

function my_profile()
{
         print "松本卓也<br>";
         print "１９９１年９月２日<br>";
         print "私の好きなラーメン屋は小岩駅近くにある「鼈（すっぽん）」です。ここの味噌ラーメンは絶品です！<br>";

$ramen=true;
return $ramen;

}


for ($i=1; $i <10 ; $i++) {
  my_profile();
}
$a=my_profile();
if($a==true){print"<br><br>この処理は正しく実行できました<br>";}else{
  print"<br><br>正しく実行できませんでした<br>";
}



?>

</body>
</html>
