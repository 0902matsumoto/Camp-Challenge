<?php
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';
require_once '../common/dbaccesUtil.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>削除確認画面</title>
</head>
  <body>
    <?php 
    if(empty($_POST['aaaa'])){
        access_ck();         
    }
    if($_POST['aaaa']!='7777'){
        access_ck();
    }
    $result = profile_detail($_POST['id']);
    //エラーが発生しなければ表示を行う
    if(is_array($result)){
    ?>
    <h1>削除確認</h1>
    このレコードを本当に削除しますか？<br>
    名前:<?php echo $result[0]['name'];?><br>
    生年月日:<?php echo $result[0]['birthday'];?><br>
    種別:<?php echo ex_typenum($result[0]['type']);?><br>
    電話番号:<?php echo $result[0]['tell'];?><br>
    自己紹介:<?php echo $result[0]['comment'];?><br>
    登録日時:<?php echo date('Y年n月j日　G時i分s秒', strtotime($result[0]['newDate'])); ?><br>
    
    <form action="<?php echo DELETE_RESULT; ?>" method="POST">
      <input type="hidden" name="id" value="<?php echo $result[0]['userID'];?>">  
      <input type="hidden" name="delete" value="result"> 
      <input type="submit" name="YES" value="はい"style="width:100px">
    </form><br>
    <form action="<?php echo ROOT_URL; ?>">
      <input type="submit" value="いいえ"style="width:100px">
    </form><br>
    <form action="<?php echo RESULT_DETAIL; ?>" method="GET">
      <input type="hidden" name="id" value="<?php echo $result[0]['userID'];?>">
      <input type="submit" name="NO" value="詳細画面に戻る"style="width:100px">
    </form>
    
    <?php
    }else{
        echo 'データの取得に失敗しました。次記のエラーにより処理を中断します:'.$result;
    }
    echo return_top();
    ?>
   </body>
</html>
