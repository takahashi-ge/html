<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  //乱数を獲得
  $a = mt_rand(1, 12);

  if ($a >= 3 && $a <= 5) {
    $season = "春";
  } elseif ($a >= 6 && $a <= 8) {
    $season = "夏";
  } elseif ($a >= 9 && $a <= 11) {
    $season = "秋";
  } else {
    $season = "冬";
  }
  ?>

  <h1><?="{$a}月は{$season}の季節です。"?></h1>
</body>
</html>