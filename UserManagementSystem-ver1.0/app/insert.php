<?php require_once '../common/defineUtil.php'; ?>
<!--$n_ameから以下7つの変数は初期値を代入するためのもの。初期値があるならば、それを代入。ないならば、空を代入。-->
<?php 
session_start();
$_SESSION["access_time"] = time(); // 現在時刻をセッションに格納
$n_ame = !empty($_SESSION["n_ame"])?$_SESSION["n_ame"]:""; // セッションに値が格納されているか判定。ない場合は空を格納
$t_ell = !empty($_SESSION["t_ell"])?$_SESSION["t_ell"]:"";
$c_omment = !empty($_SESSION["c_omment"])?$_SESSION["c_omment"]:"";
$t_ype = !empty($_SESSION["t_ype"])?$_SESSION["t_ype"]:"";
$y_ear = !empty($_SESSION["y_ear"])?$_SESSION["y_ear"]:"";
$m_onth = !empty($_SESSION["m_onth"])?$_SESSION["m_onth"]:"";
$d_ay = !empty($_SESSION["d_ay"])?$_SESSION["d_ay"]:"";

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>登録画面</title>
</head>
<body>
    <form action="<?php echo INSERT_CONFIRM ?>" method="POST">
    名前:
    <input type="text" name="name" value = "<?= $n_ame ?>"><!--名前に初期値が入力されていた場合、デフォルトとして、$n_ameを表示-->
    <br><br>
    
    生年月日:　
    <select name="year">
        <?php if(empty($y_ear)||$y_ear=="----"){ ?>
        <option value="----">----</option>
        <?php
        for($i=1950; $i<=2010; $i++){ ?>
        <option value="<?php echo $i;?>"><?php echo $i ;?></option>
        <?php } ?>
        <?php }else{ ?><!--生年月日の年に初期値が入力されていた場合、下の処理を実行-->
        <option value="----">----</option>
         <?php for($i=1950; $i<$y_ear; $i++){ ?> 
        <option  value="<?php echo $i;?>"><?php echo $i ;?></option>
        <?php } ?>
        <option selected value="<?= $y_ear ?>"><?= $y_ear ?></option>
         <?php for($i=$y_ear+1; $i<=2010; $i++){ ?>
        <option value="<?php echo $i;?>"><?php echo $i ;?></option>
         <?php } ?>
        <?php } ?>
    </select>年
    <select name="month">
        <?php if(empty($m_onth)||$m_onth=="--"){ ?>
        <option value="--">--</option>
        <?php
        for($i = 1; $i<=12; $i++){?>
        <option value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php } ?>
        <?php }else{ ?><!--生年月日の月に初期値が入力されていた場合、下の処理を実行-->
        <option value="--">--</option><?php
          for($i=1; $i<$m_onth; $i++){ ?>
        <option  value="<?php echo $i;?>"><?php echo $i ;?></option>
        <?php } ?>
        <option selected value="<?= $m_onth ?>"><?= $m_onth ?></option>
         <?php for($i=$m_onth+1; $i<=12; $i++){ ?>
        <option value="<?php echo $i;?>"><?php echo $i ;?></option>
         <?php } ?>
        <?php } ?>
    </select>月
    <select name="day">
        <?php if(empty($d_ay)||$d_ay=="--"){ ?>
        <option value="--">--</option>
        <?php
        for($i = 1; $i<=31; $i++){ ?>
        <option value="<?php echo $i; ?>"><?php echo $i;?></option>
        <?php } ?>
        <?php }else{ ?><!--生年月日の日に初期値が入力されていた場合、下の処理を実行-->
        <option value="--">--</option><?php 
        for($i=1; $i<$d_ay; $i++){ ?>
        <option  value="<?php echo $i;?>"><?php echo $i ;?></option>
        <?php } ?>
        <option selected value="<?= $d_ay ?>"><?= $d_ay ?></option>
         <?php for($i=$d_ay+1; $i<=31; $i++){ ?>
        <option value="<?php echo $i;?>"><?php echo $i ;?></option>
         <?php } ?>
        <?php } ?>
    </select>日
    <br><br>

    種別:
    <br>
    <?php if($t_ype=='1'){?> 
    <input type="radio" name="type" value="1" checked>エンジニア<br><!--初期値としてエンジニアが選択されていた場合-->
    <?php }else{?><!--データベースのtypeのデータ型がintなので、valueの値を1に変更-->
    <input type="radio" name="type" value="1">エンジニア<br>
    <?php } if($t_ype=='2'){?>
    <input type="radio" name="type" value="2" checked>営業<br><!--初期値として営業が選択されていた場合-->
    <?php }else{?><!--データベースのtypeのデータ型がintなので、valueの値を2に変更-->
    <input type="radio" name="type" value="2">営業<br>
    <?php } if($t_ype=='3'){?>
    <input type="radio" name="type" value="3" checked>その他<br><!--初期値としてその他が選択されていた場合-->
    <?php }else{?><!--データベースのtypeのデータ型がintなので、valueの値を3に変更-->
    <input type="radio" name="type" value="3">その他<br>
    <?php }?>
    <br>
    
    電話番号:
    <input type="text" name="tell" value = "<?= $t_ell ?>"><!--初期値として電話番号が入力されていた場合、デフォルト値として表示-->
    <br><br>

    自己紹介文
    <br>
    <textarea name="comment" rows=10 cols=50 style="resize:none" wrap="hard"><?= $c_omment ?></textarea><br><br>
    <!--初期値として自己紹介文が入力されていた場合、デフォルト値として表示-->
    <input type="submit" name="btnSubmit" value="確認画面へ">
    </form>
    <?php
   
    ?>
</body>
</html>