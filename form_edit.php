<?PHP
include("function.php");

// idをgetで受け取る
$id = $_GET['id'];

// DB接続してidをテーブルから見つける
$pdo = connect_to_db();
$sql = 'SELECT * FROM form_table2 WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

// fetch()で1レコード取得できる．
if ($status == false) {
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    $record = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.scss">
    <!-- フォントの設定 -->
    <script>
        (function(d) {
            var config = {
                    kitId: 'nws3mms',
                    scriptTimeout: 3000,
                    async: true
                },
                h = d.documentElement,
                t = setTimeout(function() {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout),
                tk = d.createElement("script"),
                f = false,
                s = d.getElementsByTagName("script")[0],
                a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function() {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {}
            };
            s.parentNode.insertBefore(tk, s)
        })(document);
    </script>
    <!-- フォントの設定ここまで -->

    <title>お問合せフォーム</title>
</head>
<header>
    <nav id="gnav" class="gnav">
        <div class="nav-inner">
            <ul class="inner">
                <li><a href="#">ホーム</a></li>
                <li><a href="#">１ページ目</a></li>
                <li><a href="#">２ページ目</a></li>
                <li><a href="#">３ページ目</a></li>
                <li><a href="form_txt_input.php">お問い合わせ</a></li>
                <li><a href="form_txt_read.php">管理者画面</a></li>
        </div>
        </ul>
    </nav>

</header>

<body>
    <h1>お問い合わせ</h1>
    <form action="form_txt_create.php" method="POST">
        <div class="Form">
            <div class="Form-Item">
                <p class="Form-Item-Label">
                    <span class="Form-Item-Label-Required">必須</span>会社名
                </p>
                <input type="text" class="Form-Item-Input" placeholder="例）株式会社○○" name="company" value="<?= $record["company"] ?>" required>
            </div>
            <div class="Form-Item">
                <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>氏名</p>
                <input type="text" class="Form-Item-Input" placeholder="例）倖田來未" name="name" value="<?= $record["name"] ?>" required>
            </div>
            <div class="Form-Item">
                <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>電話番号</p>
                <input type="text" class="Form-Item-Input" placeholder="例）000-0000-0000" name="phone" value="<?= $record["phone"] ?>" required>
            </div>
            <div class="Form-Item">
                <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>メールアドレス</p>
                <input type="email" class="Form-Item-Input" placeholder="例）example@gmail.com" name="email" value="<?= $record["email"] ?>" required>
            </div>
            <div class="Form-Item">
                <p class="Form-Item-Label isMsg"><span class="Form-Item-Label-Required">必須</span>お問い合わせ内容</p>
                <textarea class="Form-Item-Textarea" name="content" value="<?= $record["content"] ?>" required></textarea>
            </div>
            <input type="hidden" name="id" value="<?= $record['id'] ?>">
            <input type="submit" class="Form-Btn" name="btn_submit" value="送信する" required>
        </div>
    </form>

    <footer class="footer">©2020</footer>
</body>

</html>