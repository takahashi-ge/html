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
    protected static $i = 1;

    //メソッド
    public function __construct($name, $age, $sex) {
      $this -> name = $name;
      $this -> age = $age;
      $this -> sex = $sex;
    }

    public function show() {
      // echo $this -> id;
      printf("(S%04d) %s %d歳 %s <br>", self::$i++, $this->name, $this->age, $this->sex);
    }
  }

  //子クラス
  class PartStaff extends Staff {
    public $jikyu; //新しいプロパティ

    //メソッド
    public function __construct($name, $age, $sex, $jikyu) {
      $this -> name = $name;
      $this -> age = $age;
      $this -> sex = $sex;
      $this -> jikyu = $jikyu;
    }

    public function show() {
      // echo $this -> id;
      printf("(P%04d) %s %d歳 %s (時給：%s円) <br>", self::$i++, $this->name, $this->age, $this->sex, $this->jikyu);
    }
  }

  //オブジェクト
  $staff1 = new Staff("佐藤 一郎", 31, "男性");
  $staff2 = new Staff("山田 花子", 25, "女性");
  $staff3 = new Staff("鈴木 次郎", 27, "男性");
  $staff4 = new PartStaff("田中 友子", 24, "女性", 900);
  $staff5 = new Staff("中村 三郎", 26, "男性");

  //メソッドの呼び出し
  $staff1 -> show();
  $staff2 -> show();
  $staff3 -> show();
  $staff4 -> show();
  $staff5 -> show();

//   $name = "Alice";
// $age = 30;
// printf("Hello, my name is %s and I am %d years old.", $name, $age);
// echo 'Hello, my name is' . $name . 'and I am' . $age . 'years old';
  ?>
</body>
</html>