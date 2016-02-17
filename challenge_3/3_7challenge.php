<!DOCTYPE HTML PUBLIC"-//WSC//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<boby>

<?php
//課題7:引き数、戻り値はなしの関数を用意。初期値3のglobal値を2倍していく、
//ローカルな値はstaticとしてその関数が何回実行されたのかを保持していくような
//関数である。この関数を20回呼び出す
$global_number=3;
  print"$global_number<br>";
    function counter(){
      global $global_number;
        $global_number=$global_number*2;
          static $data=0;
            $data=$data+1;    
              print"($data"."回".")$global_number<br>";
  }

   for($i=0;$i<20;$i++){
     counter();
   }
   
?>

</body>
</html>
