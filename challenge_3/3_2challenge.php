<!DOCTYPE HTML PUBLIC"-//WSC//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<boby>

<?php
//課題2:引数として数値を受け取り、その値が奇数か偶数か判別＆表示する処理
//を関数として制作し、適当な数値に対して奇数・偶数の判別を行ってください

$result=dis(1);
 print"$result";

function dis($num){
   if($num%2==0){
      //$numという引数（数字が入っている）ものへ、文字列を上書きするのはあまり良くない
      $moji="偶数";
  }else{
      $moji="奇数";
       }
    return $moji;
}


?>

</body>
</html>
