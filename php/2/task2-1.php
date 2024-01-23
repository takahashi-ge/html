<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $date = array('日曜日','月曜日','火曜日','水曜日','木曜日','金曜日','土曜日');
  ?>

  <ul>
    <li><?php
    print_r($date[0]);?></li>
    <li><?php
    print_r($date[1]);?></li>
    <li><?php
    print_r($date[2]);?></li>
    <li><?php
    print_r($date[3]);?></li>
    <li><?php
    print_r($date[4]);?></li>
    <li><?php
    print_r($date[5]);?></li>
    <li><?php
    print_r($date[6]);?></li>
  </ul>
</body>
</html>