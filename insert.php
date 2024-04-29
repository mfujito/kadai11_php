<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//1. POSTデータ取得
$name = $_POST["name"];
$age = $_POST["age"];
$purpose = $_POST["purpose"];


//2. DB接続します
include("funcs.php"); //外部ファイル読み込み
$pdo = db_conn();


//３．データ登録SQL作成
$sql = "INSERT INTO nabe_register(name, age, purpose) 
        VALUES(:name, :age, :purpose)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':age', $age, PDO::PARAM_STR);
$stmt->bindValue(':purpose', $purpose, PDO::PARAM_STR);
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  sql_error($stmt); // Function call for SQL error handling
} else {
  redirect("index.php"); // Redirect to index.php after successful insertion
}
?>
