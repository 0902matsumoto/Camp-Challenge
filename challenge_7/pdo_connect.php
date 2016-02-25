<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            //データベースへの接続
            $db = new PDO($dsn, $dbUser, $dbPass);
            //プリペアドステートメントのエミュレーションの無効化
            $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            //SQLのエラーを表示
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //文字コードを指定？？？
            $db->query("SET NAMES utf8");
        ?>
    </body>
</html>
