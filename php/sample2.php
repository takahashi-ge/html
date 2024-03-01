<html>
  <head>
    <title>お問い合わせフォーム</title>
  </head>
  <body>
    <h1>お問い合わせフォーム</h1>
    <form method="post" action="confirm.php">
      <label for="name">お名前</label><br>
      <input type="text" id="name1" name="name" placeholder="山田太郎" required><br>
      <label for="name">フリガナ</label><br>
      <input type="text" id="name2" name="name" placeholder="ヤマダタロウ" required><br>
      <label for="email">メールアドレス</label><br>
      <input type="email" id="email" name="email" placeholder="info@fact-creademy.jp" required><br>
      <label for="email">電話番号</label><br>
      <input type="email" id="tel" name="tel" placeholder="090-1234-5678" required><br>
      <select id="select-box" name="genre" placeholder=" 選択してください">
        <option value="選択してください" selected>選択してください</option>
        <option value="製品に関して">製品に関して</option>
        <option value="サービスに関して">サービスに関して</option>
      </select>
      <label for="message">お問い合わせ内容</label><br>
      <textarea id="message" name="message" placeholder="こちらにお問い合わせ内容をご記入ください"></textarea><br><br>
      <label for="privacy">個人情報保護方針</label><br>
      <input class="consent-chk" type="checkbox" name="consent-chk" required>
      <label for="consent-chk"><a class="identity" href="#">個人情報保護方針<i class="fa-solid fa-arrow-up-right-from-square"></i></a>に同意します。</label>
      <input class="submit-button" type="submit" value="送信">
    </form>
  </body>
</html>

<!-- <form action="#">
          <dl class="form-area">
            <dt>
              <span class="required">お名前</span>
            </dt>
            <dd>
              <?php
                echo $_POST['name1'];
              ?>
            </dd>
            <dt>
              <span class="required">フリガナ</span>
            </dt>
            <dd>
              <?php
                echo $_POST['name2'];
              ?>
            </dd>
            <dt>
              <span class="required">メールアドレス</span>
            </dt>
            <dd>
              <?php
                echo $_POST['email'];
              ?>
            </dd>
            <dt>
              <span class="required">電話番号</span>
            </dt>
            <dd>
              <?php
                // 入力された電話番号を取得
                $phoneNumber = $_POST['tel']; // ここで適切なフォームフィールドの名前を指定してください

                // 電話番号の桁数をカウント
                $phoneNumberLength = strlen($phoneNumber);

                // 電話番号が10桁または11桁でない場合、注意文を出力
                if ($phoneNumberLength != 10 && $phoneNumberLength != 11) {
                    echo '<p style = "color: red;">電話番号は10桁または11桁で入力してください。</p>';
                }
              ?>
            </dd>
            <dt>
              <span class="required">お問い合わせ項目</span>
            </dt>
            <dd>
              <?php
                echo $_POST['genre'];
                ?>
            </dd>
            <dt>
              <span class="required">お問い合わせ内容</span>
            </dt>
            <dd>
              <?php
                echo $_POST['message'];
              ?>
            </dd>
            <dt>
              <span class="required">個人情報保護方針</span>
            </dt>
            <dd>
              <input class="consent-chk" type="checkbox" name="consent-chk" required><label for="consent-chk"><a class="identity" href="#">個人情報保護方針<i class="fa-solid fa-arrow-up-right-from-square"></i></a></label>に同意します。
            </dd>
          </dl>
          <input class="submit-button" type="confirm" value = "確認">
        </form> -->