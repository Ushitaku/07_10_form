<?php
// var_dump($_POST);
// exit();

$company = $_POST['company'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$content = $_POST['content'];

// データベース呼び出し
include('function.php'); // 関数を記述したファイルの読み込み
$pdo = connect_to_db(); // 関数実行

// SQL作成&実行
$sql = 'INSERT INTO
form_table2(id, company, name, phone, email , content , send_time)
VALUES(NULL, :company, :name, :phone, :email , :content , sysdate())';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':company', $company, PDO::PARAM_STR);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':phone', $phone, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':content', $content, PDO::PARAM_STR);

$status = $stmt->execute(); // SQLを実行

// 失敗時にエラーを出力し，成功時は登録画面に戻る
if ($status == false) {
    $error = $stmt->errorInfo();
    // データ登録失敗次にエラーを表示
    exit('sqlError:' . $error[2]);
} else {
    // 登録ページへ移動
    header('Location:form_txt_input.php');
}
