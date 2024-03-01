<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォーム</title>
</head>
<body>
    <form action="confirm.php" method="post">
        <label for="name">名前：</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="email">メールアドレス：</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="message">メッセージ：</label>
        <textarea id="message" name="message" rows="4" required></textarea>
        <br>
        <input type="submit" value="確認画面へ">
    </form>
</body>
</html>