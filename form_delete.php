<?php
// var_dump($_GET);
// exit();

// idをgetで受け取る
$id = $_GET['id'];

// 呼び出し（todo_create.php, todo_read.php, など）
include('function.php'); // 関数を記述したファイルの読み込み
$pdo = connect_to_db(); // 関数実行

// idを指定して更新するSQLを作成 -> 実行の処理
$sql = 'DELETE FROM form_table2 WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

// 各値をpostで受け取る
if ($status == false) {
    // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中止する
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    // 正常に実行された場合は一覧ページファイルに移動し，処理を実行する
    header("Location:form_read.php");
    exit();
}
