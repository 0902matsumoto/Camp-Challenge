<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //課題1:Challenge_dbへのエラーハンドリングを含んだ接続の確立を行ってください
        require_once __DIR__ . '/database_conf.php';
        require_once __DIR__ . '/h.php';
        
        try{
            $db = new PDO($dsn, $dbUser, $dbPass);
            $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo'データベースに接続しました';           
        }catch (PDOException $e) {
            echo '接続できませんでした　理由; ' . h($e->getMessage());
        }
        ?>
    </body>
</html>
