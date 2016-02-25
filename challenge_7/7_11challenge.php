<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action = "http://localhost/challenge/challenge_7/7_11challenge.php" method = "POST">
            上書きするIDを指定し、上書きする要素を入力してください<br><br>
            ID<br><input type = "text" name = "id"><br><br>
            名前<br><input type = "text" name = "name"><br><br>
            電話番号<br><input type = "text" name = "tell"><br><br>
            年齢<br><input type = "text" name = "age" size = "5"><br><br>
            生年月日<br><input type = "text" name = "birth"><br><br>
            <input type = "hidden" name = "in" value = "in">
            <input type = "submit" value = "上書き">
        </form>
        <br>
        <?php
        // 課題11:profileIDで指定したレコードの、profileID以外の要素をすべて上書きできるフォームを作成してください
        require_once __DIR__ . '/database_conf.php';
        require_once __DIR__ . '/h.php';
        
        if(!empty($_POST["id"])&&!empty($_POST["name"])&&!empty($_POST["tell"])&&!empty($_POST["age"])&&!empty($_POST["birth"])){
        try{
            require_once __DIR__ . '/pdo_connect.php';
            
            $sql = "update profiles set name = :change where profilesID = :id;";
              $prepare = $db->prepare($sql);
                $prepare->bindValue(':change',$_POST["name"]);
                $prepare->bindValue(':id',$_POST["id"]);
                  $prepare->execute();
                  
            $sql = "update profiles set tell = :change where profilesID = :id;";
              $prepare = $db->prepare($sql);
                $prepare->bindValue(':change',$_POST["tell"]);
                $prepare->bindValue(':id',$_POST["id"]);
                  $prepare->execute();
                  
            $sql = "update profiles set age = :change where profilesID = :id;";
              $prepare = $db->prepare($sql);
                $prepare->bindValue(':change',$_POST["age"]);
                $prepare->bindValue(':id',$_POST["id"]);
                  $prepare->execute();
                  
            $sql = "update profiles set birthday = :change where profilesID = :id;";
              $prepare = $db->prepare($sql);
                $prepare->bindValue(':change',$_POST["birth"]);
                $prepare->bindValue(':id',$_POST["id"]);
                  $prepare->execute();
                  
            }catch(PDOException $e){
            echo 'エラーが発生しました。　内容:' . h($e->getMessage());
        }
        }else{
        if(isset($_POST["in"])){
            print '全ての入力欄に入力してください';
        }
        }
        ?>
    </body>
</html>
