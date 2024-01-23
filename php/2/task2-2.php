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
  define(TAX,1.1);
  $products1 = array('鉛筆', '100');
  $products2 = array('消しゴム', '200');
  $products3 = array('定規', '300');

  ?>

  <table>
    <tr>
      <th>商品</th>
      <th>価格</th>
      <th>税込価格</th>
    </tr>
    <tr>
      <td>
        <?php
        echo $products1[0];?>
      </td>
      <td>
        <?php
        echo $products1[1];?>
      </td>
      <td>
        <?php
        echo $products1[1] * TAX;?>
      </td>
    </tr>
    <tr>
      <td>
        <?php
        echo $products2[0];?>
      </td>
      <td>
        <?php
        echo $products2[1];?>
      </td>
      <td>
        <?php
        echo $products2[1] * TAX;?>
      </td>
    </tr>
    <tr>
      <td>
        <?php
        echo $products3[0];?>
      </td>
      <td>
        <?php
        echo $products3[1];?>
      </td>
      <td>
        <?php
        echo $products3[1] * TAX;?>
      </td>
    </tr>
  </table>
</body>
</html>