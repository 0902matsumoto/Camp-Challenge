<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action = "http://localhost/challenge/challenge_7/7_10challenge.php" method = "POST">
            削除したいレコードの profileID を入力してください<br><br>
            <input type = text name = "id" size = "7">
            <input type = submit value = "削除">
        </form>
        <?php
        // 課題10:profileIDで指定したレコードを削除できるフォームを作成してください
        require_once __DIR__ . '/database_conf.php';
        require_once __DIR__ . '/h.php';
        
        if(!empty($_POST["id"])){
        try{
            require_once __DIR__ . '/pdo_connect.php';
            
            $sql = "delete from profiles where profilesID = :id;";
            $prepare = $db->prepare($sql);
            $prepare->bindValue(':id',$_POST["id"],PDO::PARAM_INT);
            $prepare->execute();
            
            $sql = 'select * from profiles';
            $prepare = $db->prepare($sql);
            $prepare->execute();
            print '<br>削除しました';
        }catch(PDOException $e){
            echo 'エラーが発生しました。　内容:' . h($e->getMessage());
        }
        }
        ?>
    </body>
</html>