<?php

	try {
		// データベース接続
		$pdo = new PDO(
			'mysql:host=localhost;dbname=task9;charset=utf8mb4',
			'root',
			'root',
		);

		$pdo->query("DROP TABLE IF EXISTS consumer");
		$pdo->query(
			"CREATE TABLE consumer(
				id INT PRIMARY KEY,
				created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
				name VARCHAR(64),
				kana VARCHAR(64),
				email VARCHAR(128),
				tel INT,
				options TEXT,
				message TEXT)"
		);

	} catch (PDOException $e) {
		echo $e->getMessage() . '<br>';
		exit;
	}
// // mySQLに接続
// $conn = new mysqli($servername, $username, $password, $dbname);

// // 接続を確認
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// // POSTデータを受け取る
// $name = $_POST['name'];
// $kana = $_POST['kana'];
// $email = $_POST['email'];
// $tel = $_POST['tel'];
// $options = $_POST['options'];
// $message = $_POST['message'];
// $checkbox = $_POST['checkbox'];

// // データベースにデータを挿入
// $sql = "INSERT INTO your_table_name (name, email, created_at) VALUES ('$name', '$email', NOW())";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

// // データベース接続を閉じる
// $conn->close();
?>