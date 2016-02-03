<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>PHP基礎</title>
</head>
<body>


<?php
//６．変数を宣言し、その変数の中身によって以下の表示を行ってください。
//　　　⇒値が 1 なら「１です！」
//　　　⇒値が 2 なら「プログラミングキャンプ！」
//　　　⇒値が 'a' なら「文字です！」
//　　　⇒それ以外なら「その他です！」


$param=3;
if($param==1){print'「１です！」';}
elseif($param==2){print'「プログラミングキャンプ！」';}
elseif($param=='a'){print'「文字です！」';}
else{print'「その他です！」';}
?>

</body>
</html>