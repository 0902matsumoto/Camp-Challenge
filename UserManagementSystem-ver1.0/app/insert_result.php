<?php require_once '../common/scriptUtil.php'; 

if(empty($_POST["pass"])){ // passが送信されているか判定
    access_error(); // ユーザー定義関数
    die; // ここで処理を終了する。
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>登録結果画面</title>
</head>
<body>

    <?php
    sess_ck();
    session_start();
    $name = $_SESSION['name'];
    $birthday = $_SESSION['birthday'];
    $type = $_SESSION['type'];
    $tell = $_SESSION['tell'];
    $comment = $_SESSION['comment'];

    require_once '../common/dbaccesUtil.php'; // DBアクセス系処理を別のファイルからrequire_onceを用い、実行。
    ?>

    <h1>登録結果画面</h1><br>
    名前:<?php echo $name;?><br>
    生年月日:<?php echo $birthday;?><br>
    種別:<?php echo $type?><br>
    電話番号:<?php echo $tell;?><br>
    自己紹介:<?php echo $comment;?><br>
    以上の内容で登録しました。<br>

    <?php echo return_top(); 
     ?>
</body>

</html>