<h1>確認</h1>
<?php
  session_start();
  echo "セッションID：" . session_id() . "<br>";
  echo "状況：{$_SESSION["data"]}<br><br>";
?>
<a href="sample.php">元のページへ</a>