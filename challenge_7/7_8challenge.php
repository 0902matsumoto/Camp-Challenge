<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action = "http://localhost/challenge/challenge_7/7_8challenge.php" method = "POST">
            名前を入力してください<br><br>
            <input type = "text" name = "word">
            <input type = "submit" value = "検索">
        </form>
        <br>
        <?php
        //課題8:検索用のフォームを用意し、名前の部分一致で検索＆表示する処理を構築してください。
        //同じページにリダイレクトするPOST処理と、POSTに値が入っているかの条件分岐を活用すれば、
        //一つの.phpで完了できますので、チャレンジしてみてください


        require_once __DIR__ . '/database_conf.php';
        require_once __DIR__ . '/h.php';
        
        if(!empty($_POST["word"])){
        try{
            require_once __DIR__ . '/pdo_connect.php';
            
            $sql = "select * from profiles where name like :word";
            $prepare = $db->prepare($sql);
            $moji = "%".$_POST["word"]."%";
            $prepare->bindValue(':word',$moji,PDO::PARAM_STR);
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
        }
        ?>
    </body>
</html>
