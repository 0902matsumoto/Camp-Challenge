<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //２．以下の機能を実装してください。１で作成したHTMLの入力データを取得し、画面に表示する
 $name= isset($_POST["name"])?$_POST["name"]:'';
            $sex= isset($_POST["sex"])?$_POST["sex"]:'';
       $hobby= isset($_POST["hobby"])?$_POST["hobby"]:'';
   
       print"$name<br>";
            print"$sex<br>";
       print"$hobby<br>";  
        ?>
    </body>
</html>
