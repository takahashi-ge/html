<?php
// フォームが送信された場合
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // フォームからのデータを取得
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // すべての項目が入力された場合
    if (!empty($name) && !empty($email) && !empty($message)) {
        // 確認ボタンが押された場合
        if (isset($_POST['confirm'])) {
            // 送信ボタンを表示
            echo '<form method="post"><input type="submit" name="submit" value="送信"></form>';
        }
        // 送信ボタンが押された場合
        elseif (isset($_POST['submit'])) {
            // 送信処理を行う（ここでは省略）
            // 送信完了ページを表示
            echo "<p>送信完了しました。</p>";
        }
    } else {
        echo "<p>すべての項目を入力してください。</p>";
    }
}
?>