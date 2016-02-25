<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //課題2:前回の課題1で作成したテーブルに自由なメンバー情報を格納する処理を構築してください
        require_once __DIR__ . '/database_conf.php';
        require_once __DIR__ . '/h.php';
        
        try{
            require_once __DIR__ . '/pdo_connect.php';
            
            $sql = "insert into profiles values(:id, :name, :tell, :age, :birthday)";
            $prepare = $db->prepare($sql);
            $prepare->bindValue(':id',10,PDO::PARAM_INT);
            $prepare->bindValue(':name','田中　次郎',PDO::PARAM_STR);
            $prepare->bindValue(':tell','000-777-8888',PDO::PARAM_STR);
            $prepare->bindValue(':age',24,PDO::PARAM_INT);
            $prepare->bindValue(':birthday','1991-08-14',PDO::PARAM_STR);
            
            $prepare->execute(); 
        }catch(PDOExeption $e){
            echo 'エラーが発生しました。内容:' . h($e->getMessage());
        }                  
        ?>
    </body>
</html>
