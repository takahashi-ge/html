<?php
  $name = $_POST['name'];
  $kana = $_POST['kana'];
  $email = $_POST['email'];
  $tel = $_POST['tel'];
  $options = $_POST['options'];
  $message = $_POST['message'];
  $checkbox = $_POST['checkbox'];  

  // 接続
  try {
  $db = new PDO('mysql:host=localhost;dbname=consumer;charset=utf8', 'root', 'root');

  // $db->query("DROP TABLE IF EXISTS consumer");
  // $db->query(
  //   "CREATE TABLE consumer(
  //     name VARCHAR(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  //     kana VARCHAR(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  //     email VARCHAR(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  //     tel VARCHAR(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  //     options TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  //     message TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci)"
  // );

  // SQL文を入れる
  $stmt = $db->prepare("INSERT INTO consumer (name, kana, email, tel, options, message) VALUES (?, ?, ?, ?, ?, ?);");

    $stmt -> bindParam(1, $name, PDO::PARAM_STR);
    $stmt -> bindParam(2, $kana, PDO::PARAM_STR);
    $stmt -> bindParam(3, $email, PDO::PARAM_STR);
    $stmt -> bindParam(4, $tel, PDO::PARAM_STR);
    $stmt -> bindParam(5, $options, PDO::PARAM_STR);
    $stmt -> bindParam(6, $message, PDO::PARAM_STR);

  // SQL文を実行
  $stmt->execute();
    
  } catch (PDOException $e) {
    echo $e->getMessage() . '<br>';
}

  ?>

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
          <img src="./contact-img/mv.png" alt="サンプル画像">
        </div>
      </div>
      <!-- section -->
      <section class="inquary">
        <div class="title">
          <h1>お問い合わせ</h1>
          <p>お問い合わせや業務内容に関するご質問は、電話またはこちらのお問い合わせフォームより承っております。<br>後ほど担当者よりご連絡させていただきます。</p>
        </div>
        <div class="form-wrap">
          <h1 style="text-align: center; padding: 30px; margin-bottom: 60px; font-size: 30px;">送信完了しました</h1>
          <form method="post" action="task8-2.php">
            <table cellpadding="3">
              <tr>
                <th class="item-name"><label for="name">お名前</label></th>
                <td class="item"><input class="input-box" type="text" id="name" name="name" placeholder="山田太郎" value="<?=$name?>"></td>
              </tr>
              <tr>
                <th class="item-name"><label for="kana">フリガナ</label></th>
                <td class="item"><input class="input-box" type="text" id="kana" name="kana" placeholder="ヤマダタロウ" value="<?=$kana?>"></td>
              </tr>
              <tr>
                <th class="item-name"><label for="email">メールアドレス</label></th>
                <td class="item"><input class="input-box" id="email" name="email" placeholder="info@fact-creademy.jp" value="<?=$email?>"></td>
              </tr>
              <tr>
                <th class="item-name"><label for="tel">電話番号</label></th>
                <td class="item"><input class="input-box" type="tel" id="tel" name="tel" placeholder="090-1234-5678" value="<?=$tel?>"></td>
              </tr>
              <tr>
                <th class="item-name"><label for="options">お問い合わせ項目</label></th>
                <td class="item"><select id="select-box" name="options">
                  <option value="" <?php if ($options !== "製品に関して" && $options !== "サービスに関して" && $options !== "採用情報") {echo 'selected';}?>>選択してください</option>
                  <option value="製品に関して" <?php if ($options == "製品に関して") {echo 'selected';}?>>製品に関して</option>
                  <option value="サービスに関して" <?= ($options == "サービスに関して") ?'selected':'';?>>サービスに関して</option>
                  <option value="採用情報" <?php if ($options == "採用情報") {echo 'selected';}?>>採用情報</option>
                </select></td>
              </tr>
              <tr>
                <th class="item-name"><label for="message">お問い合わせ内容</label></th>
                <td class="item"><textarea id="message" name="message" placeholder="こちらにお問い合わせ内容をご記入ください"><?=$message?></textarea></td>
              </tr>
              <tr>
                <th class="item-name"><label for="privacy">個人情報保護方針</label></th>
                <td class="item"><input class="consent-chk" type="checkbox" name="checkbox" value="1" <?= ($checkbox == 1) ?'checked':'';?>><label for="checkbox"><a class="identity" href="#">個人情報保護方針<i class="fa-solid fa-arrow-up-right-from-square"></i></a>に同意します。</label></td>
              </tr>
            </table>
          </form>
        </div>
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
          <a class="btn inquary-button" href="../contact/">お問い合わせ</a>
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