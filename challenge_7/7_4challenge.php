<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // 課題4:前回の課題1で作成したテーブルからprofileID=1の情報を取得し、画面に取得した情報を表示してください
        require_once __DIR__ . '/database_conf.php';
        require_once __DIR__ . '/h.php';
        
        try{
            //PDOオブジェクトの生成
            $db = new PDO($dsn, $dbUser, $dbPass);
            //プリペアドステートメントのエミュレーションの無効化
            $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            //SQLのエラーを表示
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //文字コードを指定？？？
            $db->query("SET NAMES utf8");
            //sql文の準備
            $sql = 'select * from profiles order by profilesID limit 1';
            //SQL文をMySQLに送信
            $prepare = $db->prepare($sql);
            //SQL文を実行
            $prepare->execute();
            //結果をカラム名をキーとした連想配列で取得
            $result = $prepare->fetch(PDO::FETCH_ASSOC);
           ?><table border = "1"><?php
                print "<tr>";
                   foreach($result as $column => $param){
                       print "<td>".h($column)."</td>"."<td>".h($param)."</td>";
                   }
                print "</tr>";
            //エラーが発生した場合、PDOException例外をスローされるのでキャッチ        
        }catch(PDOExeption $e){
            echo 'エラーが発生しました。内容:' . h($e->getMessage());
        }           
        ?>
    </body>
</html>
