<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //４．３と同じ機能をセッションで作成してください。
        session_start();
        
        if(isset($_SESSION["time"])){
         $last_time=$_SESSION["time"];   
        print'あなたの前回のアクセス日時は　'."$last_time".'　です';
         
        }
        
        $in_time=date("Y-m-d H:i:s");
        
        $_SESSION["time"]="$in_time";
        
        ?>
    </body>
</html>
