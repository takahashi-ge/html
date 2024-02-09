<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  table {
    border: 1px solid #000;
    border-collapse: collapse;
    text-align: center;
  }

  th {
    border: 1px solid #000;
    border-collapse: collapse;
    font-weight: bold;
  }

  td {
    border: 1px solid #000;
    border-collapse: collapse;
  }
</style>
<body>
  <?php
  $products = ['鉛筆' => '100', '消しゴム' => '200', '定規' => '300'];
  define('TAX','1.1');
  ?>

  <table>
    <tr>
      <th width = "100">商品</th>
      <th width = "100">価格</th>
      <th width = "100">税込価格</th>
    </tr>
    <?php
    foreach ($products as $key => $name) { ?>
      <tr>
        <td>
          <?=$key?>
        </td>
        <td>
          <?=$name.'円'?>
        </td>
        <td>
          <?=$name*TAX.'円'?>
        </td>
      </tr>
    <?php } ?>
  </table>
</body>
</html>