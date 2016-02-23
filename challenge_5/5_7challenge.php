<!DOCTYPE html
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <!--７．以下の機能を実装してください。

　　　名前・性別・趣味を入力するページを作成してください。
　　　また、入力された名前・性別・趣味を記憶し、次にアクセスした際に
　　　記録されたデータを初期値として表示してください。
　　　
　　　※PHPと同時に、HTMLの知識が必要になります。
　　　※入力フィールドの使い方を調べてみましょう。-->

        <?php
        // POST
        $name= isset($_POST["name"])?$_POST["name"]:'';
          $sex= isset($_POST["sex"])?$_POST["sex"]:'';
            $hobby= isset($_POST["hobby"])?$_POST["hobby"]:'';
        // session
        session_start();
         if(!empty($name) && !empty($hobby)){
           $_SESSION["name"]="$name";
             $_SESSION["sex"]="$sex";
               $_SESSION["hobby"]="$hobby";
        }
        
        ?>
       <form action="http://localhost/challenge/challenge_5/5_7challenge.php" method="post">    
       名前<br>
       <input type="text" name="name" value="<?= $_SESSION["name"]?>"><br><br>
       性別<br>
       <?php
       if($_SESSION["sex"]=="男"){
       ?>    
       <input type="radio" name="sex" value="男" checked>男 
       <input type="radio" name="sex" value="女" >女<br><br>
       <?php  
       }elseif($_SESSION["sex"]=="女"){
       ?>
        <input type="radio" name="sex" value="男" >男
       <input type="radio" name="sex" value="女" checked>女<br><br>
       <?php
       }else{
       ?>
       <input type="radio" name="sex" value="男" >男
       <input type="radio" name="sex" value="女" >女<br><br>
       <?php
       }
       ?>
       趣味<br>
       <textarea name="hobby" style="width:300px;height:150px;" ><?= $_SESSION["hobby"]?></textarea><br><br>
       <input type="submit" value="送信">
       </form>
    </body>
</html>
