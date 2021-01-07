<?php
// 編集の値をPOSTで受け取る
$id = $_POST['id'];
$company = $_POST['company'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$content = $_POST['content'];


// idを指定して更新するSQLを作成（UPDATE文）
$sql = "UPDATE form_table2 SET company=:company, name=:name,
phone=:phone, email=:email, content=:content,
update_time=sysdate() WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':company', $company, PDO::PARAM_STR);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':phone', $phone, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':content', $content, PDO::PARAM_INT);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

if ($status == false) {
    // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中止する
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    // 正常に実行された場合は一覧ページファイルに移動し，処理を実行する
    header("Location:form_txt_read.php");
    exit();
}
