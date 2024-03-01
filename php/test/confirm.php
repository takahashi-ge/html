<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>確認画面</title>
</head>
<body>
    <h1>入力内容を確認してください</h1>
    <p>名前：<?php echo $_POST['name']; ?></p>
    <p>メールアドレス：<?php echo $_POST['email']; ?></p>
    <p>メッセージ：<?php echo $_POST['message']; ?></p>
    <form action="submit.php" method="post">
        <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
        <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
        <input type="hidden" name="message" value="<?php echo $_POST['message']; ?>">
        <input type="submit" value="送信">
    </form>
</body>
</html>