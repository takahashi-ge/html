<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  //クラス
  class Staff {
    //プロパティ
    private $name;
    private $age;
    private $sex;
    private $id;

    //メソッド
    public function __construct($name, $age, $sex) {
      $this -> name = $name;
      $this -> age = $age;
      $this -> sex = $sex;
    }

    public function number() {
      $this -> id = printf("(S%d)", self::$i++);
      return $this -> id;
    }

    public function show() {
      // echo $this -> id;
      printf("%s %d歳 %s <br>", $this->name, $this->age, $this->sex);
    }
  }

  //オブジェクト
  $staff1 = new Staff("佐藤 一郎", 31, "男");
  $staff2 = new Staff("山田 花子", 25, "女");
  $staff3 = new Staff("鈴木 次郎", 27, "男");

  //メソッドの呼び出し
  $staff1 -> number();
  $staff1 -> show();
  $staff2 -> show();
  $staff3 -> show();

//   $name = "Alice";
// $age = 30;
// printf("Hello, my name is %s and I am %d years old.", $name, $age);
// echo 'Hello, my name is' . $name . 'and I am' . $age . 'years old';
  ?>
</body>
</html>