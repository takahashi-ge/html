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
  $products = array('鉛筆','消しゴム');
  $name = array('商品','価格','税込価格','1Dzの価格');
  $price = array('100','200');
  ?>

  <table>
    <!-- 1列目 -->
    <tr>
      <th>
        <?php
        echo $name[0];
        ?>
      </th>
      <th>
        <?php
        echo $name[1];
        ?>
      </th>
      <th>
        <?php
        echo $name[2];
        ?>
      </th>
      <th>
        <?php
        echo $name[3];
        ?>
      </th>
    </tr>
    <!-- 2列目 -->
    <tr>
      <td>
        <?php
        echo $products[0];
        ?>
      </td>
      <td>
        <?php
        echo $price[0];
        ?>
      </td>
      <td>
        <?php
        echo $price[0] * 1.1;
        ?>
      </td>
      <td>
        <?php
        echo $price[0] * 1.1 * 12;
        ?>
      </td>
    </tr>
    <!-- 3列目 -->
    <tr>
      <td>
        <?php
        echo $products[1];
        ?>
      </td>
      <td>
        <?php
        echo $price[1];
        ?>
      </td>
      <td>
        <?php
        echo $price[1] * 1.1;
        ?>
      </td>
      <td>
        <?php
        echo $price[1] * 1.1 * 12;
        ?>
      </td>
    </tr>
  </table>
  <p>消費税は10%です。</p>
</body>
</html>