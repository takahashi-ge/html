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
    if ($n1 < $n2) {
      return $n2;
    } else {
      return $n1;
    }
  }

  $a = 9;
  $b = 21;

  $result = max_number($a, $b);

  echo '$a = ' . $a .'<br>';
  echo '$b = ' . $b .'<br>';
  echo "最大値は：$result";

  // function max_number($n1, $n2) {
  //   if ($n1 < $n2) {
  //     echo "最大値は：$n2";
  //   } else {
  //     echo "最大値は：$n1";
  //   }
  // }

  // $a = 9;
  // $b = 21;

  // max_number($a, $b);

  

  ?>


</body>
</html>