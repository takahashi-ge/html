<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
  $message = "現在、消費税は10％です。";
  $eracer = "消しゴム";
  define("TAX","税込み")
  ?>
  <p>
    <?= $message?>
  </p>
</body>
</html>