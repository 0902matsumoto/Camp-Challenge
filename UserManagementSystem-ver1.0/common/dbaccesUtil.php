<?php

//DBへの接続用を行う。成功ならPDOオブジェクトを、失敗なら中断、メッセージの表示を行う
function connect2MySQL(){
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','matsumoto','white0216');
        $pdo->query("SET NAMES utf8");
        return $pdo;
    } catch (PDOException $e) {
        die('接続に失敗しました。次記のエラーにより処理を中断します:'.$e->getMessage());
    }
}

// DBアクセス系処理をこちらのファイルに移動。require_onceを用いて実行する。
//db接続を確立
    $insert_db = connect2MySQL();
    
    //DBに全項目のある1レコードを登録するSQL
    $insert_sql = "INSERT INTO user_t(name,birthday,tell,type,comment,newDate)"
            . "VALUES(:name,:birthday,:tell,:type,:comment,:newDate)";

    //クエリとして用意
    $insert_query = $insert_db->prepare($insert_sql);

    //SQL文にセッションから受け取った値＆現在時をバインド
    $insert_query->bindValue(':name',$name);
    $insert_query->bindValue(':birthday',$birthday);
    $insert_query->bindValue(':tell',$tell);
    $insert_query->bindValue(':type',$type);
    $insert_query->bindValue(':comment',$comment);
    $insert_query->bindValue(':newDate',date('YmdHis',time()));
    
    //SQLを実行
    $flag = $insert_query->execute();
    // SQL文を実行を判定する処理。
    if(!$flag){
        print "データの挿入に失敗しました:[$insert_sql]";
        die;
    }
    //接続オブジェクトを初期化することでDB接続を切断
    $insert_db=null;
    
    ?>