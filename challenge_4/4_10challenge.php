<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //１０．紹介していないPHPの組み込み関数を利用して、処理を作成してください。
//講義では紹介されていないPHPの組み込み関数はたくさん存在します。
//PHPの公式サイトから関数を選び、実際にロジックを作成してみてください。
//また、この処理を作成するに当たり、下記を必ず実装してください。
//①処理の経過を書き込むログファイルを作成する。
//②処理の開始、終了のタイミングで、ログファイルに開始・終了の書き込みを行う。
//③書き込む内容は、「日時　状況（開始・終了）」の形式で書き込む。
//④最後に、ログファイルを読み込み、その内容を表示してください。

$startTime = date('Y-m-d H:i:s',time());
$path = "log.txt";

$number=mt_rand(1,1000);
$num=mt_rand(1,10);

$q=$number/$num;

$a=round($q,-1);
$b=floor($q);
$c=ceil($q);

print"元の値<br>
$q<br><br>
十のくらいで四捨五入<br>
$a<br><br>
小数点以下を切り捨て<br>
$b<br><br>
小数点以下を切り上げ<br>
$c<br>";

$endTime = date('Y-m-d H:i:s',time());

$start_end_Log = "$startTime 開始\n $endTime 終了\n";

$fp = fopen($path, 'ab');
// $fp が外部ファイルへの所在を表すリソース型かどうか調べる。
if(! is_resource($fp)){
    die('ファイルが開けませんでした。');
}
fwrite($fp, "$start_end_Log");

fclose($fp);
        ?>
    </body>
</html>
