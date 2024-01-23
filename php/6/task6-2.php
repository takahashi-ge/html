<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>task6-2</title>
</head>
<body>
  <?php

  function max_number($n1, $n2) {
    return max($n1, $n2);
  }

  $a = 9;
  $b = 21;

  $result = max_number($a, $b);

  echo "最大値は：$result";

  ?>
</body>
</html>