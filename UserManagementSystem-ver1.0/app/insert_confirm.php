<?php require_once '../common/defineUtil.php'; ?>
<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>登録確認画面</title>
</head>
  <body>
    <?php
    // 設問2:&& $_POST['year']!=="----" && $_POST['month']!=="--" && $_POST['day']!=="--"を挿入
    // && !empty($_POST['year'])を削除
    if(!empty($_POST['name']) && !empty($_POST['type']) 
            && !empty($_POST['tell']) && !empty($_POST['comment']) && $_POST['year']!=="----" 
            && $_POST['month']!=="--" && $_POST['day']!=="--"){
        
        $post_name = $_POST['name'];
        //date型にするために1桁の月日を2桁にフォーマットしてから格納
        $post_birthday = $_POST['year'].'-'.sprintf('%02d',$_POST['month']).'-'.sprintf('%02d',$_POST['day']);
        $post_type = $_POST['type'];
        $post_tell = $_POST['tell'];
        $post_comment = $_POST['comment'];

        //セッション情報に格納
        session_start();
        $_SESSION['name'] = $post_name;
        $_SESSION['birthday'] = $post_birthday;
        $_SESSION['type'] = $post_type;
        $_SESSION['tell'] = $post_tell;
        $_SESSION['comment'] = $post_comment;
    ?>

        <h1>登録確認画面</h1><br>
        名前:<?php echo $post_name;?><br>
        生年月日:<?php echo $post_birthday;?><br>
        種別:<?php echo $post_type?><br>
        電話番号:<?php echo $post_tell;?><br>
        自己紹介:<?php echo $post_comment;?><br>

        上記の内容で登録します。よろしいですか？

        <form action="<?php echo INSERT_RESULT ?>" method="POST">
          <input type="submit" name="yes" value="はい">
        </form>
        <form action="<?php echo INSERT ?>" method="POST">
            <input type="submit" name="no" value="登録画面に戻る">
        </form>
        
    <?php }else{ ?>
        <h1>入力項目が不完全です</h1><br>
         <form action="<?php echo INSERT ?>" method="POST">
    <?php    // 設問 3 以下のif文を挿入
             // 設問 4 hidden により、入力した値を
          if(empty($_POST['name'])){print '名前が未入力です'."<br><br>";}else{
              $n_ame = $_POST['name'];
              ?><input type ="hidden" name = "n_ame" value = "<?= $n_ame ?>"><?php
          }
            if(empty($_POST['type'])){print '種別が未入力です'."<br><br>";}else{
                $t_ype = $_POST['type'];
                ?><input type ="hidden" name = "t_ype" value = "<?= $t_ype ?>"><?php
            }
              if(empty($_POST['tell'])){print '電話番号が未入力です'."<br><br>";}else{
                  $t_ell = $_POST['tell'];
                  ?><input type ="hidden" name = "t_ell" value = "<?= $t_ell ?>"><?php
              }
                if(empty($_POST['comment'])){print '自己紹介文が未入力です'."<br><br>";}else{
                    $c_omment = $_POST['comment'];
                    ?><input type ="hidden" name = "c_omment" value = "<?= $c_omment ?>"><?php
                }
                  if(!empty($_POST['year'])||!empty($_POST['month'])||!empty($_POST['day'])){
                      if($_POST['year']=="----"||$_POST['month']=="--"||$_POST['day']=="--"){
                          print '生年月日が未入力です'."<br><br>";}}
                if(!empty($_POST['year'])){
                    $y_ear = $_POST['year'];
                    ?><input type ="hidden" name = "y_ear" value = "<?= $y_ear ?>"><?php
                  } 
             if(!empty($_POST['month'])){
                 $m_onth = $_POST['month'];
                 ?><input type ="hidden" name = "m_onth" value = "<?= $m_onth ?>"><?php
             } 
          if(!empty($_POST['day'])){
              $d_ay = $_POST['day'];
              ?><input type ="hidden" name = "d_ay" value = "<?= $d_ay ?>"><?php
         }        
    ?>
        <br><br>再度入力を行ってください
            <input type="submit" name="no" value="登録画面に戻る">
        </form>
    <?php }?>
</body>
</html>
