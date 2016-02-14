<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <!--７．以下の機能を実装してください。
        名前・性別・趣味を入力するページを作成してください。  
        また、入力された名前・性別・趣味を記憶し、次にアクセスした際に
        記録されたデータを初期値として表示してください。-->
        <form action="http://localhost/challenge/challenge_5/5_7challenge.php" method="post">
            名前<br>
        <input type="text" name="name">
        <br>
        <br>
        性別<br>
        <input type="radio" name="sex" value="男"　>男
        <input type="radio" name="sex" value="女"　>女
        <br>
        <br>
        趣味<br>
        <textarea name="hobby" style="width:300px;height:150px;" ></textarea>
    <br>    <br>
    <input type="submit" value="送信">
    </form>
         <?php
         
        session_start();
        if(isset($_SESSION["name"],$_SESSION["sex"],$_SESSION["hobby"])){
            $last_name=$_SESSION["name"];
            $last_sex=$_SESSION["sex"];
            $last_hobby=$_SESSION["hobby"];
            print "<BR><BR>"."前回のアクセス履歴"."<BR><BR>"."$last_name"."<BR><BR>";
             print "$last_sex"."<BR><BR>";
              print "$last_hobby"."<BR><BR>";
        }
         if(isset($_POST["name"],$_POST["sex"],$_POST["hobby"])){
     $_SESSION["name"]=$_POST["name"];
        $_SESSION["sex"]=$_POST["sex"];
          $_SESSION["hobby"]=$_POST["hobby"];
 }       
        ?>
    </body>
</html>
