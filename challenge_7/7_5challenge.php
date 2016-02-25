<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //課題5：nameに「茂」を含む情報を取得し、画面に取得した情報を表示してください
        require_once __DIR__ . '/database_conf.php';
        require_once __DIR__ . '/h.php';
        
        try{
            require_once __DIR__ . '/pdo_connect.php';
            
            $sql = "select * from profiles where name like '%茂%'";
            $prepare = $db->prepare($sql);
            $prepare->execute();
            
            $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
            if(empty($result)){
                die('見つかりませんでした');
            }
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
        ?>
    </body>
</html>
