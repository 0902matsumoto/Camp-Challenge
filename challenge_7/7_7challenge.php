<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //課題7:profileID=1のnameを「松岡 修造」に、ageを48に、birthdayを1967-11-06に更新してください
        require_once __DIR__ . '/database_conf.php';
        require_once __DIR__ . '/h.php';
        
        try{
            require_once __DIR__ . '/pdo_connect.php';
            
            $sql['松岡　修造'] = "update profiles set name = :param where profilesID = :i;";
            $sql[48] = "update profiles set age = :param where profilesID = :i;";
            $sql['1967-11-06'] = "update profiles set birthday = :param where profilesID = :i;";
            $sql[] = 'select * from profiles';
           
            foreach($sql as $key => $value){
                $prepare = $db->prepare($value);
                $prepare->bindValue(':i',1,PDO::PARAM_INT);
                $prepare->bindValue(':param',$key);
                $prepare->execute();
            }
            $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
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
