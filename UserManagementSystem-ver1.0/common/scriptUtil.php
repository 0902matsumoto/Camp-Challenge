<?php
require_once '../common/defineUtil.php';


  function return_top(){
                       // トップページが定義された定数に変更
      return "<a href=".TOP_URI.">トップへ戻る</a>";
  }
// insert_result.phpへの直リンク防止のための関数
  function access_error(){
       ?><h1>不正なアクセス</h1>
        不正なアクセスです。三秒後にログイン画面に移動します
        <meta http-equiv="refresh" content="3;URL='<?= TOP_URI ?>'"><?php
  }
  
  function sess_ck(){
   if(!empty($_SESSION["access_time"])){
   $time = $_SESSION["access_time"];
   if((time()-$time)>10){   
   $_SESSION = array();
   if (isset($_COOKIE["PHPSESSID"])) {
    setcookie("PHPSESSID", '', time() - 1800, '/');
   }
   session_destroy();
  }}}
?>  