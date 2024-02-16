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
        <form method="post" action="../php/8/task8-1.php">
          <label for="name">お名前</label><br>
          <?php
            echo $_POST['name'];
            if (empty($_POST['name'])) {
              echo '<p style = "color: red; text-align: center;">名前を入力してください。</p>';
            }
          ?><br><br>
          <label for="kana">フリガナ</label><br>
          <?php
            echo $_POST['kana'];
            if (empty($_POST['kana'])) {
              echo '<p style = "color: red; text-align: center;">フリガナを入力してください。</p>';
            }
          ?><br><br>
          <label for="email">メールアドレス</label><br>
          <?php
            echo $_POST['email'];
            if (empty($_POST['email'])) {
              echo '<p style = "color: red; text-align: center;">メールアドレスを入力してください。</p>';
            }
          ?><br><br>
          <label for="tel">電話番号</label><br>
          <?php
            echo $_POST['tel'];
            // 入力された電話番号を取得
            $phoneNumber = $_POST['tel'];

            // 電話番号の桁数をカウント
            $phoneNumberLength = strlen($phoneNumber);

            // 電話番号が10桁または11桁でない場合、注意文を出力
            if ($phoneNumberLength !== 10 && $phoneNumberLength !== 11) {
                echo '<p style = "color: red;">※電話番号は10桁または11桁で入力してください。</p>';
            }
            if (empty($_POST['tel'])) {
              echo '<p style = "color: red; text-align: center;">電話番号を入力してください。</p>';
            }
          ?><br><br>
          <label for="genre">お問い合わせ項目</label><br>
          <?php
            echo $_POST['genre'];
            if (empty($_POST['genre'])) {
              echo '<p style = "color: red; text-align: center;">お問い合わせ項目を選択してください。</p>';
            }
          ?><br><br>
          <label for="message">お問い合わせ内容</label><br>
          <?php
            echo $_POST['message'];
            if (empty($_POST['message'])) {
              echo '<p style = "color: red; text-align: center;">お問い合わせ内容を入力してください。</p>';
            }
          ?><br><br>
          <label for="checkbox">個人情報保護方針</label><br>
          <input class="checkbox" type="checkbox" name="checkbox"><label for="checkbox"><a class="identity" href="#">個人情報保護方針<i class="fa-solid fa-arrow-up-right-from-square"></i></a>に同意します。</label>
          <?php
            if (empty($_POST['checkbox'])) {
              echo '<p style = "color: red; text-align: center;">チェックをしてください。</p>';
            }
          ?>
          <!-- 確認ボタンから送信ボタンに変更 -->
          <?php
            $name = $_POST['name'];
            $kana = $_POST['kana'];
            $email = $_POST['email'];
            $tel = $_POST['tel'];
            $genre = $_POST['genre'];
            $message = $_POST['message'];
            $checkbox = $_POST['checkbox'];

            if(!empty($name) && !empty($kana) && !empty($email) && !empty($tel) && !empty($genre) && !empty($message) && !empty($checkbox) ) {
              echo '<input type="submit" name="submit" value="送信">';
            } else {
              echo '<input type="submit" name="submit" value="確認">';
            }
          ?><br><br>

          <?php
            // 入力フォームからのデータを取得
            $name = isset($_POST['name']);
            $kana = isset($_POST['kana']);
            $email = isset($_POST['email']);
            $tel = isset($_POST['tel']);
            $genre = isset($_POST['genre']);
            $message = isset($_POST['message']);
            $checkbox = isset($_POST['checkbox']);

            // 必須項目が埋まっているかどうかをチェック
            // if (empty($_POST['name'])) {
            //   echo '<p style = "color: red; text-align: center;">名前を入力してください。</p>';
            // }
            // if (empty($_POST['kana'])) {
            //   echo '<p style = "color: red; text-align: center;">フリガナを入力してください。</p>';
            // }
            // if (empty($_POST['email'])) {
            //   echo '<p style = "color: red; text-align: center;">メールアドレスを入力してください。</p>';
            // }
            // if (empty($_POST['tel'])) {
            //   echo '<p style = "color: red; text-align: center;">電話番号を入力してください。</p>';
            // }
            // if (empty($_POST['genre'])) {
            //   echo '<p style = "color: red; text-align: center;">お問い合わせ項目を選択してください。</p>';
            // }
            // if (empty($_POST['message'])) {
            //   echo '<p style = "color: red; text-align: center;">お問い合わせ内容を入力してください。</p>';
            // }
            // if (empty($_POST['checkbox'])) {
            //   echo '<p style = "color: red; text-align: center;">チェックをしてください。</p>';
            // }
          ?>
          <!-- <dl class="form-area">
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
              <input class="checkbox" type="checkbox" name="checkbox" required><label for="checkbox"><a class="identity" href="#">個人情報保護方針<i class="fa-solid fa-arrow-up-right-from-square"></i></a></label>に同意します。
            </dd>
          </dl>
          <input class="submit-button" type="submit" value = "確認"> -->
        </form>
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