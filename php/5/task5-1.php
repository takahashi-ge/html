<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<!-- レイアウト画像の通り、表に枠線を追加する -->
<style>
  table {
    border-collapse: collapse;
  }
  td {
    border: solid 1px black;
    padding: 3px;
  }
</style>
<body>
  <h1>九九の計算</h1>
  <!-- 九九表の出力 -->
  <table>
    <?php
    for ($i = 1; $i < 2; $i++) {
      echo "<tr>";
      for ($j = 1; $j < 10; $j++) {
        echo "<td>";
        echo "{$i}×{$j}=".$i*$j;
        echo "</td>";
      }
      echo "</tr>";
    }
    ?>
  </table>
</body>
</html>