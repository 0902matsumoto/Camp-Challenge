<!DOCTYPE HTML PUBLIC"-//WSC//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<boby>

<?php
//課題6:引き数に1つのid(数値)をとり、3人分のプロフィール(項目は課題5参照)を
//あらかじめ関数内で定義しておく。引き数のid値により戻り値として返却する
//プロフィールを誰のものにするか選択する。それ以降などは課題5と同じ扱いに


function member($in){
 $mem1=array("1","田中","一月一日","東京");
 $mem2=array("2","鈴木","二月二日","大阪");
 $mem3=array("3","佐藤","三月三日","福岡");

if($in==1){$answer=$mem1;
}elseif($in==2){$answer=$mem2;
}elseif($in==3){$answer=$mem3;
}else{$answer=false;}

return $answer;
}
$serch=member(3);

print "$serch[1]"."$serch[2]"."$serch[3]";



?>

</body>
</html>
