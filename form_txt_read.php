<?php
$str = ''; // 出力用の空の文字列
$file = fopen('data/program.csv', 'r'); // ファイルを開く（読み取り専用）
flock($file, LOCK_EX); // ファイルをロック
if ($file) {
  while ($line = fgets($file)) { // fgets()で1行ずつ取得→$lineに格納
    $str .= "<tr><td>{$line}</td></tr>"; // 取得したデータを$strに入れる
  }
}
flock($file, LOCK_UN); // ロック解除
fclose($file); // ファイル閉じる
// （$strに全部の情報が入る！）

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>結果発表</title>

  <!-- フォントの設定 -->
  <script>
    (function(d) {
      var config = {
          kitId: 'cvg5cxw',
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
</head>

<body>
  <h1>君は分かってるね～！今年に向けて予習しよう！</h1>
  <fieldset>
    <legend>たなくじの予習、写真に撮って運試し！</legend>
    <table>
      <img src="img/tanakuji_2016_2.gif" alt="">
    </table>
    <a href="survey_txt_input.php" class="btn btn--yellow btn--cubic">入力画面に戻る</a>

  </fieldset>
  <footer>読み取りデータ<br><?= $str ?></footer>
</body>

</html>