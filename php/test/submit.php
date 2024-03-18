<!-- submit.php -->
<?php
session_start();
try {
  $pdo = new PDO(
    'mysql:host=localhost;pdoname=consumer;charset=utf8mb4',
    'root',
    'root',
    [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES => false
    ]
  );

  // $pdo->query("DROP TABLE IF EXISTS syain");
  // $pdo->query(
  //   "CREATE TABLE syain(
  //     id  INT PRIMARY KEY,
  //     name  VARCHAR(128),
  //     age INT,
  //     work   VARCHAR(64)
  //   )"
  // );

$stmt = $pdo->prepare("INSERT INTO task9 (name, kana, email, tel, timestamp) VALUES (?, ?, ?, ?, NOW())");
$stmt->execute([$_SESSION['name'], $_SESSION['kana'], $_SESSION['email'], $_SESSION['tel']]);
echo "送信が完了しました";

} catch(PDOException $e) {
  echo $e->getMessage() . '<br>';
  exit;
}
?>
