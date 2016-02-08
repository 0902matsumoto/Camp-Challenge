<!DOCTYPE HTML PUBLIC"-//WSC//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<boby>

<?php
//課題1:自分のプロフィール(名前、生年月日、自己紹介)を3行に分けて
//表示するユーザー定義関数を作り、関数を10回呼び出して下さい

function my_profile()
{
         print "松本卓也<br>";
         print "１９９１年９月２日<br>";
         print "私の好きなラーメン屋は小岩駅近くにある「鼈（すっぽん）」です。ここの味噌ラーメンは絶品です！<br>";
}

for ($i=0; $i <10 ; $i++) {
  my_profile();
# code...
}





?>

</body>
</html>
