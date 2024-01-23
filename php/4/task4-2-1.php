<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  //乱数を獲得する
  $a = mt_rand(1, 12);

  switch ($a) {
    case 3:
    case 4:
    case 5:
      $season = "春";
      break;
    case 6:
    case 7:
    case 8:
      $season = "夏";
      break;
    case 9:
    case 10:
    case 11:
      $season = "秋";
      break;
    default:
      $season = "冬";
      break;
  }
  ?>

  <h1><?="{$a}月は{$season}の季節です。"?></h1>
</body>
</html>