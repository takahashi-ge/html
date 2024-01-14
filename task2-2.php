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
  $column = array('鉛筆','消しゴム','定規');
  $row = array('商品','価格','税込価格');
  ?>

  <table>
    <tr>
      <th><?php
    print_r($row[0]);?></th>
      <th><?php
    print_r($row[1]);?></th>
      <th><?php
    print_r($row[2]);?></th>
    </tr>
    <tr>
      <td>
        <?php
        print_r($column[0]);?>
      </td>
      <td>100円</td>
      <td>110円</td>
    </tr>
    <tr>
      <td>
        <?php
        print_r($column[1]);?>
      </td>
      <td>200円</td>
      <td>220円</td>
    </tr>
    <tr>
      <td>
        <?php
        print_r($column[2]);?>
      </td>
      <td>300円</td>
      <td>330円</td>
    </tr>
  </table>
</body>
</html>