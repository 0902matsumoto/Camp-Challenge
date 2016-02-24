<?php
    require_once '5_9_3challenge.php';
    require_once '5_9_5challenge.php';
    
    session_chk();
        
    if(!isset($_COOKIE['login_count']) && !isset($_COOKIE['last_login'])){
        $lcount = 1;
        $llogin = mktime();
        setcookie('login_count',$lcount);
        setcookie('last_login',$llogin);
        setcookie('SAVEDPHPSESSID',$_COOKIE['PHPSESSID']);
    }else if($_COOKIE['PHPSESSID']!=$_COOKIE['SAVEDPHPSESSID']){
        setcookie('login_count',$_COOKIE['login_count']+1);   
        $lcount = $_COOKIE['login_count'];
        $llogin = $_COOKIE['last_login'];
        setcookie('last_login',mktime());
        setcookie('SAVEDPHPSESSID',$_COOKIE['PHPSESSID']);
    }else{
        $lcount = $_COOKIE['login_count'];
        $llogin = $_COOKIE['last_login'];
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>BOARD</title>
    </head>
    <body>
        今回で<?php echo $lcount ?>回目のアクセスです！　最終ログイン日時 <?php echo date('Y年m月d日 H時i分s秒',$llogin)?> <br><br>
        <form action = "<?php echo BOARD ?>" method = "POST">
        <input type = "submit" value = "書き込む">
        　名前：<input type = "text" name = "name"><br><br>
        <textarea cols = "60" rows = "5" name = "honbun"></textarea>
        </form>

        <?php
        if(!empty($_POST["name"])&&!empty($_POST["honbun"])){
            if(!empty($_SESSION["output"])){
                $writing = $_POST["name"]."<br>".$_POST["honbun"]."<br><br>";
                   $_SESSION["output"] .= $writing;
                      $output = $_SESSION["output"];
            }else{
                $output = $_POST["name"]."<br>".$_POST["honbun"]."<br><br>";
            }
            print $output;
               $_SESSION["output"] = "$output";
        }else{
            if(!empty($_SESSION["output"])){
                print $_SESSION["output"];
            }
        }
        ?>
    </body>
</html>