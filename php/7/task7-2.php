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

    public function number {
      $this -> id = 'S000' . range(1, 3);
    }

    public function show {
      printf("%s %s %d歳 %s", $this->name, $this->age, $this->sex);
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

    public function number() {
      $this -> id = 'S000' . range(1, 3);
    }

    public function show() {
      printf("%n %n %a歳 %s %j", $this->name, $this->age, $this->sex, $this->jikyu);
    }
  }

  //オブジェクト（インスタンス）の生成
  $staff1 = new Staff("佐藤 一郎", 31, "男性");
  $staff2 = new Staff("山田 花子", 25, "女性");
  $staff3 = new Staff("鈴木 次郎", 27, "男性");
  $staff4 = new Staff("田中 友子", 24, "女性", "時給：900円");
  $staff5 = new Staff("中村 三郎", 27, "男性");

  //メソッドの呼び出し
  $staff1 -> show();
  $staff2 -> show();
  $staff3 -> show();
  $staff4 -> show();
  $staff5 -> show();
  ?>
</body>
</html>