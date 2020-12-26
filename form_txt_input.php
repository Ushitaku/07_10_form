<?php
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
        <input type="text" class="Form-Item-Input" placeholder="例）株式会社○○" name="company">
      </div>
      <div class="Form-Item">
        <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>氏名</p>
        <input type="text" class="Form-Item-Input" placeholder="例）倖田來未" name="name">
      </div>
      <div class="Form-Item">
        <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>電話番号</p>
        <input type="text" class="Form-Item-Input" placeholder="例）000-0000-0000" name="phone">
      </div>
      <div class="Form-Item">
        <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>メールアドレス</p>
        <input type="email" class="Form-Item-Input" placeholder="例）example@gmail.com" name="email">
      </div>
      <div class="Form-Item">
        <p class="Form-Item-Label isMsg"><span class="Form-Item-Label-Required">必須</span>お問い合わせ内容</p>
        <textarea class="Form-Item-Textarea" name="content"></textarea>
      </div>
      <input type="submit" class="Form-Btn" value="送信する">
    </div>
  </form>

  <footer class="footer">©2020</footer>
</body>

</html>