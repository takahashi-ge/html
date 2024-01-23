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
  $pencil = array('鉛筆', '100');
  $eracer = array('消しゴム', '200');
  define('TAX','1.1');
  define('DARZEN','12');
  ?>

  <table>
    <!-- 1列目 -->
    <tr>
      <th>商品</th>
      <th>価格</th>
      <th>税込価格</th>
      <th>1Dzの価格</th>
    </tr>
    <!-- 2列目 -->
    <tr>
      <td>
        <?php
        echo $pencil[0];
        ?>
      </td>
      <td>
        <?php
        echo $pencil[1];
        ?>
      </td>
      <td>
        <?php
        echo $pencil[1] * TAX;
        ?>
      </td>
      <td>
        <?php
        echo $pencil[1] * TAX * DARZEN;
        ?>
      </td>
    </tr>
    <!-- 3列目 -->
    <tr>
      <td>
        <?php
        echo $eracer[0];
        ?>
      </td>
      <td>
        <?php
        echo $eracer[1];
        ?>
      </td>
      <td>
        <?php
        echo $eracer[1] * 1.1;
        ?>
      </td>
      <td>
        <?php
        echo $eracer[1] * 1.1 * 12;
        ?>
      </td>
    </tr>
  </table>
  <p>消費税は10%です。</p>
</body>
</html>