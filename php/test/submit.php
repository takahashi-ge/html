<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>送信完了</title>
</head>
<body>
    <h1>お問い合わせありがとうございました！</h1>
    <p>以下の内容で受け付けました：</p>
    <p>名前：<?php echo $_POST['name']; ?></p>
    <p>メールアドレス：<?php echo $_POST['email']; ?></p>
    <p>メッセージ：<?php echo $_POST['message']; ?></p>
</body>
</html>