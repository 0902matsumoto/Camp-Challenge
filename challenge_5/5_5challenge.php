<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <!--５．ファイルアップロード機能を作成してください。-->
       <form  method="post" action="http://localhost/challenge/challenge_5/5_5challenge.php"
             enctype="multipart/form-data" >
           <input type="file" name="upfile"  >
       <br><br><input type="submit" value="アップロード">
       </form>
        <?php
       if(isset($_FILES["upfile"]["tmp_name"])){
           if(move_uploaded_file($_FILES["upfile"]["tmp_name"],$_FILES["upfile"]["name"])){
       print $_FILES["upfile"]["name"]."をアップロードしました。";    
       }else{
       print"ファイルがアップロードできません。";} 
       }
   
        ?>
    </body>
</html>
