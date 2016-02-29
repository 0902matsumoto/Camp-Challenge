<?php require_once '../common/defineUtil.php'; ?>
<?php require_once '../common/scriptUtil.php'; ?>
<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>登録確認画面</title>
</head>
  <body>
    <?php
    session_start();
    sess_ck();
    // 設問2:&& $_POST['year']!=="----" && $_POST['month']!=="--" && $_POST['day']!=="--"を挿入
    // && !empty($_POST['year'])を削除
    if(!empty($_POST['name']) && !empty($_POST['type'])
            && !empty($_POST['tell']) && !empty($_POST['comment']) && $_POST['year']!=="----"
            && $_POST['month']!=="--" && $_POST['day']!=="--"
            
            ){
        
        $post_name = $_POST['name'];
        //date型にするために1桁の月日を2桁にフォーマットしてから格納
        $post_birthday = $_POST['year'].'-'.sprintf('%02d',$_POST['month']).'-'.sprintf('%02d',$_POST['day']);
        $post_type = $_POST['type'];
        $post_tell = $_POST['tell'];
        $post_comment = $_POST['comment'];

        //セッション情報に格納
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
          <input type ="hidden" name = "pass" value = "pass">
          <!--insert_result.phpにて、直接リンクしてアクセスしてしまった際のエラー処理のためにpassを送信-->
          <input type="submit" name="yes" value="はい">
        </form>
        <form action="<?php echo INSERT ?>" method="POST"><?php // 初期値を表示するために送信
           $_SESSION["n_ame"] = $_POST['name']; // セッションに情報を格納
           $_SESSION["t_ype"] = $_POST['type'];
           $_SESSION["t_ell"] = $_POST['tell'];
           $_SESSION["c_omment"] = $_POST['comment'];
           $_SESSION["y_ear"] = $_POST['year'];
           $_SESSION["m_onth"] = $_POST['month'];
           $_SESSION["d_ay"] = $_POST['day'];
         ?>  
            <input type="submit" name="no" value="登録画面に戻る">
        </form>
        
    <?php }else{ ?>
        <h1>入力項目が不完全です</h1><br>
         <form action="<?php echo INSERT ?>" method="POST">
    <?php    // 入力項目が不完全だった場合以下の処理を実行。
          if(empty($_POST['name'])){print '名前が未入力です'."<br><br>";}else{ // 名前の入力がない場合、「名前が未入力です」と表示。
              $_SESSION["n_ame"] = $_POST['name']; // セッションに情報を格納
          }
            if(empty($_POST['type'])){print '種別が未入力です'."<br><br>";}else{ // 以下、自己紹介文まで、上記処理と同じ処理を実行
                $_SESSION["t_ype"] = $_POST['type'];
            }
              if(empty($_POST['tell'])){print '電話番号が未入力です'."<br><br>";}else{
                  $_SESSION["t_ell"] = $_POST['tell'];
              }
                if(empty($_POST['comment'])){print '自己紹介文が未入力です'."<br><br>";}else{
                    $_SESSION["c_omment"] = $_POST['comment'];
                }
                // 年が----、月が--、日が--とどれかひとつでも代入されていた場合、「生年月日が未入力です」と表示。
                // また、直接このページにログインした場合、エラー表示させないように、if文でyear、month、dayが空かどうか判定する。
                  if(!empty($_POST['year'])||!empty($_POST['month'])||!empty($_POST['day'])){ 
                      if($_POST['year']=="----"||$_POST['month']=="--"||$_POST['day']=="--"){
                          print '生年月日が未入力です'."<br><br>";}}
                if(!empty($_POST['year'])){
                    $_SESSION["y_ear"] = $_POST['year'];
                    } 
             if(!empty($_POST['month'])){
                 $_SESSION["m_onth"] = $_POST['month'];
                 } 
          if(!empty($_POST['day'])){
              $_SESSION["d_ay"] = $_POST['day'];
              }        
    ?>
        <br><br>再度入力を行ってください
            <input type="submit" name="no" value="登録画面に戻る">
        </form>
    <?php }?>
</body>
</html>