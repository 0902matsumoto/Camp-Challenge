<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //３．クッキーに現在時刻を記録し、次にアクセスした際に、前回記録した日時を表示してください。
        if(isset($_COOKIE['last_time'])){
            $last_time=$_COOKIE['last_time'];
            print'あなたの前回のアクセス日時は　'."$last_time".'　です';
        }
        
        $in_time=date("Y-m-d H:i:s");
        
        setcookie("last_time",$in_time);
        ?>
    </body>
</html>
