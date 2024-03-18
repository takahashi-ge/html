<!-- confirm.php -->
<?php
session_start();

    $_SESSION['name'] = $_POST['name'];
    $_SESSION['kana'] = $_POST['kana'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['tel'] = $_POST['tel'];
    echo "入力内容を確認してください。<br>";
    echo "名前: " . $_POST['name'] . "<br>";
    echo "カナ: " . $_POST['kana'] . "<br>";
    echo "メール: " . $_POST['email'] . "<br>";
    echo "電話番号: " . $_POST['tel'] . "<br>";

?>
<form method="POST" action="submit.php">
    <input type="submit" value="送信">
</form>
