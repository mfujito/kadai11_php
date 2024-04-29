<?php
//XSS対応（ echoする場所で使用！それ以外はNG ）
function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}


//DB接続関数：db_conn()
// function db_conn(){
//     try {
//         $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','')
//         //$pdo = new PDO('mysql:dbname=health_gs_db;charset=utf8;host=mysql652.db.sakura.ne.jp','health','0320Mickey');
//         return $pdo; // Added return statement
//     } catch (PDOException $e) {
//         exit('DB_CONECT:'.$e->getMessage());
//     }
// }

function db_conn(){
    try {
         $db_name = "gs_db";    //データベース名
         $db_id   = "root";      //アカウント名
         $db_pw   = "";          //パスワード：XAMPPはパスワード無し or MAMPはパスワード”root”に修正してください。
         $db_host = "localhost"; //DBホスト


        // $db_name = "health_gs_db";    //データベース名
        // $db_id   = "health";      //アカウント名
        // $db_pw   = "0320Mickey";          //パスワード：XAMPPはパスワード無し or MAMPはパスワード”root”に修正してください。
        // $db_host = "mysql652.db.sakura.ne.jp"; //DBホスト

        return new PDO('mysql:dbname='.$db_name.';charset=utf8;host='.$db_host, $db_id, $db_pw);
    } catch (PDOException $e) {
        exit('DB Connection Error:'.$e->getMessage());
    }
}

//SQLエラー関数：sql_error($stmt)
function sql_error($stmt){ 
    $error = $stmt->errorInfo();
    exit("SQL_ERROR:".$error[2]);
}



//リダイレクト関数: redirect($file_name)
function redirect($file_name){
    header("Location: ".$file_name);
    exit();
}


//SessionCheck(スケルトン)
function sschk(){
    if(!isset($_SESSION["chk_ssid"]) || $_SESSION["chk_ssid"]!=session_id()){
      exit("Login Error");
    }else{
        session_regenerate_id(true); //SESSION KEYを入れ替えます！
        $_SESSION["chk_ssid"] = session_id();
    }
  }