<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $pencil = 100;
  $eracer = 200;
  define('TAX', 10);
  
  echo '<p>鉛筆が'.${pencil}.'円で税込みです</p>';
  ?>

  <p>現在、消費税は<?=TAX;?>％です。</p>
  <p><?='鉛筆が'.${pencil}.'円で税込みです';?></p>
  <p><?="消しゴムが${eracer}円で税込みです";?></p>
  
</body>
</html>