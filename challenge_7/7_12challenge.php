<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action = "http://localhost/challenge/challenge_7/7_12challenge.php" method = "POST">
            各項目を入力してください<br><br>
            名前<br>
            <input type = "text" name = "name"><br><br>
            年齢<br>
            <input type = "text" name = "age" size = "5"><br><br>
            誕生日<br>
            <input type = "text" name = "birth"><br><br>
            <input type = "hidden" name = "in" value = "in">
            <input type = "submit" value = "複合検索"><br><br>
        </form>
        <br>
        <?php
        // 課題12:検索用のフォームを用意し、名前、年齢、誕生日を使った複合検索ができるようにしてください。
        require_once __DIR__ . '/database_conf.php';
        require_once __DIR__ . '/h.php';
        
        if(!empty($_POST["name"])&&!empty($_POST["age"])&&!empty($_POST["birth"])){
        try{
            require_once __DIR__ . '/pdo_connect.php';
            
            $sql = "select * from profiles where name = :name and age = :age and birthday = :birth ;";
              $prepare = $db->prepare($sql);
                $prepare->bindValue(':name',$_POST["name"],PDO::PARAM_STR);
                $prepare->bindValue(':age',$_POST["age"],PDO::PARAM_INT);
                $prepare->bindValue(':birth',$_POST["birth"],PDO::PARAM_STR); 
                  $prepare->execute();
                  
            $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
            if(empty($result)){
                die('見つかりませんでした');
            }
            // $result に連想配列が入った配列がある
            ?><table border = "1"><?php
            foreach($result as $profile){
                print "<tr>";
                foreach($profile as $column => $param){
                    print "<td>".h($column)."</td>"."<td>".h($param)."</td>";
                }
                print "</tr>"."<br><br>";
            }
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
