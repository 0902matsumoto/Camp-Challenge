<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //１２.4_demo.phpを参考に以下の仕様のプログラムを作成しなさい。
        //・「坊ちゃん」の文章を、「。」の位置で改行して表示する。
        //・デモのように、最初に「元の文章」と、後に「変更後の文章」を表示すること
      
        $sentence="4_waganeko.txt";
        
        $bun=file_get_contents("$sentence");
     
        print "元の文章<br><br>$bun<br><br><br><br>変更後の文章<br><br>";
        
        $change_sentence=str_replace("。","。<br>","$bun");
       
        print "$change_sentence";
        
        ?>
    </body>
</html>
