<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>HP(お問い合わせ)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="discription" content="21_HP（お問い合わせ）">
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="contact.css">
    <script src="https://kit.fontawesome.com/b91730e163.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- header -->
    <header class="header">
      <div class="header-inner">
        <a class="header-title" href="../index.html">会社名が入ります</a>
        <!-- <a class="header-title02" href="../index.html">会社名</a> -->
        <div class="header-button-area">
          <a class="menu-button button01" href="../index.html">ボタン01</a>
          <a class="menu-button button02" href="../index.html">ボタン02</a>
        </div>
      </div>
    </header>
    <!-- header end -->
    
    <!-- main -->
    <main class="main">
      <!-- site-menu -->
      <div class="menu-area">
        <nav class="site-menu">
          <ul>
            <li><a href="../php/">メニュー01</a></li>
            <li><a href="../index.html">メニュー02</a></li>
            <li><a href="../index.html">メニュー03</a></li>
          </ul>
        </nav>
      </div>

      <!-- first-view -->
      <div class="first-view">
        <div class="first-view-image">
          <img src="./contact/mv.png" alt="サンプル画像">
        </div>
      </div>
      <!-- section -->
      <section class="inquary">
        <div class="title">
          <h1>お問い合わせ</h1>
          <p>お問い合わせや業務内容に関するご質問は、電話またはこちらのお問い合わせフォームより承っております。<br>後ほど担当者よりご連絡させていただきます。</p>
        </div>
        <?php
          session_end()
        ?>
        <!-- <form method="post" action="../php/8/task8-1.php">
          <label for="name">お名前</label><br><br>
          <input class="input-box" type="text" id="name" name="name" placeholder="山田太郎"><br><br>
          <label for="kana">フリガナ</label><br><br>
          <input class="input-box" type="text" id="kana" name="kana" placeholder="ヤマダタロウ"><br><br>
          <label for="email">メールアドレス</label><br><br>
          <input class="input-box" type="email" id="email" name="email" placeholder="info@fact-creademy.jp"><br><br>
          <label for="tel">電話番号</label><br><br>
          <input class="input-box" type="tel" id="tel" name="tel" placeholder="090-1234-5678"><br><br>
          <label for="genre">お問い合わせ項目</label><br><br>
          <select id="select-box" name="genre" placeholder=" 選択してください">
            <option value="" selected>選択してください</option>
            <option value="製品に関して">製品に関して</option>
            <option value="サービスに関して">サービスに関して</option>
            <option value="採用情報">採用情報</option>
          </select><br><br>
          <label for="message">お問い合わせ内容</label><br><br>
          <textarea id="message" name="message" placeholder="こちらにお問い合わせ内容をご記入ください"></textarea><br><br>
          <label for="privacy">個人情報保護方針</label><br><br>
          <input class="consent-chk" type="checkbox" name="checkbox"><label for="checkbox"><a class="identity" href="#">個人情報保護方針<i class="fa-solid fa-arrow-up-right-from-square"></i></a>に同意します。</label>
          <input class="submit-button" type="submit" value="送信">
          <dl class="form-area">
            <dt>
              <span class="required">お名前</span>
            </dt>
            <dd>
              <input class="input-box" type="text" id="name1" name="name1" placeholder="山田太郎" required>
            </dd>
            <dt>
              <span class="required">フリガナ</span>
            </dt>
            <dd>
              <input class="input-box" type="text" id="name2" name="name2" placeholder="ヤマダタロウ" required>
            </dd>
            <dt>
              <span class="required">メールアドレス</span>
            </dt>
            <dd>
              <input class="input-box" type="email" id="email" name="email" placeholder="info@fact-creademy.jp" required>
            </dd>
            <dt>
              <span class="required">電話番号</span>
            </dt>
            <dd>
              <input class="input-box" type="tel" id="tel" name="tel" placeholder="090-1234-5678" required>
            </dd>
            <dt>
              <span class="required">お問い合わせ項目</span>
            </dt>
            <dd>
              <select id="select-box" name="genre" placeholder=" 選択してください" required>
                <option value="" selected></option>
                <option value="製品に関して">製品に関して</option>
                <option value="サービスに関して">サービスに関して</option>
                <option value="採用情報">採用情報</option>
              </select>
            </dd>
            <dt>
              <span class="required">お問い合わせ内容</span>
            </dt>
            <dd>
              <textarea id="message" name="message" placeholder="こちらにお問い合わせ内容をご記入ください" required></textarea>
            </dd>
            <dt>
              <span class="required">個人情報保護方針</span>
            </dt>
            <dd>
              <input class="consent-chk" type="checkbox" name="consent-chk" required><label for="consent-chk"><a class="identity" href="#">個人情報保護方針<i class="fa-solid fa-arrow-up-right-from-square"></i></a></label>に同意します。
            </dd>
          </dl>
          <input class="submit-button" type="submit" value = "確認"> 
        </form> -->
      </section>
      <!-- section end -->

      <!-- btn-area -->
      <div class="btn-area">
        <div class="btn-left">
          <h3>こちらからご購入ください</h3>
          <a class="btn shopping" href="#">ネットショップ</a>
        </div>
        <div class="btn-right">
          <h3>お気軽にお問い合わせください</h3>
          <a class="btn inquary-button" href="#">お問い合わせ</a>
        </div>
      </div>
      <!-- btn-area end -->
    </main>
    <!-- main end -->

    <!-- footer -->
    <footer class="footer">
      <div class="detaile">
        <p class="company">会社名</p>
        <p class="adress">住所が入ります</p>
        <p class="tel">03-1234-5678</p>
        <p class="time">営業時間　9:00～18:00</p>
      </div>
      <nav class="footer-menu">
        <ul>
          <li><a href="#">リンク01</a></li>
          <li><a href="#">リンク02</a></li>
          <li><a href="#">リンク03</a></li>
          <li><a href="#">リンク04</a></li>
          <li><a href="#">リンク05</a></li>
          <li><a href="#">リンク06</a></li>
          <li><a href="#">リンク07</a></li>
        </ul>
      </nav>
      <p class="copyright">ここには会社名が入ります<small>&copy;Copyright</small></p>
    </footer>
    <!-- footer end -->
  </body>
</html>