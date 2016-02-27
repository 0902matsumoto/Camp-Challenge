<?php require_once '../common/defineUtil.php'; ?>
<?php
$n_ame = !empty($_POST["n_ame"])?$_POST["n_ame"]:"";
$t_ell = !empty($_POST["t_ell"])?$_POST["t_ell"]:"";
$c_omment = !empty($_POST["c_omment"])?$_POST["c_omment"]:"";
$t_ype = !empty($_POST["t_ype"])?$_POST["t_ype"]:"";
$y_ear = !empty($_POST["y_ear"])?$_POST["y_ear"]:"";
$m_onth = !empty($_POST["m_onth"])?$_POST["m_onth"]:"";
$d_ay = !empty($_POST["d_ay"])?$_POST["d_ay"]:"";

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
    <input type="text" name="name" value = "<?= $n_ame ?>">
    <br><br>
    
    生年月日:　
    <select name="year">
        <?php if(empty($y_ear)){ ?>
        <option value="----">----</option>
        <?php
        for($i=1950; $i<=2010; $i++){ ?>
        <option value="<?php echo $i;?>"><?php echo $i ;?></option>
        <?php } ?>
        <?php }else{ ?>
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
        <?php if(empty($m_onth)){ ?>
        <option value="--">--</option>
        <?php
        for($i = 1; $i<=12; $i++){?>
        <option value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php } ?>
        <?php }else{ ?>
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
        <?php if(empty($d_ay)){ ?>
        <option value="--">--</option>
        <?php
        for($i = 1; $i<=31; $i++){ ?>
        <option value="<?php echo $i; ?>"><?php echo $i;?></option>
        <?php } ?>
        <?php }else{ ?>
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
    <?php if($t_ype=='エンジニア'){?>
    <input type="radio" name="type" value="1" checked>エンジニア<br>
    <?php }else{?>
    <input type="radio" name="type" value="1">エンジニア<br>
    <?php } if($t_ype=='営業'){?>
    <input type="radio" name="type" value="2" checked>営業<br>
    <?php }else{?>
    <input type="radio" name="type" value="2">営業<br>
    <?php } if($t_ype=='その他'){?>
    <input type="radio" name="type" value="3" checked>その他<br>
    <?php }else{?>
    <input type="radio" name="type" value="3">その他<br>
    <?php }?>
    <br>
    
    電話番号:
    <input type="text" name="tell" value = "<?= $t_ell ?>">
    <br><br>

    自己紹介文
    <br>
    <textarea name="comment" rows=10 cols=50 style="resize:none" wrap="hard"><?= $c_omment ?></textarea><br><br>
    
    <input type="submit" name="btnSubmit" value="確認画面へ">
    </form>
</body>
</html>