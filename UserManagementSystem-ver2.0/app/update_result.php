<?php 
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';
require_once '../common/dbaccesUtil.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>更新結果画面</title>
</head>
  <body>
    <?php
    if(empty($_POST['mode'])){
        access_ck();         
    }
    if($_POST['mode']!='RESULT'){
        access_ck();
    }?>
           
            <?php
            $userID = $_POST['userID'];
            $name = $_POST['name'];
            $birthday = $_POST['year'].'-'.sprintf('%02d',$_POST['month']).'-'.sprintf('%02d',$_POST['day']);
            $type = $_POST['type'];
            $tell = $_POST['tell'];
            $comment = $_POST['comment'];
            
            
            
    $result = update_profile($userID,$name, $birthday, $type, $tell, $comment); 
    
    //エラーが発生しなければ表示を行う
    if(!isset($result)){
   
    $result = profile_detail($userID);
    if(is_array($result)){//変数が配列ならばtrueを返す
    ?>
      
    <h1>更新確認</h1>
    <br>
    名前:<?php echo $result[0]['name'];?><br>  
    生年月日:<?php echo $result[0]['birthday'];?><br>
    種別:<?php echo ex_typenum($result[0]['type']);?><br>
    電話番号:<?php echo $result[0]['tell'];?><br>
    自己紹介:<?php echo $result[0]['comment'];?><br>
    登録日時:<?php echo date('Y年n月j日　G時i分s秒', strtotime($result[0]['newDate'])); ?><br>
    以上の内容で更新しました。<br><br><?php
    }else{
        echo 'データの検索に失敗しました。次記のエラーにより処理を中断します:'.$result;
    }
    }else{
        echo 'データの更新に失敗しました。次記のエラーにより処理を中断します:'.$result;
    }
    echo return_top(); 
    ?>
  </body>
</html>
