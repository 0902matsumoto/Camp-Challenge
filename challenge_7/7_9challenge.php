<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action = "http://localhost/challenge/challenge_7/7_9challnenge.php" method = "POST">
            プロフィール項目を入力して下さい<br><br>
            ID<br><input type = "text" name = "id"><br><br>
            名前<br><input type = "text" name = "name"><br><br>
            電話番号<br><input type = "text" name = "tell"><br><br>
            年齢<br><input type = "text" name = "age" size = "5"><br><br>
            生年月日<br><input type = "text" name = "birth"><br><br>
            <input type = "hidden" name = "in" value = "in">
            <input type = "submit" value = "登録">
        </form>
        <br>
        <?php
        // 課題9:フォームからデータを挿入できる処理を構築してください。
        require_once __DIR__ . '/database_conf.php';
        require_once __DIR__ . '/h.php';
        
        if(!empty($_POST["id"])&&!empty($_POST["name"])&&!empty($_POST["tell"])&&!empty($_POST["age"])&&!empty($_POST["birth"])){
        try{
            require_once __DIR__ . '/pdo_connect.php';
            
            $sql = "insert into profiles values(:id, :name, :tell, :age, :birthday)";
            $prepare = $db->prepare($sql);
            $prepare->bindValue(':id',$_POST["id"],PDO::PARAM_INT);
            $prepare->bindValue(':name',$_POST["name"],PDO::PARAM_STR);
            $prepare->bindValue(':tell',$_POST["tell"],PDO::PARAM_STR);
            $prepare->bindValue(':age',$_POST["age"],PDO::PARAM_INT);
            $prepare->bindValue(':birthday',$_POST["birth"],PDO::PARAM_STR);
           
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
