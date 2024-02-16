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
