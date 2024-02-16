<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>問い合わせフォーム</title>
<style>
  .hidden {
    display: none;
  }
</style>
</head>
<body>

<?php
// フォームの送信が行われた場合
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 必須項目が全て入力されているか確認
    if (!empty($_POST['name']) && !empty($_POST['kana']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['subject']) && !empty($_POST['message'])) {
        // ここでメール送信などの処理を行う
        echo "<p>お問い合わせ内容が送信されました。ありがとうございます。</p>";
    } else {
        echo "<p>すべての必須項目を入力してください。</p>";
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="name">名前：</label><br>
    <input type="text" id="name" name="name" required><br><br>
    <label for="kana">フリガナ：</label><br>
    <input type="text" id="kana" name="kana" required><br><br>
    <label for="email">メールアドレス：</label><br>
    <input type="email" id="email" name="email" required><br><br>
    <label for="phone">電話番号：</label><br>
    <input type="tel" id="phone" name="phone" required><br><br>
    <label for="subject">お問い合わせ項目：</label><br>
    <select id="subject" name="subject" required>
        <option value="">選択してください</option>
        <option value="商品について">商品について</option>
        <option value="配送について">配送について</option>
        <option value="その他">その他</option>
    </select><br><br>
    <label for="message">お問い合わせ内容：</label><br>
    <textarea id="message" name="message" rows="4" required></textarea><br><br>
    <input type="checkbox" id="agree" name="agree" required>
    <label for="agree">利用規約に同意する</label><br><br>
    <input type="submit" id="submitBtn" value="確認">
    <input type="submit" id="sendBtn" class="hidden" value="送信">
</form>

<?php
// フォームが送信されており、全ての必須項目が入力されている場合、送信ボタンを表示する
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['name']) && !empty($_POST['kana']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['subject']) && !empty($_POST['message'])) {
    echo "<script>document.getElementById('submitBtn').classList.add('hidden');</script>";
    echo "<script>document.getElementById('sendBtn').classList.remove('hidden');</script>";
}
?>

</body>
</html>
